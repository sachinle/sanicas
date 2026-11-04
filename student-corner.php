<?php
$page  = 'student-corner';
$title = 'Student Corner';
$heroImage = 'student-hero.jpg';
require __DIR__ . '/includes/header.php';

$jump = ['NCC' => 'ncc', 'NSS' => 'nss', 'Youth Red Cross' => 'yrc', 'Sports' => 'sports', 'Yoga' => 'yoga', 'Clubs and Forums' => 'clubs'];
?>

<!-- ============ Hero ============ -->
<section class="hero student-hero">
    <div class="hero__bg"><img src="<?= fig('student-hero.jpg') ?>" alt="Students chatting on the campus steps" fetchpriority="high"></div>
    <?= chip('Student Corner', 'glass') ?>
    <h1 class="display accent-ochre">For our <em class="serif">Students</em></h1>
    <nav class="chip-row chip-row--center" aria-label="Jump to program">
        <?php foreach ($jump as $label => $id): ?>
            <a class="chip chip--glass chip--link" href="#<?= $id ?>"><span class="chip__dot"></span><?= e($label) ?></a>
        <?php endforeach; ?>
    </nav>
</section>

<!-- ============ Intro ============ -->
<section class="sc-intro">
    <div class="sc-intro__inner">
        <?= chip('Six ways to lead and serve', 'terra') ?>
        <h2 class="h2 accent-terra">Shaping leaders through <em class="serif">service and discipline</em></h2>
    </div>
</section>

<!-- ============ Programs bento ============ -->
<section class="sc-programs">
    <div class="wrap">
        <div class="bento-row bento-row--7-5">
            <div id="ncc" class="anchor"><?= image_card('NCC (National Cadet Corps)', 'The National Cadet Corps (NCC) is a prestigious program that instills discipline, leadership, and patriotism among students. As part of the NCC at SANICAS, students participate in various training camps, social service projects, and adventure activities, all designed to develop a sense of responsibility, teamwork, and service to the nation.', '01 · Discipline', fig('sc-ncc.jpg'), 'image-card--tall') ?></div>
            <div id="yrc" class="anchor"><?= image_card('Youth Red Cross', 'The Youth Red Cross (YRC) at SANICAS aims to develop a sense of humanitarian service and build selfless citizens.', '02 · Humanitarian', fig('sc-yrc.jpg'), 'image-card--tall') ?></div>
        </div>
        <div class="bento-row">
            <div id="sports" class="anchor"><?= image_card('Sports', 'We believe in nurturing both the mind and body. Our Sports Department offers a wide range of athletic activities.', '03 · Mind & body', fig('sc-sports.jpg')) ?></div>
            <div id="yoga" class="anchor"><?= image_card('Yoga', 'The Yoga program at SANICAS is designed to promote mental and physical well-being among students.', '04 · Well-being', fig('images (2)/sports/sports (4).jpeg')) ?></div>
            <div id="clubs" class="anchor"><?= image_card('Clubs and Forums', 'SANICAS is home to a variety of clubs for debate, arts, literature, and technology forum.', '05 · Community', fig('sc-clubs.jpg')) ?></div>
        </div>
        <div class="bento-row">
            <div id="nss" class="anchor"><?= image_card('NSS (National Service Scheme)', 'The National Service Scheme (NSS) at SANICAS is dedicated to fostering a spirit of social service among students. Through NSS, students actively engage in community development programs, awareness campaigns, and social welfare activities. From organizing blood donation drives to environmental conservation initiatives, NSS provides students with opportunities to contribute positively to society, instilling a sense of social responsibility and community consciousness.', '06 · Service', fig('sc-nss.jpg'), 'image-card--tall image-card--wide') ?></div>
        </div>
    </div>
</section>

<!-- ============ Quote ============ -->
<section class="sc-quote">
    <div class="wrap">
        <div class="statement-card reveal">
            <h2 class="h2">We believe in nurturing both the <em class="serif">mind and body.</em></h2>
            <p class="body">From NCC and NSS to yoga, sports, clubs and forums — every student finds a way to grow beyond the classroom at SANICAS.</p>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
