<?php
/**
 * Site-wide configuration for SANICAS.
 */

define('SITE_NAME', 'SAN International College of Arts and Science');
define('SITE_SHORT', 'SANICAS');

// Base URL path (auto-detected so the site works from /sanicas/ or a domain root).
$__base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
define('BASE_URL', $__base === '' ? '' : $__base);

$SITE = [
    'phone'      => '+91 9943098810',
    'phone_href' => 'tel:+919943098810',
    'email'      => 'Info@sanicas.in',
    'email_href' => 'mailto:Info@sanicas.in',
    'instagram'  => '@sanicas.cbe',
    'insta_href' => 'https://www.instagram.com/sanicas.cbe?igsh=MXZjbGtoOWk0OGg3NQ==',
    'youtube'    => 'https://www.youtube.com/watch?v=xfSlbTCK7sw',
    'address'    => ['Pudhupathy Road, Taluk, Mavuthampathi,', 'Madukkarai, Tamil Nadu 641105'],
    'map_embed'  => 'https://www.google.com/maps?q=SAN+International+College+of+Arts+and+Science+Madukkarai+Coimbatore&output=embed',
    'map_link'   => 'https://maps.google.com/?q=SAN+International+College+of+Arts+and+Science+Coimbatore',
];

// Primary navigation: key => [label, file]
$NAV = [
    'home'           => ['Home', 'index.php'],
    'about'          => ['About', 'about.php'],
    'academics'      => ['Academics', 'academics.php'],
    'admission'      => ['Admission', 'admission.php'],
    'iqac'           => ['IQAC', 'iqac.php'],
    'naac'           => ['NAAC', 'naac.php'],
    'life'           => ['Life@San', 'life-at-san.php'],
    'placement'      => ['Placement', 'placement.php'],
    'contact'        => ['Contact', 'contact.php'],
];
