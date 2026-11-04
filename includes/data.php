<?php
/**
 * Shared content used on more than one page.
 */

$PARTNERS = [
    'Xylem Commerce Pro', 'IIT Palakkad', 'ASAP Kerala', 'Unity', 'L&T EduTech', 'IATA', 'ACCA',
    'STED Council', 'NSDC', 'IBM', 'SAP', 'AWS', 'Institute of Advanced Virology, Trivandrum',
];

// Course streams shown on Home (and summarised on Courses).
$STREAMS = [
    ['slug' => 'computer-science', 'level' => 'ug', 'name' => 'Computer Science', 'img' => 'images/Copy of 255A4769.JPG',
     'programmes' => ['BCA', 'B.Sc. Computer Science', 'B.Sc. Artificial Intelligence & Machine Learning', 'B.Sc. Information Technology']],
    ['slug' => 'management', 'level' => 'ug', 'name' => 'Management', 'img' => 'images/Copy of 255A4868.JPG', 'pos' => 'center 20%',
     'programmes' => ['BBA CA', 'BBA Aviation Management', 'BBA Logistics & Supply Chain Management']],
    ['slug' => 'commerce', 'level' => 'ug', 'name' => 'Commerce', 'img' => 'images (2)/Classroom/classrooms (5).jpeg', 'pos' => 'center',
     'programmes' => ['B.Com Computer Application', 'B.Com Professional Accounting']],
    ['slug' => 'media', 'level' => 'ug', 'name' => 'Media', 'img' => 'event-09.jpg',
     'programmes' => ['B.Sc. Visual Communication']],
    ['slug' => 'life-science', 'level' => 'ug', 'name' => 'Life Science', 'img' => 'course-lifesci.jpg',
     'programmes' => ['B.Sc. Microbiology', 'B.Sc. Psychology']],
    ['slug' => 'pg-life-science', 'level' => 'pg', 'name' => 'Life Science', 'img' => 'images/Copy of 255A5308.JPG',
     'programmes' => ['M.Sc. Microbiology']],
];

/** Course card (light for UG, dark for PG). */
function course_card($s)
{
    $pg          = $s['level'] === 'pg';
    $progCount   = count($s['programmes']);
    $countLabel  = $progCount . ' ' . ($progCount === 1 ? 'Programme' : 'Programmes');
    $levelName   = $pg ? 'Postgraduate' : 'Undergraduate';
    $streamLabel = $pg ? "Master's Degree" : 'UG Department';
    $href        = url('courses.php#' . $s['slug']);

    $html = '<article class="course-card' . ($pg ? ' course-card--dark' : '') . ' reveal" data-level="' . e($s['level']) . '">';
    
    // Media block with floating level chip and arrow disc
    $posAttr = !empty($s['pos']) ? ' style="object-position:' . e($s['pos']) . '"' : '';
    $html .= '<div class="course-card__media">';
    $html .= '<img class="course-card__img" src="' . fig($s['img']) . '" alt="' . e($s['name']) . ' students at SANICAS" loading="lazy"' . $posAttr . '>';
    $html .= '<span class="course-card__badge course-card__badge--' . ($pg ? 'pg' : 'ug') . '"><span class="badge-dot"></span>' . e($levelName) . '</span>';
    $html .= '<a class="disc-link" href="' . $href . '" aria-label="View ' . e($s['name']) . ' courses">' . icon('arrow-up-right') . '</a>';
    $html .= '</div>';

    // Body container
    $html .= '<div class="course-card__body">';
    $html .= '<div class="course-card__meta">';
    $html .= '<span class="course-card__count">' . e($countLabel) . '</span>';
    $html .= '<span class="course-card__type">' . e($streamLabel) . '</span>';
    $html .= '</div>';

    $html .= '<h3 class="course-card__title"><a href="' . $href . '">' . e($s['name']) . '</a></h3>';

    $html .= '<ul class="tags">';
    foreach ($s['programmes'] as $p) {
        $html .= '<li>' . e($p) . '</li>';
    }
    $html .= '</ul>';

    $html .= '<div class="course-card__footer">';
    $html .= '<a class="course-card__action" href="' . $href . '"><span>Explore department</span><span class="course-card__action-arrow">→</span></a>';
    $html .= '</div>';

    $html .= '</div></article>';
    return $html;
}

