<?php
$page  = 'affiliation';
$title = 'Affiliation & Recognitions';
$heroImage = 'images (2)/infra and labs/infra_and_labs (7).jpeg';
require __DIR__ . '/includes/header.php';
?>

<!-- ============ Hero ============ -->
<section class="affil-hero">
    <img class="affil-hero__bg" src="<?= fig('images (2)/infra and labs/infra_and_labs (7).jpeg') ?>" alt="SANICAS Campus Architecture" fetchpriority="high">
    <div class="affil-hero__inner">
        <div class="affil-hero__text">
            <?= chip('Proudly with', 'glass') ?>
            <h1 class="display-xl accent-ochre">Accreditations and <em class="serif">academic recognitions</em></h1>
            <div class="chip-row">
                <?= chip('Bharathiar University', 'ochre') ?>
                <?= chip('Govt. of Tamil Nadu', 'sage') ?>
                <?= chip('UGC', 'terra') ?>
                <?= chip('Naan Muthalvan', 'glass') ?>
                <?= chip('MoES', 'glass') ?>
                <?= chip('EDII-TN', 'glass') ?>
                <?= chip('UN SDGs', 'glass') ?>
            </div>
        </div>
        <div class="cert">
            <div class="cert__card">
                <img src="<?= fig('logo-bharathiar.png') ?>" alt="Bharathiar University seal" width="170" height="143" loading="lazy">
                <p class="overline terra-text">Affiliated to</p>
                <p class="h4">Bharathiar University, Coimbatore</p>
                <span class="cert__rule"></span>
                <p class="label muted">Established 1982</p>
            </div>
            <div class="cert__sticker">UGC<br>Recognized</div>
        </div>
    </div>
</section>

<!-- ============ Bharathiar University ============ -->
<section class="section bu">
    <div class="wrap bu__row">
        <div class="seal-card reveal">
            <img src="<?= fig('logo-bharathiar.png') ?>" alt="Bharathiar University seal" width="220" height="185" loading="lazy">
            <p class="label muted">One of Tamil Nadu’s leading universities</p>
        </div>
        <div class="bu__text">
            <?= chip('Affiliation and Accreditation', 'ochre') ?>
            <h2 class="h2 accent-terra">Bharathiar University <em class="serif">Affiliation</em></h2>
            <p class="lead">SANICAS is proudly affiliated with Bharathiar University, one of Tamil Nadu’s leading universities known for its exceptional academic programs and research initiatives. Established in 1982, Bharathiar University is recognized for its commitment to providing quality higher education and fostering innovation across a wide range of disciplines.</p>
            <p class="body muted">As an affiliate institution, SANICAS follows the university’s rigorous academic framework, ensuring that our students receive top-tier education that aligns with the best practices in teaching and learning. Our curriculum, faculty, and student services are all designed to adhere to the high standards set by Bharathiar University, offering students a globally competitive educational experience. This affiliation ensures that your qualifications are recognized both nationally and internationally.</p>
        </div>
    </div>
</section>

<!-- ============ Recognitions bento ============ -->
<section class="section recognitions">
    <div class="wrap">
        <div class="section-head">
            <div class="section-head__title">
                <?= chip('Recognitions & associations', 'terra') ?>
                <h2 class="h2 accent-ochre">Recognitions &amp; <em class="serif">associations</em></h2>
            </div>
        </div>

        <div class="bento-row">
            <?= color_card('Recognized by Government of Tamil Nadu', 'SANICAS is officially recognized by the Government of Tamil Nadu, ensuring our programs meet state educational standards. This recognition affirms the quality and relevance of our education, giving students access to state initiatives and opportunities for academic and professional growth. Our affiliation strengthens our credibility and opens doors to collaborations with government bodies. It also supports continuous improvement through adherence to regulatory benchmarks. At SANICAS, we are committed to shaping future-ready graduates through excellence.', '01', 'ochre') ?>
            <?= color_card('UGC Recognition', 'SANICAS is fully recognized by the University Grants Commission (UGC), the apex body for higher education in India. This recognition confirms our commitment to quality education and compliance with national academic standards. UGC approval ensures that our curriculum, infrastructure, faculty, and student services meet the required benchmarks. Our degrees are valid and respected across India and internationally. With UGC recognition, SANICAS empowers students with qualifications that support their academic and professional growth.', '02', 'ink') ?>
        </div>
        <div class="bento-row">
            <?= color_card('Naan Muthalvan Institute', 'SANICAS is proud to be associated with the Naan Muthalvan Institute, a key initiative aimed at empowering students and enhancing their skills for sustainable growth. This program is designed to foster innovation, entrepreneurship, and leadership among young individuals. It provides a platform for students to develop their skills and capabilities, preparing them for leadership roles in both private and public sectors. Through this collaboration, we aim to equip our students with the tools and knowledge required to succeed in a dynamic global environment.', '03', 'sage') ?>
            <?= color_card('Innovation Council', 'The Innovation Council at SANICAS is dedicated to encouraging and nurturing creativity, research, and innovation among students. It is designed to provide a platform where students can explore their entrepreneurial interests, collaborate on innovative projects, and create impactful solutions. The council organizes events, workshops, and initiatives aimed at fostering a culture of innovation, helping students translate their ideas into real-world applications. Through this council, we aim to cultivate the next generation of problem solvers and leaders.', '04', 'terra') ?>
            <?= color_card('MoES Innovation Cell', 'The Ministry of Earth Sciences (MoES) Innovation Cell at SANICAS supports the development of cutting-edge solutions in areas related to earth sciences, environmental protection, and sustainable practices. By working closely with experts, researchers, and industry professionals, students gain valuable exposure to real-world challenges and solutions. The MoES Innovation Cell serves as a hub for interdisciplinary projects that address pressing environmental issues, empowering students to contribute to the global goal of sustainability.', '05', 'ochre-soft') ?>
        </div>
        <div class="bento-row bento-row--5-7">
            <?= color_card('EDII-TN (Entrepreneurship Development and Innovation Institute – Tamil Nadu)', 'SANICAS collaborates with the Entrepreneurship Development and Innovation Institute – Tamil Nadu (EDII-TN) to provide students with a strong foundation in entrepreneurship and innovation. EDII-TN focuses on fostering entrepreneurial mindsets and promoting the growth of start-ups through guidance, mentoring, and skill development programs. Students benefit from a range of workshops, seminars, and hands-on training, which help them develop the skills and knowledge.', '06', 'paper') ?>
            <?= image_card('Sustainable Development Goals (SDGs)', 'At SANICAS, we are committed to promoting the Sustainable Development Goals (SDGs) set by the United Nations. These goals focus on addressing global challenges like poverty, inequality, climate change, and environmental sustainability. We integrate SDGs into our curriculum, research, and community engagement initiatives, encouraging students to think critically about global issues and take proactive steps towards solutions. Through various projects, workshops, and awareness campaigns, SANICAS prepares students to be responsible citizens and leaders who contribute to a sustainable and equitable future.', '07 · United Nations', fig('images (2)/infra and labs/infra_and_labs (19).jpeg')) ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
