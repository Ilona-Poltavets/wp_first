<footer>
    <div class="container">
        <div class="footer row">

            <div class="col-12 col-sm-12 col-lg-6 col-xl-2 flex-align-items">
                <?php the_custom_logo() ?>
            </div>

            <div class="footer__contact-info col-12 col-sm-6 col-xl-2">
                <h6 class="footer__title">Contact us</h6>
                <ul class="footer__list">
                    <li>13702 Rankin Park<br />Houston, TX 77073</li>
                    <li><span class="bold-text">Phone: </span><a href="tel:+12812090811">+1.281.209.0811</a></li>
                    <li class="break"><span class="bold-text">Email: </span><a
                            href="mailto:service@bzdieselrepair.com">service@bzdieselrepair.com</a></li>
                    <li><a href="#" class="accent bold-text"> Visit our sister company dz Express</a></li>
                </ul>
            </div>

            <div class="footer__work-hours col-12 col-sm-6 col-lg-6 col-xl-4">
                <h6 class="footer__title">Work Hours</h6>
                <ul class="footer__list wrap-list">
                    <li>Monday 8am-5pm</li>
                    <li>Tuesday 8am-5pm</li>
                    <li>Wednesday 8am-5pm</li>
                    <li class="accent">*Closed on major<br />national holidays</li>
                    <li>Thursday 8am-5pm</li>
                    <li>Friday 8am-5pm</li>
                    <li>Saturday 8am-5pm</li>
                    <li>Sunday closed</li>
                </ul>
            </div>

            <div class="footer__sitemap col-12 col-sm-6 col-lg-4 col-xl-2">
                <h6 class="footer__title">Sitemap</h6>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => null,
                    'menu_class' => 'footer__list wrap-list',
                ])
                    ?>
            </div>

            <div class="col-12 col-sm-6 col-lg-2 col-xl-2 flex-align-items">
                <img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/images/sponsor.png"
                    alt="sponsor" />
            </div>

        </div>
        <div class="copyright">
            <p>&copy; Copyright 2021 by BZ Diesel Repair | Defign & Development by <a href="">Tuispace</a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>