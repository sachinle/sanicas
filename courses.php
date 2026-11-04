<?php
$page    = 'courses';
$title   = 'Courses Offered';
$heroImage = 'images/Copy of 255A5098.JPG';
require __DIR__ . '/includes/header.php';

// [slug, name, dept label, card tone, image, programmes]
$departments = [
    ['computer-science', 'Computer Science', 'Department of Computer Science', 'ochre', 'images/Copy of 255A4774.JPG', [
        'BCA With Artificial Intelligence and Machine Learning', 'BCA With Cloud Computing', 'BCA With VR Developer', 'BCA With Game Developer',
        'B.Sc. Computer Science with Artificial Intelligence and Machine Learning', 'B.Sc. Computer Science with VR Developer',
        'B.Sc. Computer Science with Robotics and Automation Process', 'B.Sc. Computer Science with Data Analytics',
        'B.Sc. Computer Science with Game Developer', 'B.Sc. Artificial Intelligence and Machine Learning',
        'B.Sc. Artificial Intelligence and Machine Learning with Data Analytics',
        'B.Sc. Information Technology',
    ]],
    ['management', 'Management', 'Department of Management Stream', 'ink', 'images/Copy of 255A4868.JPG', [
        'BBA CA With Business Analytics', 'BBA CA With Digital Marketing',
        'BBA CA With Hospitality Management and Travel and Tourism Management', 'BBA CA With Health Care Management and Hospital Administration',
        'BBA Aviation Management', 'BBA Aviation and Logistics and Supply Chain Management',
        'BBA Logistics and Supply Chain Management and Aviation and Airport Management (Certified Management Accountant - USA)',
    ]],
    ['commerce', 'Commerce', 'Department of Commerce Stream', 'terra', 'images (2)/Classroom/classrooms (5).jpeg', [
        'B.Com CA With CMA USA (Certified Management Accountant - USA)', 'B.Com CA With Aviation and Logistics', 'B.Com CA With Business Analytics',
        'B.Com CA With Hospitality Management and Travel and Tourism Management', 'B.Com CA With Health Care Management and Hospital Administration',
        'B.Com Computer Application', 'B.Com Professional Accounting (B.Com PA)',
        'B.Com PA With ACCA (Association of Chartered Certified Accountants)', 'B.Com PA With CMA USA (Certified Management Accountant - USA)',
    ]],
    ['media', 'Media', 'Department of Media Stream', 'sage', 'images/P1236996 (1).JPG', ['B.Sc. Visual Communication']],
    ['life-science', 'Life Science', 'Department of Life Science', 'ochre-soft', 'images/Copy of 255A5262.JPG', [
        'B.Sc. Microbiology', 'B.Sc. Microbiology with Molecular Techniques for Clinical Application',
        'B.Sc. Microbiology with Cell culture and Virology Techniques', 'B.Sc. Microbiology with Clinical and Diagnostic Virology',
        'B.Sc. Psychology', 'B.Sc. Psychology with Counselling and Psychotherapy',
        'B.Sc. Psychology with Neuro Psychology', 'B.Sc. Psychology with Organisational Psychology',
    ]],
];
$pg = [
    ['pg-life-science', 'M.Sc. Microbiology', 'Department of Life Science', 'ochre', 'images/Copy of 255A5308.JPG'],
];
$ugTotal = array_sum(array_map(function ($d) { return count($d[5]); }, $departments));
?>

<!-- ============ Hero ============ -->
<section class="courses-hero bg-ink">
    <div class="courses-hero__text">
        <?= chip('Discover our', 'glass') ?>
        <h1 class="display accent-ochre">Courses <em class="serif">offered</em></h1>
        <p class="lead">SANICAS offers diverse, industry-focused undergraduate programs across Computer Science, Management, Commerce, Media, and Life Sciences (Microbiology &amp; Psychology), designed to equip students with practical skills and global certifications for career success.</p>
        <div class="count-tiles">
            <div class="count-tile count-tile--ochre"><strong><?= sprintf('%02d', count($departments)) ?></strong><span>UG departments</span></div>
            <div class="count-tile count-tile--cream"><strong><?= $ugTotal ?></strong><span>UG programme options</span></div>
            <div class="count-tile count-tile--terra"><strong><?= sprintf('%02d', count($pg)) ?></strong><span>PG programmes</span></div>
        </div>
    </div>
    <div class="courses-collage">
        <img class="courses-collage__single" src="<?= fig('images/Copy of 255A5098.JPG') ?>" alt="SANICAS courses and academic programmes" fetchpriority="high">
        <div class="courses-collage__sticker">UG + PG<br>programmes</div>
    </div>
</section>

<!-- ============ Department tabs ============ -->
<div class="dept-tabs-wrap">
    <div class="filter-tabs dept-tabs" role="tablist" data-dept-tabs>
        <button class="filter-tab is-active" role="tab" aria-selected="true" data-dept="all">All departments <span class="count"><?= sprintf('%02d', count($departments) + count($pg)) ?></span></button>
        <?php foreach ($departments as [$slug, $name, , , , $progs]): ?>
            <button class="filter-tab" role="tab" aria-selected="false" data-dept="<?= $slug ?>"><?= e($name) ?> <span class="count"><?= sprintf('%02d', count($progs)) ?></span></button>
        <?php endforeach; ?>
        <button class="filter-tab" role="tab" aria-selected="false" data-dept="pg">Postgraduate <span class="count"><?= sprintf('%02d', count($pg)) ?></span></button>
    </div>
</div>

<!-- ============ Undergraduate ============ -->
<section class="section ug" data-dept-section>
    <div class="wrap">
        <div class="ug__head">
            <?= chip('Undergraduate programs', 'ochre') ?>
            <h2 class="h2 accent-terra"><?= count($departments) === 6 ? 'Six' : count($departments) ?> departments, <em class="serif"><?= $ugTotal ?> pathways</em></h2>
        </div>

        <?php foreach ($departments as $i => [$slug, $name, $label, $tone, $img, $progs]): 
            $dark = $tone === 'ink';
        ?>
            <article class="dept-block reveal" id="<?= $slug ?>" data-dept-item="<?= $slug ?>">
                <!-- Cinematic Department Header Banner -->
                <div class="dept-banner dept-banner--<?= $tone ?>">
                    <img class="dept-banner__bg" src="<?= fig($img) ?>" alt="<?= e($name) ?>" loading="lazy">
                    <div class="dept-banner__overlay"></div>
                    <div class="dept-banner__content">
                        <div class="chip-row">
                            <?= chip('Undergraduate', 'glass') ?>
                            <?= chip(count($progs) . ' Programme' . (count($progs) > 1 ? 's' : ''), 'ochre') ?>
                        </div>
                        <h3 class="dept-banner__title"><?= e($name) ?></h3>
                        <p class="dept-banner__subtitle"><?= e($label) ?></p>
                    </div>
                </div>

                <!-- Programmes Grid -->
                <div class="dept-body">
                    <?php if ($slug === 'media'): ?>
                        <div class="media-deck">
                            <div class="media-deck__main">
                                <div class="media-deck__badge-row">
                                    <span class="media-deck__badge media-deck__badge--ochre">Flagship Degree</span>
                                    <span class="media-deck__badge">3 Years Full-Time</span>
                                </div>
                                <h4 class="media-deck__title">B.Sc. Visual Communication</h4>
                                <p class="media-deck__desc">A comprehensive, studio-driven creative programme designed to train the next generation of visual storytellers, digital artists, cinematographers, and multimedia innovators.</p>
                                <div class="media-deck__careers">
                                    <span class="media-deck__career-label">Career Pathways:</span>
                                    <span class="media-deck__career-tag">Cinematographer</span>
                                    <span class="media-deck__career-tag">Art Director</span>
                                    <span class="media-deck__career-tag">Video Editor</span>
                                    <span class="media-deck__career-tag">Graphic Designer</span>
                                    <span class="media-deck__career-tag">UI/UX Designer</span>
                                    <span class="media-deck__career-tag">Media Producer</span>
                                </div>
                            </div>
                            <div class="media-deck__modules">
                                <p class="media-deck__modules-label">Core Specialisations &amp; Studio Modules</p>
                                <div class="media-deck__modules-grid">
                                    <div class="media-module-card">
                                        <span class="media-module-card__icon"><?= icon('check') ?></span>
                                        <div>
                                            <strong>Digital Filmmaking &amp; Editing</strong>
                                            <p>Cinematography, scripting, non-linear editing &amp; color grading</p>
                                        </div>
                                    </div>
                                    <div class="media-module-card">
                                        <span class="media-module-card__icon"><?= icon('check') ?></span>
                                        <div>
                                            <strong>Photography &amp; Visual Arts</strong>
                                            <p>Studio lighting, portraiture, commercial &amp; photojournalism</p>
                                        </div>
                                    </div>
                                    <div class="media-module-card">
                                        <span class="media-module-card__icon"><?= icon('check') ?></span>
                                        <div>
                                            <strong>Graphic Design &amp; Advertising</strong>
                                            <p>Brand identity, typography, advertising campaigns &amp; packaging</p>
                                        </div>
                                    </div>
                                    <div class="media-module-card">
                                        <span class="media-module-card__icon"><?= icon('check') ?></span>
                                        <div>
                                            <strong>2D / 3D Animation &amp; VFX</strong>
                                            <p>Motion graphics, character animation, 3D modeling &amp; effects</p>
                                        </div>
                                    </div>
                                    <div class="media-module-card">
                                        <span class="media-module-card__icon"><?= icon('check') ?></span>
                                        <div>
                                            <strong>Television &amp; Audio Production</strong>
                                            <p>Multi-camera studio, sound engineering, podcasting &amp; broadcast</p>
                                        </div>
                                    </div>
                                    <div class="media-module-card">
                                        <span class="media-module-card__icon"><?= icon('check') ?></span>
                                        <div>
                                            <strong>UI / UX &amp; Interactive Media</strong>
                                            <p>Digital interface design, user research, wireframing &amp; web media</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="course-deck">
                            <?php foreach ($progs as $n => $p): ?>
                                <div class="course-card-tile">
                                    <div class="course-card-tile__top">
                                        <span class="course-card-tile__num"><?= sprintf('%02d', $n + 1) ?></span>
                                        <span class="course-card-tile__icon"><?= icon('arrow-up-right') ?></span>
                                    </div>
                                    <h4 class="course-card-tile__name"><?= e($p) ?></h4>
                                    <span class="course-card-tile__dept"><?= e($name) ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- ============ Postgraduate ============ -->
<section class="section bg-ink pg" id="postgraduate" data-dept-section>
    <div class="wrap">
        <div class="ug__head">
            <?= chip('Postgraduate programs', 'glass') ?>
            <h2 class="h2 accent-ochre">Advance with a <em class="serif">master’s degree</em></h2>
        </div>
        <div class="pg-cards">
            <?php foreach ($pg as [$slug, $name, $label, $tone, $img]): ?>
                <article class="pg-card pg-card--<?= $tone ?> reveal" id="<?= $slug ?>" data-dept-item="pg">
                    <img src="<?= fig($img) ?>" alt="<?= e($name) ?> students" loading="lazy">
                    <div class="pg-card__text">
                        <?= chip('PG', 'dark') ?>
                        <h3 class="h3"><?= e($name) ?></h3>
                        <p class="label"><?= e($label) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Downloads ============ -->
<section class="downloads">
    <div class="wrap">
        <div class="downloads-card reveal">
            <div class="downloads-card__text">
                <?= chip('Downloads', 'dark') ?>
                <h2 class="h2">Brochure &amp; <em class="serif">application form</em></h2>
                
            </div>
            <div class="downloads-card__actions">
                <?= btn('Brochure', asset('docs/sanicas-brochure-2026.pdf'), 'dark', 'target="_blank" rel="noopener" download') ?>
                <?= btn('Application Form', asset('docs/san-application-form-2026.pdf'), 'light', 'target="_blank" rel="noopener" download') ?>
                <?= btn('Contact us', url('contact.php'), 'light') ?>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
