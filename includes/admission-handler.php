<?php
/**
 * Admission enquiry form processing (POST/Redirect/GET).
 * Validates input, stores each enquiry in storage/admissions.csv and tries to e-mail it.
 * Mirrors includes/contact-handler.php.
 */

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

define('ADMISSION_TO', 'Info@sanicas.in');

if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(16));
}

/**
 * Programme details (from ADMISSION.docx) — used by the page and to validate the form.
 * programme => [group label => [courses]]
 */
$PROGRAMMES = [
    'Undergraduate' => [
        'Department of Computer Science' => [
            'BCA (Bachelor of Computer Application)',
            'B.Sc. AIML (Computer Science with Artificial Intelligence and Machine Learning)',
            'B.Sc. Computer Science',
            'B.Sc. Information Technology',
        ],
        'Department of Business Administration' => [
            'BBA Aviation Management',
            'BBA Logistics & Supply Chain Management',
            'BBA CA',
        ],
        'Department of Commerce' => ['B.Com CA', 'B.Com PA'],
        'Department of Microbiology' => ['B.Sc. Microbiology'],
        'Department of Psychology' => ['B.Sc. Psychology'],
        'Department of Visual Communication' => ['B.Sc. Visual Communication'],
    ],
    'Postgraduate' => [
        'Department of Microbiology' => ['M.Sc. Microbiology'],
    ],
    'Diploma' => [
        'Diploma Course' => ['Diploma in Yoga for Human Excellence'],
    ],
    'Add-on course' => [
        'Add-on Courses' => [
            'AI Prompt Engineering',
            'Artificial Intelligence and Data Science',
            'Computer Science with Data Analytics',
            'Artificial Intelligence and Machine Learning with Prompt Engineering',
            'Artificial Intelligence and Machine Learning with Cybersecurity',
            'Logistics and Supply Chain Management',
            'Aviation Management',
            'Hospital Administration and Healthcare Management',
            'Artificial Intelligence and Machine Learning in Healthcare',
            'Travel and Tourism Management',
            'Digital Marketing',
        ],
    ],
    'Certificate course' => [
        'Certificate Courses' => [
            'Four Skills English Language Enhancement Programme',
            'Media English and Journalism Skills',
            'Mathematics for Everyday Life',
            'English Language Enhancement and Communication Skills',
            'Communication Skills and Personality Development',
            'Airport Operations and Ramp Handling',
            'Environmental Awareness and Sustainability',
            'Gender Sensitisation and Human Values',
            'Employability and Soft Skills Development',
        ],
    ],
];

$INDIAN_STATES = ['Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana',
    'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya',
    'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura',
    'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Islands', 'Chandigarh',
    'Dadra and Nagar Haveli and Daman and Diu', 'Delhi', 'Jammu and Kashmir', 'Ladakh', 'Lakshadweep', 'Puducherry',
    'Outside India'];

$form   = ['name' => '', 'email' => '', 'mobile' => '', 'state' => '', 'city' => '', 'programme' => '', 'course' => '', 'consent' => ''];
$errors = [];
$status = $_SESSION['admission_status'] ?? null;
unset($_SESSION['admission_status']);
if (!empty($_SESSION['admission_old'])) {
    $form   = array_merge($form, $_SESSION['admission_old']);
    $errors = $_SESSION['admission_errors'] ?? [];
    unset($_SESSION['admission_old'], $_SESSION['admission_errors']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['admission_form'])) {
    foreach ($form as $k => $_) {
        $form[$k] = trim(mb_substr((string) ($_POST[$k] ?? ''), 0, 200));
    }
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
    $digits = preg_replace('/\D/', '', $form['mobile']);
    if (!preg_match('/^[6-9]\d{9}$/', $digits)) {
        $errors['mobile'] = 'Please enter a valid 10-digit mobile number.';
    }
    if (!in_array($form['state'], $INDIAN_STATES, true)) {
        $errors['state'] = 'Please select your state.';
    }
    if ($form['city'] === '') {
        $errors['city'] = 'Please enter your city.';
    }
    if (!isset($PROGRAMMES[$form['programme']])) {
        $errors['programme'] = 'Please select a programme.';
    } else {
        $valid = array_merge(...array_values($PROGRAMMES[$form['programme']]));
        if (!in_array($form['course'], $valid, true)) {
            $errors['course'] = 'Please select a course.';
        }
    }
    if ($form['consent'] !== '1') {
        $errors['consent'] = 'Please allow us to contact you about your enquiry.';
    }

    if (!$errors) {
        if (!$isBot) {
            $dir = __DIR__ . '/../storage';
            if (!is_dir($dir)) {
                @mkdir($dir, 0775, true);
            }
            $fh = @fopen($dir . '/admissions.csv', 'ab');
            if ($fh) {
                fputcsv($fh, [date('c'), $form['name'], $form['email'], '+91 ' . $digits, $form['state'], $form['city'],
                              $form['programme'], $form['course'], $_SERVER['REMOTE_ADDR'] ?? '']);
                fclose($fh);
            }

            $clean   = function ($s) { return str_replace(["\r", "\n"], ' ', $s); };
            $subject = 'Admission enquiry: ' . $clean($form['name']) . ' — ' . $clean($form['course']);
            $body    = "Name: {$form['name']}\nEmail: {$form['email']}\nMobile: +91 {$digits}\n"
                     . "State: {$form['state']}\nCity: {$form['city']}\n"
                     . "Programme: {$form['programme']}\nCourse: {$form['course']}\n";
            $headers = 'From: SANICAS Website <no-reply@sanicas.in>' . "\r\n" . 'Reply-To: ' . $clean($form['email']);
            @mail(ADMISSION_TO, $subject, $body, $headers);
        }
        $_SESSION['admission_status'] = 'sent';
    } else {
        $_SESSION['admission_status'] = 'error';
        $_SESSION['admission_old']    = $form;
        $_SESSION['admission_errors'] = $errors;
    }
    $_SESSION['csrf'] = bin2hex(random_bytes(16));
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?') . '#admission-form', true, 303);
    exit;
}
