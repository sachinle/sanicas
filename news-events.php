<?php
$page  = 'news-events';
$title = 'News & Events';
$description = 'News and events at SAN International College of Arts and Science — festivals, fests, college day, sports and campus celebrations.';
$heroImage = 'news-fiesta-2026.jpg';
require __DIR__ . '/includes/header.php';

$profile = $SITE['insta_href'];

/*
 * Events, newest first.
 * cats: filter keys (year + type). tag: [label, chip tone] or null.
 * reels: [label => url]. posters: one or two images.
 */
$events = [
    [
        'title' => 'Inter Department Football 5’s Tournament – 2026', 'day' => '30', 'month' => 'Sep 2026',
        'cats' => '2026 sports', 'tag' => ['Sports', 'sage'], 'posters' => ['news-football-2026.jpg'],
        'meta' => 'Date: 30 September – 01 October 2026 · Time: 11:00 AM · Venue: SAN International College of Arts and Science, Coimbatore',
        'body' => 'SAN International College of Arts and Science organised an Inter Department Football 5’s Tournament on 30 September and 01 October 2026. The tournament provided an exciting platform for students from different departments to showcase their football skills, teamwork and sportsmanship. The event encouraged healthy competition, team spirit and active participation among the students. The tournament created an energetic sporting atmosphere on the campus and promoted the importance of physical fitness and team coordination.',
        'reels' => ['Watch reel' => 'https://www.instagram.com/reel/Dd-ZsnbPp4J/'],
    ],
    [
        'title' => 'Onam Celebration – 2026', 'day' => '21', 'month' => 'Aug 2026',
        'cats' => '2026 festivals', 'tag' => ['Festival', 'terra'], 'posters' => ['news-onam-2026.jpg'],
        'meta' => 'Date: 21 August 2026 · Venue: College Ground',
        'body' => 'SAN International College of Arts and Science celebrated Onam on 21 August 2026 at the College Ground. The celebration showcased the rich cultural traditions associated with Kerala’s harvest festival. Students and faculty members participated enthusiastically in the festivities, fostering cultural awareness, friendship, unity and togetherness within the college community.',
        'reels' => ['Watch reel' => 'https://www.instagram.com/reel/DcdKX4-PlMA/'],
    ],
    [
        'title' => 'SAN SET 2026', 'day' => '27', 'month' => 'Mar 2026',
        'cats' => '2026 fests', 'tag' => null, 'posters' => ['news-sanset-2026-a.jpg', 'news-sanset-2026-b.jpg'],
        'meta' => 'Date: 27 March 2026 · Venue: College Ground · Duration: 8 Hours',
        'body' => 'SAN International College of Arts and Science conducted SAN SET on 27 March 2026 at the College Ground. The eight-hour programme featured a range of engaging activities that encouraged student participation, creativity and teamwork. The event created an energetic campus atmosphere and provided students with an opportunity to celebrate their talents and togetherness.',
        'reels' => [
            'Reel 1' => 'https://www.instagram.com/reel/DWahaJTkf4-/',
            'Reel 2' => 'https://www.instagram.com/reel/DWyi31Njw61/',
            'Reel 3' => 'https://www.instagram.com/reel/DXEs-kHiWo4/',
        ],
    ],
    [
        'title' => 'ZETRA – College Day 2026', 'day' => '26', 'month' => 'Mar 2026',
        'cats' => '2026 fests', 'tag' => ['Fest', 'ochre'], 'posters' => ['news-zetra-2026.jpg'],
        'meta' => 'Date: 26 March 2026 · Venue: College Ground',
        'body' => 'SAN International College of Arts and Science organised ZETRA – College Day on 26 March 2026 at the College Ground. The eight-hour celebration brought together students and faculty members for a vibrant campus event. The programme provided a platform for students to showcase their talents, creativity and enthusiasm while celebrating the college community and student achievements.',
        'reels' => ['Reel 1' => $profile, 'Reel 2' => $profile],
    ],
    [
        'title' => 'Pongal Celebration – 2026', 'day' => '08', 'month' => 'Jan 2026',
        'cats' => '2026 festivals', 'tag' => ['Festival', 'terra'], 'posters' => ['news-pongal-2026.jpg'],
        'meta' => 'Date: 08 January 2026 · Venue: College Ground',
        'body' => 'SAN International College of Arts and Science celebrated Pongal on 08 January 2026 at the College Ground. The celebration highlighted the cultural significance of Pongal, the traditional harvest festival of Tamil Nadu. Students and faculty members participated enthusiastically in the celebrations, promoting cultural awareness, togetherness and community spirit.',
        'reels' => [],
    ],
    [
        'title' => 'Christmas Celebration – 2025', 'day' => '12', 'month' => 'Jul 2025',
        'cats' => '2025 festivals', 'tag' => ['Festival', 'terra'], 'posters' => ['news-christmas-2025.jpg'],
        'meta' => 'Date: 12 July 2025',
        'body' => 'SAN International College of Arts and Science organised a Christmas Celebration to bring students and faculty members together in the spirit of joy, sharing and togetherness. The programme highlighted the values of love, peace, friendship and harmony. Students actively participated in the celebration, making the event a memorable campus occasion.',
        'reels' => ['Reel 1' => $profile, 'Reel 2' => $profile],
    ],
    [
        'title' => 'Onam Celebration – 2025', 'day' => '05', 'month' => 'Sep 2025',
        'cats' => '2025 festivals', 'tag' => ['Festival', 'terra'], 'posters' => ['news-onam-2025.jpg'],
        'meta' => 'Date: 05 September 2025 · Venue: College Ground',
        'body' => 'SAN International College of Arts and Science celebrated Onam on 05 September 2025 at the College Ground. The celebration highlighted the rich cultural traditions and festive spirit of Kerala. Students and faculty members participated enthusiastically in various activities, creating an atmosphere of joy, unity and togetherness. The programme provided an opportunity for the college community to celebrate the spirit of Onam and strengthen friendship and cultural bonding among the students.',
        'reels' => ['Watch reel' => $profile],
    ],
    [
        'title' => 'Freshers’ Day Celebration – 2025', 'day' => '12', 'month' => 'Jul 2025',
        'cats' => '2025 fests', 'tag' => ['Fest', 'ochre'], 'posters' => ['news-freshers-2025.jpg'],
        'meta' => 'Date: 12 July 2025 · Venue: College Ground',
        'body' => 'SAN International College of Arts and Science organised the Freshers’ Day Celebration on 12 July 2025 at the College Ground. The programme was organised by the Fine Arts Club to warmly welcome the newly joined students to the college community. The celebration provided an opportunity for students to interact with one another, build friendships and develop a sense of unity and belonging. Various cultural activities and engaging programmes made the event a memorable beginning for the freshers.',
        'reels' => ['Watch reel' => $profile],
    ],
];

$filters = [
    'all' => 'All events', '2026' => '2026', '2025' => '2025',
    'festivals' => 'Festivals', 'fests' => 'Fests & College Day', 'sports' => 'Sports',
];
$countFor = function ($key) use ($events) {
    if ($key === 'all') return count($events);
    return count(array_filter($events, fn($ev) => in_array($key, explode(' ', $ev['cats']), true)));
};

function date_badge($day, $month)
{
    return '<span class="date-badge"><strong>' . e($day) . '</strong><span>' . e($month) . '</span></span>';
}
?>

<!-- ============ Hero + featured event ============ -->
<section class="news-hero">
    <div class="news-hero__head">
        <?= chip('Event News', 'glass') ?>
        <h1 class="news-hero__title">News &amp; Events</h1>
    </div>
    <article class="featured-event reveal">
        <div class="featured-event__poster">
            <img src="<?= fig('news-fiesta-2026.jpg') ?>" alt="SAN FIESTA 2026 poster" fetchpriority="high">
            <?= date_badge('01', 'Oct 2026') ?>
        </div>
        <div class="featured-event__details">
            <div class="chip-row"><?= chip('Latest', 'ochre') ?><?= chip('Food fest', 'glass') ?></div>
            <h2 class="h1">SAN FIESTA 2026</h2>
            <p class="label featured-event__meta">Date: 01 October 2026 · Venue: College Ground</p>
            <p class="body featured-event__body">SAN International College of Arts and Science organised SAN FIESTA 2026, a vibrant food fest, on 01 October 2026. The event brought together students and faculty members in a lively celebration of food, creativity and togetherness. Students actively participated in preparing and presenting a variety of food items, showcasing their culinary skills, teamwork and entrepreneurial spirit. The food fest created an enjoyable campus atmosphere and provided students with an opportunity to share their talents and strengthen their spirit of cooperation.</p>
            <div class="reel-row">
                <a class="reel-pill reel-pill--glass" href="https://www.instagram.com/reel/Dd8nwxwKmRv/" target="_blank" rel="noopener"><?= icon('instagram') ?>Watch reel</a>
            </div>
        </div>
    </article>
</section>

<!-- ============ Filters ============ -->
<section class="news-filters">
    <div class="filter-tabs" role="tablist" data-filter-group="events">
        <?php foreach ($filters as $key => $label): ?>
            <button class="filter-tab<?= $key === 'all' ? ' is-active' : '' ?>" role="tab" aria-selected="<?= $key === 'all' ? 'true' : 'false' ?>" data-filter="<?= e($key) ?>"><?= e($label) ?> <span class="count"><?= sprintf('%02d', $countFor($key)) ?></span></button>
        <?php endforeach; ?>
    </div>
</section>

<!-- ============ Event grid ============ -->
<section class="news-grid-section">
    <div class="event-grid" data-filter-target="events">
        <?php foreach ($events as $ev): $two = count($ev['posters']) > 1; ?>
            <article class="event-card reveal" data-cat="<?= e($ev['cats']) ?>">
                <div class="event-card__posters<?= $two ? ' event-card__posters--two' : '' ?>">
                    <?php foreach ($ev['posters'] as $k => $p): ?>
                        <div class="event-card__poster">
                            <img src="<?= fig($p) ?>" alt="<?= e($ev['title']) ?> poster" loading="lazy">
                            <?php if ($k === 0): ?>
                                <div class="event-card__overlay">
                                    <?= date_badge($ev['day'], $ev['month']) ?>
                                    <?= $ev['tag'] ? chip($ev['tag'][0], $ev['tag'][1]) : '' ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="event-card__body">
                    <h3 class="h4"><?= e($ev['title']) ?></h3>
                    <p class="event-card__meta"><?= icon('map-pin') ?><span><?= e($ev['meta']) ?></span></p>
                    <p class="body-s muted"><?= e($ev['body']) ?></p>
                    <?php if ($ev['reels']): ?>
                        <div class="reel-row">
                            <?php foreach ($ev['reels'] as $label => $href): ?>
                                <a class="reel-pill" href="<?= e($href) ?>" target="_blank" rel="noopener"><?= icon('instagram') ?><?= e($label) ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- ============ Instagram ============ -->
<section class="news-insta">
    <div class="insta-card">
        <p class="h2">@sanicas.cbe</p>
        <?= btn('Follow @sanicas.cbe', $SITE['insta_href'], 'dark', 'target="_blank" rel="noopener"') ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
