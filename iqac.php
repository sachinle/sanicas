<?php
$page  = 'iqac';
$title = 'IQAC';
$description = 'Internal Quality Assurance Cell (IQAC) of SAN International College of Arts and Science — aim, objectives, quality policy, composition and documents.';
$heroImage = 'images (2)/infra and labs/infra_and_labs (9).jpeg';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/extra-icons.php';

$tabs = [
    'About' => 'about', 'Aim' => 'aim', 'Objectives' => 'objectives', 'Quality Policy' => 'quality-policy',
    'Composition' => 'composition', /* 'Documents' => 'documents', */ 'Contact' => 'contact',
];

$stakeholders = ['Students', 'Faculty', 'Alumni', 'Parents', 'Employers', 'Industry', 'Management'];
$mechanisms   = ['Quality benchmarking', 'Documentation', 'Feedback analysis', 'Academic & administrative audits', 'Performance monitoring', 'Data management', 'Evidence-based decisions'];

// [text, disc tone]
$objectives = [
    ['To develop and sustain a culture of quality in all academic and administrative activities.', 'ink'],
    ['To promote continuous improvement in teaching, learning, research, innovation, and extension.', 'ink'],
    ['To establish quality benchmarks and monitor institutional performance.', 'sage'],
    ['To encourage faculty development, research, and the adoption of innovative teaching practices.', 'ochre'],
    ['To strengthen student support services and promote holistic student development.', 'terra'],
    ['To collect and analyze stakeholder feedback for quality enhancement.', 'sage'],
    ['To document and disseminate institutional best practices and quality initiatives.', 'ochre'],
    ['To ensure effective governance, transparency, and accountability through systematic quality assurance mechanisms.', 'terra'],
    ['To facilitate institutional preparedness for NAAC accreditation and compliance with statutory and regulatory requirements.', 'sage'],
    ['To foster collaborations, community engagement, and a culture of excellence for sustainable institutional growth.', 'ochre'],
];

// [title, text, icon]
$policy = [
    ['Academic Excellence', 'Effective curriculum delivery, innovative teaching-learning practices, experiential learning, and continuous assessment.', 'cap'],
    ['Continuous Improvement', 'Quality assurance through systematic planning, monitoring, evaluation, feedback, and effective functioning of the IQAC.', 'refresh'],
    ['Emerging Technologies', 'Digital learning, skill development, and value-added programmes to enhance students’ knowledge, competencies, and employability.', 'cpu'],
    ['Industry Collaboration', 'Internships, live projects, expert interactions, professional training, and industry exposure.', 'briefcase'],
    ['Research & Innovation', 'Encouraging research, innovation, entrepreneurship, and knowledge creation among students and faculty members.', 'bulb'],
    ['Inclusive Environment', 'A safe, inclusive, supportive, and learner-friendly environment that promotes holistic development, professional ethics, leadership, and social responsibility.', 'heart'],
    ['Sustainability & SDGs', 'Environmental sustainability, social commitment, and active contribution towards the United Nations Sustainable Development Goals.', 'sprout'],
    ['Faculty Development', 'Professional development and continuous capacity building of faculty and staff to enhance institutional effectiveness.', 'users'],
    ['Transparency & Accountability', 'Stakeholder satisfaction and compliance with applicable statutory and regulatory requirements.', 'scale'],
];

// Placeholder names, as in the design — replace [Name] with the nominated members.
$composition = [
    'Management Representative', 'Senior Administrative Officer', 'Teacher Representative',
    'Teacher Representative', 'Teacher Representative', 'Local Society Nominee',
    'Alumni Representative', 'Employer / Industrialist', 'Student Representative',
];

// Placeholder dates/links, as in the design — replace with the published documents.
$documents = [
    'Annual Quality Assurance Report (AQAR)', 'Minutes of IQAC Meetings', 'Action Taken Report',
    'Stakeholder Feedback Analysis', 'Best Practices & Institutional Distinctiveness',
];

$qualityLinks = [
    ['NAAC', 'National Assessment and Accreditation Council', 'https://www.naac.gov.in/', 'ochre'],
    ['Bharathiar University', 'Affiliating university', 'https://b-u.ac.in/', 'terra'],
    ['UGC', 'University Grants Commission', 'https://www.ugc.gov.in/', 'sage'],
];

function q_link($l, $class = 'q-link')
{
    [$label, $sub, $href, $tone] = $l;
    return '<a class="' . $class . ' ' . $class . '--' . e($tone) . '" href="' . e($href) . '" target="_blank" rel="noopener">'
        . '<span class="q-link__text"><strong>' . e($label) . '</strong>' . ($sub ? '<span>' . e($sub) . '</span>' : '') . '</span>'
        . '<span class="q-link__disc">' . icon('arrow-up-right') . '</span></a>';
}
?>

<!-- ============ Hero ============ -->
<section class="iq-hero">
    <div class="iq-hero__bg"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (9).jpeg') ?>" alt="" fetchpriority="high"></div>
    <div class="iq-hero__text">
        <?= chip('Inaugurated on 16 September 2025', 'glass') ?>
        <h1 class="display">Internal Quality <em class="serif">Assurance Cell</em></h1>
        <p class="body iq-hero__sub">IQAC · SAN International College of Arts and Science</p>
    </div>
    <div class="glance">
        <p class="overline">IQAC at a glance</p>
        <div class="glance__date">
            <span class="glance__disc"><?= icon('calendar') ?></span>
            <span><strong>16 September 2025</strong><small>IQAC inaugurated</small></span>
        </div>
        <div class="glance__stats">
            <div><strong>10</strong><span>Core objectives</span></div>
            <div><strong>09</strong><span>Quality policy commitments</span></div>
        </div>
        <a class="q-link q-link--terra" href="#quality-policy"><span class="q-link__text"><strong>Quality Policy</strong></span><span class="q-link__disc"><?= icon('arrow-up-right') ?></span></a>
        <?php /* <a class="q-link q-link--sage" href="#documents"><span class="q-link__text"><strong>IQAC Documents</strong><span>AQAR · Minutes · Reports</span></span><span class="q-link__disc"><?= icon('arrow-up-right') ?></span></a> */ ?>
    </div>
</section>

<!-- ============ Section tabs ============ -->
<nav class="page-tabs" aria-label="IQAC sections" data-page-tabs>
    <div class="filter-tabs">
        <?php $i = 0; foreach ($tabs as $label => $id): $i++; ?>
            <a class="filter-tab<?= $i === 1 ? ' is-active' : '' ?>" href="#<?= $id ?>"><?= e($label) ?><span class="count"><?= sprintf('%02d', $i) ?></span></a>
        <?php endforeach; ?>
    </div>
</nav>

<!-- ============ About ============ -->
<section class="iq-about page-anchor" id="about">
    <div class="wrap split-row">
        <div class="split-row__text">
            <?= chip('IQAC', 'terra') ?>
            <h2 class="h2">About the IQAC</h2>
            <p class="body">The Internal Quality Assurance Cell (IQAC) of SAN International College of Arts and Science was inaugurated on 16th September 2025 to promote quality sustenance and enhancement across the institution.</p>
            <p class="body-s muted">The IQAC functions as a dedicated mechanism for planning, implementing and monitoring quality initiatives in academic and administrative activities.</p>
            <p class="body-s muted">The IQAC facilitates outcome-based and learner-centric teaching-learning practices, organises workshops, seminars and faculty development programmes, promotes best practices, and encourages continuous improvement through stakeholder feedback and evidence-based evaluation.</p>
            <p class="body-s muted">The IQAC strives to contribute significantly towards academic excellence, institutional development and holistic student growth by fostering a culture of quality, innovation, accountability and continuous improvement.</p>
        </div>
        <div class="photo-stack" aria-hidden="true">
            <img class="photo-stack__a" src="<?= fig('images/DSC_5862-1-1536x1024.jpg') ?>" alt="" loading="lazy">
            <img class="photo-stack__b" src="<?= fig('images/PRN06312.JPG') ?>" alt="" loading="lazy">
            <span class="photo-badge"><span class="photo-badge__disc"><?= xicon('target') ?></span><span><strong>Quality first</strong><small>Plan · Implement · Monitor</small></span></span>
        </div>
    </div>
</section>

<!-- ============ Aim ============ -->
<section class="iq-aim page-anchor" id="aim">
    <div class="wrap">
        <div class="pg-head">
            <div class="pg-head__title">
                <?= chip('IQAC', 'ochre') ?>
                <h2 class="h2">Aim of the IQAC</h2>
            </div>
        </div>
        <div class="aim-row">
            <div class="aim-statement reveal">
                <p class="h3">To promote and sustain a culture of <em class="serif">quality and excellence</em> through continuous improvement.</p>
                <p class="body-s">In academic, administrative, research, extension and support activities — by adopting best practices, encouraging stakeholder participation, ensuring quality benchmarks, and fostering a learner-centric environment in alignment with the institution’s vision, mission, and NAAC guidelines.</p>
            </div>
            <div class="aim-tags reveal">
                <p class="overline muted">Stakeholders in quality</p>
                <ul class="pill-list"><?php foreach ($stakeholders as $s): ?><li class="pill pill--white"><?= e($s) ?></li><?php endforeach; ?></ul>
                <p class="overline muted">Quality mechanisms</p>
                <ul class="pill-list"><?php foreach ($mechanisms as $m): ?><li class="pill pill--sage"><?= e($m) ?></li><?php endforeach; ?></ul>
            </div>
        </div>
        <div class="aim-text">
            <p>The IQAC aims to institutionalise and sustain a culture of quality and excellence in all academic, administrative, research, extension, and support activities through a system of continuous quality enhancement and assurance. It strives to promote innovative, learner-centric, and outcome-based education by fostering excellence in teaching, learning, research, consultancy, innovation, entrepreneurship, extension, and community engagement while ensuring the holistic development, employability, ethical values, leadership qualities, and lifelong learning skills of students. It is committed to strengthening institutional planning, governance, transparency, accountability, and participatory decision-making by involving all stakeholders in the quality enhancement process.</p>
            <p>The Cell encourages faculty development through continuous professional training, research initiatives, digital transformation, and the adoption of modern pedagogical practices, while promoting best practices, green campus initiatives, inclusiveness, gender equity, social responsibility, and environmental sustainability. In alignment with the vision and mission of the institution and the guidelines of NAAC and other statutory and regulatory bodies, the IQAC serves as a catalyst for quality assurance — facilitating accreditation, enhancing academic standards and transforming SANICAS into a nationally recognised institution committed to academic excellence, societal development, and global competitiveness.</p>
        </div>
    </div>
</section>

<!-- ============ Objectives ============ -->
<section class="iq-objectives page-anchor" id="objectives">
    <div class="wrap">
        <div class="pg-head">
            <div class="pg-head__title">
                <?= chip('IQAC', 'sage') ?>
                <h2 class="h2">Objectives</h2>
            </div>
            <p class="body-s muted">Ten objectives that guide how the IQAC plans, implements and monitors quality across the institution.</p>
        </div>
        <ol class="obj-grid">
            <?php foreach ($objectives as $k => [$text, $tone]): ?>
                <li class="obj reveal"><span class="obj__disc obj__disc--<?= $tone ?>"><?= sprintf('%02d', $k + 1) ?></span><p class="body-s"><?= e($text) ?></p></li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<!-- ============ Quality policy ============ -->
<section class="iq-policy page-anchor" id="quality-policy">
    <div class="wrap">
        <div class="iq-policy__head">
            <?= chip('IQAC', 'glass') ?>
            <h2 class="h2">Quality Policy</h2>
            <p class="iq-policy__statement">SAN International College of Arts and Science is committed to providing <em class="serif">quality, outcome-based and learner-centric education</em> that nurtures competent, ethical, innovative and employable graduates equipped to meet the evolving needs of society, industry and the global community.</p>
            <p class="body-s iq-policy__lead">We strive to develop competent, ethical, socially responsible, and industry-ready graduates by:</p>
        </div>
        <div class="policy-grid">
            <?php foreach ($policy as $k => [$t, $txt, $ic]): ?>
                <article class="policy-card reveal">
                    <div class="policy-card__top"><span class="policy-card__disc"><?= xicon($ic) ?></span><span class="caption"><?= sprintf('%02d', $k + 1) ?></span></div>
                    <h3 class="policy-card__title"><?= e($t) ?></h3>
                    <p class="caption"><?= e($txt) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="policy-banner reveal">
            <span class="policy-banner__disc"><?= icon('award') ?></span>
            <p>The institution is committed to fostering a culture of quality and continuous improvement in all academic, administrative, and support services to achieve excellence and create a meaningful and sustainable impact on society.</p>
        </div>
    </div>
</section>

<!-- ============ Composition ============ -->
<section class="iq-composition page-anchor" id="composition">
    <div class="wrap">
        <div class="pg-head">
            <div class="pg-head__title">
                <?= chip('IQAC', 'terra') ?>
                <h2 class="h2">IQAC Composition</h2>
            </div>
            <p class="body-s muted">The IQAC is constituted as per NAAC guidelines, bringing together management, faculty, administration and external stakeholders.</p>
        </div>
        <div class="lead-pair">
            <div class="lead-tile lead-tile--ochre reveal">
                <span class="ini ini--lg">ST</span>
                <div><p class="overline">Chairperson · Principal</p><p class="h3">Dr. S. Thenral</p><p class="caption lead-tile__sub">SAN International College of Arts and Science</p></div>
            </div>
            <div class="lead-tile lead-tile--ink reveal">
                <span class="ini ini--lg">DV</span>
                <div><p class="overline">IQAC Coordinator</p><p class="h3">Dr. Dhanya V</p><p class="caption lead-tile__sub">Department of Microbiology</p></div>
            </div>
        </div>
        <div class="comp-grid">
            <?php foreach ($composition as $k => $role): ?>
                <div class="comp"><span class="comp__num"><?= sprintf('%02d', $k + 1) ?></span><div><p class="comp__name">[Name]</p><p class="caption muted"><?= e($role) ?> · Member</p></div></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Documents ============ -->
<?php /*
<section class="iq-docs page-anchor" id="documents">
    <div class="wrap iq-docs__row">
        <div class="doc-board">
            <?= chip('IQAC', 'ochre') ?>
            <h2 class="h2">IQAC Documents</h2>
            <p class="body-s muted">Annual quality reports, meeting minutes and feedback analyses are published here. Please check this page regularly.</p>
            <div class="doc-list" role="table" aria-label="IQAC documents">
                <div class="doc-row doc-row--head" role="row">
                    <span class="doc-row__date" role="columnheader">Date</span>
                    <span class="doc-row__title" role="columnheader">Document</span>
                    <span role="columnheader">Download</span>
                </div>
                <?php foreach ($documents as $d): ?>
                    <div class="doc-row" role="row">
                        <span class="doc-row__date" role="cell"><span class="date-chip">[DD-MM-YYYY]</span></span>
                        <span class="doc-row__title" role="cell"><?= e($d) ?></span>
                        <span role="cell"><a class="pdf-chip" href="#">PDF <?= icon('download') ?></a></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="links-card">
            <?= chip('Quality links', 'glass') ?>
            <?php foreach ($qualityLinks as $l): ?><?= q_link($l) ?><?php endforeach; ?>
        </div>
    </div>
</section>
*/ ?>

<!-- ============ Contact ============ -->
<section class="iq-contact page-anchor" id="contact">
    <div class="wrap">
        <div class="ochre-card">
            <div class="iq-contact__title">
                <?= chip('Contact', 'dark') ?>
                <h2 class="h2">Reach the <em class="serif">IQAC</em></h2>
                <p class="iq-contact__college">SAN International College of Arts and Science</p>
            </div>
            <div class="iq-contact__details">
                <div class="iq-detail"><span class="iq-detail__disc"><?= icon('users') ?></span><div><p class="overline">IQAC Coordinator</p><p class="iq-detail__value">Dr. Dhanya V</p></div></div>
                <div class="iq-detail"><span class="iq-detail__disc"><?= icon('map-pin') ?></span><div><p class="overline">Address</p><p class="iq-detail__value">ACC Pirivu, Navakkarai, Coimbatore - 641 105</p></div></div>
                <div class="iq-detail"><span class="iq-detail__disc"><?= icon('mail') ?></span><div><p class="overline">Email</p><p class="iq-detail__value">[IQAC email address]</p></div></div>
            </div>
        </div>
    </div>
</section>

<script>
/* Highlight the section tab for the section in view. */
(function () {
    var tabs = document.querySelectorAll('[data-page-tabs] a');
    if (!tabs.length || !('IntersectionObserver' in window)) return;
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
            if (!en.isIntersecting) return;
            tabs.forEach(function (t) { t.classList.toggle('is-active', t.getAttribute('href') === '#' + en.target.id); });
        });
    }, { rootMargin: '-40% 0px -55% 0px' });
    document.querySelectorAll('.page-anchor').forEach(function (s) { io.observe(s); });
})();
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
