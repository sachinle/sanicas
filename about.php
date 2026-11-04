<?php
$page  = 'about';
$title = 'About SANICAS';
$heroImage = 'about-hero-1.jpg';
require __DIR__ . '/includes/header.php';

$highlights = [
    ['Lecture Series', 'ochre'], ['Workshops', 'terra'], ['Placement Training', 'sage'],
    ['Industrial Visits', 'ink'], ['Innovation Cell', 'ochre-soft'], ['Global Students', 'cream-2'],
];
$milestones = [
    ['1986', 'Founded by Tmt. T. Jayalakshmi, M.A.', 'ochre'],
    ['3+ decades', 'A rich legacy in advancing education', 'terra'],
    ['Erode & Coimbatore', 'Headquarters of the Trust', 'sage'],
    ['10', 'Esteemed institutions established by the Trust', 'ink'],
];
?>

<!-- ============ Hero ============ -->
<section class="page-hero-light about-hero">
    <div class="about-hero__text">
        <?= chip('Know us better', 'ochre') ?>
        <h1 class="display accent-terra">About <em class="serif">SANICAS</em></h1>
        <p class="lead muted">SAN International College of Arts and Science (SANICAS), a premier educational institution under the esteemed Sree Amman Trust, is committed to fostering academic excellence and holistic development.</p>
        <div class="chip-row">
            <?= chip('Affiliated · Bharathiar University', 'sage') ?>
            <?= chip('Approved · Govt. of Tamil Nadu', 'ochre') ?>
            <?= chip('Recognized · UGC', 'terra') ?>
        </div>
    </div>
    <div class="about-bento">
        <div class="about-bento__item about-bento__item--tall">
            <img src="<?= fig('about-hero-1.jpg') ?>" alt="SANICAS campus building" fetchpriority="high">
           
        </div>
        <div class="about-bento__item about-bento__item--top">
            <img src="<?= fig('about-hero-2.jpg') ?>" alt="SANICAS campus infrastructure" loading="lazy">
            <div class="about-bento__corner-chip">
               
            </div>
        </div>
        <div class="about-bento__item about-bento__item--bottom">
            <img src="<?= fig('images (2)/infra and labs/infra_and_labs (23).jpeg') ?>" alt="SANICAS Campus Overview" loading="lazy">
            <div class="about-bento__corner-chip">
                
            </div>
        </div>
        <div class="about-bento__badge">
            <div class="about-bento__badge-icon">
                <?= icon('award') ?>
            </div>
            <div class="about-bento__badge-text">
                <div class="about-bento__badge-heading">
                    <span class="about-bento__badge-label">ESTD</span>
                    <strong class="about-bento__badge-year">1986</strong>
                </div>
                <span class="about-bento__badge-sub">Sree Amman Trust Legacy</span>
            </div>
        </div>
    </div>
</section>

<!-- ============ About us ============ -->
<section class="section about-us">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Why choose us', 'terra') ?>
                <h2 class="h2 accent-ochre">About <em class="serif">us</em></h2>
            </div>
            <p class="section-head__text">SAN International College of Arts and Science (SANICAS), a premier educational institution under the esteemed Sree Amman Trust, is committed to fostering academic excellence and holistic development. Located in Coimbatore, SANICAS is affiliated with Bharathiar University, Coimbatore, and approved by the Government of Tamil Nadu, as well as recognized by the University Grants Commission (UGC).</p>
        </div>

        <div class="about-us__row">
            <div class="about-statement reveal">
                <h3 class="h3 accent-terra">A blend of <em class="serif">traditional academic knowledge</em> and modern industry-oriented skills.</h3>
                <p class="body muted">At SANICAS, we offer a diverse range of undergraduate and postgraduate programs across multiple disciplines, providing students with a blend of traditional academic knowledge and modern industry-oriented skills. Our curriculum is designed to equip students with both theoretical foundations and practical insights, ensuring they are well-prepared for the challenges of the professional world.</p>
            </div>
            <div class="highlights">
                <?php foreach ($highlights as [$label, $tone]): ?>
                    <div class="highlight highlight--<?= $tone ?> reveal">
                        <span class="highlight__disc"><?= icon('check') ?></span>
                        <h4 class="h4"><?= e($label) ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============ Vision & mission ============ -->
<section class="vision-mission" id="vision-mission">
    <div class="wrap vm-cards">
        <article class="vm-card vm-card--ink reveal">
            <div class="vm-card__top">
                <h2 class="vm-card__title">Vision</h2>
                <span class="vm-card__num">01</span>
            </div>
            <div class="vm-card__divider"></div>
            <p class="vm-card__body">To nurture future leaders and thinkers who possess the academic knowledge, practical skills, and ethical values required to thrive in their careers and life. We aim to shape individuals who will contribute meaningfully to society and lead with integrity and innovation.</p>
        </article>

        <article class="vm-card vm-card--ochre reveal">
            <div class="vm-card__top">
                <h2 class="vm-card__title">Mission</h2>
                <span class="vm-card__num">02</span>
            </div>
            <div class="vm-card__divider"></div>
            <p class="vm-card__body">To provide world-class education that blends practical experience, fostering an environment that encourages academic excellence, innovation, and personal growth. Dedicated to empowering students to thrive and lead in a changing global landscape.</p>
        </article>
    </div>
</section>

<!-- ============ Sree Amman Trust ============ -->
<section class="trust">
    <div class="wrap">
        <div class="image-band reveal">
            <img src="<?= fig('about-trust-band.jpg') ?>" alt="Aerial view of the SAN group campus" loading="lazy">
            <div class="image-band__text">
                <?= chip('Sree Amman Trust', 'glass') ?>
                <h2 class="h1 accent-ochre">Building strong foundations for the <em class="serif">future</em></h2>
                
            </div>
        </div>

        <div class="milestones">
            <?php foreach ($milestones as [$big, $small, $tone]): ?>
                <div class="milestone milestone--<?= $tone ?> reveal">
                    <span class="milestone__dot"></span>
                    <p class="h3"><?= e($big) ?></p>
                    <p class="body-s"><?= e($small) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="trust__text">
            <p>Founded in 1986 by Tmt. T. Jayalakshmi, M.A., the Trust has continually set remarkable standards in shaping the future of education and empowering students to achieve their fullest potential. Headquartered in Erode and Coimbatore, Sree Amman Trust has grown to establish a diverse portfolio of ten esteemed institutions. These institutions have made a significant impact on the academic, personal, and professional growth of thousands of students across the region.</p>
            <p>With an unwavering commitment to academic excellence, innovation, and holistic development, Sree Amman Trust continues to be a beacon of quality education. The Trust prepares students to tackle the challenges and seize the opportunities of a rapidly evolving world, ensuring they are equipped to thrive in their careers and contribute positively to society.</p>
        </div>
    </div>
</section>

<!-- ============ Trustees ============ -->
<section class="section bg-ink trustees">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Sree Amman Trust', 'glass') ?>
                <h2 class="h2 accent-ochre">Our <em class="serif">Trustees</em></h2>
            </div>
        </div>

        <article class="chairperson reveal">
            <img src="<?= fig('chairperson.jpg') ?>" alt="Tmt. T. Jayalakshmi, M.A., Chairperson" loading="lazy">
            <div class="chairperson__msg">
                <?= chip('Trustee & Chairperson', 'ochre') ?>
                <blockquote class="body">
                    <p>It is my privilege to extend my warm greetings to the students, parents, faculty, and well-wishers of SAN International College of Arts and Science.</p>
                    <p>At SAN, we are committed to academic excellence, world-class infrastructure, skill enhancement, and holistic development. We strive to provide a vibrant learning environment that promotes knowledge, research, innovation, creativity, and professional competence.</p>
                    <p>Our mission is to nurture talents, strengthen skills, instil values, and empower students to become confident, competent, and responsible future leaders.</p>
                    <p>Together, let us strive for excellence and shape a brighter future through quality education.</p>
                </blockquote>
                <div class="chairperson__name">
                    <p class="h3">Tmt. T. Jayalakshmi, M.A.</p>
                    <p class="label">Chairperson / Trustee, Sree Amman Trust</p>
                </div>
            </div>
        </article>

        <article class="chairperson chairperson--sm reveal">
            <div class="chairperson__avatar-box">
                <span class="avatar avatar--ochre avatar--xl">TG</span>
            </div>
            <div class="chairperson__msg">
                <?= chip('Secretary & Trustee', 'ochre') ?>
                <blockquote class="body">
                    <p>It is our commitment to provide an enriching educational environment that promotes academic excellence, innovation, and holistic development. At SAN International College of Arts and Science, we strive to create opportunities that empower students with knowledge, skills, and values essential for their personal and professional growth.</p>
                    <p>We believe that education is a powerful tool for shaping responsible individuals and building a progressive society. Through continuous development and collective effort, we aspire to provide quality education and prepare our students to meet the challenges of the future.</p>
                    <p>Wishing the institution and its students continued growth and success.</p>
                </blockquote>
                <div class="chairperson__name">
                    <p class="h3">Ar. T. Giri</p>
                    <p class="label">Secretary / Trustee, Sree Amman Trust · M.Arch. · Environmental Architect</p>
                </div>
            </div>
        </article>

        <article class="chairperson chairperson--sm reveal">
            <img src="<?= fig('balakumar.jepg') ?>" alt="Adv. T. Balakumar, Treasurer / Trustee" loading="lazy">
            <div class="chairperson__msg">
                <?= chip('Treasurer & Trustee', 'ochre') ?>
                <blockquote class="body">
                    <p>It is a privilege to be associated with SAN International College of Arts and Science, an institution that is committed to shaping bright futures through quality education, innovation, and holistic development.</p>
                    <p>At our institution, we believe that education is the foundation for personal growth, professional success, and social progress. Our commitment is to create a learning environment that encourages students to think critically, embrace innovation, develop practical skills, and uphold strong ethical values.</p>
                    <p>We strive to provide quality education supported by modern infrastructure, dedicated faculty, and opportunities for academic, personal, and professional development. Our aim is to ensure that every student receives the guidance, encouragement, and resources needed to discover their potential and achieve their aspirations.</p>
                    <p>As part of Sree Amman Trust, we remain committed to strengthening educational opportunities and fostering an inclusive, supportive, and forward-looking academic community. We believe that true education goes beyond earning a degree; it prepares individuals to face challenges with confidence, integrity, and responsibility.</p>
                    <p>I extend my best wishes to our students, faculty, parents, and all stakeholders. Together, let us continue to build a brighter future through knowledge, dedication, and excellence.</p>
                    <p>With best wishes for your success and a rewarding educational journey.</p>
                </blockquote>
                <div class="chairperson__name">
                    <p class="h3">Adv. T. Balakumar</p>
                    <p class="label">Treasurer / Trustee, Sree Amman Trust · M.B.A., LL.B. · Advocate</p>
                </div>
            </div>
        </article>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
 