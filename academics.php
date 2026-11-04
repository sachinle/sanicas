<?php
$page  = 'academics';
$title = 'Academics';
$description = 'Academics at SAN International College of Arts and Science — courses, departments, vision and mission, and faculty.';
$heroImage = 'images/Copy of 255A0853.JPG';
require __DIR__ . '/includes/header.php';

$departments = [
    [
        'slug' => 'microbiology', 'name' => 'Microbiology', 'img' => 'images/Copy of 255A5262.JPG', 'mission_tone' => 'ochre',
        'intro' => 'To provide students with a strong foundation in microbiology through theoretical knowledge, practical laboratory and hands-on learning.',
        'courses_label' => 'Courses in Department',
        'courses' => ['B.Sc. Microbiology', 'M.Sc. Microbiology'],
        'hod' => 'Dr. Dhanya V', 'hod_initials' => 'DV',
        'vision' => 'To nurture competent and ethically responsible microbiologists with strong technical expertise, empowering them to excel in academics, research, industry, and community service while contributing to the advancement of science and societal well-being.',
        'mission' => [
            'To provide high-quality education and practical training in Microbiology and related interdisciplinary fields.',
            'To cultivate critical and analytical thinking skills, empowering students to solve problems through creativity and innovation.',
            'To encourage lifelong learning, enabling students to continuously develop, adapt to changing environments, and excel in their professional careers.',
        ],
    ],
    [
        'slug' => 'psychology', 'name' => 'Psychology', 'img' => 'images (2)/infra and labs/infra_and_labs (16).jpeg', 'mission_tone' => 'terra',
        'intro' => 'To provide students with knowledge of human behavior and develop their critical thinking, communication, and interpersonal skills.',
        'courses_label' => 'Course in Department',
        'courses' => ['B.Sc. Psychology'],
        'hod' => '', 'hod_initials' => '',
        'vision' => 'To be a center of excellence in psychology education, research, and practice by nurturing competent, ethical, and compassionate psychologists who promote mental health and contribute to the well-being of individuals and society.',
        'mission' => [
            'To provide high-quality education in psychology through innovative teaching and experiential learning.',
            'To promote scientific research that advances psychological knowledge and addresses societal needs.',
            'To develop ethical, skilled, and socially responsible psychology professionals.',
            'To foster critical thinking, empathy, and lifelong learning among students.',
            'To engage in community outreach, mental health awareness, and psychological services for the betterment of society.',
        ],
    ],
    [
        'slug' => 'computer-science', 'name' => 'Computer Science & Application', 'img' => 'images/Copy of 255A4774.JPG', 'mission_tone' => 'sage',
        'intro' => 'To provide students with fundamental knowledge of computer science an develop their technical, programming, problem-solving, and analytical skills.',
        'courses_label' => 'Courses in Department',
        'courses' => ['BSc CS', 'BCA', 'AI & ML', 'B.Sc. IT'],
        'hod' => 'Mrs. Sruthi S', 'hod_initials' => 'SS',
        'vision' => 'To be a center of excellence in Computer Science and Applications by providing quality education, fostering innovation and research, and developing skilled, ethical, and socially responsible professionals to meet the challenges of a dynamic global society.',
        'mission' => [
            'To provide quality, industry-oriented education in Computer Science and Applications, promote innovation, research, and entrepreneurship, develop technical, analytical, and problem-solving skills for lifelong learning, foster ethical values, leadership, and social responsibility, and strengthen collaboration with industry and academia for knowledge sharing and skill development.',
        ],
    ],
    [
        'slug' => 'business-administration', 'name' => 'Business Administration', 'img' => 'images/Copy of 255A4886.JPG', 'mission_tone' => 'ochre-soft',
        'intro' => 'To provide students with knowledge of business management and develop their leadership, communication, decision-making, and entrepreneurship skills.',
        'courses_label' => 'Courses in Department',
        'courses' => ['BBA CA', 'BBA Aviation & Management', 'BBA Logistics & Supply Chain Management'],
        'hod' => 'Mr. Sanubhavadev R', 'hod_initials' => 'SR',
        'vision' => 'To be a globally recognized center of excellence in Business Administration education, fostering innovation, leadership, ethical values, and research to prepare students for dynamic global business environments.',
        'mission' => [
            'To provide quality education in Business Administration in accordance with the academic framework of Bharathiar University.',
            'To provide high-quality education in Business Administration through modern teaching methodologies and advanced curriculum.',
            'To prepare students for successful careers in global business, industry, academia, and entrepreneurship.',
            'To build strong partnerships with industry, businesses, and global institutions for practical exposure and career opportunities.',
            'To encourage lifelong learning, adaptability, and professional growth in a rapidly changing global economy.',
        ],
    ],
    [
        'slug' => 'commerce', 'name' => 'Commerce', 'img' => 'images (2)/Classroom/classrooms (5).jpeg', 'mission_tone' => 'ochre-soft',
        'intro' => 'To provide students with knowledge of commerce, accounting, finance, and business practices while developing their analytical and professional skills.',
        'courses_label' => 'Course in Department',
        'courses' => ['B.Com CA'],
        'hod' => 'Mrs. Sheeja V V', 'hod_initials' => 'SS',
        'vision' => 'To be a centre of excellence in commerce education by developing competent, ethical, innovative, and socially responsible professionals who can contribute to business, entrepreneurship, and sustainable economic development.',
        'mission' => [
            'To provide quality in commerce education through effective teaching and learning in accordance with the academic framework of Bharathiar University.',
            'To develop students’ analytical, managerial, and entrepreneurial skills.',
            'To promote research, innovation, and lifelong learning.',
            'To instill ethical values, leadership qualities, and social responsibility among students.',
            'To strengthen industry–institution collaboration through internships, seminars, workshops, and extension activities.',
            'To prepare students for higher education, employment, and entrepreneurial ventures in a global business environment.',
        ],
    ],
];

// Faculty groups: [group name, [[name, role, initials, isHead], ...]]
$faculty = [
    ['Microbiology', [
        ['Dr. Dhanya V', 'Assistant Professor, Head of the Department, IQAC Co-ordinator', 'DV', true],
        ['Dr. Jenifer Jincy T', 'Assistant Professor', 'JJ', false],
        ['Ms. Preethu P', 'Assistant Professor', 'PP', false],
        ['Mr. Gokul', 'Assistant Professor', 'G', false],
    ]],
    ['Psychology', [
        ['Ms. Santhiya M', 'Assistant Professor', 'SM', false],
    ]],
    ['Computer Science & Applications', [
        ['Mrs. Sruthi S', 'Assistant Professor, Head of the Department', 'SS', true],
        ['Mr. Puratchiveeran K', 'Assistant Professor', 'PK', false],
        ['Mrs. Sneha K', 'Assistant Professor', 'SS', false],
        ['Ms. Sriya S', 'Assistant Professor', 'SS', false],
        ['Ms. Nandini M', 'Assistant Professor', 'NM', false],
        ['Ms. Vidhya G', 'Assistant Professor', 'VG', false],
        ['Ms. Aparna B', 'Assistant Professor', 'AB', false],
    ]],
    ['Business Administration', [
        ['Mr. Sanubhavadev R', 'Assistant Professor, Head of the Department', 'SR', true],
        ['Ms. Anjana Menon U', 'Assistant Professor', 'AM', false],
        ['Mrs. Adithya Nair', 'Assistant Professor', 'SA', false],
        ['Mr. Nikhi Raj T', 'Assistant Professor', 'NR', false],
        ['Ms. Sandra S', 'Assistant Professor', 'SS', false],
    ]],
    ['Commerce and Computer Application', [
        ['Mrs. Sheeja V V', 'Assistant Professor, Head of the Department', 'SS', true],
        ['Mrs. Lathi T M', 'Assistant Professor', 'SL', false],
    ]],
    ['Mathematics', [
        ['Mr. A. Ranganathan', 'Assistant Professor, Head of the Department', 'AR', true],
        ['Mr. Gnana Sekharan M', 'Assistant Professor', 'GS', false],
    ]],
    ['Language', [
        ['Dr. V. Sasikumar', 'Assistant Professor, Head of the Department', 'VS', true],
        ['Mrs. Catherine Priyanga A (English)', 'Assistant Professor', 'SC', false],
        ['Mr. Gopiram R (English)', 'Assistant Professor', 'GR', false],
        ['Mrs. Meera M Nair (English)', 'Assistant Professor', 'SM', false],
        ['Mrs. Gopika P S (Malayalam)', 'Assistant Professor', 'SG', false],
        ['Mrs. Prajitha K (Malayalam)', 'Assistant Professor', 'SP', false],
        ['Ms. Saleema P S (Hindi)', 'Assistant Professor', 'SP', false],
    ]],
    ['Physical Director · System Admin', [
        ['Mr. Praveen Kumar J', 'Physical Director', 'PK', false],
        ['Mr. Pradeep Kumar', 'System Admin', 'PK', false],
    ]],
];

$courseOfferings = [
        [
        'badge' => 'Degree Studies',
        'title' => 'Undergraduate',
        'desc'  => '10 Programmes across 5 departments',
        'action'=> 'Explore UG',
        'href'  => url('courses.php'),
    ],
    [
        'badge' => "Master's Degree",
        'title' => 'Postgraduate',
        'desc'  => 'Advanced research & specialization',
        'action'=> 'Explore PG',
        'href'  => url('courses.php#pg'),
    ],
    [
        'badge' => 'Skill Enrichment',
        'title' => 'Add-on Courses',
        'desc'  => 'Industry-aligned practical modules',
        'action'=> 'View details',
        'href'  => '',
    ],
    [
        'badge' => 'Career Training',
        'title' => 'Certificate Courses',
        'desc'  => 'Professional career certifications',
        'action'=> 'View details',
        'href'  => '',
    ],
];
?>

<!-- ============ Hero ============ -->
<section class="acad-hero">
    <div class="acad-hero__text">
        <?= chip('Excellence in learning', 'glass') ?>
        <h1 class="acad-hero__title">Academics</h1>
        <p class="lead">At SAN International College of Arts and Science, we are committed to providing quality education that combines academic excellence with practical learning. Our academic programs are designed to develop knowledge, skills, creativity, critical thinking, and professional competence among students.</p>
    </div>
    <div class="acad-hero__visual reveal">
        <img class="acad-hero__img" src="<?= fig('images/Copy of 255A0853.JPG') ?>" alt="SANICAS academic learning and lectures" fetchpriority="high">
    </div>
</section>

<!-- ============ About our college ============ -->
<section class="acad-about">
    <div class="wrap">
        <div class="acad-head">
            <?= chip('SAN Institution', 'terra') ?>
            <h2 class="h2">About Our College</h2>
        </div>
        <div class="acad-statement-wrap reveal">
            <p class="acad-statement__lead">SAN Institution is committed to providing a student-centered, <em class="serif">world-class education</em> that blends academic excellence with immersive practical exposure. Guided by experienced faculty, innovative curricula, and holistic development initiatives, we foster a vibrant academic culture that promotes critical thinking, entrepreneurship, and global awareness — empowering students with the knowledge, skills, and confidence to thrive and lead in a rapidly evolving world.</p>
        </div>
    </div>
</section>

<!-- ============ Courses ============ -->
<section class="acad-courses">
    <div class="wrap">
        <div class="acad-head">
            <?= chip('Academics', 'sage') ?>
            <h2 class="h2">Courses</h2>
        </div>
        <div class="acad-offerings-strip reveal">
            <?php foreach ($courseOfferings as $item): ?>
                <?php $isLink = !empty($item['href']); ?>
                <<?= $isLink ? 'a' : 'div' ?> class="acad-offering-col<?= $isLink ? ' acad-offering-col--link' : '' ?>"<?= $isLink ? ' href="' . e($item['href']) . '"' : '' ?>>
                    <div class="acad-offering-col__content">
                        <span class="acad-offering-col__badge"><?= e($item['badge']) ?></span>
                        <h3 class="acad-offering-col__title"><?= e($item['title']) ?></h3>
                        <p class="acad-offering-col__desc"><?= e($item['desc']) ?></p>
                    </div>
                    <div class="acad-offering-col__action">
                        <span class="acad-offering-col__action-label"><?= e($item['action']) ?></span>
                        <span class="acad-offering-col__arrow"><?= icon($isLink ? 'arrow-up-right' : 'arrow-right') ?></span>
                    </div>
                </<?= $isLink ? 'a' : 'div' ?>>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Departments ============ -->
<section class="acad-depts" id="departments">
    <div class="wrap">
        <div class="acad-head">
            <?= chip('Academics', 'ochre') ?>
            <h2 class="h2">Departments</h2>
        </div>
        <nav class="filter-tabs acad-depts__tabs" aria-label="Departments" data-acad-tabs>
            <?php foreach ($departments as $i => $d): ?>
                <a class="filter-tab<?= $i === 0 ? ' is-active' : '' ?>" href="#dept-<?= e($d['slug']) ?>"><?= e($d['name']) ?><span class="count"><?= sprintf('%02d', $i + 1) ?></span></a>
            <?php endforeach; ?>
        </nav>

        <div class="dept-list">
            <?php foreach ($departments as $i => $d): ?>
                <article class="dept-panel reveal" id="dept-<?= e($d['slug']) ?>">
                    <div class="dept-panel__visual">
                        <img src="<?= fig($d['img']) ?>" alt="<?= e($d['name']) ?> students at SANICAS" loading="lazy">
                        <div class="dept-panel__caption">
                            <p class="overline">Department <?= sprintf('%02d', $i + 1) ?></p>
                            <h3 class="h3"><?= e($d['name']) ?></h3>
                        </div>
                    </div>
                    <div class="dept-panel__details">
                        <p class="lead"><?= e($d['intro']) ?></p>
                        <div class="dept-panel__meta">
                            <div class="meta-box">
                                <p class="overline muted"><?= e($d['courses_label']) ?></p>
                                <div class="chip-row chip-row--tight">
                                    <?php foreach ($d['courses'] as $c): ?><?= chip($c, 'ochre') ?><?php endforeach; ?>
                                </div>
                            </div>
                            <div class="meta-box meta-box--hod">
                                <span class="initials<?= $d['hod'] ? '' : ' initials--empty' ?>"><?= $d['hod'] ? e($d['hod_initials']) : '—' ?></span>
                                <div>
                                    <p class="overline muted">Head of the Department</p>
                                    <p class="meta-box__name"><?= $d['hod'] ? e($d['hod']) : '—' ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="dept-panel__vm">
                            <div class="vm-card vm-card--vision">
                                <p class="overline">Vision</p>
                                <p class="body-s"><?= e($d['vision']) ?></p>
                            </div>
                            <div class="vm-card vm-card--<?= e($d['mission_tone']) ?>">
                                <p class="overline">Mission</p>
                                <ul class="check-list">
                                    <?php foreach ($d['mission'] as $m): ?>
                                        <li><span class="check-disc"><?= icon('check') ?></span><span><?= e($m) ?></span></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Faculty ============ -->
<section class="acad-faculty" id="faculty">
    <div class="wrap">
        <div class="acad-head">
            <?= chip('All faculty members & departments', 'glass') ?>
            <h2 class="h2">Faculty Details</h2>
        </div>

        <div class="lead-grid">
            <div class="lead-card lead-card--ochre reveal">
                <span class="initials initials--lg">ST</span>
                <div>
                    <p class="overline">Principal</p>
                    <p class="h3">Dr. S. Thenral</p>
                    
                </div>
            </div>
            <div class="lead-card lead-card--cream reveal">
                <span class="initials initials--lg">KS</span>
                <div>
                    <p class="overline">Vice Principal</p>
                    <p class="h3">Dr. Kavipriya S</p>
                    
                </div>
            </div>
        </div>

        <?php foreach ($faculty as [$group, $members]): ?>
            <div class="faculty-group">
                <div class="faculty-group__head">
                    <h3 class="h4"><?= e($group) ?></h3>
                </div>
                <div class="member-grid">
                    <?php foreach ($members as [$name, $role, $ini, $head]): ?>
                        <div class="member<?= $head ? ' member--head' : '' ?>">
                            <span class="initials<?= $head ? ' initials--ochre' : '' ?>"><?= e($ini) ?></span>
                            <div>
                                <p class="member__name"><?= e($name) ?></p>
                                <p class="caption"><?= e($role) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script>
/* Highlight the department tab for the panel in view. */
(function () {
    var tabs = document.querySelectorAll('[data-acad-tabs] a');
    if (!tabs.length || !('IntersectionObserver' in window)) return;
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
            if (!en.isIntersecting) return;
            tabs.forEach(function (t) { t.classList.toggle('is-active', t.getAttribute('href') === '#' + en.target.id); });
        });
    }, { rootMargin: '-45% 0px -50% 0px' });
    document.querySelectorAll('.dept-panel').forEach(function (p) { io.observe(p); });
})();
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
