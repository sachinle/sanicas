<?php
$page  = 'research';
$title = 'Research';
$description = 'Research & Development Cell of SAN International College of Arts and Science — focus areas, members, research guides, scholars and faculty publications.';
$heroImage = 'images/Copy of 255A5262.JPG';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/extra-icons.php';

$tabs = [
    'About' => 'about', 'Focus Areas' => 'focus-areas', 'Members' => 'members',
    'Research Guides' => 'research-guides', 'Research Scholars' => 'research-scholars', 'Publications' => 'publications',
];

// [title, text, tone, icon]
$focus = [
    ['Research Culture', 'Plans, coordinates, monitors and encourages research, innovation, consultancy and publication activities across the institution.', 'ink', 'target'],
    ['Collaborations', 'Facilitates partnerships with universities, research institutions, industries and professional organisations for joint projects and knowledge sharing.', 'cream', 'link'],
    ['Publications', 'Encourages papers in peer-reviewed and indexed journals, conference presentations, books and book chapters.', 'sage', 'pen'],
    ['Annual Action Plans', 'Every department prepares an annual research action plan and involves faculty and students throughout the year.', 'terra', 'calendar'],
    ['Student Research', 'Project work, innovation competitions, paper presentations, exhibitions, hackathons and entrepreneurship activities.', 'cream', 'rocket'],
    ['Faculty Mentorship', 'Experienced faculty guide students with creative ideas towards meaningful research outcomes.', 'ochre', 'users'],
];

$members = [
    ['Dr. Dhanya V', 'IQAC Coordinator · Member', 'DV'],
    ['Dr. V. Sasikumar', ' Head, Language · Member', 'VS'],
    ['Dr. Jenifer Jincy T', ', Microbiology · Member', 'JJ'],
];

// Status => pill tone
$statusTone = ['Published' => 'published', 'UGC CARE' => 'ugc', 'Communicated' => 'communicated', 'Conference' => 'conference'];

$mtr  = 'Modern Thamizh Research (A Quarterly International Multilateral Thamizh Journal)';
$rtr  = 'Recent Tamil Research (UGC CARE), Raja Publications';

/*
 * Publications grouped by department, then by author.
 * Each paper: [title, authors, journal, year, status]
 */
$publications = [
    ['key' => 'language', 'name' => 'Department of Language', 'label' => 'Language', 'authors' => [
        ['name' => 'Dr. S. Thenral', 'role' => 'Principal', 'ini' => 'ST', 'tone' => 'ochre', 'papers' => [
            ['Kurunthogaiyil Iyarkaiyodu Iyaindha Agappadalgal', '', 'Shanlax International Journals', '', 'Published'],
            ['Kavignar Pazhanibharathiyin Kavithaigalil Padaippaalumai', '', $mtr . ' · ISSN 2321-984X', '', 'Published'],
            ['Kavignar Pazhanibharathiyin Kavithaigalil Kaadhal Nayam', '', '[Journal details]', '', 'Published'],
            ['Kavignar Pazhanibharathiyin Kavithaigalil Panmuga Paarvai', '', $mtr . ' · ISSN 2321-984X', '', 'Published'],
            ['Kavignar Pazhanibharathiyin Kavithaigalil Maanuda Maempaattuk Karuththaakkangal', '', $rtr, '', 'UGC CARE'],
            ['Personality Development in the Poetry of Poet Pazhanibharathi', '', $mtr, '', 'Published'],
            ['Thirukkural in the Kamba Ramayanam', '', $rtr, '', 'UGC CARE'],
            ['Social Thoughts in the Essay Collection Kaatrin Kaiyezhuthu', '', $mtr, '', 'Published'],
            ['The Philosophy of Love in the Poetry Collection Poorana Porkudam', '', $mtr, '', 'Published'],
            ['Aspects of Women’s Life in the Poetry of Poet Pazhanibharathi', '', $mtr, '', 'Published'],
        ]],
        ['name' => 'Dr. V. Sasikumar', 'role' => 'Head, Department of Language', 'ini' => 'VS', 'tone' => 'ink', 'papers' => [
            ['Naveena Tamil Aayivu — Journal of Modern Tamil Research', '', 'A Quarterly International Multilateral Thamizh Journal · Vol. (20) 1', '', 'Published'],
            ['Vetrimunai — An International Journal of Biodiversity', '', 'International Journal', '2024', 'Published'],
        ]],
    ]],
    ['key' => 'microbiology', 'name' => 'Department of Microbiology', 'label' => 'Microbiology', 'authors' => [
        ['name' => 'Dr. Dhanya V', 'role' => 'IQAC Coordinator', 'ini' => 'DV', 'tone' => 'ink', 'papers' => [
            ['Biodegradation of Cyclohexanol and Cyclohexanone Using Mixed Culture of Pseudomonas in Activated Sludge Process', 'Dhanya V, Usharani M. V, Jayadev P.', 'Journal of Environmental Research and Development, 11(02), 324–331', '2016', 'Published'],
            ['Studies on Antioxidant Potential of Two Different Solvent Extracts from Raw and Hydrothermal Processed Samples of Artocarpus altilis (Parkinson) Fosberg and Colocasia esculenta (L.) Schott', 'Saipriya V, Aathira M, Sijo J, Abirami A, Dhanya V, Siddhuraju P.', 'Journal of Environmental Research and Development, 11(02), 263–271', '2016', 'Published'],
            ['Biochemical Composition and Antioxidant Potential of Raw and Hydrothermal Treated Two Underutilized Leafy Vegetables Amaranthus dubius and Allmania nodiflora', 'V Dhanya, U Ragavendran, M Aathira, V Saipriya, M Sangeetha Priya, S Palanisamy, P Siddhuraju', 'International Journal of Food Science and Nutrition, 2(4), 95–105', '2017', 'Published'],
            ['Biochemical Profile of Domestic Sewage Waste Water and Well Water Irrigated Vigna mungo (L.) Hepper, Collected from Semi Urban and Rural Areas of Coimbatore, Tamil Nadu', 'Dhanya Viswanathan, Siddhuraju Perumal', 'International Journal of Pharma and Bio Sciences, 10(2), 31–39', '2019', 'Published'],
            ['Effect of Domestic Sewage Wastewater Irrigation on Nutritional and Nutraceutical Perspectives of Eleusine coracana and Zea mays (Raw and Processed) from Selected Semi-Urban and Rural Areas of Coimbatore, Tamil Nadu', 'Dhanya Viswanathan, Roopika Sivaraman, Siddhuraju Perumal', 'Human and Ecological Risk Assessment: An International Journal, 26(8), 2203–2224', '2020', 'Published'],
            ['Red Amaranth (Amaranthus tricolor L.) Irrigated with Domestic Sewage Wastewater: Environmental Food Security and Safety Assessment Perspectives through Acute and Sub-Acute Toxicity Study', 'Siddhuraju Perumal, Dhanya Viswanathan, Haritha Thulaseedharan Nair, Roopika Sivaraman', 'Ecology, Environment and Conservation, 29 (April Suppl. Issue), S261–S282', '2023', 'Published'],
            ['Water Quality, Soil Parameters and Aspects of Environmental Food Safety Concerning Cassava Tuber Crop (Manihot esculenta Crantz) Samples Collected from Agricultural Fields Irrigated with Domestic Sewage Wastewater', 'Siddhuraju P., Dhanya V., Nair H. T., Roopika S., Chaithra R., Karthick V., Pooja K. S.', 'Water, Air, & Soil Pollution, 236(6), 333', '2025', 'Published'],
            ['Comparative Evaluation of Domestic Sewage and Well Water Irrigation on the Mineral Profile, Nutritional, and Nutraceutical Attributes of Cajanus cajan (L.) Millsp.', 'Viswanathan Dhanya, Velukutty Amrutha, Perumal Siddhuraju', 'International Journal of Environmental & Agriculture Research (IJOEAR) · ISSN 2454-1850', '2026', 'Published'],
            ['Effect of Domestic Sewage Waste Water Irrigation on Food Composition, Heavy Metal Concentration and Antioxidant Activity of the Post Harvested Bitter Gourd (Momordica charantia): A Case Study', 'Siddhuraju P., Karthick V., Dhanya V., Surya R.', 'Spanish Journal of Agricultural Research', '2026', 'Communicated'],
            ['Domestic Sewage Wastewater Irrigation Effects on Soil Fertility, Heavy Metals and Nutritional Quality of Sorghum Grains', 'Perumal Siddhuraju, Dhanya Viswanathan', 'Water and Environment Journal · Manuscript ID 2148720', '', 'Communicated'],
            ['Traditional Processing Impacts on Biochemical Composition, Mineral Profile and Antiradical Capacity of Two Indigenous Millet (Setaria italica L. and Panicum sumatrense) Cultivars', 'Aathira M., Dhanya V., Siddhuraju P.', 'Indian Journal of Experimental Biology', '2026', 'Communicated'],
            ['Isolation, Characterization and Identification of Bacterial Species from Temple Waste', 'Dhanya V, G. Anju, G. Srinivasan, M. V. Usharani', '1st A.P. Science Congress, Sri Venkateswara University · Proceedings', '2016', 'Conference'],
        ]],
        ['name' => 'Dr. Jenifer Jincy T', 'role' => 'Assistant Professor, Department of Microbiology', 'ini' => 'JJ', 'tone' => 'sage', 'papers' => [
            ['Insecticidal Potential of Endophytic Fungal Extracts from Adhatoda vasica against Dengue Vector, Aedes aegypti and Diamondback Moth, Plutella xylostella', '', 'International Journal of Mosquito Research', '2024', 'Published'],
            ['Isolation of Endophytic Fungi from Adhatoda vasica and Assessing its Antibacterial Efficacy and Cytotoxic Impact on the A549 Cancer Cells', '', 'Uttar Pradesh Journal of Zoology', '2024', 'Published'],
            ['Evaluation of Environmental Stress Tolerance in Soil-Isolated Bacillus spp. for Sustainable Agricultural Applications', '', '[Journal details]', '2026', 'Published'],
        ]],
    ]],
    ['key' => 'cs', 'name' => 'Department of Computer Science and Applications', 'label' => 'Computer Science', 'authors' => [
        ['name' => 'Ms. Sruthi S', 'role' => ' Head, Department of Computer Science and Applications', 'ini' => 'SS', 'tone' => 'sage', 'papers' => [
            ['Trust-Assisted Blockchain and Machine Learning-Enhanced Energy-Aware Secure Routing for Hierarchical WSNs', '', 'Journal of Harbin Engineering University', '2026', 'Published'],
        ]],
    ]],
];

$deptCount = function ($d) {
    return array_sum(array_map(fn($a) => count($a['papers']), $d['authors']));
};
$totalPubs = array_sum(array_map($deptCount, $publications));
?>

<!-- ============ Hero ============ -->
<section class="rs-hero">
    <div class="rs-hero__text">
        <?= chip('SAN International College of Arts and Science', 'glass') ?>
        <h1 class="rs-hero__title">Research <span class="serif">&amp; Development</span></h1>
        <p class="lead">A well-defined system that nurtures a vibrant research culture — planning, coordinating and encouraging research, innovation, consultancy and publication across the college.</p>
        <div class="chip-row"><?= chip('Affiliated to Bharathiar University', 'glass') ?><?= chip($totalPubs . ' publications', 'glass') ?></div>
    </div>
    <div class="rs-hero__visual reveal">
        <img class="rs-hero__img" src="<?= fig('images/Copy of 255A5262.JPG') ?>" alt="Research &amp; Development at SANICAS" fetchpriority="high">
    </div>
</section>

<!-- ============ Section tabs ============ -->
<nav class="page-tabs" aria-label="Research sections" data-page-tabs>
    <div class="filter-tabs">
        <?php $i = 0; foreach ($tabs as $label => $id): $i++; ?>
            <a class="filter-tab<?= $i === 1 ? ' is-active' : '' ?>" href="#<?= $id ?>"><?= e($label) ?><span class="count"><?= sprintf('%02d', $i) ?></span></a>
        <?php endforeach; ?>
    </div>
</nav>

<!-- ============ About ============ -->
<section class="rs-about page-anchor" id="about">
    <div class="wrap">
        <div class="split-row">
            <div class="split-row__text">
                <?= chip('R&D Cell', 'terra') ?>
                <h2 class="h2">About the Research &amp; Development Cell</h2>
                <p class="body rs-strong">The Research &amp; Development Cell (R&amp;D Cell) of SAN International College of Arts and Science (SANICAS), Coimbatore has a well-defined system to promote a vibrant research culture among faculty members and students.</p>
                <p class="body-s muted">The Cell functions as the central body for planning, coordinating, monitoring, and encouraging research, innovation, consultancy, and publication activities within the institution. It is committed to creating an academic environment that nurtures creativity, critical thinking, scientific inquiry, and innovative practices.</p>
                <p class="body-s muted">The R&amp;D Cell undertakes systematic initiatives to enhance knowledge creation through quality research and provides opportunities for faculty members and students to engage in interdisciplinary and collaborative research. It encourages researchers to identify contemporary societal and industrial challenges and develop meaningful solutions through research-based activities.</p>
            </div>
            <div class="photo-stack" aria-hidden="true">
                <img class="photo-stack__a" src="<?= fig('images/Copy of 255A5298.JPG') ?>" alt="Research culture at SANICAS" loading="lazy">
                <img class="photo-stack__b" src="<?= fig('images/Copy of 255A5329.JPG') ?>" alt="Faculty and students research" loading="lazy">
                <span class="photo-badge"><span class="photo-badge__disc"><?= xicon('bulb') ?></span><span><strong>Research culture</strong><small>Faculty &amp; students</small></span></span>
            </div>
        </div>
        <div class="rs-about__row">
            <div class="rs-statement reveal">
                <p class="h3">The R&amp;D Cell strives to enrich <em class="serif">academic excellence,</em> strengthen research capabilities and foster innovation.</p>
                <p class="body-s">It aims to contribute significantly to institutional growth and societal development.</p>
            </div>
            <div class="rs-note reveal">
                <p class="body">Each department is encouraged to prepare an annual research action plan and actively involve faculty members and students in research-oriented activities throughout the academic year.</p>
                <p class="body-s muted">Students with creative and innovative ideas are guided by experienced faculty members to transform their ideas into meaningful research outcomes.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ Focus areas ============ -->
<section class="rs-focus page-anchor" id="focus-areas">
    <div class="wrap">
        <div class="pg-head">
            <div class="pg-head__title">
                <?= chip('R&D Cell', 'ochre') ?>
                <h2 class="h2">What the Cell Does</h2>
            </div>
            <p class="body-s muted">From faculty publications to student hackathons, the Cell connects every stage of research — idea, guidance, collaboration and outcome.</p>
        </div>
        <div class="focus-grid">
            <?php foreach ($focus as [$t, $txt, $tone, $ic]): ?>
                <article class="focus-card focus-card--<?= $tone ?> reveal">
                    <span class="focus-card__disc"><?= xicon($ic) ?></span>
                    <h3 class="focus-card__title"><?= e($t) ?></h3>
                    <p class="caption"><?= e($txt) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Members ============ -->
<section class="rs-members page-anchor" id="members">
    <div class="wrap">
        <div class="pg-head">
            <div class="pg-head__title">
                <?= chip('R&D Cell', 'glass') ?>
                <h2 class="h2">Members of the Cell</h2>
            </div>
        </div>
        <div class="lead-pair">
            <div class="lead-tile lead-tile--ochre reveal">
                <span class="ini ini--lg">ST</span>
                <div><p class="overline">Principal</p><p class="h3">Dr. S. Thenral</p><p class="caption lead-tile__sub">SAN International College of Arts and Science</p></div>
            </div>
            <div class="lead-tile lead-tile--cream reveal">
                <span class="ini ini--lg">KP</span>
                <div><p class="overline">Vice Principal</p><p class="h3">Dr. Kavipriya</p><p class="caption lead-tile__sub">SAN International College of Arts and Science</p></div>
            </div>
        </div>
        <div class="member-row member-row--3">
            <?php foreach ($members as [$n, $r, $ini]): ?>
                <div class="mem"><span class="ini ini--dark"><?= e($ini) ?></span><div><p class="mem__name"><?= e($n) ?></p><p class="caption"><?= e($r) ?></p></div></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Research guides & scholars ============ -->
<section class="rs-guides page-anchor" id="research-guides">
    <div class="wrap rs-guides__row">
        <div class="rs-guides__list">
            <?= chip('Research', 'sage') ?>
            <h2 class="h2">Research Guideship Availability</h2>
            <p class="caption muted">Recognised research supervisors at SANICAS who guide research scholars.</p>
            <div class="guide-list">
                <div class="guide-row"><span class="ini ini--ochre">ST</span><div><p class="mem__name">Dr. S. Thenral</p><p class="caption muted">Principal, SAN International College of Arts and Science</p></div><span class="tag-pill">Research Guide</span></div>
                <div class="guide-row"><span class="ini">VS</span><div><p class="mem__name">Dr. V. Sasikumar</p><p class="caption muted">Head, Department of Language</p></div><span class="tag-pill">Research Guide</span></div>
            </div>
        </div>
        <article class="scholar-card page-anchor reveal" id="research-scholars">
            <?= chip('Research Scholar', 'glass') ?>
            <span class="scholar-card__cap" aria-hidden="true"><?= xicon('cap') ?></span>
            <span class="ini ini--ochre ini--md">SS</span>
            <p class="h3">Ms. Sruthi S</p>
            <p class="body-s scholar-card__role">Head, Department of Computer Science and Applications</p>
            <p class="caption scholar-card__org">SAN International College of Arts and Science</p>
        </article>
    </div>
</section>

<!-- ============ Publications ============ -->
<section class="rs-pubs page-anchor" id="publications">
    <div class="wrap">
        <div class="pg-head">
            <div class="pg-head__title">
                <?= chip('Research', 'terra') ?>
                <h2 class="h2">Research Publications</h2>
            </div>
            <p class="body-s muted">Journal articles, UGC CARE listed papers, conference proceedings and communicated manuscripts by our faculty members, grouped by department.</p>
        </div>
        <div class="filter-tabs" role="tablist" data-filter-group="pubs">
            <button class="filter-tab is-active" role="tab" aria-selected="true" data-filter="all">All publications <span class="count"><?= sprintf('%02d', $totalPubs) ?></span></button>
            <?php foreach ($publications as $d): ?>
                <button class="filter-tab" role="tab" aria-selected="false" data-filter="<?= e($d['key']) ?>"><?= e($d['label']) ?> <span class="count"><?= sprintf('%02d', $deptCount($d)) ?></span></button>
            <?php endforeach; ?>
        </div>

        <div class="pub-depts" data-filter-target="pubs">
            <?php foreach ($publications as $d): $dc = $deptCount($d); ?>
                <div class="pub-dept" data-cat="<?= e($d['key']) ?>">
                    <div class="pub-dept__head">
                        <h3 class="pub-dept__title"><?= e($d['name']) ?></h3>
                        <span class="overline muted"><?= sprintf('%02d', $dc) ?> <?= $dc === 1 ? 'entry' : 'entries' ?></span>
                    </div>
                    <?php foreach ($d['authors'] as $a): $n = count($a['papers']); ?>
                        <div class="pub-author">
                            <aside class="author-card">
                                <span class="ini ini--<?= e($a['tone']) ?>"><?= e($a['ini']) ?></span>
                                <p class="author-card__name"><?= e($a['name']) ?></p>
                                <p class="caption muted"><?= e($a['role']) ?></p>
                                <p class="author-card__count"><strong><?= sprintf('%02d', $n) ?></strong> <?= $n === 1 ? 'publication' : 'publications' ?></p>
                            </aside>
                            <ol class="pub-list">
                                <?php foreach ($a['papers'] as $k => [$t, $by, $jr, $yr, $st]): ?>
                                    <li class="pub">
                                        <span class="pub__num"><?= sprintf('%02d', $k + 1) ?></span>
                                        <div class="pub__body">
                                            <p class="pub__title"><?= e($t) ?></p>
                                            <?php if ($by): ?><p class="pub__authors"><?= e($by) ?></p><?php endif; ?>
                                            <p class="pub__journal"><em><?= e($jr) ?></em><?php if ($yr): ?><span class="year-pill"><?= e($yr) ?></span><?php endif; ?></p>
                                        </div>
                                        <span class="status-pill status-pill--<?= $statusTone[$st] ?>"><?= e($st) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Student research CTA ============ -->
<section class="rs-cta">
    <div class="wrap">
        <div class="idea-card">
            <div class="idea-card__text">
                <?= chip('Student research', 'dark') ?>
                <h2 class="h2">Have an idea worth <em class="serif">researching?</em></h2>
                <p class="caption">Projects · Paper presentations · Exhibitions · Hackathons · Innovation competitions</p>
            </div>
            <ol class="step-list">
                <li><span class="step-disc"><?= xicon('bulb') ?></span><div><p class="overline muted">Step 01</p><p class="step-text">Share your idea with your department</p></div></li>
                <li><span class="step-disc"><?= icon('users') ?></span><div><p class="overline muted">Step 02</p><p class="step-text">Get guided by an experienced faculty mentor</p></div></li>
                <li><span class="step-disc"><?= icon('award') ?></span><div><p class="overline muted">Step 03</p><p class="step-text">Turn it into a meaningful research outcome</p></div></li>
            </ol>
        </div>
    </div>
</section>

<script>
/* Highlight the section tab for the section in view. */
(function () {
    var tabs = document.querySelectorAll('[data-page-tabs] a');
    if (!tabs.length || !('IntersectionObserver' in window)) return;
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
            if (!en.isIntersecting) return;
            tabs.forEach(function (t) { t.classList.toggle('is-active', t.getAttribute('href') === '#' + en.target.id); });
        });
    }, { rootMargin: '-40% 0px -55% 0px' });
    document.querySelectorAll('.page-anchor').forEach(function (s) { io.observe(s); });
})();
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
