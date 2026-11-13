<?php
$page    = 'life';
$pageCss = 'life-at-san';
$title   = 'Life@San';
$description = 'Life at SAN International College of Arts and Science — campus vibe, student stories, clubs and culture, sports, campus living, student support and gallery.';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/extra-icons.php';

$tabs = [
    'Campus Vibe' => 'campus-vibe', 'Voices of SAN' => 'voices', 'Clubs & Culture' => 'clubs',
    'Sports & Fitness' => 'sports', 'Campus Living' => 'campus-living', 'Student Support' => 'student-support', 'Gallery' => 'gallery',
];

$heroPhotos = ['news-zetra-2026.jpg', 'life-hero-2.jpg', 'life-hero-4.jpg', 'images/IMG_3373.JPG.jpeg', 'images/SHI00005.JPG'];

// [kicker, title, text, image, anchor]
$pillars = [
    ['Voices of SAN', 'Student Blogs & Stories', 'Dedicated peer-to-peer blogging portal featuring student experiences, internship chronicles, project stories, and creative writings.', 'life-mural.jpg', 'voices'],
    ['Talent meets opportunity', 'Clubs & Cultural Activities', 'Showcases active student clubs (Fine Arts, Tech & Coding, Eco Club, Literature) and major annual festivals (Cultural Fests, Onam, Pongal).', 'event-09.jpg', 'clubs'],
    ['Play to excel', 'Sports, Fitness & Recreation', 'Covers indoor/outdoor sports facilities, annual sports meets, fitness programs, and inter-collegiate tournament participation.', 'images (2)/sports/sports (6).jpeg', 'sports'],
    ['A welcoming campus', 'Campus Living & Amenities', 'Highlights residential hostels, dining & cafeteria hubs, green campus features, Wi-Fi connectivity, and modern library spaces.', 'images/2-1-1-1.jpg', 'campus-living'],
    ['Every student matters', 'Student Support & Mentorship', 'Details student leadership councils, faculty advisory/mentorship programs, wellness counseling, and safety guidelines.', 'images/Copy of 255A0839.JPG', 'student-support'],
    ['Moments & memories', 'Campus Vibe', 'Daily student life, modern labs, and social gatherings — captured in photos and videos from across the campus.', 'life-hero-3.jpg', 'gallery'],
];

// [title, text, tone, icon]
$explore = [
    ['A Day in the Life', 'Discover the everyday experiences of students across different programmes and departments. From classroom learning and laboratory sessions to friendships, campus activities, and memorable college moments, these personal narratives provide an authentic glimpse into student life at SAN.', 'ink', 'sun'],
    ['Internship & Industry Experiences', 'Explore stories about internships, industrial visits, professional training, and workplace exposure. Students can share the knowledge they gained, the challenges they encountered, the skills they developed, and how these experiences helped them understand their chosen fields of study.', 'cream', 'briefcase'],
    ['Project Stories & Academic Discoveries', 'Discover student projects, research activities, practical assignments, innovative ideas, and collaborative learning experiences. These stories highlight the journey from identifying a problem to exploring solutions, working as a team, and presenting ideas with confidence.', 'sage', 'bulb'],
    ['Events, Festivals & Campus Memories', 'Relive the excitement of college celebrations, cultural festivals, departmental programmes, competitions, seminars, workshops, and student activities through written accounts, photographs, and creative photo essays. These stories capture the spirit of participation and togetherness that makes campus life memorable.', 'terra', 'calendar'],
    ['Creative Writing & Literary Corner', 'A space for imagination, expression, and original thought, the Creative Writing Corner welcomes student contributions such as poems, short stories, essays, book reviews, personal reflections, and opinion pieces. It encourages students to experiment with language, develop their writing skills, and share their perspectives with a wider audience.', 'cream', 'pen'],
    ['Student Achievements & Inspirations', 'Celebrate the accomplishments, talents, and milestones of SAN students. This section can feature competition winners, academic achievements, creative accomplishments, leadership experiences, and inspiring personal journeys that motivate fellow students to explore their own potential.', 'ochre', 'award'],
];

// Placeholder story cards, as in the design: [category, chip tone, text, image]
$blog = [
    ['A Day in the Life', 'ochre', 'First-person perspective accounts written by students across various streams (e.g., B.Sc. AI & ML, Commerce, Arts).', 'gallery-02.jpg'],
    ['Event & Fest Recaps', 'terra', 'Student-led journalism and photo essays capturing campus events, hackathons, and cultural fests.', 'event-08.jpg'],
    ['Internship & Project Chronicles', 'sage', 'Real-world exposure stories detailing industry visits, internships, and project milestones.', 'event-07.jpg'],
    ['Creative & Opinion Corner', 'dark', 'Articles, essays, and creative writing submitted by students for peer recognition.', 'images/Copy of 255A1426.JPG'],
];

// [title, text paragraphs, tags, image]
$clubs = [
    ['Fine Arts Club', ['The Fine Arts Club provides a platform for students to express their creativity through drawing, painting, crafts, photography, music, dance, and other artistic activities. It encourages students to explore their imagination, develop their artistic abilities, and appreciate different forms of creative expression. Art competitions, exhibitions, cultural performances, and creative workshops can help students showcase their talents and gain recognition for their work.'], ['Drawing', 'Painting', 'Photography', 'Music', 'Dance'], 'images (2)/infra and labs/infra_and_labs (21).jpeg'],
    ['Technology & Coding Club', ['The Technology & Coding Club encourages students to explore technological innovations, digital tools, programming, and problem-solving. Through coding activities, technology demonstrations, project presentations, quizzes, and collaborative challenges, students can develop logical thinking, digital literacy, and an interest in emerging technologies. The club also promotes creativity and innovation by encouraging students to explore practical applications of technology in everyday life.'], ['Coding', 'Tech demos', 'Projects', 'Quizzes'], 'images (2)/infra and labs/infra_and_labs (22).jpeg'],
    ['Eco Club', ['The Eco Club aims to develop environmental awareness and encourage responsible practices among students. Activities such as campus cleanliness drives, tree-planting initiatives, waste management awareness, recycling campaigns, and sustainability programmes can help students understand the importance of protecting the environment. Through collective action, students are encouraged to adopt environmentally responsible habits and contribute positively to their campus and community.'], ['Cleanliness drives', 'Tree planting', 'Recycling', 'Sustainability'], 'images (2)/infra and labs/infra_and_labs (13).jpeg'],
    ['Literature Club', ['The Literature Club provides a welcoming space for students who enjoy reading, writing, speaking, and exploring ideas through language and literature. Activities may include poetry writing, creative writing, essay competitions, debates, book discussions, storytelling, literary quizzes, and elocution. These activities encourage students to improve their language proficiency, develop critical thinking, strengthen communication skills, and express their perspectives with confidence.', 'The club also provides opportunities for students to explore diverse literary traditions, engage with contemporary issues, and appreciate the power of words as a means of communication, creativity, and social understanding.'], ['Poetry', 'Debates', 'Book discussions', 'Elocution'], 'images/Copy of 255A0769.JPG'],
];

// [title, text, image]
$culture = [
    ['Onam Celebrations', 'Onam is a celebration of Kerala’s rich cultural heritage, traditions, and spirit of togetherness. Onam festivities may include traditional attire, Pookalam competitions, cultural performances, traditional games, and other activities that reflect the joy and diversity of Kerala’s cultural traditions. These celebrations provide students with opportunities to appreciate their heritage while sharing the festive spirit with the wider campus community.', 'video-onam.jpg'],
    ['Pongal Celebrations', 'Pongal celebrates gratitude, prosperity, agriculture, and the importance of nature in everyday life. Pongal festivities may include traditional decorations, cultural performances, festive activities, and programmes that introduce students to the significance of the harvest festival. Such celebrations encourage cultural appreciation and provide opportunities for students to learn about and participate in regional traditions.', 'images/SHI00003.JPG'],
    ['Annual Cultural Fests', 'Annual cultural festivals offer students a platform to showcase their talents, creativity, and enthusiasm through music, dance, drama, fashion, literary events, art, and other competitions. These events encourage students from different departments to work together, organise programmes, participate in competitions, and celebrate their achievements. Cultural fests also create opportunities for collaboration, friendship, and the development of organisational and leadership skills.', 'event-04.jpg'],
    ['Special Days and Cultural Programmes', 'Observances of important national days, language-related celebrations, literary events, and other cultural occasions encourage students to engage with history, language, heritage, and contemporary social issues. Through performances, presentations, competitions, and awareness programmes, students can develop a deeper appreciation of cultural diversity and shared values.', 'event-11.jpg'],
];

// [title, subtitle, summary, tags, icon, image]
$amenities = [
    [
        'Residential Hostels',
        'A Home Away from Home',
        'Safe, well-maintained separate hostels for boys and girls featuring comfortable rooms, nutritious dining, study spaces, and 24/7 wardens.',
        ['Boys & Girls Hostels', 'Nutritious Dining', '24/7 Security'],
        'bed',
        'images (2)/infra and labs/infra_and_labs (17).jpeg',
    ],
    [
        'Dining & Cafeteria',
        'A Space to Connect',
        'A spacious, hygienic dining hall serving fresh meals, snacks, and refreshments throughout the day in a welcoming social setting.',
        ['Hygienic Kitchen', 'Fresh Daily Meals', 'Social Hub'],
        'utensils',
        'images (2)/infra and labs/infra_and_labs (32).jpeg',
    ],
    [
        'Green Campus',
        'Growing with Nature',
        'Spread across a lush, eco-friendly landscape  with tree-lined walkways, landscaped gardens, and sustainable campus practices.',
        ['40+ Acre Eco Campus', 'Landscaped Gardens', 'Sustainability'],
        'sprout',
        'images (2)/infra and labs/infra_and_labs (12).jpeg',
    ],
    [
        'Wi-Fi & Digital Connectivity',
        'Learning Without Limits',
        'High-speed campus-wide Wi-Fi and digital learning platforms that empower students to research, collaborate, and learn from anywhere.',
        ['Campus-Wide Wi-Fi', 'ERP & Digital LMS', 'Free Laptops'],
        'wifi',
        'images/Copy of 255A0787 (1).JPG',
    ],
    [
        'Library & Learning Spaces',
        'Discover, Read, and Grow',
        'An automated knowledge center stocked with 4,000+ books, 80+ periodicals, national dailies, and e-resources with seating for 120 readers.',
        ['4,000+ Volumes', '80+ Periodicals', 'Digital E-Library'],
        'book',
        'images (2)/infra and labs/infra_and_labs (34).jpeg',
    ],
    [
        'Classrooms, Laboratories & Academic Facilities',
        'Hands-On Academic Excellence',
        'ICT-enabled tiered classrooms, three state-of-the-art computer labs, and specialized science laboratories built for interactive learning.',
        ['Smart Classrooms', '3 Computer Labs', 'Science & Psych Labs'],
        'monitor',
        'images (2)/infra and labs/infra_and_labs (20).jpeg',
    ],
    [
        'Common Areas & Student Interaction',
        'Collaborate and Unwind',
        'Vibrant student lounges, open courtyards, and collaborative corners designed for peer discussions, group projects, and creative exchange.',
        ['Student Lounges', 'Peer Collaboration', 'Open Courtyards'],
        'chat',
        'gallery-13.jpg',
    ],
    [
        'Cleanliness, Safety & Campus Responsibility',
        'Safe, Clean, and Supportive',
        'A disciplined, ragging-free, and eco-conscious campus with round-the-clock security, CCTV monitoring, and dedicated student welfare support.',
        ['24/7 Surveillance', 'Anti-Ragging Campus', 'Clean & Green'],
        'shield',
        'images (2)/infra and labs/infra_and_labs (4).jpeg',
    ],
];

// [title, paragraphs, icon]
$support = [
    ['Student Leadership & Representation', [
        'Student leadership provides valuable opportunities for learners to develop responsibility, confidence, teamwork, communication, and decision-making skills. Through student representatives, student councils, departmental activities, and other approved leadership initiatives, students can participate in campus activities and contribute their ideas to the college community.',
        'Leadership opportunities encourage students to understand the importance of cooperation, accountability, and respectful communication. By assisting with events, coordinating student activities, supporting peer participation, and sharing student perspectives, they can gain practical experience in organising and working collaboratively.',
        'Student representatives can also serve as a communication link between students and the institution by conveying suggestions, concerns, and feedback through appropriate channels.',
        'Such experiences help students develop organisational abilities, interpersonal skills, and a sense of responsibility that can benefit them in their future academic and professional lives.',
    ], 'award'],
    ['Faculty Advisory & Mentorship Programme', [
        'Faculty mentorship plays an important role in supporting students throughout their academic journey. A supportive relationship between faculty members and students can encourage open communication, academic improvement, personal development, and informed decision-making.',
        'Through faculty advisory or mentorship arrangements, students may receive guidance on academic progress, classroom participation, study habits, time management, attendance, and other learning-related concerns. Mentors can help students recognise their strengths, identify areas for improvement, and set realistic goals for their academic development.',
        'Mentorship also provides an opportunity for students to discuss difficulties they may encounter during their studies and seek appropriate guidance. Faculty members can offer constructive feedback, encourage independent learning, and direct students towards relevant institutional support when necessary.',
        'Regular interactions, where arranged by the institution, can help mentors understand student progress and provide timely encouragement. These interactions should be conducted with professionalism, respect for privacy, and sensitivity to individual circumstances.',
        'The ultimate aim of faculty mentorship is to help students become independent learners who can approach challenges with confidence, make responsible choices, and work towards their goals.',
    ], 'users'],
    ['Student Wellness & Emotional Well-being', [
        'Student well-being is an important part of a positive and productive learning experience. Academic responsibilities, examinations, personal changes, and future career decisions can sometimes create stress or uncertainty. A supportive campus environment helps students understand the importance of maintaining emotional balance, seeking guidance, and developing healthy coping strategies.',
        'Wellness awareness initiatives can introduce students to topics such as stress management, emotional well-being, positive relationships, self-confidence, time management, and healthy lifestyle choices. Seminars, awareness sessions, workshops, and other student development programmes can encourage open and respectful conversations about well-being.',
        'Where counselling services or designated support personnel are available, students are provided with clear information about how to access these services and request assistance.',
        'The college can also encourage students to approach authorised faculty members or designated institutional support personnel when they need guidance. Concerns requiring specialised assistance should be referred to appropriately qualified professionals or relevant support services.',
        'SAN aims to foster an environment in which students feel respected, supported, and encouraged to seek help when necessary, without fear of judgement or discrimination.',
    ], 'heart'],
    ['Student Safety & Campus Guidelines', [
        'A safe and respectful campus environment is essential for effective learning and student development. Students, faculty members, and staff share a responsibility to maintain an atmosphere that values dignity, inclusion, mutual respect, and responsible behaviour.',
        'Clear campus guidelines help students understand institutional expectations, available support mechanisms, and the appropriate procedures for reporting concerns.',
    ], 'shield'],
    ['Academic Guidance & Learning Support', [
        'Students may have different learning needs, academic strengths, and areas requiring additional attention. Academic guidance can help them understand course expectations, improve study habits, and make steady progress throughout their programmes.',
        'Support may include faculty consultations, clarification of subject-related doubts, academic feedback, study planning, examination preparation, and guidance on assignments or projects. Where organised by the institution, remedial classes, peer-learning initiatives, bridge programmes, and additional academic support sessions can help students strengthen their understanding of particular subjects.',
        'Students can also be encouraged to develop independent learning habits, set academic goals, manage their time effectively, and seek clarification whenever necessary.',
        'By promoting consistent effort and constructive feedback, academic guidance helps students approach learning with greater confidence and responsibility.',
    ], 'book'],
    ['Career Guidance & Future Readiness', [
        'Preparing students for life after graduation requires awareness, planning, and the development of relevant skills. Career guidance initiatives can help students explore employment opportunities, higher education pathways, professional qualifications, and emerging fields related to their interests.',
        'Through career awareness sessions, workshops, seminars, industry interactions, skill-development activities, and other approved programmes, students can gain a better understanding of workplace expectations and professional opportunities.',
        'Students may also benefit from guidance on communication skills, résumé preparation, interview techniques, teamwork, professional conduct, and goal-setting. These experiences can help them identify their strengths and prepare for the transition from college to employment or further study.',
        'Details of placement support, career counselling, internship coordination, and higher education guidance are presented clearly for students.',
        'The objective is to encourage students to make informed choices and approach their future with confidence, adaptability, and a willingness to learn.',
    ], 'briefcase'],
    ['Inclusion, Respect & Equal Opportunity', [
        'A welcoming educational environment recognises the dignity, abilities, and aspirations of every student. Inclusion involves creating opportunities for participation, encouraging respectful communication, and ensuring that students know how to access the support available to them.',
        'Students should be encouraged to appreciate differences in perspectives, backgrounds, interests, and abilities. Campus activities, awareness programmes, student interactions, and appropriate institutional support mechanisms can help promote empathy, cooperation, and a sense of belonging.',
        'The college communicates its applicable policies on equal opportunity, accessibility, grievance redressal, and student welfare through clear and accessible channels.',
        'By encouraging fairness, respect, and responsible participation, SAN can strengthen a campus culture in which students feel valued and motivated to contribute positively to the community.',
    ], 'globe'],
    ['Feedback, Grievance Redressal & Student Voice', [
        'Student feedback provides an important opportunity to understand learning experiences, identify concerns, and improve institutional support. Appropriate feedback mechanisms can encourage students to communicate their suggestions and raise concerns through established channels.',
        'Students are informed about the relevant grievance redressal mechanism, the procedure for submitting a complaint, and the appropriate office or designated personnel to contact.',
        'Clear communication about these procedures can help students understand where to seek assistance and what steps to follow when a concern arises. Matters should be handled in accordance with applicable institutional policies, with due regard for confidentiality, fairness, and procedural requirements.',
        'Encouraging constructive feedback also helps students develop communication skills, participate responsibly in campus life, and contribute to the continuous improvement of the educational environment.',
    ], 'chat'],
];

// Safety guideline cards (shown under item 04): [title, text, icon]
$safety = [
    ['Respectful Conduct', 'Students are encouraged to treat others with courtesy, respect different perspectives, communicate responsibly, and contribute to a positive campus atmosphere.', 'heart'],
    ['Anti-Ragging Awareness', 'Students should be made aware of the institution’s anti-ragging policies, applicable regulations, and approved reporting procedures. Any student experiencing or witnessing ragging should be encouraged to report the matter through the designated institutional channels.', 'shield'],
    ['Prevention of Harassment and Discrimination', 'The college communicates its applicable policies and complaint mechanisms relating to harassment, discrimination, and other forms of misconduct. Students should know where to seek assistance and how concerns are addressed under institutional procedures.', 'scale'],
    ['Digital Safety and Responsible Online Behaviour', 'Students are encouraged to use digital platforms responsibly, protect personal information, respect others’ privacy, and avoid cyberbullying or the unauthorised sharing of photographs and personal content.', 'lock'],
    ['Emergency Awareness', 'Relevant emergency contacts, campus safety instructions, and reporting procedures should be made accessible to students so that they know how to respond appropriately when assistance is required.', 'phone'],
    ['Shared Responsibility', 'Maintaining a safe campus requires awareness, cooperation, and respect for institutional rules. Students are encouraged to report genuine concerns through the appropriate channels and contribute to a culture of accountability and care.', 'users'],
];

$gallery = array_map('fig', [
    'gallery-09.jpg', 'event-01.jpg', 'images/PRN06039.JPG',
    'event-06.jpg', 'images/PRN05301.JPG', 'images/PRN05520.JPG', 'images/PRN06595.JPG',
    'images/PRN06380.JPG', 'images/PRN06493.JPG', 'images/PRN06616.JPG', 'images/PRN06694.JPG',
]);

$featured = ['https://youtu.be/7Ej46CX5Kgg', 'images/Copy of TWL08690.jpg', 'san Onam Celebration 2k25'];
$videos = [
    ['https://youtu.be/TYzgi98nWJQ', 'life-hero-1.jpeg', 'Freshers Blast 2K25 At San International College of Arts & Sciences, Coimbatore'],
    ['https://youtu.be/wQQSMNCSxhc', 'video-freshers-24.jpg', 'Freshers Blast 2024 | SAN International College of Arts & Science, Coimbatore'],
    ['https://youtu.be/-HBAFvdLRh0', 'video-natural.jpg', 'San International college of arts and science  — Natural View'],
];
$events = ['images/IMG_3371.JPG.jpeg', 'images/IMG_3372.JPG.jpeg', 'images/PRN06718.JPG', 'images/PRN06755.JPG', 'images/PRN06770.JPG'];

function lf_banner($lead, $accent)
{
    return '<p class="lf-banner reveal"><strong>' . e($lead) . ' —</strong> <em class="serif">' . e($accent) . '</em></p>';
}
?>

<!-- ============ Hero ============ -->
<section class="lf-hero">
    <div class="lf-hero__row">
        <div class="lf-hero__text">
            <?= chip('Be part of SAN International College of Arts and Science', 'glass') ?>
            <h1 class="lf-hero__title">Life<em class="serif">@</em>San</h1>
            <p class="lf-hero__sub">Experience, Evolve, &amp; <em class="serif">Excel</em> at SAN</p>
        </div>
        <p class="body-s lf-hero__intro">Welcome to Life at SAN, where learning goes beyond the classroom and every experience becomes an opportunity for growth. At SAN International College of Arts and Science, we believe that college life is a meaningful journey of discovery, creativity, friendship, and personal development. Our campus brings together academic learning, practical experiences, cultural celebrations, extracurricular activities, and student engagement to create a vibrant and enriching college experience.</p>
    </div>
    <div class="lf-hero__photos">
        <?php foreach ($heroPhotos as $i => $p): ?>
            <img class="<?= $i % 2 ? 'is-low' : '' ?>" src="<?= fig($p) ?>" alt="SANICAS students on campus" <?= $i > 2 ? 'loading="lazy"' : 'fetchpriority="high"' ?>>
        <?php endforeach; ?>
    </div>
</section>

<!-- ============ Section tabs ============ -->
<nav class="page-tabs" aria-label="Life@San sections" data-page-tabs>
    <div class="filter-tabs">
        <?php $i = 0; foreach ($tabs as $label => $id): $i++; ?>
            <a class="filter-tab<?= $i === 1 ? ' is-active' : '' ?>" href="#<?= $id ?>"><?= e($label) ?><span class="count"><?= sprintf('%02d', $i) ?></span></a>
        <?php endforeach; ?>
    </div>
</nav>

<!-- ============ Campus vibe ============ -->
<section class="lf-vibe page-anchor" id="campus-vibe">
    <div class="wrap">
        <div class="split-row">
            <div class="split-row__text">
                <?= chip('Campus Vibe', 'terra') ?>
                <h2 class="h2 accent-ochre">Where learning meets <em class="serif">life</em></h2>
                <p class="body">From interactive classroom sessions and hands-on laboratory learning to cultural festivities, student gatherings, club activities, and collaborative projects, life at SAN offers students opportunities to explore their interests, discover their strengths, and develop essential life skills.</p>
                <p class="caption muted">Students are encouraged to express their ideas, participate actively, work together, and embrace new challenges with confidence.</p>
                <p class="caption muted">The campus experience also promotes teamwork, leadership, communication, creativity, and a sense of belonging. Through academic and extracurricular participation, students can build meaningful relationships, broaden their perspectives, and prepare themselves for future academic and professional opportunities.</p>
                <p class="caption muted lf-vibe__gap">The Life at SAN section captures the energy and spirit of campus life through photographs, videos, student experiences, and memorable moments. It offers prospective students, parents, and visitors a glimpse into the learning environment, student interactions, campus activities, and opportunities that contribute to the overall college experience.</p>
            </div>
            <div class="photo-stack" aria-hidden="true">
                <img class="photo-stack__a" src="<?= fig('images/Copy of 255A0853.JPG') ?>" alt="" loading="lazy">
                <img class="photo-stack__b" src="<?= fig('welcome-pill-3.jpg') ?>" alt="" loading="lazy">
                <span class="photo-badge"><span class="photo-badge__disc"><?= xicon('heart') ?></span><span><strong>Life beyond the classroom</strong><small>Learn · Connect · Grow</small></span></span>
            </div>
        </div>

        <div class="eee-row">
            <div class="eee eee--ochre reveal"><span class="caption">01</span><p class="eee__word serif">Experience</p><p class="eee__line">the excitement of campus life</p></div>
            <div class="eee eee--ink reveal"><span class="caption">02</span><p class="eee__word serif">Evolve</p><p class="eee__line">through learning and new opportunities</p></div>
            <div class="eee eee--sage reveal"><span class="caption">03</span><p class="eee__word serif">Excel</p><p class="eee__line">by discovering your potential</p></div>
        </div>
        <div class="lf-closing">
            <p class="body">At SAN, every day is an opportunity to learn, connect, grow, and create memories that last a lifetime.</p>
            <p class="lf-closing__accent">Experience, Evolve, &amp; Excel at SAN — <em class="serif">Where Learning Meets Life.</em></p>
        </div>

        <!-- Six pillars -->
        <div class="pg-head lf-pillars-head">
            <div class="pg-head__title">
                <?= chip('Six pillars', 'ochre') ?>
                <h2 class="h2">Six pillars of campus life</h2>
            </div>
            <p class="caption muted">The Life at SAN section is the primary window into the vibrant culture, student experiences, and extracurricular environment at SAN International College of Arts and Science — structured into six core engagement pillars.</p>
        </div>
        <div class="pillar-grid">
            <?php foreach ($pillars as $k => [$kick, $t, $txt, $img, $href]): ?>
                <a class="pillar reveal" href="#<?= e($href) ?>">
                    <span class="pillar__img"><img src="<?= fig($img) ?>" alt="" loading="lazy"></span>
                    <span class="pillar__body">
                        <span class="pillar__top"><span class="caption muted"><?= sprintf('%02d', $k + 1) ?></span><span class="pillar__disc"><?= icon('arrow-up-right') ?></span></span>
                        <span class="overline muted"><?= e($kick) ?></span>
                        <span class="pillar__title"><?= e($t) ?></span>
                        <span class="caption muted"><?= e($txt) ?></span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ Voices of SAN ============ -->
<section class="lf-voices page-anchor" id="voices">
    <div class="wrap">
        <div class="lf-intro">
            <div class="lf-intro__title">
                <?= chip('Student Blogs & Stories', 'ochre') ?>
                <h2 class="h2">Voices of <em class="serif lf-block ochre">SAN</em></h2>
                <p class="lf-intro__sub">Every Student Has a Story to Tell</p>
            </div>
            <div class="lf-intro__text">
                <p>Voices of SAN is a dedicated student blogging platform that celebrates the experiences, ideas, achievements, and creative expressions of students at SAN International College of Arts and Science. It provides a space for students to share their college journeys, academic experiences, personal reflections, internship opportunities, project work, and creative writing with the wider college community.</p>
                <p>College life is filled with experiences that inspire learning, build confidence, and shape individual perspectives. Through Voices of SAN, students can document these moments in their own words, offering authentic insights into campus life from a student’s point of view. The platform aims to encourage peer-to-peer learning, promote student engagement, and create a digital collection of stories that reflects the diversity, enthusiasm, and aspirations of the SAN community.</p>
            </div>
        </div>

        <h3 class="lf-sub-h">What You Can Explore</h3>
        <div class="tone-grid">
            <?php foreach ($explore as $k => [$t, $txt, $tone, $ic]): ?>
                <article class="tone-card tone-card--<?= $tone ?> reveal">
                    <div class="tone-card__top"><span class="tone-card__disc"><?= xicon($ic) ?></span><span class="caption"><?= sprintf('%02d', $k + 1) ?></span></div>
                    <h4 class="tone-card__title"><?= e($t) ?></h4>
                    <p class="caption"><?= e($txt) ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <?php /*
        <div class="blog-panel">
            <div class="pg-head">
                <div class="pg-head__title">
                    <?= chip('Featured module', 'terra') ?>
                    <h3 class="h3">From the student blog</h3>
                </div>
                <p class="caption muted">Integrating student blogs directly into the college site builds authenticity and gives prospective students a real view of campus life. The blog features four main content categories.</p>
            </div>
            <div class="blog-grid">
                <?php foreach ($blog as [$cat, $tone, $txt, $img]): ?>
                    <article class="blog-card reveal">
                        <div class="blog-card__img"><img src="<?= fig($img) ?>" alt="" loading="lazy"><?= chip($cat, $tone) ?></div>
                        <div class="blog-card__body">
                            <p class="caption muted">[Student name] · [Programme] · [DD-MM-YYYY]</p>
                            <p class="blog-card__title">[Story title]</p>
                            <p class="caption muted"><?= e($txt) ?></p>
                            <a class="blog-card__more" href="#">Read story <?= icon('arrow-right') ?></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
        */ ?>

        <div class="contribute reveal">
            <div class="contribute__title">
                <?= chip('Contribute', 'glass') ?>
                <h3 class="h2">Write. Share. <em class="serif lf-block ochre">Inspire.</em></h3>
                <?= btn('Submit your story', url('contact.php'), 'primary') ?>
            </div>
            <div class="contribute__text">
                <p>Voices of SAN encourages students to become active contributors to the college community by sharing their ideas and experiences. Writing for the platform can help students strengthen their communication skills, develop creativity, improve critical thinking, and build confidence in expressing their views.</p>
                <p>The platform also provides opportunities for students to gain experience in content creation, student journalism, storytelling, and digital communication. By reading one another’s stories, students can discover different perspectives, learn from shared experiences, and develop a stronger sense of connection with their peers.</p>
                <p class="contribute__note"><?= xicon('shield') ?><span>Student submissions may be reviewed by the designated faculty team before publication to ensure originality, appropriate language, accuracy, and respect for individual privacy.</span></p>
            </div>
        </div>

        <div class="lf-closing lf-closing--rule">
            <p class="lf-closing__big">Your Voice. Your Story. Your SAN.</p>
            <p class="caption muted">Every student experience has the potential to inspire someone. Through Voices of SAN, we invite students to share their journeys, celebrate their achievements, express their creativity, and contribute to the evolving story of campus life.</p>
        </div>
        <?= lf_banner('Voices of SAN', 'Real Stories. Student Perspectives. Endless Possibilities.') ?>
    </div>
</section>

<!-- ============ Clubs & culture ============ -->
<section class="lf-clubs page-anchor" id="clubs">
    <div class="wrap">
        <div class="lf-intro">
            <div class="lf-intro__title">
                <?= chip('Clubs & Cultural Activities', 'glass') ?>
                <h2 class="h2">Discover Your Passion. <em class="serif lf-block ochre">Celebrate Your Talents.</em></h2>
            </div>
            <div class="lf-intro__text">
                <p>At SAN International College of Arts and Science, clubs and cultural activities form an important part of campus life, providing students with opportunities to explore their interests, showcase their talents, develop leadership qualities, and build meaningful connections beyond the classroom. We believe that education is enriched when students are encouraged to participate in creative, cultural, literary, technological, and socially responsible activities.</p>
                <p>Through student clubs, competitions, workshops, celebrations, and collaborative initiatives, students can discover new interests, exchange ideas, and develop essential skills such as teamwork, communication, creativity, organisation, and problem-solving. These experiences help students build confidence, appreciate diverse perspectives, and make their college journey more engaging and memorable.</p>
            </div>
        </div>

        <h3 class="lf-sub-h">Explore Our Student Clubs</h3>
        <div class="club-grid">
            <?php foreach ($clubs as $k => [$t, $paras, $tags, $img]): ?>
                <article class="club reveal">
                    <div class="club__img"><img src="<?= fig($img) ?>" alt="<?= e($t) ?> at SANICAS" loading="lazy"><span class="club__num"><?= sprintf('%02d', $k + 1) ?></span></div>
                    <div class="club__body">
                        <h4 class="club__title"><?= e($t) ?></h4>
                        <?php foreach ($paras as $p): ?><p class="caption"><?= e($p) ?></p><?php endforeach; ?>
                        <ul class="tag-row"><?php foreach ($tags as $tg): ?><li><?= e($tg) ?></li><?php endforeach; ?></ul>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="pg-head lf-culture-head">
            <h3 class="lf-sub-h lf-sub-h--flush">Celebrating Culture and <em class="serif ochre">Campus Life</em></h3>
            <p class="caption">Cultural celebrations bring students together and create opportunities to appreciate traditions, share experiences, and strengthen the sense of community within the college. At SAN, cultural programmes and festive celebrations can provide memorable experiences that encourage participation, creativity, inclusiveness, and mutual respect.</p>
        </div>
        <div class="culture-grid">
            <?php foreach ($culture as [$t, $txt, $img]): ?>
                <article class="culture reveal">
                    <div class="culture__img"><img src="<?= fig($img) ?>" alt="<?= e($t) ?>" loading="lazy"></div>
                    <div class="culture__body"><h4 class="culture__title"><?= e($t) ?></h4><p class="caption muted"><?= e($txt) ?></p></div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="duo">
            <div class="duo__card duo__card--dark reveal">
                <span class="duo__disc"><?= icon('users') ?></span>
                <h4 class="duo__title">Learn, Participate, and Grow</h4>
                <p class="caption">Participation in clubs and cultural activities allows students to discover abilities that may not always emerge in a traditional classroom setting. Organising an event, performing before an audience, working on a group project, or participating in a competition can help students develop confidence, discipline, teamwork, time management, and leadership.</p>
                <p class="caption">These experiences also create opportunities for students from different academic backgrounds to interact, exchange ideas, and learn from one another. Whether exploring technology, expressing creativity through art, protecting the environment, or celebrating literature and culture, students can find meaningful ways to contribute to campus life.</p>
            </div>
            <div class="duo__card duo__card--ochre reveal">
                <span class="duo__disc"><?= xicon('heart') ?></span>
                <h4 class="duo__title">Be a Part of the SAN Community</h4>
                <p class="caption">At SAN International College of Arts and Science, student participation is an opportunity to discover passions, develop talents, and create lasting memories. Clubs and cultural activities encourage students to step beyond their comfort zones, embrace new experiences, and become active members of the college community.</p>
                <p class="duo__motto">Explore your interests. Express your creativity. Celebrate diversity. Build memories that last a lifetime.</p>
            </div>
        </div>
        <p class="lf-banner lf-banner--center reveal"><strong>Clubs &amp; Cultural Activities at SAN —</strong> <em class="serif">Where Talent Meets Opportunity and Every Celebration Brings Us Together.</em></p>
    </div>
</section>

<!-- ============ Sports ============ -->
<section class="lf-sports page-anchor" id="sports">
    <div class="wrap">
        <div class="lf-intro">
            <div class="lf-intro__title">
                <?= chip('Sports, Fitness & Recreation', 'sage') ?>
                <h2 class="h2">Stay Active. Build Strength. <em class="serif lf-block ochre">Play to Excel.</em></h2>
            </div>
            <div class="lf-intro__text">
                <p>At SAN International College of Arts and Science, sports, fitness, and recreational activities are important components of a balanced and enriching college experience. We believe that education extends beyond academic achievement and that physical activity plays a valuable role in developing discipline, confidence, teamwork, perseverance, and a positive attitude towards life.</p>
                <p>Sports provide students with opportunities to discover their athletic abilities, challenge themselves, develop healthy habits, and build meaningful relationships with their peers. Through participation in games, fitness activities, sports competitions, and recreational programmes, students can learn the importance of dedication, cooperation, sportsmanship, and continuous improvement.</p>
                <p>The Sports, Fitness &amp; Recreation section celebrates the spirit of active student participation and highlights opportunities for students to balance academic responsibilities with physical well-being and recreation.</p>
            </div>
        </div>

        <div class="sports-row">
            <div class="sports-row__text">
                <h3 class="lf-sub-h lf-sub-h--flush">Indoor and Outdoor Sports</h3>
                <p class="caption muted">Sports and games encourage students to develop physical coordination, strategic thinking, concentration, and team spirit. Indoor and outdoor sporting activities provide opportunities for students with different interests and abilities to participate, practise, and improve their performance.</p>
                <p class="caption muted">Participation in these activities enables students to develop discipline, respect their opponents, follow rules, and appreciate the importance of fair play.</p>
            </div>
            <div class="sport-card sport-card--ink reveal">
                <div class="sport-card__top"><span class="sport-card__disc"><?= xicon('target') ?></span><span class="caption">Indoor</span></div>
                <h4 class="sport-card__title">Indoor Sports</h4>
                <p class="caption">Indoor games and recreational activities help students improve concentration, strategic thinking, coordination, and decision-making skills. Depending on the facilities available, activities may include chess, carrom, badminton, table tennis, and other indoor games.</p>
                <ul class="tag-row"><li>Chess</li><li>Carrom</li><li>Badminton</li><li>Table tennis</li></ul>
            </div>
            <div class="sport-card sport-card--ochre reveal">
                <div class="sport-card__top"><span class="sport-card__disc"><?= xicon('trophy') ?></span><span class="caption">Outdoor</span></div>
                <h4 class="sport-card__title">Outdoor Sports</h4>
                <p class="caption">Outdoor sporting activities encourage physical fitness, endurance, teamwork, and healthy competition. Depending on the facilities and arrangements available, students may participate in games such as football, volleyball, basketball, cricket, athletics, and other outdoor sports.</p>
                <ul class="tag-row tag-row--white"><li>Football</li><li>Volleyball</li><li>Basketball</li><li>Cricket</li><li>Athletics</li></ul>
            </div>
        </div>

        <div class="media-row reveal">
            <div class="media-row__img"><img src="<?= fig('images (2)/sports/sports (2).jpeg') ?>" alt="SANICAS sports team with faculty and Physical Director" loading="lazy"></div>
            <div class="media-row__text">
                <span class="mini-disc"><?= xicon('trophy') ?></span>
                <h3 class="h3">Annual Sports Meet</h3>
                <p class="caption muted">The Annual Sports Meet is an opportunity to celebrate athletic talent, determination, teamwork, and the enthusiasm of the student community. It encourages students to participate in sporting events, demonstrate their abilities, and represent their departments with pride.</p>
                <p class="caption muted">The programme may include track and field events, team games, individual competitions, and recreational activities, according to the college’s sports schedule. Students are encouraged to participate with dedication, support their teammates, and appreciate the achievements of fellow participants.</p>
                <p class="caption muted">Beyond winning medals and trophies, the Annual Sports Meet promotes unity, perseverance, mutual encouragement, and a healthy competitive spirit. It provides students with memorable experiences and reinforces the value of effort, discipline, and sportsmanship.</p>
            </div>
        </div>
        <div class="media-row media-row--flip reveal">
            <div class="media-row__img"><img src="<?= fig('sc-yoga.jpg') ?>" alt="SANICAS students practicing yoga and wellness" loading="lazy"></div>
            <div class="media-row__text">
                <span class="mini-disc"><?= xicon('activity') ?></span>
                <h3 class="h3">Fitness and Wellness</h3>
                <p class="caption muted">Physical fitness contributes to overall well-being and helps students maintain an active and balanced lifestyle. SAN encourages awareness of healthy habits and the importance of incorporating physical activity into everyday life.</p>
                <p class="caption muted">Fitness-related initiatives may include warm-up exercises, stretching sessions, fitness awareness programmes, recreational games, yoga, and wellness activities, depending on the programmes organised by the institution.</p>
                <p class="caption muted">Such activities can help students understand the importance of regular movement, maintaining physical health, managing daily routines, and making responsible lifestyle choices. They also provide opportunities to refresh the mind, reduce academic fatigue, and develop a positive approach to personal well-being.</p>
            </div>
        </div>

        <div class="achieve reveal">
            <div class="achieve__text">
                <?= chip('Representing SAN', 'glass') ?>
                <h3 class="h3">Inter-Collegiate Tournaments and Sporting Achievements</h3>
                <p class="caption">Participation in inter-collegiate tournaments provides students with opportunities to represent SAN, demonstrate their sporting abilities, and interact with students from other institutions. These experiences expose students to different playing styles, competitive environments, and new challenges.</p>
                <p class="caption">Through participation in tournaments and sporting events, students can develop resilience, adaptability, teamwork, leadership, and the ability to perform under pressure. Representing the college also encourages a sense of pride, responsibility, and commitment.</p>
                <p class="caption">This space highlights verified tournament participation, student achievements, medals, certificates, team photographs, and noteworthy sporting performances to recognise the dedication and efforts of students.</p>
            </div>
            <div class="achieve__ph">
                <div class="ph ph--tall"><img src="<?= fig('images (2)/sports/sports (1).jpeg') ?>" alt="SANICAS volleyball tournament match" loading="lazy"></div>
                <div class="ph"><img src="<?= fig('images (2)/infra and labs/infra_and_labs (18).jpeg') ?>" alt="SANICAS campus football turf and ground" loading="lazy"></div>
                <div class="ph"><img src="<?= fig('images (2)/sports/sports (6).jpeg') ?>" alt="SANICAS football team" loading="lazy"></div>
            </div>
        </div>

        <div class="media-row reveal">
            <div class="media-row__img"><img src="<?= fig('gallery-07.jpg') ?>" alt="Students relaxing on the lawn" loading="lazy"></div>
            <div class="media-row__text">
                <span class="mini-disc"><?= icon('users') ?></span>
                <h3 class="h3">Recreation and Student Engagement</h3>
                <p class="caption muted">Recreational activities offer students opportunities to relax, interact with peers, and enjoy meaningful experiences beyond academic work. Friendly matches, informal games, team-building activities, and other recreational programmes can create a welcoming atmosphere and encourage participation among students.</p>
                <p class="caption muted">These experiences help strengthen friendships, promote cooperation, and create a healthy balance between study and leisure. They also remind students that personal development includes not only academic progress but also physical well-being, social interaction, and the ability to enjoy shared experiences.</p>
            </div>
        </div>

        <div class="lf-closing lf-closing--rule">
            <p class="lf-closing__big">Play Together. Grow Together.</p>
            <div>
                <p class="caption muted">At SAN International College of Arts and Science, sports and recreation represent more than competition. They provide opportunities to discover potential, develop character, celebrate achievements, and build lifelong habits that support personal growth.</p>
                <div class="mini-trio">
                    <p>Every game teaches <strong>teamwork.</strong></p>
                    <p>Every challenge builds <strong>resilience.</strong></p>
                    <p>Every achievement inspires greater <strong>confidence.</strong></p>
                </div>
            </div>
        </div>
        <?= lf_banner('Sports, Fitness & Recreation at SAN', 'Building Healthy Habits, Strong Character, and a Winning Spirit.') ?>
    </div>
</section>

<!-- ============ Campus living ============ -->
<section class="lf-living page-anchor" id="campus-living">
    <div class="wrap">
        <div class="lf-living__header reveal">
            <div class="lf-living__title-col">
                <?= chip('Campus Living & Amenities', 'terra') ?>
                <h2 class="h2">A Welcoming Campus. <em class="serif lf-block ochre">A Comfortable Learning Environment.</em></h2>
            </div>
            <div class="lf-living__intro-col">
                <p class="lf-living__lead">From modern residential hostels and hygienic dining spaces to high-speed Wi-Fi, an automated library, and lush green surroundings — SANICAS provides every resource students need to learn, connect, and thrive comfortably.</p>
                <div class="lf-living__Stats">
                    <span class="lf-living__pill"><strong>40+ Acres</strong> Green Campus</span>
                    <span class="lf-living__pill"><strong>100%</strong> Wi-Fi Enabled</span>
                    <span class="lf-living__pill"><strong>4,000+</strong> Library Volumes</span>
                    <span class="lf-living__pill"><strong>24/7</strong> Hostel &amp; Security</span>
                </div>
            </div>
        </div>

        <div class="amenity-grid">
            <?php foreach ($amenities as $k => [$t, $sub, $summary, $tags, $ic, $img]): ?>
                <article class="amenity reveal">
                    <div class="amenity__media">
                        <img src="<?= fig($img) ?>" alt="<?= e($t) ?> at SANICAS" loading="lazy">
                        <span class="amenity__disc"><?= xicon($ic) ?></span>
                        <span class="amenity__num"><?= sprintf('%02d', $k + 1) ?></span>
                    </div>
                    <div class="amenity__body">
                        <?php if ($sub): ?><p class="amenity__sub serif"><?= e($sub) ?></p><?php endif; ?>
                        <h3 class="amenity__title"><?= e($t) ?></h3>
                        <p class="amenity__desc"><?= e($summary) ?></p>
                        <ul class="amenity__tags">
                            <?php foreach ($tags as $tg): ?>
                                <li><?= e($tg) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <?= lf_banner('Campus Living & Amenities at SAN', 'Creating Space for Learning, Comfort, Connection, and Growth.') ?>
    </div>
</section>

<!-- ============ Student support ============ -->
<section class="lf-support page-anchor" id="student-support">
    <div class="wrap">
        <div class="lf-intro">
            <div class="lf-intro__title">
                <?= chip('Student Support & Mentorship', 'glass') ?>
                <h2 class="h2">Guiding Students. <em class="serif lf-block ochre">Empowering Futures.</em></h2>
            </div>
            <div class="lf-intro__text">
                <p>At SAN International College of Arts and Science, we believe that every student deserves guidance, encouragement, and opportunities to grow academically, personally, and professionally. The college experience involves more than acquiring subject knowledge; it is also a journey of self-discovery, decision-making, relationship-building, and preparation for the future.</p>
                <p>The Student Support &amp; Mentorship section highlights the importance of creating a supportive and inclusive campus environment where students feel encouraged to express themselves, seek guidance, overcome challenges, and pursue their aspirations with confidence.</p>
                <p>Through faculty guidance, student leadership opportunities, personal development initiatives, wellness awareness, and institutional safety practices, SAN aims to help students make informed decisions, develop essential life skills, and become responsible individuals.</p>
                <p>Our approach to student support focuses on understanding individual needs, encouraging active participation, promoting mutual respect, and creating opportunities for continuous development.</p>
            </div>
        </div>

        <div class="support-list">
            <?php foreach ($support as $k => [$t, $paras, $ic]): ?>
                <article class="support-item">
                    <div class="support-item__head">
                        <span class="caption support-item__num"><?= sprintf('%02d', $k + 1) ?></span>
                        <span class="support-item__disc"><?= xicon($ic) ?></span>
                        <h3 class="support-item__title"><?= e($t) ?></h3>
                    </div>
                    <div class="support-item__body">
                        <?php foreach ($paras as $p): ?><p class="caption"><?= e($p) ?></p><?php endforeach; ?>
                        <?php if ($k === 3): ?>
                            <div class="safety-grid">
                                <?php foreach ($safety as [$st, $stxt, $sic]): ?>
                                    <div class="safety"><span class="safety__icon"><?= xicon($sic) ?></span><p class="safety__title"><?= e($st) ?></p><p class="caption"><?= e($stxt) ?></p></div>
                                <?php endforeach; ?>
                            </div>
                            <p class="caption">Verified institutional policies, designated contacts, and current procedures are provided to students rather than relying solely on general safety advice.</p>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="lf-closing lf-closing--rule">
            <p class="lf-closing__big">Together, We Learn. Together, We Grow.</p>
            <div>
                <p class="caption">Student support and mentorship are essential to creating a meaningful college experience. Academic guidance, leadership opportunities, wellness awareness, safety measures, and career preparation can help students navigate challenges, recognise their strengths, and work towards their aspirations.</p>
                <p class="caption">At SAN International College of Arts and Science, student development is a shared responsibility that involves students, faculty members, and the wider college community. Through guidance, encouragement, and appropriate support, we aim to nurture confident, capable, responsible, and compassionate individuals who are prepared to contribute positively to society.</p>
            </div>
        </div>
        <?= lf_banner('Student Support & Mentorship at SAN', 'Every Student Matters. Every Voice Counts. Every Future Deserves Guidance.') ?>
    </div>
</section>

<!-- ============ Gallery, videos, events, Instagram ============ -->
<section class="lf-media page-anchor" id="gallery">
    <div class="wrap">
        <div class="pg-head">
            <div class="pg-head__title">
                <?= chip('Photos', 'sage') ?>
                <h2 class="h2 accent-ochre">Campus <em class="serif">moments</em></h2>
            </div>
            <p class="caption muted">A growing gallery of everyday life at SANICAS — daily student life, modern labs, and social gatherings.</p>
        </div>
        <div class="lf-gallery">
            <div class="lf-gallery__item lf-gallery__item--video reveal">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bBA689-C1oE?si=rAZ4nlgwg_Swsx2G" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <?php foreach ($gallery as $i => $src): ?>
                <button class="lf-gallery__item reveal" data-lightbox="moments" data-src="<?= e($src) ?>" aria-label="Open photo <?= $i + 1 ?>">
                    <img src="<?= e($src) ?>" alt="Campus moment <?= $i + 1 ?>" loading="lazy">
                </button>
            <?php endforeach; ?>
        </div>

        <div class="pg-head lf-videos-head">
            <div class="pg-head__title">
                <?= chip('Videos', 'ochre') ?>
                <h2 class="h2 accent-ochre">Watch <em class="serif">Life@San</em></h2>
            </div>
            <p class="caption muted">Celebrations and campus moments, as featured on the Life@San page.</p>
        </div>
        <div class="lf-videos">
            <a class="lf-video lf-video--main" href="<?= e($featured[0]) ?>" data-video="<?= e($featured[0]) ?>">
                <span class="lf-video__thumb"><img src="<?= fig($featured[1]) ?>" alt="" loading="lazy"><span class="lf-play"><?= icon('arrow-right') ?></span></span>
                <span class="overline lf-terra">YouTube</span>
                <span class="lf-video__title"><?= e($featured[2]) ?></span>
            </a>
            <?php foreach ($videos as [$href, $img, $t]): ?>
                <a class="lf-video" href="<?= e($href) ?>" data-video="<?= e($href) ?>">
                    <span class="lf-video__thumb"><img src="<?= fig($img) ?>" alt="" loading="lazy"><span class="lf-play"><?= icon('arrow-right') ?></span></span>
                    <span class="overline lf-terra">YouTube</span>
                    <span class="lf-video__title lf-video__title--sm"><?= e($t) ?></span>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="lf-events">
            <?= chip('Celebrations', 'glass') ?>
            <h2 class="h2">College Events &amp; <em class="serif ochre">Festivities</em></h2>
            <div class="lf-events__grid">
                <?php foreach ($events as $i => $img): ?>
                    <button class="lf-events__item" data-lightbox="events" data-src="<?= fig($img) ?>" aria-label="Open event photo <?= $i + 1 ?>">
                        <img src="<?= fig($img) ?>" alt="College event <?= $i + 1 ?>" loading="lazy">
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="lf-insta">
            <div class="lf-insta__text">
                <span class="chip chip--dark"><?= icon('instagram', 'icon lf-insta__icon') ?>Instagram</span>
                <h2 class="h2">Follow campus life on <em class="serif lf-block">Instagram</em></h2>
                <p class="caption"><?= e($SITE['instagram']) ?></p>
            </div>
            <?= btn('Follow ' . $SITE['instagram'], $SITE['insta_href'], 'dark', 'target="_blank" rel="noopener"') ?>
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
