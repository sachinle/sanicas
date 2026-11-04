<?php
$page  = 'placement';
$title = 'Career-driven Placements';
$heroImage = 'placement-hero.jpg';
require __DIR__ . '/includes/header.php';

$logos = ['247ai', 'accenture', 'acidus', 'adam-eve', 'adams-bridge', 'amazon', 'app-innovation', 'atos', 'avasoft',
    'capgemini', 'carisma', 'clarus', 'coding-mart', 'concentrix', 'corizo', 'corro-health', 'crio-do', 'cygnus',
    'cognizant', 'deloitte', 'emerald', 'ibm', 'infosys', 'intellipaat', 'interz-learn', 'joyallukkas', 'justdial',
    'kg-invicta', 'kovai-co', 'logo-101', 'logo-102', 'namecheap', 'paytm', 'qbss', 'quadra', 'rinex', 'rnd-soft',
    'sagility', 'savvy', 'sbi-general', 'shriram', 'sprout', 'sutherland', 'sun-info-media', 'tech-mahindra', 'v-think',
    'vivnovation', 'value-health', 'vedantu', 'westside', 'wipro', 'zigo', 'zeptologic'];
$stripLogos = array_slice($logos, 0, 16);

$stages = [
    ['Pre-Placement Preparation', 'ochre', [
        ['Personalized Counseling', 'Each student receives one-on-one career counseling, where we help identify their strengths, interests, and career goals. This process ensures that students are aligned with industries and roles suited to their skills and aspirations.'],
        ['Resume Building & Interview Preparation', 'We assist students in crafting professional resumes that highlight their skills and experiences. In addition, our mock interview sessions prepare them for real-world interviews, focusing on industry-specific questions and job readiness.'],
        ['Soft Skills Training', 'In today’s competitive job market, soft skills are just as important as technical knowledge. We offer training in communication, teamwork, leadership, and problem-solving to help students develop the interpersonal skills needed to excel in their careers.'],
    ]],
    ['Industry-Oriented Programs', 'terra', [
        ['Collaborations with Leading Employers', 'SANICAS maintains strong industry ties, collaborating with top companies in sectors such as technology, aviation, finance, marketing, and management. This ensures that our students are well-exposed to job opportunities and real-time industry requirements.'],
        ['Internships', 'Internships form a crucial part of our industry-oriented programs. Through ASAP Kerala and our industry partners, students gain hands-on experience, allowing them to apply theoretical knowledge in real-world settings. Internships are often the gateway to full-time employment.'],
        ['Industry Workshops and Guest Lectures', 'We regularly host workshops and guest lectures by industry professionals to give students insights into industry trends, best practices, and emerging technologies. These interactions help students understand the practical application of their studies.'],
    ]],
    ['On-Campus Recruitment Drives', 'sage', [
        ['Job Fairs & Recruitment Drives', 'We host regular on-campus recruitment drives and job fairs, where students can interact with recruiters from top companies, apply for jobs, and attend interviews — all within the campus.'],
        ['Placement Cell Coordination', 'Our dedicated placement cell works tirelessly to build relationships with hiring companies and organize recruitment drives, ensuring students have access to exclusive opportunities.'],
    ]],
    ['Post-Placement Support', 'ink', [
        ['Ongoing Career Counseling', 'Our support doesn’t end once the placement process is complete. We provide continuous career advice and guidance, helping students adjust to their new roles and ensuring long-term career success.'],
        ['Alumni Network', 'Through our growing alumni network, students can receive mentorship, advice, and networking opportunities, helping them build connections within their industries.'],
    ]],
];

// Figures the Placement Cell will provide — "—" until then. [label, tone, wide]
$stats = [
    ['Total students placed', 'ochre'], ['Placement percentage', 'ink'], ['Highest package', 'sage'], ['Average package', 'terra'],
    ['Number of companies visited', 'paper'], ['Internship statistics', 'ochre-soft'], ['Year-wise placement data', 'ink'],
];

$trainings = [
    ['Aptitude training', 'ochre'], ['Communication skills', 'ink'], ['Soft skills', 'sage'], ['Technical training', 'terra'],
    ['Mock interviews', 'paper'], ['Resume building', 'ochre-soft'], ['Group discussions', 'ink'],
];

$processLogos = ['accenture', 'infosys', 'cognizant', 'wipro', 'capgemini', 'atos', 'amazon', 'ibm'];

// Information slots — "—" marks data the Placement Cell will provide.
$detailSlots = [
    ['Placement Drives', ['Upcoming drives', 'Ongoing drives', 'Completed drives', 'Drive date, company, eligibility and position']],
    ['Internships', ['Internship opportunities', 'Number of students completing internships', 'Internship partners', 'Internship highlights']],
    ['Student Achievements', ['Students placed', 'Company and designation', 'Package received', 'Student testimonials']],
    ['Placement Officers / Team', ['Placement Officer', 'Faculty coordinators', 'Contact details', 'Department-wise placement coordinators']],
    ['Downloads', ['Placement brochure', 'Placement policy', 'Student registration forms', 'Company registration form', 'Placement guidelines']],
    ['Contact Placement Cell', ['Email', 'Phone number', 'Office location', 'Working hours']],
];

/** Info slot card: a title and label rows with a pending value. */
function slot_card($title, $rows, $extra = '')
{
    $html = '<article class="slot reveal"><h3 class="h4">' . e($title) . '</h3>';
    foreach ($rows as $r) {
        $html .= '<div class="slot__row"><span>' . e($r) . '</span><span class="slot__val">—</span></div>';
    }
    return $html . $extra . '</article>';
}
?>

<!-- ============ Hero ============ -->
<section class="hero placement-hero">
    <div class="hero__bg"><img src="<?= fig('placement-hero.jpg') ?>" alt="Students in a SANICAS computer lab" fetchpriority="high"></div>
    <div class="hero__row">
        <div class="hero__content">
            <?= chip('Career-driven', 'glass') ?>
            <h1 class="display accent-ochre">Career-driven <em class="serif">Placements</em></h1>
        </div>
        <div class="assurance">
            <p class="stat" data-count="100" data-suffix="%">100%</p>
            <p class="assurance__label">Placement Assistance</p>
        </div>
    </div>
    <div class="logo-marquee" aria-label="Recruiters">
        <div class="logo-marquee__track">
            <?php for ($loop = 0; $loop < 2; $loop++): ?>
                <?php foreach ($stripLogos as $l): ?>
                    <span class="logo-tile logo-tile--sm"<?= $loop ? ' aria-hidden="true"' : '' ?>><img src="<?= fig("co-$l.png") ?>" alt="<?= $loop ? '' : 'Recruiter logo' ?>" loading="lazy"></span>
                <?php endforeach; ?>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- ============ About the Placement Cell ============ -->
<section class="section section--tight-top bg-cream">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('About the Placement Cell', 'ochre') ?>
                <h2 class="h2 accent-ochre">About the <em class="serif">Placement Cell</em></h2>
            </div>
            <p class="section-head__text">The Placement Cell connects students with reputed organizations and industry leaders, enhancing employability through structured career guidance, skill development, internships, and campus recruitment drives.</p>
        </div>
        <div class="vo-grid">
            <article class="vo-card vo-card--ink reveal">
                <p class="overline">Vision &amp; Mission</p>
                <p class="body">The Placement Cell envisions creating a dynamic bridge between academic excellence and professional success by empowering students with the knowledge, skills, confidence, and industry exposure required to build meaningful careers. Its mission is to nurture industry-ready graduates through continuous career guidance, skill development, training, internships, and placement opportunities with reputed organizations.</p>
            </article>
            <article class="vo-card vo-card--paper reveal">
                <p class="overline">Objectives</p>
                <p class="body">The Placement Cell aims to bridge the gap between academic learning and industry expectations by enhancing students’ technical, communication, interpersonal, and employability skills. It strengthens industry–institution relationships, facilitates internships and placement drives, provides personalized career counselling, and prepares students for every stage of recruitment.</p>
            </article>
        </div>
    </div>
</section>

<!-- ============ Placement Cell activities ============ -->
<section class="section section--tight-top bg-paper">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Placement Cell activities', 'terra') ?>
                <h2 class="h2 accent-terra">Placement Cell <em class="serif">activities</em></h2>
            </div>
            <p class="section-head__text">We conduct comprehensive career-readiness programmes — including aptitude and technical training, resume-building workshops, mock interviews, guest lectures, internships, and on-campus recruitment drives — to help students transition confidently from campus to career.</p>
        </div>
        <div class="pstats reveal">
            <div class="pstats__head">
                <h3 class="h3">Placement Statistics</h3>
                <?= chip('Should be given by the department', 'light') ?>
            </div>
            <div class="pstats__grid">
                <?php foreach ($stats as $i => [$label, $tone]): ?>
                    <div class="pstat pstat--<?= $tone ?><?= $i >= 4 ? ' pstat--wide' : '' ?>">
                        <span class="pstat__val">—</span>
                        <span class="pstat__label"><?= e($label) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============ Placement journey ============ -->
<section class="section section--tight-top journey">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Placement', 'terra') ?>
                <h2 class="h2 accent-ochre">Placement at <em class="serif">SANICAS</em></h2>
            </div>
            <p class="section-head__text">A four-stage journey — from your first counselling session to long-term career support after you are placed.</p>
        </div>
        <div class="stages">
            <?php foreach ($stages as $i => [$name, $tone, $items]): ?>
                <article class="stage stage--<?= $tone ?> reveal">
                    <div class="stage__top">
                        <span class="stage__disc"><?= sprintf('%02d', $i + 1) ?></span>
                        <span class="overline">Stage <?= $i + 1 ?> / <?= count($stages) ?></span>
                    </div>
                    <h3 class="h4"><?= e($name) ?></h3>
                    <?php foreach ($items as [$t, $d]): ?>
                        <div class="stage__item"><h4><?= e($t) ?></h4><p><?= e($d) ?></p></div>
                    <?php endforeach; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Training & skill development ============ -->
<section class="section section--tight-top bg-cream">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Training & Skill Development', 'sage') ?>
                <h2 class="h2 accent-ochre">Training &amp; <em class="serif">Skill Development</em></h2>
            </div>
            <p class="section-head__text">Focused training modules across aptitude, communication, soft skills, technical proficiency, resume building, group discussions, and mock interviews equip students with the confidence to excel in corporate recruitment.</p>
        </div>
        <div class="trainings">
            <?php foreach ($trainings as $i => [$label, $tone]): ?>
                <div class="training pstat--<?= $tone ?> reveal">
                    <span class="training__n"><?= sprintf('%02d', $i + 1) ?></span>
                    <span class="training__label"><?= e($label) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Recruiters & process ============ -->
<section class="section section--tight-top bg-cream recruit-process">
    <div class="wrap rp-grid">
        <?php
        $logosHtml = '<div class="rp-logos">';
        foreach ($processLogos as $l) {
            $logosHtml .= '<span class="rp-logo"><img src="' . fig("co-$l.png") . '" alt="' . e(ucfirst($l)) . '" loading="lazy"></span>';
        }
        $logosHtml .= '</div><p class="caption muted">Logos shown are from the recruiter set supplied earlier; final list to be confirmed by the Placement Cell.</p>';
        echo slot_card('Recruiters / Companies', ['Company logos', 'List of companies that recruited students', 'Industry-wise recruiters, if applicable'], $logosHtml);
        ?>
        <article class="slot slot--process reveal">
            <h3 class="h4">Placement Process</h3>
            <img class="rp-process" src="<?= fig('placement-process.png') ?>" alt="SANICAS placement process flow chart" loading="lazy">
        </article>
    </div>
</section>

<!-- ============ Why choose SANICAS ============ -->
<section class="section why">
    <div class="wrap why__row">
        <div class="why-visual reveal">
            <img src="<?= fig('images (2)/infra and labs/class.jpeg') ?>" alt="SANICAS students in tiered classroom" loading="lazy">
            <span class="float-chip float-chip--1"><?= chip('IATA certified programs', 'ochre') ?></span>
            <span class="float-chip float-chip--2"><?= chip('NSDC certified programs', 'terra') ?></span>
            <span class="float-chip float-chip--3"><?= chip('IIT certified programs', 'sage') ?></span>
            <span class="float-chip float-chip--4"><?= chip('Unity certified programs', 'dark') ?></span>
        </div>
        <div class="why__text">
            <?= chip('Why SANICAS', 'ochre') ?>
            <h2 class="h2 accent-terra">Why choose SANICAS for <em class="serif">placement support?</em></h2>
            <p class="body">We offer hands-on learning through real-time projects and case studies, allowing students to tackle live industry problems and develop critical thinking and problem-solving skills. Many of our programs are partnered with national and international certifications, such as IATA, NSDC, IIT, and Unity, adding credibility to students’ resumes and giving them a competitive edge in the job market.</p>
            <p class="body-s muted">Our industry-linked curriculum is continuously updated based on input from industry partners, ensuring students learn the most relevant skills and tools, including advancements in AI, machine learning, aviation, game development, business analytics, and more.</p>
            <div class="check-pills">
                <?php foreach (['100% Placement Assistance', 'Strong Industry Collaborations', 'Skilled Career Coaches', 'Job-Ready Graduates'] as $p): ?>
                    <span class="check-pill"><span class="check-disc check-disc--sm"><?= icon('check') ?></span><?= e($p) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============ Recruiters ============ -->
<section class="section recruiters">
    <div class="wrap">
        <div class="section-head section-head--center">
            <div class="section-head__title">
                <?= chip('Recruiters', 'sage') ?>
                <h2 class="h2 accent-ochre">Exceptional <em class="serif">placements</em></h2>
            </div>
        </div>
        <div class="logo-wall">
            <?php foreach ($logos as $l): ?>
                <span class="logo-tile reveal"><img src="<?= fig("co-$l.png") ?>" alt="Recruiter logo" loading="lazy"></span>
            <?php endforeach; ?>
        </div>
        <p class="caption muted recruiters__note">Recruiter logos supplied by SANICAS. Logos are the property of their respective owners.</p>
    </div>
</section>

<!-- ============ Placement details ============ -->
<section class="section section--tight-top bg-cream">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title section-head__title--full">
                <?= chip('Placement details', 'ochre') ?>
                <h2 class="h2 accent-terra">Drives, internships &amp; <em class="serif">achievements</em></h2>
            </div>
        </div>
        <div class="slot-grid">
            <?php foreach ($detailSlots as [$t, $rows]) echo slot_card($t, $rows); ?>
        </div>
        <p class="caption muted details__note">“—” marks data the Placement Cell will provide.</p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
