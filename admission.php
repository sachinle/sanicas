<?php
require __DIR__ . '/includes/admission-handler.php';

$page  = 'admission';
$title = 'Admission 2026–27';
$description = 'Apply for admission 2026–27 at SAN International College of Arts and Science (SANICAS), Coimbatore — programmes, certifications, college bus routes and the online admission form.';
$heroImage = 'images (2)/infra and labs/infra_and_labs (1).jpeg';
require __DIR__ . '/includes/header.php';

$why = [
    ['Industry-Driven Skill-Based Learning', 'Hands-on training and real-world projects designed to equip you with industry-relevant skills.', 'ochre'],
    ['Career-Focused Academic Programs', 'Curriculum tailored to enhance employability and prepare you for a successful professional journey.', 'paper'],
    ['Experienced & Dedicated Faculty', 'Learn from expert mentors committed to your academic growth and career success.', 'sage'],
    ['Holistic Student Development', 'Develop leadership, communication, ethics, and personality for overall success.', 'paper'],
    ['Strong Industry Connect', 'Gain practical exposure through internships, industrial visits, and expert interactions.', 'paper'],
    ['Supportive Learning Environment', 'A student-friendly campus with personalized mentoring and academic guidance.', 'terra'],
    ['Startup Park & Innovation Ecosystem', 'Nurturing entrepreneurial talent with innovation labs, mentorship, and expert support to turn ideas into successful startups.', 'paper'],
    ['Global Exposure', 'Access international webinars, sessions, and global learning perspectives.', 'ink'],
];

// Programme details ($PROGRAMMES) come from includes/admission-handler.php (source: ADMISSION.docx).

$busRoutes = ['Palakkad – Coimbatore', 'Mannarkkad', 'Pollachi', 'Koncad', 'Coimbatore City', 'Chelakkara', 'Shornur', 'Pattambi',
              'Ottapalam', 'Nemmara', 'Tholannur', 'Vadakkanchery', 'Kozhunjampara', '& more'];

$certs = [
    ['IBM Certifications', 'Data Science, AI, Cloud Computing'],
    ['AWS (Amazon Web Services) Certification', 'Cloud Computing'],
    ['ASAP Kerala', 'Coding Skills, SOC Analyst, Cyber Security, AI & Machine Learning'],
];

$mbaSpecialisations = ['Business Analytics', 'Operations', 'Human Resource', 'Marketing', 'Finance', 'Logistics and Supply Chain Management',
                       'Infrastructure and Real Estate Management', 'Tourism Management', 'Hospital Administration and Healthcare Management'];
$mbaHighlights = ['International Study Tour', '8+ Professional Certifications', '10 Value added Programs', 'Free TAB for Digital Learning'];

// ---- Form helpers ----
function adm_err($errors, $k)
{
    return isset($errors[$k]) ? '<span class="field__error">' . e($errors[$k]) . '</span>' : '';
}

function adm_input($label, $name, $form, $errors, $type = 'text', $req = false, $attrs = '')
{
    return '<label class="field' . (isset($errors[$name]) ? ' has-error' : '') . '">'
        . '<span class="field__label">' . e($label) . ($req ? ' <span class="req">*</span>' : '') . '</span>'
        . '<input type="' . e($type) . '" name="' . e($name) . '" value="' . e($form[$name]) . '"' . ($req ? ' required' : '') . ' ' . $attrs . '>'
        . adm_err($errors, $name) . '</label>';
}

function adm_select($label, $name, $options, $form, $errors, $req = false, $placeholder = 'Select')
{
    $html = '<label class="field' . (isset($errors[$name]) ? ' has-error' : '') . '">'
        . '<span class="field__label">' . e($label) . ($req ? ' <span class="req">*</span>' : '') . '</span>'
        . '<span class="select"><select name="' . e($name) . '"' . ($req ? ' required' : '') . '>'
        . '<option value="">' . e($placeholder) . '</option>';
    foreach ($options as $group => $opts) {
        if (is_array($opts)) {
            $html .= '<optgroup label="' . e($group) . '">';
            foreach ($opts as $o) {
                $html .= '<option' . ($form[$name] === $o ? ' selected' : '') . '>' . e($o) . '</option>';
            }
            $html .= '</optgroup>';
        } else {
            $html .= '<option' . ($form[$name] === $opts ? ' selected' : '') . '>' . e($opts) . '</option>';
        }
    }
    return $html . '</select></span>' . adm_err($errors, $name) . '</label>';
}

/** Programme card: department/group name, course count and list. */
function prog_card($name, $courses, $extraClass = '')
{
    $html = '<article class="dept-card ' . e($extraClass) . ' reveal"><div class="dept-card__head">'
        . '<h3 class="dept-card__title">' . e($name) . '</h3></div><ul class="dept-card__list">';
    foreach ($courses as $c) {
        $html .= '<li><span class="dept-card__dot"></span>' . e($c) . '</li>';
    }
    return $html . '</ul></article>';
}

$ugDepartments = $PROGRAMMES['Undergraduate'];
$ugCount = array_sum(array_map('count', $ugDepartments));
?>

<!-- ============ Hero ============ -->
<section class="hero adm-hero">
    <div class="hero__bg"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (1).jpeg') ?>" alt="Aerial view of the SANICAS campus" fetchpriority="high"></div>
    <div class="hero__row">
        <div class="hero__content">
            <?= chip('Admissions open · 2026–27', 'glass') ?>
            <h1 class="display">Begin your <em class="serif">journey</em> at SANICAS</h1>
            <p class="lead hero__lead">World-class education, hands-on experience and global exposure — across Computer Science, Management, Commerce, Media and Life Sciences.</p>
            <div class="btn-row">
                <?= btn('Apply now', '#admission-form', 'primary') ?>
                <?= btn('Download brochure', asset('docs/sanicas-brochure-2026.pdf'), 'glass', 'target="_blank" rel="noopener"') ?>
                <?= btn('Download application form', asset('docs/san-application-form-2026.pdf'), 'glass', 'target="_blank" rel="noopener" download') ?>
            </div>
        </div>
    </div>
</section>

<!-- ============ Why choose SANICAS ============ -->
<section class="section section--tight-top bg-cream">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Why choose SANICAS', 'ochre') ?>
                <h2 class="h2 accent-ochre">Why choose <em class="serif">SANICAS</em></h2>
            </div>
            <p class="section-head__text">SANICAS provides world-class education through innovative teaching methods and industry focused programs. Experienced faculty nurture critical thinking, creativity, and holistic development. Students gain hands-on experience in modern labs, career-oriented projects, and global exposure through exchange programs and research collaborations.</p>
        </div>
        <div class="why-grid">
            <?php foreach ($why as $i => [$t, $d, $tone]): ?>
                <article class="why-card why-card--<?= $tone ?> reveal">
                    <span class="why-card__n"><?= sprintf('%02d', $i + 1) ?></span>
                    <div class="why-card__body">
                        <h3 class="h4"><?= e($t) ?></h3>
                        <p class="body-s">“<?= e($d) ?>”</p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Computerized learning ============ -->
<section class="section section--tight-top bg-paper adm-learning">
    <div class="wrap adm-learning__row">
        <div class="adm-learning__text">
            <?= chip('Introducing', 'terra') ?>
            <h2 class="h2 accent-ochre">South India’s first fully <em class="serif">computerized learning system!</em></h2>
            <p class="lead muted">@SAN ICAS, experience the future of learning with Advanced Skill Based Education System. We are revolutionizing education by offering each student a personalized computer, empowering them to thrive in the digital era.</p>
            <p class="adm-learning__tag">Step into the future—where learning meets innovation!</p>
        </div>
        <img class="adm-learning__img reveal" src="<?= fig('learning-system.jpg') ?>" alt="SANICAS students learning on personal computers" loading="lazy">
    </div>
</section>

<!-- ============ Courses offered ============ -->
<section class="section section--tight-top bg-cream">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Programme details', 'sage') ?>
                <h2 class="h2 accent-terra">Programmes for <em class="serif">2026–27</em> admission</h2>
            </div>
            <p class="section-head__text">Explore Undergraduate and postgraduate degrees, add-on courses and certificate courses. For admission assistance call the Admission Hotline <a class="adm-link" href="tel:+917306868607">+91 73068 68607</a> or email <a class="adm-link" href="mailto:Info@sanicas.in">Info@sanicas.in</a>.</p>
        </div>

        <div class="prog-group">
            <div class="prog-group__head">
                <h3 class="prog-group__title">Undergraduate Courses</h3>
                <span class="prog-group__meta"><?= count($ugDepartments) ?> departments · <?= $ugCount ?> programmes</span>
            </div>
            <div class="dept-grid">
                <?php $n = 0; foreach ($ugDepartments as $name => $courses): ?>
                    <?= prog_card((++$n) . '. ' . $name, $courses) ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="prog-group">
            <div class="prog-group__head">
                <h3 class="prog-group__title">Postgraduate Programme</h3>
            </div>
            <div class="dept-grid">
                <?php foreach ($PROGRAMMES['Postgraduate'] as $name => $courses): ?>
                    <?= prog_card($name, $courses, 'dept-card--pg') ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="prog-group" id="addon-certificate">
            <div class="prog-group__head">
                <h3 class="prog-group__title">Add-on &amp; Certificate Courses</h3>
            </div>
            <div class="dept-grid">
                <?= prog_card('Add-on Courses', $PROGRAMMES['Add-on course']['Add-on Courses']) ?>
                <?= prog_card('Certificate Courses', $PROGRAMMES['Certificate course']['Certificate Courses']) ?>
            </div>
        </div>
    </div>
</section>

<!-- ============ College bus route ============ -->
<section class="adm-bus-shell bg-cream">
    <div class="wrap bus-card reveal">
        <div class="bus-card__head">
            <span class="bus-card__disc"><?= icon('map-pin') ?></span>
            <h2 class="h4 bus-card__title">College bus route</h2>
        </div>
        <div class="bus-card__media">
            <img src="<?= fig('images (2)/transport/transport (6).jpeg') ?>" alt="SANICAS college bus fleet" loading="lazy">
        </div>
        <ul class="chip-row bus-card__routes">
            <?php foreach ($busRoutes as $r): ?><li><?= chip($r, $r === '& more' ? 'dark' : 'light') ?></li><?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- ============ Certifications ============ -->
<section class="section section--tight-top bg-paper">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Innovative learning & industry-oriented programs', 'ochre') ?>
                <h2 class="h2 accent-ochre">Certifications <em class="serif">offered</em></h2>
            </div>
            <p class="section-head__text">Skill development certifications and specialized training through ASAP Skill Development Centre (SDC) partnership. LearnSphere Campus &amp; Skill Partners providing modern tools and industry-aligned skill development.</p>
        </div>
        <div class="cert-grid">
            <?php foreach ($certs as $i => [$t, $d]): ?>
                <article class="cert-card cert-card--<?= ['ochre', 'ink', 'sage'][$i] ?> reveal">
                    <span class="cert-card__disc"><?= icon('check') ?></span>
                    <h3 class="cert-card__title"><?= e($t) ?></h3>
                    <p class="body-s"><?= e($d) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="accred reveal">
            <img src="<?= fig('adm-accreditation.png') ?>" alt="Affiliation and accreditation logos — Bharathiar University, UGC and certification partners" loading="lazy">
        </div>
    </div>
</section>

<!-- ============ SAN International Business School ============ -->
<section class="section section--tight-top bg-cream">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Also from SAN Institutions', 'terra') ?>
                <h2 class="h2 accent-terra">SAN International <em class="serif">Business School</em></h2>
            </div>
            <p class="section-head__text">Approved by AICTE. Affiliated to Anna University Chennai</p>
        </div>
        <div class="mba-grid">
            <article class="mba-card reveal">
                <h3 class="h4">Specialisation</h3>
                <ul class="chip-row"><?php foreach ($mbaSpecialisations as $s): ?><li><?= chip($s, 'light') ?></li><?php endforeach; ?></ul>
            </article>
            <article class="mba-card mba-card--ink reveal">
                <h3 class="h4">Programme highlights</h3>
                <ul class="chip-row"><?php foreach ($mbaHighlights as $h): ?><li><?= chip($h, 'ochre') ?></li><?php endforeach; ?></ul>
            </article>
        </div>
    </div>
</section>

<!-- ============ Admission enquiry ============ -->
<section class="section section--tight-top bg-paper" id="admission-form">
    <div class="wrap adm-form-row">
        <div class="adm-intro">
            <?= chip('Admission Open 2026–27', 'ochre') ?>
            <h2 class="h1 accent-ochre">Begin your <em class="serif">admission</em></h2>
            <p class="lead muted">Join SANICAS to gain world-class education, hands-on experience, and global exposure. Register your interest and our admissions team will guide you through the next steps.</p>
            <div class="adm-help">
                <p class="overline">For admission assistance, please contact us</p>
                <a class="adm-help__item" href="tel:+917306868607">
                    <span class="adm-help__ico"><?= icon('phone') ?></span>
                    <span><small>Admission Hotline</small><strong>+91 73068 68607</strong></span>
                </a>
                <a class="adm-help__item" href="mailto:Info@sanicas.in">
                    <span class="adm-help__ico"><?= icon('mail') ?></span>
                    <span><small>Email ID</small><strong>Info@sanicas.in</strong></span>
                </a>
            </div>
            <img class="adm-intro__img" src="<?= fig('adm-form.png') ?>" alt="SANICAS students on campus" loading="lazy">
        </div>

        <div class="adm-form-card">
            <div class="adm-form-card__head">
                <h3 class="h3">Admission Open</h3>
                <p class="body-s muted"><span class="req">*</span> Required fields</p>
            </div>
            <?php if ($status === 'sent'): ?>
                <div class="form-alert form-alert--ok" role="status"><?= icon('check') ?> Thank you for registering! Our admissions team will contact you shortly.</div>
            <?php elseif ($status === 'error'): ?>
                <div class="form-alert form-alert--err" role="alert"><?= e($errors['form'] ?? 'Please correct the highlighted fields and try again.') ?></div>
            <?php endif; ?>

            <form method="post" action="<?= url('admission.php') ?>" class="adm-form" data-validate data-programme-form novalidate>
                <input type="hidden" name="admission_form" value="1">
                <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
                <div class="hp" aria-hidden="true"><label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

                <?= adm_input('Name', 'name', $form, $errors, 'text', true, 'maxlength="100" autocomplete="name" placeholder="Enter name"') ?>
                <?= adm_input('Email Address', 'email', $form, $errors, 'email', true, 'autocomplete="email" placeholder="Enter email address"') ?>
                <label class="field<?= isset($errors['mobile']) ? ' has-error' : '' ?>">
                    <span class="field__label">Mobile Number <span class="req">*</span></span>
                    <span class="phone-input"><span class="phone-input__cc">+91</span><input type="tel" name="mobile" value="<?= e($form['mobile']) ?>" required inputmode="numeric" pattern="[6-9][0-9]{9}" maxlength="10" autocomplete="tel-national" placeholder="10-digit mobile number"></span>
                    <?= adm_err($errors, 'mobile') ?>
                </label>
                <div class="form-row">
                    <?= adm_select('State', 'state', $INDIAN_STATES, $form, $errors, true, 'Select state') ?>
                    <?= adm_input('City', 'city', $form, $errors, 'text', true, 'maxlength="80" autocomplete="address-level2" placeholder="Enter city"') ?>
                </div>
                <div class="form-row">
                    <?= adm_select('Programme', 'programme', array_keys($PROGRAMMES), $form, $errors, true, 'Select programme') ?>
                    <label class="field<?= isset($errors['course']) ? ' has-error' : '' ?>">
                        <span class="field__label">Course <span class="req">*</span></span>
                        <span class="select"><select name="course" required>
                            <option value="">Select course</option>
                            <?php foreach ($PROGRAMMES as $prog => $groups): foreach ($groups as $group => $courses): ?>
                                <optgroup label="<?= e($prog . ' · ' . $group) ?>" data-programme="<?= e($prog) ?>">
                                    <?php foreach ($courses as $c): ?><option<?= $form['course'] === $c && $form['programme'] === $prog ? ' selected' : '' ?>><?= e($c) ?></option><?php endforeach; ?>
                                </optgroup>
                            <?php endforeach; endforeach; ?>
                        </select></span>
                        <?= adm_err($errors, 'course') ?>
                    </label>
                </div>
                <label class="consent<?= isset($errors['consent']) ? ' has-error' : '' ?>">
                    <input type="checkbox" name="consent" value="1"<?= $form['consent'] === '1' ? ' checked' : '' ?> required>
                    <span>I authorize SAN International College of Arts and Science and its representatives to contact me via Email, SMS, WhatsApp, or Call for updates and notifications, even if I am on DND/NDNC. <span class="req">*</span></span>
                </label>
                <?= adm_err($errors, 'consent') ?>

                <button type="submit" class="btn btn--dark"><span class="btn__label">Register</span><span class="btn__disc"><?= icon('arrow-right') ?></span></button>
            </form>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
