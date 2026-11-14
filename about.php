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

        <article class="trustee-feature reveal">
            <div class="trustee-feature__media">
                <img src="<?= fig('chairperson.jpg') ?>" alt="Tmt. T. Jayalakshmi, M.A., Chairperson" loading="lazy">
            </div>
            <div class="trustee-feature__msg">
                <?= chip('Trustee & Chairperson', 'dark') ?>
                <blockquote class="body">
                    <p>It is my privilege to extend my warm greetings to the students, parents, faculty, and well-wishers of SAN International College of Arts and Science.</p>
                    <p>At SAN, we are committed to academic excellence, world-class infrastructure, skill enhancement, and holistic development. We strive to provide a vibrant learning environment that promotes knowledge, research, innovation, creativity, and professional competence.</p>
                    <p>Our mission is to nurture talents, strengthen skills, instil values, and empower students to become confident, competent, and responsible future leaders.</p>
                    <p>Together, let us strive for excellence and shape a brighter future through quality education.</p>
                </blockquote>
                <div class="trustee-feature__name">
                    <p class="h3">Tmt. T. Jayalakshmi, M.A.</p>
                    <p class="label">Chairperson / Trustee, Sree Amman Trust</p>
                </div>
            </div>
        </article>

        <div class="trustee-duo">
            <article class="trustee-card reveal">
                <div class="trustee-card__top">
                    <div class="trustee-card__media">
                        <img src="<?= fig('giri.png') ?>" alt="Ar. T. Giri, Secretary / Trustee" loading="lazy">
                    </div>
                    <div class="trustee-card__ident">
                        <?= chip('Secretary & Trustee', 'ochre') ?>
                        <div class="trustee-card__name">
                            <p class="h3">Ar. T. Giri</p>
                            <p class="label">Secretary / Trustee, Sree Amman Trust &middot; M.Arch. &middot; Environmental Architect</p>
                        </div>
                    </div>
                </div>
                <div class="trustee-card__body">
                    <blockquote class="body-s">
                        <p>It is our commitment to provide an enriching educational environment that promotes academic excellence, innovation, and holistic development. At SAN International College of Arts and Science, we strive to create opportunities that empower students with knowledge, skills, and values essential for their personal and professional growth.</p>
                        <p>We believe that education is a powerful tool for shaping responsible individuals and building a progressive society. Through continuous development and collective effort, we aspire to provide quality education and prepare our students to meet the challenges of the future.</p>
                        <p>Wishing the institution and its students continued growth and success.</p>
                    </blockquote>
                </div>
            </article>

            <article class="trustee-card reveal">
                <div class="trustee-card__top">
                    <div class="trustee-card__media">
                        <img src="<?= fig('balakumar.jepg') ?>" alt="Adv. T. Balakumar, Managing Director, Treasurer / Trustee" loading="lazy">
                    </div>
                    <div class="trustee-card__ident">
                        <?= chip('Managing Director & Trustee', 'ochre') ?>
                        <div class="trustee-card__name">
                            <p class="h3">Adv. T. Balakumar</p>
                            <p class="label">Managing Director, Treasurer / Trustee, Sree Amman Trust &middot; B.E., LL.B.</p>
                        </div>
                    </div>
                </div>
                <div class="trustee-card__body">
                    <blockquote class="body-s">
                        <p>It is our vision at SAN International College of Arts and Science to empower young minds through quality education, innovation, and excellence.</p>
                        <p>We are committed to providing a vibrant learning environment enriched with modern infrastructure, dedicated faculty, and skill-oriented education that nurtures knowledge, creativity, and leadership.</p>
                        <p>Our mission is to transform students into confident, competent, and responsible individuals, ready to meet global challenges and shape a better tomorrow.</p>
                        <p>Together, let us inspire excellence, empower potential, and build future leaders.</p>
                        <p>My best wishes to all students for a successful and rewarding academic journey!</p>
                    </blockquote>
                </div>
            </article>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
 