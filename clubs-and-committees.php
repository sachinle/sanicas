<?php
$page  = 'clubs-and-committees';
$title = 'Clubs & Committees';
$description = 'Domain clubs, non-domain clubs, cells, committees and statutory bodies of SAN International College of Arts and Science (SANICAS) — Academic Year 2025-2026.';
require __DIR__ . '/includes/header.php';

$D = require __DIR__ . '/includes/clubs-data.php';

$domainClubCount = array_sum(array_map(function ($d) { return count($d['clubs']); }, $D['departments']));

// "On this page" tabs: [label, count, anchor]
$tabs = [];
foreach ($D['departments'] as $d) {
    $tabs[] = [$d['tab'], count($d['clubs']), $d['slug']];
}
$tabs[] = ['NON-DOMAIN CLUBS', count($D['nonDomainTable']['rows']), 'non-domain-clubs'];
$tabs[] = ['CELLS', count($D['cells']['rows']), 'cells'];
$tabs[] = ['COMMITTEES', count($D['committees']['rows']), 'committees'];
$tabs[] = ['STATUTORY BODIES', count($D['statutory']['rows']), 'statutory-bodies'];

/** One club profile card (about / vision / mission / objectives …). */
function club_card($c, $wide = false)
{
    $html = '<article class="club-card' . ($wide ? ' club-card--wide' : '') . ' reveal">';
    $html .= '<header class="club-card__head"><span class="club-card__disc">' . e($c['abbr']) . '</span>'
        . '<h4 class="club-card__title">' . e($c['title']) . '</h4></header>';
    if ($c['convenor'] !== '') {
        $html .= '<p class="club-card__convenor">' . e($c['convenor']) . '</p>';
    }
    $html .= '<div class="club-card__body">';
    foreach ($c['sections'] as $s) {
        $html .= '<section class="club-card__sec">';
        if ($s['heading'] !== '') {
            $html .= '<h5 class="club-card__label">' . e($s['heading']) . '</h5>';
        }
        foreach ($s['items'] as $it) {
            if (isset($it['list'])) {
                $html .= '<ul class="club-card__list">';
                foreach ($it['list'] as $li) {
                    $html .= '<li>' . e($li) . '</li>';
                }
                $html .= '</ul>';
            } else {
                $html .= '<p class="club-card__p' . ($s['heading'] === '' ? ' club-card__p--lead' : '') . '">' . e($it['p']) . '</p>';
            }
        }
        $html .= '</section>';
    }
    return $html . '</div></article>';
}

/** Grid of club cards; an odd last card spans the full width (as in the design). */
function club_grid($clubs)
{
    $html = '<div class="club-grid">';
    $n = count($clubs);
    foreach ($clubs as $i => $c) {
        $html .= club_card($c, $n % 2 === 1 && $i === $n - 1);
    }
    return $html . '</div>';
}

/** Simple 3-column listing table. $tone: light | dark */
function list_table($t, $tone, $caption)
{
    $html = '<div class="cc-table-wrap"><table class="cc-table cc-table--' . e($tone) . '"><caption class="sr-only">' . e($caption) . '</caption><thead><tr>';
    foreach ($t['head'] as $h) {
        $html .= '<th scope="col">' . e($h) . '</th>';
    }
    $html .= '</tr></thead><tbody>';
    foreach ($t['rows'] as $r) {
        $html .= '<tr><td class="cc-table__n">' . e($r[0]) . '</td><th scope="row">' . e($r[1]) . '</th><td>' . e($r[2] ?? '') . '</td></tr>';
    }
    return $html . '</tbody></table></div>';
}
?>

<!-- ============ Hero ============ -->
<section class="cc-hero">
    <div class="wrap">
        <div class="cc-hero__row">
            <div class="cc-hero__text">
                <?= chip('SAN International College of Arts and Science', 'glass') ?>
                <h1 class="cc-hero__title">Clubs &amp; <em class="serif">Committees</em></h1>
                <?= chip('Academic Year 2025- 2026', 'ochre') ?>
            </div>
            <div class="cc-hero__stats">
                <div class="cc-stat cc-stat--ochre"><strong><?= sprintf('%02d', $domainClubCount) ?></strong><span>Domain clubs</span></div>
                <div class="cc-stat cc-stat--cream"><strong><?= sprintf('%02d', count($D['departments'])) ?></strong><span>Departments &amp; Language Club</span></div>
            </div>
        </div>
        <nav class="cc-tabs" aria-label="On this page" data-scrollspy>
            <?php foreach ($tabs as $i => [$label, $count, $id]): ?>
                <a class="cc-tab<?= $i === 0 ? ' is-active' : '' ?>" href="#<?= e($id) ?>"><?= e($label) ?><span class="cc-tab__n"><?= sprintf('%02d', $count) ?></span></a>
            <?php endforeach; ?>
        </nav>
    </div>
</section>

<!-- ============ Domain clubs ============ -->
<section class="cc-section cc-section--cream" id="domain-clubs">
    <div class="wrap">
        <div class="cc-head">
            <?= chip('Domain Clubs', 'ochre') ?>
            <h2 class="h2">Domain clubs</h2>
        </div>

        <?= list_table($D['domainTable'], 'light', 'List of domain clubs') ?>

        <?php foreach ($D['departments'] as $d): ?>
            <article class="dept-block" id="<?= e($d['slug']) ?>">
                <div class="dept-block__intro">
                    <div class="dept-block__visual">
                        <img src="<?= fig($d['img']) ?>" alt="" loading="lazy">
                        <h3 class="dept-block__name"><?= e($d['name']) ?></h3>
                    </div>
                    <div class="dept-block__vision">
                        <p class="overline">Vision</p>
                        <p class="body"><?= e($d['vision']) ?></p>
                    </div>
                    <div class="dept-block__mission">
                        <p class="overline">Mission</p>
                        <ul>
                            <?php foreach ($d['mission'] as $m): ?>
                                <li><span class="dept-block__check"><?= icon('check') ?></span><?= e($m) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?= club_grid($d['clubs']) ?>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- ============ Office bearers ============ -->
<section class="cc-section cc-section--ink" id="office-bearers">
    <div class="wrap">
        <div class="cc-head">
            <?= chip('Domain Club Details · Academic Year 2025- 2026', 'glass') ?>
            <h2 class="h2">Staff in-charge &amp; <em class="serif">student members</em></h2>
        </div>
        <div class="cc-table-wrap">
            <table class="cc-table cc-table--dark cc-table--bearers">
                <caption class="sr-only">Domain club office bearers — staff in-charge and student members</caption>
                <thead>
                    <tr><th scope="col">SL NO</th><th scope="col">Name of the club</th><th scope="col">Staff incharge</th><th scope="col">Student member</th><th scope="col">Department</th><th scope="col">Roll/Position</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($D['bearers'] as $i => $b): ?>
                        <tr>
                            <td class="cc-table__n"><?= $i + 1 ?></td>
                            <th scope="row"><?= e($b['club']) ?></th>
                            <td class="cc-table__staff"><?= implode('<br>', array_map('e', $b['staff'])) ?></td>
                            <td><?= implode('<br>', array_map(function ($s) { return e($s[0]); }, $b['students'])) ?></td>
                            <td><?= implode('<br>', array_map(function ($s) { return e($s[1]); }, $b['students'])) ?></td>
                            <td><?= implode('<br>', array_map(function ($s) { return e($s[2]); }, $b['students'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ Non-domain clubs ============ -->
<section class="cc-section cc-section--cream" id="non-domain-clubs">
    <div class="wrap">
        <div class="cc-head">
            <?= chip('Non-domain clubs', 'ochre') ?>
            <h2 class="h2">Non-domain clubs</h2>
        </div>
        <?= list_table($D['nonDomainTable'], 'light', 'List of non-domain clubs') ?>
        <div class="nd-profiles">
            <?= club_grid($D['nonDomainClubs']) ?>
        </div>
    </div>
</section>

<!-- ============ Cells, committees & statutory bodies ============ -->
<section class="cc-section cc-section--ink" id="cells-committees">
    <div class="wrap">
        <div class="cc-head">
            <?= chip('Domain Club Details · Academic Year 2025- 2026', 'glass') ?>
            <h2 class="h2">Cells, committees &amp; <em class="serif">statutory bodies</em></h2>
        </div>
        <div class="cc-group" id="cells">
            <?= chip('Cells', 'glass') ?>
            <?= list_table($D['cells'], 'dark', 'Cells') ?>
        </div>
        <div class="cc-group" id="committees">
            <?= chip('Committees', 'glass') ?>
            <?= list_table($D['committees'], 'dark', 'Committees') ?>
        </div>
        <div class="cc-group" id="statutory-bodies">
            <?= chip('Statutory Bodies', 'glass') ?>
            <?= list_table($D['statutory'], 'dark', 'Statutory bodies') ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
