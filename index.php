<?php
$page  = 'home';
$title = 'Learn. Lead. Succeed.';
$heroImage = 'home-hero.jpg';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/data.php';

$academics = [
    ['Lecture Series', 'images (2)/Classroom/classrooms (6).jpeg', 'At Sanicas Academics, we believe that learning goes beyond the textbook. Our Lecture Series is designed to offer students and professionals insights from industry leaders, experienced educators, and experts in various fields. These sessions cover cutting-edge research, real-world applications, and emerging trends in technology, business, engineering, and more. Whether you are a student looking to expand your knowledge or a professional seeking industry updates, our Lecture Series ensures you stay ahead in an ever-evolving world. Join us for inspiring discussions and take your learning experience to the next level!'],
    ['Workshops', 'acad-workshops.jpg', 'Our Workshops are hands-on, interactive sessions aimed at providing practical knowledge and enhancing the skills necessary for success in today’s competitive environment. These workshops focus on a variety of topics, including technical skills, personal development, career-building strategies, and soft skills. Led by seasoned professionals, our workshops empower participants to gain industry-relevant knowledge and sharpen their abilities in areas such as coding, data analysis, leadership, communication, and more. It’s not just about theory — it’s about getting you ready for the real world.'],
    ['Placement Training', 'images (2)/Classroom/classrooms (5).jpeg', 'At Sanicas Academics, we understand that securing a job is more than just submitting resumes. That’s why our Placement Training is tailored to equip students with the tools and knowledge they need to succeed in the job market. Our training programs include resume building, interview preparation, aptitude tests, group discussions, and personality development, all aimed at making you stand out to potential employers. Our placement support also includes personalized guidance, mock interviews, and career counseling to ensure you’re fully prepared for your next big opportunity.'],
    ['Industrial Visits', 'images/SHI00004.JPG', 'Bridging the gap between theory and practice, Sanicas Academics offers Industrial Visits to some of the most innovative and influential companies across various sectors. These visits provide students with the opportunity to witness first-hand the operations and practices of leading industries, enhancing their understanding of real-world business processes. From factories and R&D labs to tech startups and corporate offices, our industrial visits offer valuable insights into how companies function, how technology is integrated into everyday business, and what it takes to succeed in today’s competitive industries.'],
    ['Innovation Cell', 'images (2)/Classroom/classrooms (1).jpeg', 'The Innovation Cell at Sanicas Academics is a space where creativity meets practicality. It serves as a platform for students to bring their ideas to life, fostering innovation and entrepreneurship. The cell provides access to mentorship, resources, and a collaborative environment to help students transform their ideas into tangible projects or even startups. Through hackathons, brainstorming sessions, and collaborative workshops, we nurture problem-solving skills, encourage out-of-the-box thinking, and empower students to become the innovators of tomorrow. Whether you’re interested in tech, business, or design, the Innovation Cell is your launchpad to turn your creative vision into reality.'],
    ['Industry-Oriented Program', 'images (2)/infra and labs/infra_and_labs (25).jpeg', 'At Sanicas Academics, we are committed to providing programs that are aligned with industry needs and global trends. Our Industry-Oriented Programs are specially crafted to offer students a comprehensive understanding of the practical aspects of their chosen fields. These programs are a blend of theoretical knowledge and hands-on experience, allowing participants to gain critical insights into real-world challenges. Whether it’s software development, engineering, marketing, or finance, our industry-oriented programs equip students with the practical skills and expertise that employers are looking for. Our strong network with industry professionals and corporate partners ensures that the curriculum is always relevant and up-to-date with the latest market demands.'],
];

$support = [
    ['Pre-Placement Training', 'Tailored resume-building, interview preparation, and soft skills development to ensure you’re ready to impress employers.', 'ochre'],
    ['Industry Networking', 'Access to a wide network of industry professionals and re
    cruiters through campus recruitment drives, career fairs, and networking events.', 'terra'],
    ['Internship Opportunities', 'Real-world experience through internships with leading companies, giving you the competitive edge in the job market.', 'sage'],
    ['Job Placements', 'Continuous placement assistance, including interview coordination, job recommendations, and post-placement support.', 'ochre-soft'],
];
?>

<!-- ============ Hero ============ -->
<section class="hero hero--home">
    <div class="hero__bg"><img src="<?= fig('home-hero.jpg') ?>" alt="Aerial view of the SANICAS campus in Walayar, Coimbatore" fetchpriority="high"></div>
    <div class="hero__row">
        <div class="hero__content">
            <?= chip('Welcome to SANICAS · Coimbatore', 'glass') ?>
            <h1 class="display">Learn. Lead. <em class="serif">Succeed.</em></h1>
            <p class="lead hero__lead">A comprehensive array of programs designed to guide you toward success — a strong curriculum blending academic excellence with personalized support.</p>
            <div class="btn-row">
                <?= btn('Know more', url('about.php'), 'primary') ?>
                <?= btn('Contact us', url('contact.php'), 'glass') ?>
            </div>
        </div>

        <aside class="recognition-card" aria-label="Recognition">
            <div class="recognition-card__row">
                <span class="overline num">01</span>
                <div><p class="overline">Affiliated</p><p class="label">Bharathiar University, Coimbatore</p></div>
            </div>
            <div class="recognition-card__row">
                <span class="overline num">02</span>
                <div><p class="overline">Approved</p><p class="label">Government of Tamil Nadu</p></div>
            </div>
            <div class="recognition-card__row">
                <span class="overline num">03</span>
                <div><p class="overline">Recognized</p><p class="label">University Grants Commission (UGC)</p></div>
            </div>
            <a class="video-chip" href="<?= e($SITE['youtube']) ?>" target="_blank" rel="noopener" data-video="<?= e($SITE['youtube']) ?>">
                <span class="video-chip__thumb">
                    <img src="<?= fig('home-hero-thumb.jpg') ?>" alt="">
                    <span class="play-disc"><?= icon('play') ?></span>
                </span>
                <span>
                    <span class="overline">Watch</span>
                    <span class="caption">San Group Of Institution — Walayar, Coimbatore</span>
                </span>
            </a>
        </aside>
    </div>
</section>



<!-- ============ Welcome ========
 ==== -->
<section class="section welcome" id="welcome">
    <div class="wrap welcome__wrap">
        <!-- Institutional Eyebrow & Accreditations (Center Aligned) -->
        <div class="welcome__header-center reveal">
            <?= chip('Welcome to SANICAS', 'ochre') ?>
            <div class="welcome__accreditations">
                <span class="welcome__accreditation-item">Affiliated to Bharathiar University</span>
                <span class="welcome__accreditation-dot">&bull;</span>
                <span class="welcome__accreditation-item">Approved by Govt. of Tamil Nadu</span>
                <span class="welcome__accreditation-dot">&bull;</span>
                <span class="welcome__accreditation-item">UGC Recognized</span>
            </div>
        </div>

        <!-- Commanding Editorial Headline (Center Aligned) -->
        <h2 class="welcome__statement reveal">
            We are dedicated to shaping <span class="text-accent text-accent--ochre">tomorrow’s leaders</span> and welcoming you into our vibrant, inclusive community where <span class="text-accent text-accent--terra">greatness begins</span>.
        </h2>

        <!-- Institutional Narrative (Center Aligned) -->
        <div class="welcome__narrative reveal">
            <p class="welcome__lead">
                Welcome to SANICAS, where academic excellence meets real-world readiness. Backed by Sree Amman Trust’s three-decade legacy, we provide career-focused undergraduate and postgraduate education designed to nurture ethical, competent, and forward-thinking leaders.
            </p>
            <p class="welcome__subtext">
                Our curriculum blends rigorous academic theory with hands-on technical training, personalized faculty mentorship, and comprehensive career readiness — empowering every student to shape their future with clarity, confidence, and purpose.
            </p>
        </div>

        <!-- Institutional Trust Indicators / Features (Center Aligned) -->
        <div class="welcome__features-row reveal">
            <div class="welcome__feature-pill">
                <span class="welcome__feature-icon"><?= icon('check') ?></span>
                <span>Outcome-based curriculum tailored to emerging industry trends</span>
            </div>
            <div class="welcome__feature-pill">
                <span class="welcome__feature-icon"><?= icon('check') ?></span>
                <span>Personalized faculty mentorship & continuous career coaching</span>
            </div>
        </div>

        <!-- Action CTAs (Center Aligned) -->
        <div class="welcome__cta-row reveal">
            <?= btn('Explore SANICAS', url('about.php'), 'dark') ?>
            <a class="welcome__secondary-link" href="<?= url('courses.php') ?>">
                <span>Explore Programs</span>
                <?= icon('arrow-right') ?>
            </a>
        </div>

        <!-- Executive Metrics & Campus Showcase Bento Grid (4-Column Balanced Grid) -->
        <div class="welcome__grid">
            <!-- 01. Heritage (Default Ink Black) -->
            <div class="welcome-card welcome-card--ink stat-card stat-card--ink reveal">
                <div class="welcome-card__top">
                    <span class="stat-overline">Heritage</span>
                    <span class="welcome-card__icon"><?= icon('award') ?></span>
                </div>
                <div class="welcome-card__value">
                    <p class="stat">Since 1986</p>
                </div>
                <p class="body-s welcome-card__desc">Sree Amman Trust — over three decades of educational excellence and leadership</p>
            </div>

            <!-- 02. Campus Visual Tile (Aerial Image) -->
            <div class="welcome-card welcome-card--media stat-card stat-card--media reveal">
                <img src="<?= fig('images/DSC_5685-1-1-1536x1024.jpg') ?>" alt="SANICAS Walayar Campus Aerial View" loading="lazy">
                <div class="welcome-card__media-badge">
                    <span class="badge-dot"></span>
                    <span>Walayar Campus &bull; 40+ Acres</span>
                </div>
            </div>

            <!-- 03. Academics (Default Ochre Yellow) -->
            <div class="welcome-card welcome-card--ochre stat-card stat-card--ochre reveal">
                <div class="welcome-card__top">
                    <span class="stat-overline">Academics</span>
                    <span class="welcome-card__icon"><?= icon('book') ?></span>
                </div>
                <div class="welcome-card__value">
                    <p class="stat" data-count="12">12</p>
                </div>
                <p class="body-s welcome-card__desc">10 UG programs, 1 PG program and 1 diploma course across 6 departments</p>
            </div>

            <!-- 04. Collaborations (Default Sage Soft Green) -->
            <div class="welcome-card welcome-card--sage stat-card stat-card--sage reveal">
                <div class="welcome-card__top">
                    <span class="stat-overline">Collaborations</span>
                    <span class="welcome-card__icon"><?= icon('globe') ?></span>
                </div>
                <div class="welcome-card__value">
                    <p class="stat" data-count="13" data-suffix="+">13+</p>
                </div>
                <p class="body-s welcome-card__desc">Industry-oriented academic partners and corporate placement tie-ups</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ Academics ============ -->
<section class="panel-shell" id="academics">
    <div class="panel">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Sanicas Academics', 'glass') ?>
                <h2 class="h2 accent-ochre">Learning that goes <em class="serif">beyond the textbook.</em></h2>
            </div>
            <p class="section-head__text">From lecture series and hands-on workshops to industrial visits and an innovation cell — every programme is built around real-world readiness.</p>
        </div>
        <div class="grid-3">
            <?php foreach ($academics as $i => [$t, $img, $body]): ?>
                <article class="card-media reveal">
                    <div class="card-media__img"><img src="<?= fig($img) ?>" alt="<?= e($t) ?> at SANICAS" loading="lazy"></div>
                    <div class="card-media__body">
                        <div class="card-media__top"><span class="index-pill"><?= sprintf('%02d', $i + 1) ?></span><?= icon('arrow-up-right') ?></div>
                        <h3 class="h4"><?= e($t) ?></h3>
                        <p><?= e($body) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Courses offered ============ -->
<section class="section courses-offered" id="courses">
    <div class="wrap">
        <div class="courses-offered__header reveal">
            <div class="courses-offered__intro">
                <?= chip('Courses Offered', 'terra') ?>
                <h2 class="h2 accent-ochre">Explore our programs across <em class="serif">various streams</em></h2>
                <p class="courses-offered__lead">At Sanicas Academics, we offer a diverse range of undergraduate and postgraduate programs designed to equip students with practical skills and knowledge required for success in today’s dynamic industries.</p>
            </div>

            <div class="filter-tabs courses-filter-tabs" role="tablist" data-filter-group="courses">
                <button class="filter-tab is-active" role="tab" aria-selected="true" data-filter="all">All streams <span class="count"><?= sprintf('%02d', count($STREAMS)) ?></span></button>
                <button class="filter-tab" role="tab" aria-selected="false" data-filter="ug">Undergraduate <span class="count"><?= sprintf('%02d', count(array_filter($STREAMS, function($s) { return $s['level'] === 'ug'; }))) ?></span></button>
                <button class="filter-tab" role="tab" aria-selected="false" data-filter="pg">Postgraduate <span class="count"><?= sprintf('%02d', count(array_filter($STREAMS, function($s) { return $s['level'] === 'pg'; }))) ?></span></button>
            </div>
        </div>

        <div class="course-grid" data-filter-target="courses">
            <?php foreach ($STREAMS as $s) echo course_card($s); ?>
        </div>

        <div class="courses-offered__cta reveal">
            <?= btn('View all courses', url('courses.php'), 'dark') ?>
            <p class="courses-offered__cta-sub">Curriculum, semester pathways, and admission criteria across all 6 departments.</p>
        </div>
    </div>
</section>

<!-- ============ New learning system ============ -->
<section class="learning-shell">
    <div class="learning-card">
        <div class="learning-card__media">
            <img src="<?= fig('images (2)/infra and labs/infra_and_labs (14).jpeg') ?>" alt="Students working on laptops in a SANICAS classroom" loading="lazy">
            <span class="first-badge"><span class="first-badge__disc">1st</span>First time in Tamil Nadu</span>
            <blockquote class="learning-card__quote">We are committed to empowering our students with the tools and knowledge required for success in a tech-driven world.</blockquote>
        </div>
        <div class="learning-card__text">
            <?= chip('Digital learning ecosystem', 'ochre') ?>
            <h2 class="h2 accent-ochre">Revolutionizing education with a <em class="serif">new learning system</em></h2>
            <p class="body muted">At Sanicas Academics, we are proud to introduce a groundbreaking educational model — the first of its kind in Tamil Nadu. In collaboration with leading corporate standards, we are transitioning to a fully digital learning ecosystem. All our students will be provided with laptops to ensure seamless access to resources. Every project, assignment, note, and letter will be entirely digital, aligned with the advanced systems used by MNCs (Multinational Corporations).</p>
            <div class="features">
                <div class="feature reveal"><span class="num-disc">01</span><h3>Laptops for all students</h3><p>Equipped with the latest software and tools for enhanced learning.</p></div>
                <div class="feature reveal"><span class="num-disc">02</span><h3>Fully Digital Assignments and Projects</h3><p>Say goodbye to paper-based work — everything will be online!</p></div>
                <div class="feature reveal"><span class="num-disc">03</span><h3>Digital Notes and Letters</h3><p>Access all study materials, letters, and official communications on a centralized platform.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ============ Placement support ============ -->
<section class="section placement-support">
    <div class="wrap placement-support__row">
        <div class="collage reveal">
            <img class="collage__main" src="<?= fig('images/Copy of 255A4958.JPG') ?>" alt="SANICAS placement support" loading="lazy">
            <div class="badge-100"><strong>100%</strong><span>Placement<br>Assistance</span></div>
        </div>
        <div class="placement-support__text">
            <?= chip('Career readiness', 'terra') ?>
            <h2 class="h2 accent-terra">Placement support at <em class="serif">Sanicas Academics</em></h2>
            <p class="body muted">At Sanicas Academics, we prioritize your future success. Our Placement Support program is designed to help students transition seamlessly from academics to professional life. We collaborate with top companies and industry leaders to ensure our students are equipped with the skills, knowledge, and confidence to excel in the workforce.</p>
            <ol class="support-list">
                <?php foreach ($support as $i => [$t, $d, $tone]): ?>
                    <li class="reveal"><span class="num-disc num-disc--<?= $tone ?>"><?= sprintf('%02d', $i + 1) ?></span><div><h3><?= e($t) ?></h3><p><?= e($d) ?></p></div></li>
                <?php endforeach; ?>
            </ol>
            <?= btn('View placements', url('placement.php'), 'dark') ?>
        </div>
    </div>
</section>

<!-- ============ Admissions CTA ============ -->
<section class="cta-shell">
    <div class="cta-card">
        <img class="cta-card__bg" src="<?= fig('admissions-cta.jpg') ?>" alt="" loading="lazy">
        <?= chip('Interested in joining us?', 'glass') ?>
        <h2 class="h1 accent-ochre">Join us for information about <em class="serif">new student admissions</em></h2>
        <p class="lead">Our team is here to support you throughout the admission process, answering your questions and helping you get started with ease.</p>
        <?= btn('Contact us', url('contact.php'), 'primary') ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
