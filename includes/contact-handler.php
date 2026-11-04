<?php
/**
 * Contact form processing (POST/Redirect/GET).
 * Validates input, stores each message in storage/messages.csv and tries to e-mail it.
 */

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

define('CONTACT_TO', 'Info@sanicas.in');

if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(16));
}

$form   = ['name' => '', 'subject' => '', 'email' => '', 'phone' => '', 'comment' => ''];
$errors = [];
$status = $_SESSION['contact_status'] ?? null;
unset($_SESSION['contact_status']);
if (!empty($_SESSION['contact_old'])) {
    $form   = array_merge($form, $_SESSION['contact_old']);
    $errors = $_SESSION['contact_errors'] ?? [];
    unset($_SESSION['contact_old'], $_SESSION['contact_errors']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    foreach ($form as $k => $_) {
        $form[$k] = trim((string) ($_POST[$k] ?? ''));
    }

    // Spam honeypot: real users never fill this hidden field.
    $isBot = !empty($_POST['website']);

    if (!hash_equals($_SESSION['csrf'], (string) ($_POST['csrf'] ?? ''))) {
        $errors['form'] = 'Your session expired. Please submit the form again.';
    }
    if ($form['name'] === '' || mb_strlen($form['name']) > 100) {
        $errors['name'] = 'Please enter your name.';
    }
    if (!filter_var($form['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if ($form['phone'] !== '' && !preg_match('/^[0-9+\-\s()]{7,20}$/', $form['phone'])) {
        $errors['phone'] = 'Please enter a valid phone number.';
    }
    if (mb_strlen($form['subject']) > 150) {
        $errors['subject'] = 'Subject is too long.';
    }
    if ($form['comment'] === '' || mb_strlen($form['comment']) > 3000) {
        $errors['comment'] = 'Please enter your message (up to 3000 characters).';
    }

    if (!$errors) {
        if (!$isBot) {
            // 1) Keep a copy on disk so no enquiry is lost if mail() isn't configured.
            $dir = __DIR__ . '/../storage';
            if (!is_dir($dir)) {
                @mkdir($dir, 0775, true);
            }
            $fh = @fopen($dir . '/messages.csv', 'ab');
            if ($fh) {
                fputcsv($fh, [date('c'), $form['name'], $form['email'], $form['phone'], $form['subject'], $form['comment'], $_SERVER['REMOTE_ADDR'] ?? '']);
                fclose($fh);
            }

            // 2) E-mail the admissions team.
            $clean   = function ($s) { return str_replace(["\r", "\n"], ' ', $s); };
            $subject = 'Website enquiry: ' . ($form['subject'] !== '' ? $clean($form['subject']) : 'General');
            $body    = "Name: {$form['name']}\nEmail: {$form['email']}\nPhone: {$form['phone']}\n\n{$form['comment']}\n";
            $headers = 'From: SANICAS Website <no-reply@sanicas.in>' . "\r\n" . 'Reply-To: ' . $clean($form['email']);
            @mail(CONTACT_TO, $subject, $body, $headers);
        }
        $_SESSION['contact_status'] = 'sent';
    } else {
        $_SESSION['contact_status'] = 'error';
        $_SESSION['contact_old']    = $form;
        $_SESSION['contact_errors'] = $errors;
    }
    $_SESSION['csrf'] = bin2hex(random_bytes(16));
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?') . '#contact-form', true, 303);
    exit;
}
