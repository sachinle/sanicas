</main>

<footer class="site-footer">
    <div class="footer__cta">
        <h2 class="h1 footer__title">Explore, experience, and <em class="serif">thrive</em> at SANICAS.</h2>
        <div class="footer__actions">
            <?= btn('Contact us', url('contact.php'), 'primary') ?>
            <div class="footer__chips">
                <a class="contact-chip" href="<?= e($SITE['phone_href']) ?>"><?= icon('phone') ?><?= e($SITE['phone']) ?></a>
                <a class="contact-chip" href="<?= e($SITE['email_href']) ?>"><?= icon('mail') ?><?= e($SITE['email']) ?></a>
                <a class="contact-chip" href="<?= e($SITE['insta_href']) ?>" target="_blank" rel="noopener"><?= icon('instagram') ?><?= e($SITE['instagram']) ?></a>
            </div>
        </div>
    </div>

    <div class="footer__divider"></div>

    <div class="footer__cols">
        <div class="footer__brand">
            <img src="<?= fig('logo-dark.png') ?>" alt="SAN International College of Arts &amp; Science" width="204" height="40" loading="lazy">
            <p>Affiliated with Bharathiar University, Coimbatore, approved by the Government of Tamil Nadu and recognized by the University Grants Commission (UGC).</p>
        </div>
        <div class="footer__col">
            <p class="overline">Quick Links</p>
            <a href="<?= url('index.php') ?>">Home</a>
            <a href="<?= url('about.php') ?>">About Us</a>
            <a href="<?= url('courses.php') ?>">Course</a>
            <a href="<?= url('examination-cell.php') ?>">Examination</a>
            <a href="<?= url('research.php') ?>">Research</a>
            <a href="<?= url('naac.php') ?>">NAAC</a>
            <a href="<?= url('news-events.php') ?>">News & Events</a>
            <a href="<?= url('collaboration.php') ?>">Collaboration</a>
            <a href="<?= url('facilities.php') ?>">Facilities</a>
            <a href="<?= url('clubs-and-committees.php') ?>">Clubs &amp; Committees</a>
            <a href="<?= url('contact.php') ?>">Contact</a>
        </div>
        <div class="footer__col">
            <p class="overline">Academics</p>
            <a href="<?= url('courses.php#computer-science') ?>">Computer Science</a>
            <a href="<?= url('courses.php#management') ?>">Management</a>
            <a href="<?= url('courses.php#commerce') ?>">Commerce</a>
            <a href="<?= url('courses.php#media') ?>">Media</a>
            <a href="<?= url('courses.php#life-science') ?>">Life Science</a>
        </div>
        <div class="footer__col">
            <p class="overline">Visit</p>
            <address><?= e($SITE['address'][0]) ?><br><?= e($SITE['address'][1]) ?></address>
        </div>
    </div>

    <div class="footer__wordmark" aria-hidden="true">SANICAS</div>

    <div class="footer__bottom">
        <p>Copyright &copy; <?= date('Y') ?> Sanicas. All rights reserved.</p>
        <p class="muted">SAN International College of Arts and Science &middot; Coimbatore</p>
    </div>
</footer>

<script src="<?= asset('js/main.js') ?>?v=<?= filemtime(__DIR__ . '/../assets/js/main.js') ?>" defer></script>
</body>
</html>
