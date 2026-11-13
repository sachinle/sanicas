<?php
$page  = 'examination-cell';
$title = 'Examination Cell';
$description = 'Examination Cell of SAN International College of Arts and Science — functions, structure, notices, university links, rank holders and guidelines.';
$heroImage = 'images (2)/infra and labs/infra_and_labs (3).jpeg';
require __DIR__ . '/includes/header.php';

$uniLinks = [
    ['Time Table', 'Affiliated Colleges', 'https://b-u.ac.in/node/767', 'ochre'],
    ['Results', 'Affiliated Colleges', 'https://results.b-u.ac.in/ac/index.html', 'terra'],
    ['Examination Application and Forms', '', 'https://b-u.ac.in/168/forms', 'sage'],
];

$tabs = [
    'About' => 'about', 'Functions' => 'functions', 'Organisational Structure' => 'structure', 'Notices' => 'notices',
    'University Links' => 'university-links', 'Rank Holders' => 'rank-holders', 'Guidelines' => 'guidelines', 'Contact' => 'contact',
];

// [text, disc tone]
$functions = [
    ['Receiving notifications and circulars from Bharathiar University and communicating them to the departments and students', 'ink'],
    ['Conducting Continuous Internal Assessment tests and Model Examinations', 'ink'],
    ['Collecting examination applications and fees and remitting them to the University within the prescribed dates', 'sage'],
    ['Preparing examination time tables, seating arrangements and invigilation duty schedules', 'ochre'],
    ['Verifying and distributing hall tickets to eligible students', 'terra'],
    ['Compiling internal assessment marks and submitting them to the University', 'sage'],
    ['Coordinating Semester Practical Examinations and the arrangements for External Examiners', 'ochre'],
    ['Conducting University Semester Examinations in accordance with the schedule and regulations prescribed by Bharathiar University', 'terra'],
    ['Assisting students with revaluation, arrear and supplementary examination procedures', 'sage'],
    ['Receiving and distributing mark statements and certificates issued by the University', 'ochre'],
];

$members = [
    ['Mrs. Sruthi S.', 'Computer Science · Member', 'SS'],
    ['Mrs. Catherine Priyanga A.', 'English · Member', 'SC'],
    ['Mrs. Lathi T. M.', 'Commerce · Member', 'SL'],
    ['Dr. V. Sasikumar', 'Tamil · Member', 'VS'],
    ['Mr. Gnana Sekharan M.', 'Mathematics · Member', 'GS'],
    ['Ms. Anjana Menon U.', 'Business Administration · Member', 'AM'],
    ['Mrs. Adithya Nair', 'Business Administration · Member', 'SA'],
    ['Ms. Sandra S', 'Business Administration · Member', 'SS'],
];

// Placeholder rows, as in the design — replace with real notices (date, title, PDF link).
$notices = [
    ['[DD-MM-YYYY]', '[Notice title]', '#'],
    ['[DD-MM-YYYY]', '[Notice title]', '#'],
    ['[DD-MM-YYYY]', '[Notice title]', '#'],
];

// University Rank Holders (Bharathiar University Examinations)
$ranks = [
    ['Anusree K', 'M.Sc. Microbiology', '2021 – 2023', '2nd Rank', 'images/rank-anusree-k.jpg'],
    ['Preethu P ', 'M.Sc. Microbiology', '2021 – 2023', '10th Rank', 'images/rank-preethu-p.jpg'],
];

// Guidelines: [text, highlighted]
$guidelines = [
    ['Students shall carry their hall ticket and college identity card to every examination and produce them to the invigilator when required.', false],
    ['Students shall report to the examination hall at least 15 minutes before the commencement of the examination.', false],
    ['Students shall occupy only the seat allotted to them and shall follow the instructions of the invigilators.', false],
    ['Mobile phones, smart watches and all other electronic devices are strictly prohibited inside the examination hall.', true],
    ['Books, notes and any printed or written material shall not be brought into the examination hall unless permitted by the University.', false],
    ['Students shall maintain silence and discipline in the examination hall and shall not leave it without the permission of the invigilator.', false],
    ['Students shall write their register number only in the space provided and shall not disclose their identity anywhere else in the answer book.', false],
    ['Examination fees shall be paid on or before the last date announced.', false],
    ['Any act of malpractice constitutes a serious breach of academic integrity and shall invite disciplinary action as per the regulations of Bharathiar University.', true],
    ['Students are advised to check the Notices tab regularly for updates.', false],
];

function uni_link($l)
{
    [$label, $sub, $href, $tone] = $l;
    return '<a class="uni-link uni-link--' . e($tone) . '" href="' . e($href) . '" target="_blank" rel="noopener">'
        . '<span class="uni-link__text"><strong>' . e($label) . '</strong>' . ($sub ? '<span>' . e($sub) . '</span>' : '') . '</span>'
        . '<span class="uni-link__disc">' . icon('arrow-up-right') . '</span></a>';
}
?>

<!-- ============ Hero ============ -->
<section class="exam-hero">
    <div class="exam-hero__bg"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (3).jpeg') ?>" alt="" fetchpriority="high"></div>
    <div class="exam-hero__text">
        <?= chip('Affiliated to Bharathiar University, Coimbatore', 'glass') ?>
        <h1 class="display">Examination <em class="serif">Cell</em></h1>
        <p class="lead">SAN International College of Arts and Science</p>
    </div>
    <div class="exam-hero__links">
        <p class="overline">University Links</p>
        <?php foreach ($uniLinks as $l): ?><?= uni_link($l) ?><?php endforeach; ?>
    </div>
</section>

<!-- ============ Section tabs ============ -->
<nav class="exam-tabs" aria-label="Examination Cell sections" data-exam-tabs>
    <div class="filter-tabs">
        <?php $i = 0; foreach ($tabs as $label => $id): $i++; ?>
            <a class="filter-tab<?= $i === 1 ? ' is-active' : '' ?>" href="#<?= $id ?>"><?= e($label) ?><span class="count"><?= sprintf('%02d', $i) ?></span></a>
        <?php endforeach; ?>
    </div>
</nav>

<!-- ============ About ============ -->
<section class="exam-about exam-anchor" id="about">
    <div class="wrap exam-about__row">
        <div class="exam-about__text">
            <?= chip('Examination Cell', 'terra') ?>
            <h2 class="h2">About the Examination Cell</h2>
            <p class="lead">The Examination Cell of SAN International College of Arts and Science (Affiliated to Bharathiar University, Coimbatore) is responsible for the systematic planning, conduct and administration of all Internal, Model and University Semester Examinations of the college.</p>
            <p class="body muted">Functioning under the guidance of the Principal, the Cell ensures that every examination is conducted in accordance with the regulations, schedules and guidelines prescribed by Bharathiar University. It also serves as the official channel of communication between the University, the faculty and the students, and upholds transparency, discipline and academic integrity throughout the examination process.</p>
        </div>
        <div class="exam-about__visual" aria-hidden="true">
            <img class="exam-about__a" src="<?= fig('images (2)/Classroom/classrooms (2).jpeg') ?>" alt="" loading="lazy">
            <img class="exam-about__b" src="<?= fig('images/Copy of 255A0858.JPG') ?>" alt="" loading="lazy">
        </div>
    </div>
</section>

<!-- ============ Functions ============ -->
<section class="exam-functions exam-anchor" id="functions">
    <div class="wrap">
        <div class="exam-head">
            <div class="exam-head__title">
                <?= chip('Examination Cell', 'ochre') ?>
                <h2 class="h2">Functions</h2>
            </div>
        </div>
        <ol class="fn-grid">
            <?php foreach ($functions as $k => [$text, $tone]): ?>
                <li class="fn-item reveal">
                    <span class="fn-disc fn-disc--<?= $tone ?>"><?= sprintf('%02d', $k + 1) ?></span>
                    <p class="body-s"><?= e($text) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<!-- ============ Organisational structure ============ -->
<section class="exam-structure exam-anchor" id="structure">
    <div class="wrap">
        <div class="exam-head">
            <div class="exam-head__title">
                <?= chip('Examination Cell', 'glass') ?>
                <h2 class="h2">Organisational Structure</h2>
            </div>
        </div>
        <div class="exam-leads">
            <div class="exam-lead exam-lead--ochre reveal">
                <span class="exam-initials exam-initials--lg">ST</span>
                <div>
                    <p class="overline">Principal / Chief Superintendent</p>
                    <p class="h3">Dr. S. Thenral</p>
                    
                </div>
            </div>
            <div class="exam-lead exam-lead--cream reveal">
                <span class="exam-initials exam-initials--lg">AR</span>
                <div>
                    <p class="overline">Examination Cell Coordinator</p>
                    <p class="h3">Mr. A. Ranganathan</p>
                    <p class="label exam-lead__dept">Mathematics</p>
                </div>
            </div>
        </div>
        <div class="exam-members">
            <?php foreach ($members as [$name, $role, $ini]): ?>
                <div class="exam-member">
                    <span class="exam-initials"><?= e($ini) ?></span>
                    <div>
                        <p class="exam-member__name"><?= e($name) ?></p>
                        <p class="caption"><?= e($role) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Notices + University links ============ -->
<section class="exam-notices exam-anchor" id="notices">
    <div class="wrap exam-notices__row">
        <div class="notice-board">
            <?= chip('Examination Cell', 'ochre') ?>
            <h2 class="h2">Notices</h2>
            <p class="body muted">Examination notices, time tables and circulars are posted here. Please check this page regularly.</p>
            <div class="notice-list" role="table" aria-label="Examination notices">
                <div class="notice-row notice-row--head" role="row">
                    <span class="notice-row__date" role="columnheader">Date</span>
                    <span class="notice-row__title" role="columnheader">Notice</span>
                    <span role="columnheader">Download</span>
                </div>
                <?php foreach ($notices as [$date, $titleText, $href]): ?>
                    <div class="notice-row" role="row">
                        <span class="notice-row__date" role="cell"><span class="date-pill"><?= e($date) ?></span></span>
                        <span class="notice-row__title" role="cell"><?= e($titleText) ?></span>
                        <span role="cell"><a class="pdf-pill" href="<?= e($href) ?>">PDF <?= icon('download') ?></a></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="uni-card exam-anchor" id="university-links">
            <?= chip('University Links', 'glass') ?>
            <?php foreach ($uniLinks as $l): ?><?= uni_link($l) ?><?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Rank holders ============ -->
<section class="exam-ranks exam-anchor" id="rank-holders">
    <div class="wrap">
        <div class="exam-head exam-head--split">
            <div class="exam-head__title">
                <?= chip('Examination Cell', 'sage') ?>
                <h2 class="h2">University Rank Holders</h2>
            </div>
            <p class="body muted">Students of SAN International College of Arts and Science who secured University Ranks in the Bharathiar University Semester Examinations.</p>
        </div>
        <div class="rank-table-wrap">
            <table class="rank-table">
                <thead>
                    <tr><th class="col-no">S.No</th><th>Name of the Student</th><th class="col-prog">Programme</th><th class="col-batch">Batch</th><th class="col-rank">Rank</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($ranks as $k => [$name, $prog, $batch, $rank, $img]): ?>
                        <tr>
                            <td class="col-no"><?= $k + 1 ?></td>
                            <td class="rank-name">
                                <div class="rank-student">
                                    <img class="rank-student__avatar" src="<?= fig($img) ?>" alt="<?= e($name) ?>" loading="lazy">
                                    <span><?= e($name) ?></span>
                                </div>
                            </td>
                            <td><?= e($prog) ?></td>
                            <td><?= e($batch) ?></td>
                            <td><span class="rank-badge rank-badge--<?= $k === 0 ? 'top' : 'honor' ?>"><?= e($rank) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ Guidelines ============ -->
<section class="exam-guidelines exam-anchor" id="guidelines">
    <div class="wrap">
        <div class="exam-head exam-head--split">
            <div class="exam-head__title">
                <?= chip('Examination Cell', 'glass') ?>
                <h2 class="h2">Examination Guidelines</h2>
            </div>
            <p class="body">Students appearing for examinations shall adhere to the following guidelines.</p>
        </div>
        <ol class="guide-grid">
            <?php foreach ($guidelines as $k => [$text, $hi]): ?>
                <li class="guide-item<?= $hi ? ' guide-item--hi' : '' ?> reveal">
                    <span class="guide-disc"><?= sprintf('%02d', $k + 1) ?></span>
                    <p class="body-s"><?= e($text) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<!-- ============ Contact ============ -->
<section class="exam-contact exam-anchor" id="contact">
    <div class="wrap">
        <div class="exam-contact__card">
            <div class="exam-contact__title">
                <?= chip('Contact', 'dark') ?>
                <h2 class="h2">Examination <em class="serif">Cell</em></h2>
                <p class="exam-contact__college">SAN International College of Arts and Science</p>
            </div>
            <div class="exam-contact__details">
                <div class="detail">
                    <span class="detail__disc"><?= icon('map-pin') ?></span>
                    <div><p class="overline">Address</p><p class="detail__value">ACC Pirivu, Navakkarai, Coimbatore - 641 105</p></div>
                </div>
                <div class="detail">
                    <span class="detail__disc"><?= icon('phone') ?></span>
                    <div><p class="overline">Phone</p><p class="detail__value detail__value--muted">[Phone number]</p></div>
                </div>
                <a class="detail" href="mailto:sancoe2023@gmail.com">
                    <span class="detail__disc"><?= icon('mail') ?></span>
                    <div><p class="overline">Email</p><p class="detail__value">sancoe2023@gmail.com</p></div>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
/* Highlight the section tab for the section in view. */
(function () {
    var tabs = document.querySelectorAll('[data-exam-tabs] a');
    if (!tabs.length || !('IntersectionObserver' in window)) return;
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
            if (!en.isIntersecting) return;
            tabs.forEach(function (t) { t.classList.toggle('is-active', t.getAttribute('href') === '#' + en.target.id); });
        });
    }, { rootMargin: '-40% 0px -55% 0px' });
    document.querySelectorAll('.exam-anchor').forEach(function (s) { io.observe(s); });
})();
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
