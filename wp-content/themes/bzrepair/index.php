<?php
get_header();
?>
<main>
    <section id="about" class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <h2 class="title">
                        About BZ Diesel Repair
                    </h2>
                    <p class="p-big">
                        Launched in 2020, BZ Diesel Repair Inc. specializes in
                        diagnostics and repair for heavy diesel engines, including
                        Cummins, Volvo, Paccar, Detroit and Cat, as well as
                        transmission, suspension, brakes, emissions and
                        A/C work.
                    </p>
                    <p class="p-regular">
                        We kicked off by providing services for the 100+ OTR operators of BZ Express, our
                        thriving sister company, but the high quality of work quickly increased the demand
                        for our services among semi-truck operators from all over.
                    </p>
                    <p class="p-regular">
                        From ultra-reliable diagnostics performed by qualified specialists with cutting edge
                        tools to fixing you up to safely and dependably roll back out on the road, BZ Diesel
                        Repair is a place for all the mechanical repairs on your truck and trailer.
                    </p>
                    <p class="p-regular">
                        We have recently added wrecker capacities through BZ Expedite, another sister
                        company of ours, and became an official Texas state inspection station for trucks and
                        trailers, which increased our regional reach and provided for higher efficiency and
                        cost-saving solutions for our customers.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="slider-about">
                        <img src="<?php echo get_template_directory_uri() . '/images/s2.png' ?>" />
                        <img src="<?php echo get_template_directory_uri() . '/images/s1.png' ?>" />
                        <img src="<?php echo get_template_directory_uri() . '/images/s3.png' ?>" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="our-services">
        <div class="row">
            <div class="col-lg-6 col-sm-12 slider">
                <?php
                $args = [
                    'numberposts' => 50,
                    'post_type' => 'services',
                    'suppress_filters' => true,
                    'order' => 'ASC',
                ];

                $services = get_posts($args);
                foreach ($services as $index => $service):
                    setup_postdata($GLOBALS['post'] =& $service); ?>
                    <div class="slide">
                        <div class="gradient">
                            <img class="slider-img" src="<?php echo get_the_post_thumbnail_url($service) ?>">
                        </div>
                        <div class="slide-text">
                            <h2 class="title">
                                Our Services
                            </h2>
                            <p class="p-big">
                                <?php the_title() ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
            <div class="col-lg-6 col-sm-12 tabs">
                <?php foreach ($services as $index => $service):
                    setup_postdata($GLOBALS['post'] =& $service); ?>
                    <button data-slide="<?php echo $index ?>">
                        <?php the_title() ?>
                    </button>
                <?php endforeach;
                wp_reset_postdata() ?>

            </div>
        </div>
    </section>

    <section id="careers" class="careers d-flex align-items-center">
        <div class="container">
            <h2 class="title text-end">Careers</h2>
            <a class="careers__link text-uppercase text-decoration-none">
                Jump to our indeed page <i class="fa-solid fa-arrow-right"></i>
            </a>
            <div class="row d-flex align-items-center careers__text">
                <h4 class="careers__text_h4 col-ms-12 col-xl-2 text-uppercase">
                    Diesel Engine Technician
                </h4>
                <p class="col">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a sollicitudin enim, in malesuada
                    augue. Aenean sollicitudin non leo non pretium. Quisque pellentesque molestie. purus et elementum.
                </p>
                <a href="#" class="col-ms-12 col-xl-2 careers__text_a text-uppercase text-decoration-none">
                    Apply via indeed <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="connect" class="form">
        <div class="container">
            <h2 class="title">
                Request Service
            </h2>
            <h4 class="form__subtitle">
                Fill out the form below and we will contact you asap
            </h4>

            <form>
                <!-- <div class="row">
                    <div class="col-12 col-sm-6 col-xl-4 form-div">
                        <label class="form-label"> *First & Last Name </label>
                        <input type="text" name="user-name" class="form-input" />
                    </div>

                    <div class="col-12 col-sm-6 col-xl-4 form-div">
                        <label class="form-label"> *Email</label>
                        <input type="email" name="email" class="form-input">
                    </div>

                    <div class="col-12 col-sm-6 col-xl-4 form-div">
                        <label class="form-label"> *Phone</label>
                        <input type="tel" name="tel" class="form-input">
                    </div>

                    <div class="col-12 col-sm-6 col-xl-4 form-div">
                        <label class="form-label"> *vehicle make</label>
                        <input type="text" name="vehicle-make" class="form-input">
                    </div>

                    <div class="col-12 col-sm-6 col-xl-4 form-div">
                        <label class="form-label"> *vehicle model</label>
                        <input type="text" name="vehicle-model" class="form-input">
                    </div>

                    <div class="col-12 col-sm-6 col-xl-4 form-div">
                        <p>
                            <label class="form-label"> *Vehicle type</label><br>
                            <span class="form-control-wrap" data-name="vehicle-type">
                                <span class="form-control">
                                    <span>
                                        <input type="radio" name="vehicle-type" value="trailer" checked="checked">
                                        <span class="list-item-label">trailer</span>
                                    </span>
                                    <span>
                                        <input type="radio" name="vehicle-type" value="semi-truck">
                                        <span class="list-item-label">semi-truck</span>
                                    </span>
                                </span>
                            </span>
                        </p>
                    </div>

                    <div class="col-12 col-sm-4 form-div">
                        <label class="form-label"> *What service are you requesting?</label>
                        <input type="text" name="service-request" class="form-input">
                    </div>

                    <div class="col-12 col-sm-8 form-div">
                        <label class="form-label"> *tell us more</label>
                        <input type="text" name="tell-us-more" class="form-input">
                    </div>
                </div> 

                <input type="submit" value="Submit"> -->
                
                <?php echo do_shortcode('[contact-form-7 id="33" title="Request service"]') ?>
            </form>
        </div>
    </section>

    <section id="contact" class="tow-truck">
        <div class="container">
            <div class="row">
                <div class="tow-truck__text col-lg-8 col-12">
                    <h2 class="title">
                        Need A Tow? We Offer Tow Truck Lift Services
                    </h2>
                    <h4 class="tow-truck__subtitle">
                        Call today 1800-000-0000
                    </h4>
                    <p class="p-regular">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porta enim quis posuere bibendum.
                        Integer mi sapien, venenatis nec vehicula egestas, tempor vehicula tortor. Donec in interdum
                        felis.
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Aliquam,
                        interdum lorem non nulla blandit, et lacinia dui aliquet. Aenean congue placerat metus vitae
                        tincidunt. Donec a viverra quam. Nullam quis sapien massa. Fusce viverra felis sit amet
                        condimentum lacinia, Vestibulum dapibus at ligula vitae scelerisque. Nunc vel dapibus tellus.
                        Praesent et magna quis ipsum lobortis varius sed eu massa. Maecenas venenatis rhoncus magna vel
                        euismod. Sed rhoncus et augue sed eleifend. Sed id purus vehicula, vestibulum orci laoreet,
                        feugiat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="what-say">
        <div class="container">
            <h2 class="title">What people say</h2>
            <div class="what-say__slider">

                <?php
                $args = [
                    'numberposts' => 20,
                    'post_type' => 'review',
                    'suppress_filters' => true,
                    'order' => "ASC",
                ];

                $reviews = get_posts($args); foreach ($reviews as $review):
                    setup_postdata($GLOBALS['post'] =& $review); ?>
                    <div class="slide-review">
                        <p>
                            <?php the_field("message") ?>
                        </p>
                        <div class="rating">
                            <?php foreach (range(1, get_field('rating')) as $num): ?>
                                <i class="fa-solid fa-star"></i>
                            <?php endforeach ?>
                            <!-- <i class="fa-regular fa-star"></i> -->
                        </div>
                        <p class="review-author">
                            <?php the_title() ?>
                        </p>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.395922264262!2d-95.41182678488669!3d29.96804968191017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640ca10b2acdb33%3A0xc78835783f1f5c94!2zMTM3MDIgUmFua2luIFBhcmssIEhvdXN0b24sIFRYIDc3MDczLCDQodCo0JA!5e0!3m2!1sru!2sua!4v1681332613176!5m2!1sru!2sua"
            style="border:0;" class="map__iframe" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <?php get_footer() ?>
</main>