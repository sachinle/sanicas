<?php
$page  = 'collaboration';
$title = 'Industry Collaborations';
$heroImage = 'images (2)/infra and labs/infra_and_labs (8).jpeg';
require __DIR__ . '/includes/header.php';

$programs = [
    ['IIT Palakkad', 'paper', true, 'SANICAS is proud to collaborate with IIT Palakkad to offer specialized courses in Artificial Intelligence, Machine Learning, and Business Analytics — marking a first-of-its-kind initiative in Tamil Nadu. This program, powered by ASAP Kerala, combines expert-designed curriculum and hands-on training to equip students with practical skills in cutting-edge technologies. Students will gain real-world experience through workshops, projects, and case studies, preparing them for tech-driven careers. Upon completion, participants will earn a prestigious IIT Palakkad certification, enhancing their credibility and opening up global career opportunities.'],
    ['Unity', 'ink', true, 'SANICAS is excited to announce an exclusive collaboration with Unity, a global leader in Virtual Reality and Game Development platforms. This partnership, powered by ASAP Kerala, offers students hands-on training using industry-standard tools to build immersive digital experiences. The curriculum is aligned with Unity standards, covering key areas like 3D modeling, game mechanics, interactive media, and VR development. Students will gain practical skills through project-based learning, preparing them for careers in the fast-growing gaming and tech sectors. Upon course completion, students will earn a globally recognized Unity certification, boosting their employability and industry readiness.'],
    ['NSDC — National Skill Development Corporation', 'sage', false, 'NSDC (National Skill Development Corporation) is a government initiative aimed at promoting skill development across India. It focuses on providing training programs to develop a highly skilled workforce in various sectors, empowering individuals with the skills needed to enhance their employability and contribute to the country’s economic growth. By partnering with SANICAS, NSDC ensures that students gain access to high-quality skill development programs that align with industry standards. The programs offered by NSDC help students acquire practical skills, certifications, and the confidence to thrive in their respective fields, providing them with a competitive advantage in today’s job market.'],
    ['IATA', 'terra', false, 'The IATA (International Air Transport Association) certification courses offered at SANICAS are designed to provide students with the knowledge and skills required to excel in the global aviation, travel, and tourism industries. These courses cover key areas such as airline operations, travel agency management, ticketing, reservations, and aviation safety. IATA certification is recognized worldwide and opens doors to numerous career opportunities in airlines, airports, travel agencies, and tourism companies. With expert faculty and a curriculum aligned with international standards, SANICAS ensures that students are equipped with the necessary skills and credentials to pursue rewarding careers in the aviation and travel sectors.'],
    ['Institute of Advanced Virology (IAV) Trivandrum', 'ochre', true, 'The Institute of Advanced Virology (IAV) in Trivandrum, Kerala, focuses on viral diseases, diagnostics, and vaccine development. It contributes to global efforts against viral infections through research on pathogenesis and emerging diseases. In partnership with ASAP Kerala, IAV offers training and workshops to prepare students and professionals for careers in virology, public health, and biotechnology.'],
];
$asapCount = count(array_filter($programs, function ($p) { return $p[2]; }));
?>

<!-- ============ Hero ============ -->
<section class="hero collab-hero">
    <div class="hero__bg"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (8).jpeg') ?>" alt="SANICAS Campus Industry Collaborations" fetchpriority="high"></div>
    <?= chip('Ongoing', 'glass') ?>
    <h1 class="display accent-ochre collab-hero__title">Industry <em class="serif">collaborations</em></h1>
    <div class="chip-row">
        <?php foreach (['XYLEM Commerce Pro', 'ASAP Kerala', 'IIT Palakkad', 'Unity', 'NSDC', 'IATA', 'Institute of Advanced Virology'] as $p) echo chip($p, 'glass'); ?>
    </div>
</section>

<!-- ============ XYLEM Commerce Pro ============ -->
<section class="section xylem">
    <div class="wrap">
        <div class="spotlight">
            <div class="spot-visual reveal">
                <img class="spot-visual__main" src="<?= fig('images/DSC_5862-1-1536x1024.jpg') ?>" alt="XYLEM Commerce Pro student training" loading="lazy">
                <img class="spot-visual__small" src="<?= fig('images/DSC_6121-1-1-1536x1024 (1).jpg') ?>" alt="SANICAS XYLEM session" loading="lazy">
                <div class="spot-sticker"><strong>1st</strong><span>college in<br>Coimbatore</span></div>
            </div>
            <div class="spot-text">
                <?= chip('Industry Oriented Programs Collaboration', 'ochre') ?>
                <h2 class="h2 accent-terra">XYLEM Commerce <em class="serif">Pro</em></h2>
                <p class="body">XYLEM Commerce Pro is a renowned institution specializing in providing high-quality professional courses in the fields of accounting, finance, and business management. Known for its expert-led training programs, XYLEM Commerce Pro focuses on preparing students for globally recognized certifications such as ACCA (Association of Chartered Certified Accountants) and CMA (Certified Management Accountant – US).</p>
                <p class="body-s muted">With a reputation for excellence in the education sector, XYLEM Commerce Pro partners with top educational institutions across the country to offer students access to world-class professional training, resources, and mentorship. Their expert faculty, industry connections, and comprehensive curriculum ensure that students are not just prepared for exams, but are also equipped with the real-world skills required to excel in the global job market.</p>
                <div class="note-dark">
                    <span class="check-disc"><?= icon('check') ?></span>
                    <p>SANICAS is the first college in Coimbatore to partner with XYLEM Commerce Pro, offering training for top certifications like ACCA and CMA (US). This collaboration provides expert coaching and industry insights, giving students a strong edge in global finance and accounting careers.</p>
                </div>
            </div>
        </div>

        <div class="bento-row">
            <?= color_card('Expert Training', 'Top-tier instructors with vast industry experience.', '01', 'paper', 'color-card--sm') ?>
            <?= color_card('Comprehensive Course Materials', 'Cutting-edge study materials designed to help students master their subjects.', '02', 'ochre-soft', 'color-card--sm') ?>
            <?= color_card('Practical Insights', 'Real-world examples and case studies to ensure students gain practical knowledge.', '03', 'sage', 'color-card--sm') ?>
            <?= color_card('Mentorship & Career Support', 'Ongoing support for career development, job placements, and professional growth.', '04', 'terra', 'color-card--sm') ?>
        </div>
    </div>
</section>

<!-- ============ ASAP Kerala ============ -->
<section class="section bg-ink asap">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Additional Skill Acquisition Programme', 'glass') ?>
                <h2 class="h2 accent-ochre">ASAP <em class="serif">Kerala</em></h2>
            </div>
            <p class="section-head__text">ASAP Kerala (Additional Skill Acquisition Programme) is a government initiative launched by the Government of Kerala to meet the growing demand for a skilled workforce in India.</p>
        </div>

        <div class="asap__row">
            <div class="asap__text">
                <p>Its mission is to bridge the gap between education and employment by equipping young people with practical, industry-relevant training. As the job market becomes more competitive, ASAP Kerala aims to create a workforce that is not only knowledgeable but also job-ready. The program is especially focused on youth development, ensuring that students from diverse backgrounds have access to quality skill training. It reflects the government’s commitment to building a future-ready generation capable of driving national progress.</p>
                <p>The program offers a wide range of training in technical, vocational, and soft skills, preparing individuals for careers in sectors like IT, healthcare, finance, hospitality, and more. Emphasizing hands-on experience, real-world problem-solving, and workplace readiness, ASAP Kerala ensures that learners are well-prepared to meet industry expectations. The curriculum is designed in consultation with industry leaders to stay aligned with evolving job market trends. Regular updates and practical modules make the training both relevant and impactful.</p>
                <p>Courses cover key areas such as digital literacy, entrepreneurship, communication, and industry-specific technical skills. Designed in collaboration with industry experts, these programs provide certifications that are highly valued by employers. These certifications not only boost employability but also open doors to advanced career opportunities and global prospects. By continuously evolving its course offerings, ASAP Kerala remains a trusted platform for skill development and lifelong learning.</p>
            </div>
            <div class="asdc reveal">
                <?= chip('ASAP Skill Development Center (ASDC)', 'dark') ?>
                <h3 class="h3">ASAP Kerala collaboration with <em class="serif">SANICAS</em></h3>
                <p class="body-s">In a significant move to empower students, SANICAS has partnered with ASAP Kerala to become a leading ASAP Skill Development Center (ASDC) in Tamil Nadu. This collaboration gives students access to industry-relevant skill development programs on campus, boosting their employability and preparing them for the global workforce. As an ASDC, SANICAS offers a range of ASAP Kerala courses focused on key areas such as:</p>
                <?php foreach ([
                    ['Soft Skills Development', 'Building leadership, communication, teamwork, and problem-solving skills that are essential for success in the workplace.'],
                    ['Vocational and Technical Skills', 'Providing training in areas like digital literacy, customer service, hospitality, retail, and more.'],
                    ['Entrepreneurship', 'Helping students develop the skills necessary to create and manage their own businesses.'],
                ] as [$t, $d]): ?>
                    <div class="asdc__item">
                        <span class="check-disc check-disc--ink"><?= icon('check') ?></span>
                        <div><h4><?= e($t) ?></h4><p><?= e($d) ?></p></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <h3 class="h3 accent-ochre asap__why">Why ASAP Kerala &amp; SANICAS collaboration <em class="serif">matters</em></h3>
        <div class="bento-row">
            <?= color_card('First in Tamil Nadu', 'SANICAS is the first college in Tamil Nadu to collaborate with ASAP Kerala, offering its exclusive skill development programs to students in the region.', '01', 'ochre', 'color-card--sm') ?>
            <?= color_card('Industry Recognition', 'The courses offered through ASAP Kerala are designed to meet industry standards, and certification from ASAP Kerala enhances students’ professional credibility.', '02', 'terra', 'color-card--sm') ?>
            <?= color_card('Comprehensive Skill Development', 'By combining academic excellence with practical skill-building, students gain the knowledge and competencies required for the ever-evolving job market.', '03', 'sage', 'color-card--sm') ?>
            <?= color_card('Global Opportunities', 'The skills developed through ASAP Kerala’s programs are not only relevant locally but are recognized globally, giving SANICAS students the opportunity to work anywhere in the world.', '04', 'paper', 'color-card--sm') ?>
        </div>
    </div>
</section>

<!-- ============ Partner programs ============ -->
<section class="section partner-programs">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title section-head__title--wide">
                <?= chip('Programs & certifications', 'sage') ?>
                <h2 class="h2 accent-ochre">Specialized programs with our <em class="serif">partners</em></h2>
            </div>
        </div>

        <div class="filter-tabs" role="tablist" data-filter-group="programs">
            <button class="filter-tab is-active" role="tab" aria-selected="true" data-filter="all">All partners <span class="count"><?= sprintf('%02d', count($programs)) ?></span></button>
            <button class="filter-tab" role="tab" aria-selected="false" data-filter="asap">Powered by ASAP Kerala <span class="count"><?= sprintf('%02d', $asapCount) ?></span></button>
        </div>

        <div class="program-grid" data-filter-target="programs">
            <?php foreach ($programs as $i => [$name, $tone, $asap, $body]): ?>
                <article class="program program--<?= $tone ?> reveal" data-cat="<?= $asap ? 'asap' : 'other' ?>">
                    <div class="program__head">
                        <?php if ($asap): ?>
                        <div class="chip-row">
                            <?= chip('Powered by ASAP Kerala', $tone === 'ink' ? 'ochre' : 'dark') ?>
                        </div>
                        <?php endif; ?>
                        <h3 class="h3"><?= e($name) ?></h3>
                    </div>
                    <p class="body-s"><?= e($body) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Empowering students ============ -->
<section class="cta-shell cta-shell--flush">
    <div class="cta-card cta-card--left">
        <img class="cta-card__bg" src="<?= fig('images (2)/infra and labs/infra_and_labs (27).jpeg') ?>" alt="" loading="lazy">
        <?= chip('ASAP Kerala × SANICAS', 'glass') ?>
        <h2 class="h1 accent-ochre">Empowering students for <em class="serif">success</em></h2>
        <p class="body">The partnership between ASAP Kerala and SANICAS marks a significant milestone in the journey of skill development for students in Tamil Nadu. With ASAP Kerala’s proven track record in training and certification, SANICAS provides its students with a unique opportunity to enhance their career prospects and become leaders in their respective fields.</p>
        <p class="lead">Join SANICAS and take advantage of this exceptional collaboration with ASAP Kerala to unlock your potential and secure a successful future.</p>
        <?= btn(' us', url('contact.php'), 'primary') ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
