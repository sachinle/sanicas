<?php
require __DIR__ . '/includes/contact-handler.php';

$page  = 'contact';
$title = 'Contact Us';
$heroImage = 'images (2)/infra and labs/infra_and_labs (5).jpeg';
require __DIR__ . '/includes/header.php';

function field_error($errors, $key)
{
    return isset($errors[$key]) ? '<span class="field__error">' . e($errors[$key]) . '</span>' : '';
}
?>

<!-- ============ Contact top ============ -->
<section class="contact-shell">
    <div class="contact-panel">
        <div class="contact-info">
            <?= chip('Get in touch · Have more questions?', 'glass') ?>
            <h1 class="contact-title">Let’s contact <em class="serif">us</em></h1>
            <p class="lead">Whether you have questions about our programs, admissions, or anything else, the SANICAS team is here to help. Reach out to us via phone, email, or the contact form — and we’ll get back to you as soon as possible.</p>

            <div class="contact-tiles">
                <a class="contact-tile contact-tile--ochre" href="<?= e($SITE['phone_href']) ?>">
                    <span class="contact-tile__icon"><?= icon('phone') ?></span>
                    <span class="contact-tile__text"><span class="overline">Call us</span><span class="h4"><?= e($SITE['phone']) ?></span></span>
                    <span class="contact-tile__go"><?= icon('arrow-up-right') ?></span>
                </a>
                <a class="contact-tile contact-tile--terra" href="<?= e($SITE['email_href']) ?>">
                    <span class="contact-tile__icon"><?= icon('mail') ?></span>
                    <span class="contact-tile__text"><span class="overline">Email</span><span class="h4"><?= e($SITE['email']) ?></span></span>
                    <span class="contact-tile__go"><?= icon('arrow-up-right') ?></span>
                </a>
                <a class="contact-tile contact-tile--sage" href="<?= e($SITE['map_link']) ?>" target="_blank" rel="noopener">
                    <span class="contact-tile__icon"><?= icon('map-pin') ?></span>
                    <span class="contact-tile__text"><span class="overline">Visit — Sanicas</span><span class="label"><?= e(implode(' ', $SITE['address'])) ?></span></span>
                    <span class="contact-tile__go"><?= icon('arrow-up-right') ?></span>
                </a>
            </div>

            <div class="contact-social">
                <span class="overline">Social media</span>
                <?= btn($SITE['instagram'], $SITE['insta_href'], 'glass', 'target="_blank" rel="noopener"') ?>
            </div>
        </div>

        <div class="form-card" id="contact-form">
            <div class="form-card__head">
                <h2 class="h3">Get in Touch</h2>
                <p class="body-s muted">Fill Out the Form, We’ll Respond Shortly!</p>
            </div>

            <?php if ($status === 'sent'): ?>
                <div class="form-alert form-alert--ok" role="status"><?= icon('check') ?> Thank you! Your message has been sent. Our team will get back to you shortly.</div>
            <?php elseif ($status === 'error'): ?>
                <div class="form-alert form-alert--err" role="alert"><?= e($errors['form'] ?? 'Please correct the highlighted fields and try again.') ?></div>
            <?php endif; ?>

            <form method="post" action="<?= url('contact.php') ?>" class="contact-form" data-validate novalidate>
                <input type="hidden" name="contact_form" value="1">
                <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
                <div class="hp" aria-hidden="true"><label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

                <div class="form-row">
                    <label class="field<?= isset($errors['name']) ? ' has-error' : '' ?>">
                        <span class="field__label">Name</span>
                        <input type="text" name="name" placeholder="Your Name" value="<?= e($form['name']) ?>" required maxlength="100" autocomplete="name">
                        <?= field_error($errors, 'name') ?>
                    </label>
                    <label class="field<?= isset($errors['subject']) ? ' has-error' : '' ?>">
                        <span class="field__label">Subject</span>
                        <input type="text" name="subject" placeholder="Subject" value="<?= e($form['subject']) ?>" maxlength="150">
                        <?= field_error($errors, 'subject') ?>
                    </label>
                </div>
                <div class="form-row">
                    <label class="field<?= isset($errors['email']) ? ' has-error' : '' ?>">
                        <span class="field__label">Email</span>
                        <input type="email" name="email" placeholder="Your Email" value="<?= e($form['email']) ?>" required autocomplete="email">
                        <?= field_error($errors, 'email') ?>
                    </label>
                    <label class="field<?= isset($errors['phone']) ? ' has-error' : '' ?>">
                        <span class="field__label">Phone</span>
                        <input type="tel" name="phone" placeholder="Your Phone" value="<?= e($form['phone']) ?>" pattern="[0-9+\-\s()]{7,20}" autocomplete="tel">
                        <?= field_error($errors, 'phone') ?>
                    </label>
                </div>
                <label class="field<?= isset($errors['comment']) ? ' has-error' : '' ?>">
                    <span class="field__label">Comment</span>
                    <textarea name="comment" rows="5" placeholder="Your Comment" required maxlength="3000"><?= e($form['comment']) ?></textarea>
                    <?= field_error($errors, 'comment') ?>
                </label>
                <button type="submit" class="btn btn--primary">
                    <span class="btn__label">Send Message</span><span class="btn__disc"><?= icon('arrow-right') ?></span>
                </button>
            </form>
        </div>
    </div>
</section>

<!-- ============ Map ============ -->
<section class="map-shell">
    <div class="map-card" data-map>
        <img class="map-card__bg" src="<?= fig('images (2)/infra and labs/infra_and_labs (5).jpeg') ?>" alt="Aerial view of the SANICAS campus" loading="lazy">
        <div class="map-card__frame" data-map-frame data-src="<?= e($SITE['map_embed']) ?>"></div>
        <div class="location-glass">
            <span class="location-glass__pin"><?= icon('map-pin') ?></span>
            <h2 class="h4">SAN International College of Arts and Science</h2>
            <p class="body-s">Pudhupathy Road, Taluk, Mavuthampathi, Madukkarai, Tamil Nadu 641105, India</p>
            <div class="btn-row">
                <?= btn('Open in Google Maps', $SITE['map_link'], 'light', 'target="_blank" rel="noopener"') ?>
                <button class="map-toggle" type="button" data-map-toggle>View map here</button>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
