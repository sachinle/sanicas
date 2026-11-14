<?php
$page  = 'facilities';
$title = 'Campus Facilities';
$description = 'Campus facilities at SAN International College of Arts and Science — classrooms, library, laboratories, sports, hostel, transport, cafeteria and a green campus.';
$heroImage = 'images (2)/infra and labs/infra_and_labs (36).jpeg';
require __DIR__ . '/includes/header.php';

/** Facilities icon (exported from the Figma design). */
function fac_icon($name)
{
    return '<img src="' . fig('fac/' . $name . '.svg') . '" alt="" width="22" height="22">';
}

/** Grey photo placeholder used where the design is still waiting on a photograph. */
function fac_ph($label, $extraClass = '', $icon = 'photo-ph')
{
    return '<div class="fac-ph ' . e($extraClass) . '" role="img" aria-label="' . e($label) . '">'
        . '<span class="fac-ph__ico">' . fac_icon($icon) . '</span>'
        . '<span class="fac-ph__text">[Photo — ' . e($label) . ']</span></div>';
}

/** Small eyebrow pill with a square dot. Tones: ochre, terra, sage, dark, white. */
function eyebrow($label, $tone = 'ochre')
{
    return '<span class="eyebrow eyebrow--' . e($tone) . '"><span class="eyebrow__dot"></span>' . e($label) . '</span>';
}

$tabs = [
    ['Campus Blocks', 'blocks'], ['Classrooms', 'classrooms'], ['Library', 'library'], ['Laboratories', 'labs'],
    ['Sports & Wellness', 'sports'], ['Student Services', 'services'], ['Green Campus', 'green-campus'],
];

// [name, text, tone, icon]
$blocks = [
    ['Poornammal Block', 'An integral part of the academic environment, with dedicated spaces for teaching and learning.', 'ochre', 'block-1'],
    ['Saroja Durairaju Block', 'Contributes to the academic environment that promotes academic excellence across departments.', 'ink', 'block-2'],
    ['Administration Block', 'Facilitates the smooth functioning of college administration and student services.', 'sage', 'block-3'],
];

$lms = [
    ['Learning materials', 'Access anytime, in one place', 'lms-1'],
    ['Academic resources', 'Shared across classes', 'lms-2'],
    ['Assignments', 'Submit & manage online', 'lms-3'],
    ['Progress tracking', 'Monitor learning outcomes', 'lms-4'],
];

$libraryStats = [['4000', '+', 'Books'], ['80', '', 'Periodicals'], ['120', '', 'Seats'], ['Wi-Fi', '', 'Enabled']];
$libraryTopics = ['Life Sciences', 'Computer Science', 'Business & Management', 'Languages', 'Mathematics', 'National Dailies'];

// Sporting achievements
$achievements = [
    ['Badminton Singles Champion', 'R. Shibu (II Year – BBA Logistics)', 'CM Trophy', '2026'],
    ["C' Zone Football Tournament (IV Place)", 'Football Team', "Bharathiar University Inter-College 'C' Zone Football Tournament", '2026'],
];
?>

<!-- ============ Hero ============ -->
<section class="fac-hero">
    <img class="fac-hero__bg" src="<?= fig('images (2)/infra and labs/infra_and_labs (36).jpeg') ?>" alt="SANICAS campus circular main building" fetchpriority="high">
    <div class="fac-hero__row">
        <div class="fac-hero__text">
            <?= eyebrow('Affiliated to Bharathiar University, Coimbatore', 'dark') ?>
            <h1 class="fac-hero__title">Campus <em class="serif">Facilities</em></h1>
            <p class="fac-hero__lead">Modern classrooms, well-equipped laboratories, a fully automated library and student services designed for learning, well-being and everyday comfort.</p>
        </div>
        <div class="fac-glance">
            <p class="fac-glance__label">At a glance</p>
            <div class="fac-glance__grid">
                <div class="fac-glance__stat"><strong>4000<em class="serif">+</em></strong><span>Books in the library</span></div>
                <div class="fac-glance__stat"><strong>80</strong><span>Periodicals &amp; subscribed e-resources</span></div>
                <div class="fac-glance__stat"><strong>120</strong><span>Reader seating capacity</span></div>
                <div class="fac-glance__stat"><strong>03</strong><span>Computer laboratories</span></div>
                <div class="fac-glance__feature">
                    <span class="fac-ico fac-ico--ink fac-ico--sm"><?= fac_icon('laptop') ?></span>
                    <div><strong>Free laptop for every student</strong><span>Wi-Fi enabled campus</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ On this page ============ -->
<nav class="fac-tabs" aria-label="On this page" data-scrollspy>
    <div class="fac-tabs__row">
        <?php foreach ($tabs as $i => [$label, $id]): ?>
            <a class="fac-tab<?= $i === 0 ? ' is-active' : '' ?>" href="#<?= $id ?>"><?= e($label) ?><span class="fac-tab__n"><?= sprintf('%02d', $i + 1) ?></span></a>
        <?php endforeach; ?>
    </div>
</nav>

<!-- ============ Campus blocks ============ -->
<section class="fac-section fac-section--cream" id="blocks">
    <div class="wrap">
        <div class="fac-head">
            <div class="fac-head__title">
                <?= eyebrow('Infrastructure', 'terra') ?>
                <h2 class="fac-h2">Campus Building Blocks</h2>
            </div>
            <p class="fac-head__text">Well-organised campus buildings provide dedicated spaces for academic activities, administrative functions and institutional operations — creating an organised and supportive campus environment.</p>
        </div>
        <div class="fac-grid-3">
            <?php foreach ($blocks as $i => [$name, $text, $tone, $ico]): ?>
                <article class="fcard fcard--<?= $tone ?> reveal">
                    <span class="fcard__idx"><?= sprintf('%02d', $i + 1) ?></span>
                    <span class="fac-ico fac-ico--<?= $tone === 'ochre' ? 'ink' : ($tone === 'ink' ? 'ochre' : 'white') ?>"><?= fac_icon($ico) ?></span>
                    <h3 class="fcard__title"><?= e($name) ?></h3>
                    <p class="fcard__text"><?= e($text) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Classrooms ============ -->
<section class="fac-section fac-section--white fac-section--round" id="classrooms">
    <div class="wrap">
        <div class="fac-head">
            <div class="fac-head__title">
                <?= eyebrow('Learning Spaces', 'ochre') ?>
                <h2 class="fac-h2">Classrooms &amp; Digital Learning</h2>
            </div>
            <p class="fac-head__text">Technology-enhanced, interactive spaces that simplify complex concepts and encourage every student to participate.</p>
        </div>

        <div class="feature reveal">
            <div class="feature__media"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (22).jpeg') ?>" alt="Tiered theatre-model classroom with students" loading="lazy"></div>
            <div class="feature__body">
                <span class="feature__idx">01</span>
                <h3 class="fac-h3">Theatre-Model Classrooms</h3>
                <p class="fac-p">Theatre-model classrooms create an engaging and interactive learning environment, designed to support effective teaching, better visibility and active student participation.</p>
                <ul class="ck-list">
                    <?php foreach (['Tiered seating for clear visibility', 'Interactive, engaging teaching', 'Active student participation'] as $li): ?>
                        <li><span class="ck"><?= fac_icon('check') ?></span><?= e($li) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="feature feature--flip reveal">
            <div class="feature__media"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (14).jpeg') ?>" alt="ICT-enabled classroom at SANICAS" loading="lazy"></div>
            <div class="feature__body">
                <span class="feature__idx">02</span>
                <h3 class="fac-h3">ICT-Enabled Classrooms</h3>
                <p class="fac-p">ICT-enabled classrooms integrate digital tools and multimedia resources to simplify complex concepts, encourage student participation and enhance understanding — a modern, student-friendly environment for effective teaching.</p>
                <ul class="ck-list">
                    <?php foreach (['Digital tools & multimedia resources', 'Interactive teaching methods', 'Student-friendly learning environment'] as $li): ?>
                        <li><span class="ck"><?= fac_icon('check') ?></span><?= e($li) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="lms reveal">
            <div class="lms__text">
                <?= eyebrow('03 · Digital platform', 'dark') ?>
                <h3 class="fac-h3">Learning Management System <em class="serif">— ERP</em></h3>
                <p class="fac-p">An ERP-based Learning Management System supports and enhances the digital learning experience of students and faculty — streamlining academic activities, improving communication and making teaching and learning more efficient and accessible.</p>
            </div>
            <div class="lms__tiles">
                <?php foreach ($lms as [$t, $s, $ico]): ?>
                    <div class="lms-tile">
                        <span class="fac-ico fac-ico--ochre fac-ico--md"><?= fac_icon($ico) ?></span>
                        <strong><?= e($t) ?></strong>
                        <span><?= e($s) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============ Library ============ -->
<section class="fac-section fac-section--ink" id="library">
    <div class="wrap library">
        <div class="library__media reveal">
            <img class="library__main" src="<?= fig('images/Copy of 255A4622.JPG') ?>" alt="Student selecting a book from the library shelves" loading="lazy">
            <img class="library__sub" src="<?= fig('images/Copy of 255A0873.JPG') ?>" alt="Students reading together" loading="lazy">
        </div>
        <div class="library__text">
            <?= eyebrow('Library', 'dark') ?>
            <h2 class="fac-h2">About the <em class="serif">Library</em></h2>
            <p class="library__lead">The library is well stocked with over 4000 books, 80 periodicals and various subscribed e-resources, with a seating capacity of 120 readers.</p>
            <div class="library__stats">
                <?php foreach ($libraryStats as [$n, $suffix, $label]): ?>
                    <div class="lib-stat"><strong><?= e($n) ?><?php if ($suffix): ?><em class="serif"><?= e($suffix) ?></em><?php endif; ?></strong><span><?= e($label) ?></span></div>
                <?php endforeach; ?>
            </div>
            <p class="fac-p">Latest publications in Life Sciences, Computer Science, Business and Management, Languages and Mathematics are continuously added to equip students with a wide range of academic materials. All prominent national dailies are subscribed. The library is fully automated and a full-fledged online service is provided to its users.</p>
            <ul class="dark-chips">
                <?php foreach ($libraryTopics as $t): ?><li><?= e($t) ?></li><?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<!-- ============ Labs ============ -->
<section class="fac-section fac-section--cream" id="labs">
    <div class="wrap">
        <div class="fac-head">
            <div class="fac-head__title">
                <?= eyebrow('Laboratories', 'sage') ?>
                <h2 class="fac-h2">Labs &amp; IT Infrastructure</h2>
            </div>
            <p class="fac-head__text">Exceptional IT infrastructure and well-equipped laboratories that bridge theory with hands-on, practical learning.</p>
        </div>

        <div class="labwide reveal">
            <img class="labwide__img" src="<?= fig('images (2)/infra and labs/infra_and_labs (20).jpeg') ?>" alt="Students working in the SANICAS computer lab" loading="lazy">
            <div class="labwide__body">
                <span class="tag tag--dark">Computer Lab</span>
                <h3 class="fac-h3">State-of-the-art computing for every learner</h3>
                <p class="fac-p">The college has three computer laboratories with high-tech desktops, laptops and computing systems (Green Environment systems), connected through a Local Area Network (LAN). The labs are consistently enhanced to align with the latest advancements and evolving industrial expectations, with advanced computing facilities for a variety of peripherals.</p>
                <div class="labwide__stats">
                    <div><strong>03</strong><span>Computer labs</span></div>
                    <div><strong>LAN</strong><span>Connected systems</span></div>
                    <div><strong>Green</strong><span>Environment systems</span></div>
                </div>
            </div>
        </div>

        <div class="fac-grid-2">
            <article class="fcard fcard--ochre fcard--wide reveal">
                <span class="fac-ico fac-ico--ink"><?= fac_icon('laptop-dark') ?></span>
                <h3 class="fcard__title">Free Laptop Facility for All Students</h3>
                <p class="fcard__text">Enhances digital learning, supports academic activities, develops technological skills and promotes digital literacy — empowering students to access online resources, engage in research and become career-ready.</p>
            </article>
            <article class="fcard fcard--ink fcard--wide reveal">
                <span class="fac-ico fac-ico--ochre"><?= fac_icon('wifi') ?></span>
                <h3 class="fcard__title">Wi-Fi Enabled Campus</h3>
                <p class="fcard__text">Seamless communication and abundant access to technology-relevant information that enriches the computer-based design and analysis learning process.</p>
            </article>
        </div>

        <div class="fac-grid-2">
            <article class="lab-card reveal">
                <div class="lab-card__media"><img src="<?= fig('fac/lab-micro.png') ?>" alt="Students in lab coats working in the microbiology laboratory" loading="lazy"></div>
                <span class="lab-card__ico"><?= fac_icon('micro') ?></span>
                <div class="lab-card__body">
                    <h3 class="fac-h3">Microbiology Laboratories</h3>
                    <p class="fac-p">A practical learning environment to explore the world of microorganisms — hands-on training in microbial identification, culture techniques, microscopy and basic microbiological experiments, with a focus on scientific skills and laboratory safety.</p>
                    <ul class="tags-row">
                        <?php foreach (['Microbial identification', 'Culture techniques', 'Microscopy', 'Lab safety'] as $t): ?><li class="tag tag--sage"><?= e($t) ?></li><?php endforeach; ?>
                    </ul>
                </div>
            </article>
            <article class="lab-card reveal">
                <div class="lab-card__media"><img src="<?= fig('images (2)/infra and labs/class.jpeg') ?>" alt="Psychology laboratory session at SANICAS" loading="lazy"></div>
                <span class="lab-card__ico"><?= fac_icon('psych') ?></span>
                <div class="lab-card__body">
                    <h3 class="fac-h3">Psychology Lab</h3>
                    <p class="fac-p">Equipped with psychological assessment tools, testing materials and experimental apparatus, the lab helps students understand human behaviour, cognitive processes, personality, intelligence and individual differences — building skills in testing, observation, assessment and data interpretation.</p>
                    <ul class="tags-row">
                        <?php foreach (['Psychological testing', 'Observation', 'Assessment', 'Research skills'] as $t): ?><li class="tag tag--terra"><?= e($t) ?></li><?php endforeach; ?>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- ============ Sports & wellness ============ -->
<section class="fac-section fac-section--white fac-section--round" id="sports">
    <div class="wrap">
        <div class="fac-head">
            <div class="fac-head__title">
                <?= eyebrow('Sports & Wellness', 'ochre') ?>
                <h2 class="fac-h2">Sports &amp; Physical Education</h2>
            </div>
            <p class="fac-head__text">Sports and physical education promote physical fitness, mental well-being, teamwork and discipline — nurturing well-rounded individuals with a balanced approach to academics, sports and personal development.</p>
        </div>

        <div class="sports-grid">
            <figure class="sports-quote reveal">
                <span class="sports-quote__mark" aria-hidden="true">“</span>
                <blockquote>The more difficult the victory, the greater the <em class="serif">happiness</em> in winning.</blockquote>
                <figcaption>— Pelé</figcaption>
                <p class="fac-p">Through indoor and outdoor sports and competitions, students discover their talents, develop confidence and achieve excellence both on and off the field — fostering sportsmanship, leadership and a spirit of healthy competition.</p>
            </figure>
            <div class="sports-grid__tall"><img src="<?= fig('images (2)/sports/sports (1).jpeg') ?>" alt="Volleyball match at SANICAS" loading="lazy"></div>
            <div class="sports-grid__stack">
                <div class="sports-grid__item"><img src="<?= fig('images (2)/sports/sports (5).jpeg') ?>" alt="SANICAS football team" loading="lazy"></div>
                <div class="sports-grid__item"><img src="<?= fig('images (2)/sports/sports (3).jpeg') ?>" alt="Students playing football on campus turf" loading="lazy"></div>
            </div>
        </div>

        <div class="fac-subhead">
            <h3 class="fac-h3">Achievements</h3>
            <p class="fac-head__text">Sporting achievements of SANICAS students at university, district and state level events.</p>
        </div>
        <div class="ach-table-wrap">
            <table class="ach-table">
                <thead><tr><th>S.No</th><th>Achievement</th><th>Student / Team</th><th>Event</th><th>Year</th></tr></thead>
                <tbody>
                    <?php foreach ($achievements as $i => [$a, $s, $ev, $y]): ?>
                        <tr><td><?= $i + 1 ?></td><td><strong><?= e($a) ?></strong></td><td><?= e($s) ?></td><td><?= e($ev) ?></td><td><?= e($y) ?></td></tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="yoga reveal">
            <div class="yoga__media"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (2).jpeg') ?>" alt="Serene green surroundings at SANICAS" loading="lazy"></div>
            <div class="yoga__body">
                <?= eyebrow('Well-being', 'white') ?>
                <h3 class="fac-h3">Yoga &amp; Meditation Hall</h3>
                <p class="fac-p">A dedicated, peaceful space for students to practise yoga, meditation and breathing exercises — improving physical fitness, concentration, flexibility and mental relaxation while fostering mindfulness, emotional balance and positive well-being alongside academic excellence.</p>
                <ul class="tags-row">
                    <?php foreach (['Physical fitness', 'Concentration', 'Flexibility', 'Mental relaxation', 'Mindfulness'] as $t): ?><li class="tag tag--white"><?= e($t) ?></li><?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ Student services ============ -->
<section class="fac-section fac-section--cream" id="services">
    <div class="wrap">
        <div class="fac-head">
            <div class="fac-head__title">
                <?= eyebrow('Student Services', 'terra') ?>
                <h2 class="fac-h2">Living &amp; Commuting</h2>
            </div>
            <p class="fac-head__text">Comfortable, safe and convenient services that help students feel at home while they pursue their education.</p>
        </div>

        <div class="fac-grid-3">
            <article class="svc reveal">
                <div class="svc__media"><img src="<?= fig('images (2)/transport/transport (5).jpeg') ?>" alt="SANICAS college bus fleet" loading="lazy"></div>
                <span class="svc__ico svc__ico--ochre"><?= fac_icon('bus') ?></span>
                <h3 class="svc__title">Convenient Transport Facilities</h3>
                <p class="svc__text">Convenient and accessible transport for students and staff — a comfortable, hassle-free commute that supports punctuality, safety and convenience in daily travel.</p>
            </article>
            <article class="svc reveal">
                <div class="svc__media"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (10).jpeg') ?>" alt="SANICAS student hostel room" loading="lazy"></div>
                <span class="svc__ico svc__ico--terra"><?= fac_icon('hostel') ?></span>
                <h3 class="svc__title">Comfortable Hostel Facilities</h3>
                <p class="svc__text">Separate hostels for boys and girls offering a safe, secure and peaceful living environment. Hostel rules ensure the safety, discipline, comfort and well-being of all residents.</p>
            </article>
            <article class="svc reveal">
                <div class="svc__media"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (32).jpeg') ?>" alt="SANICAS campus cafeteria" loading="lazy"></div>
                <span class="svc__ico svc__ico--sage"><?= fac_icon('cafe') ?></span>
                <h3 class="svc__title">Campus Cafeteria</h3>
                <p class="svc__text">Fresh, hygienic and affordable meals throughout the day in a comfortable dining environment with a variety of food options.</p>
                <ul class="tags-row tags-row--sm">
                    <?php foreach (['Morning refreshments', 'Tea breaks', 'Lunch', 'Evening snacks', 'Dinner'] as $t): ?><li class="tag tag--cream"><?= e($t) ?></li><?php endforeach; ?>
                </ul>
            </article>
        </div>

        <div class="green reveal" id="green-campus">
            <div class="green__body">
                <?= eyebrow('Green Campus', 'dark') ?>
                <h2 class="fac-h2">Ornamental <em class="serif">Fish Pond</em></h2>
                <p class="fac-p">Situated in the front area of the college, the ornamental fish pond adds beauty and serenity to the campus. Featuring decorative fish and an attractive landscape, it creates a refreshing and welcoming atmosphere for students, staff and visitors — reflecting the institution’s appreciation for nature, greenery and a pleasant learning environment.</p>
                <ul class="dark-chips">
                    <li><?= fac_icon('fish') ?>Decorative fish</li>
                    <li><?= fac_icon('leaf') ?>Landscaped greenery</li>
                </ul>
            </div>
            <div class="green__media"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (31).jpeg') ?>" alt="Ornamental fish pond at SANICAS" loading="lazy"></div>
        </div>

        <div class="visit reveal">
            <div class="visit__text">
                <?= eyebrow('Visit us', 'ink') ?>
                <h2 class="visit__title">See the campus <em class="serif">for yourself.</em></h2>
                <p class="visit__name">SAN International College of Arts and Science</p>
            </div>
            <div class="visit__items">
                <a class="visit-item" href="<?= e($SITE['map_link']) ?>" target="_blank" rel="noopener">
                    <span class="visit-item__ico"><?= fac_icon('pin') ?></span>
                    <span><small>Address</small><strong>ACC Pirivu, Navakkarai, Coimbatore - 641 105</strong></span>
                </a>
                <a class="visit-item" href="<?= e($SITE['phone_href']) ?>">
                    <span class="visit-item__ico"><?= fac_icon('phone') ?></span>
                    <span><small>College Office</small><strong><?= e($SITE['phone']) ?></strong></span>
                </a>
                <a class="visit-item" href="<?= e($SITE['email_href']) ?>">
                    <span class="visit-item__ico"><?= fac_icon('mail') ?></span>
                    <span><small>Email</small><strong><?= e($SITE['email']) ?></strong></span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
