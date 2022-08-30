<?php
get_header();
get_template_part('template-parts/acf', 'collapseContent'); ?>

<!-- FRONT SECTION
====================================================== -->
<section id="front-section">
    <div class="section-content">
        <div class="container">
            <div class="row">

                <!-- FRONT-MAIN
				====================================================== -->
                <div class="col-md-9 order-md-12">

                    <?php
                    get_template_part('template-parts/acf', 'frontSlide');
                    get_template_part('template-parts/content', 'pageItemBox'); ?>

                </div>
                <!-- FRONT-MAIN -->

                <!-- FRONT-SIDE
				====================================================== -->
                <div class="col-md-3 order-md-1">

                    <?php
                    get_template_part('template-parts/acf', 'logo');
                    get_template_part('template-parts/acf', 'collapseTrigger');
                    get_template_part('template-parts/acf', 'info');
                    get_template_part('template-parts/acf', 'reserv');
                    get_template_part('template-parts/acf', 'social');
                    ?>

                </div>
                <!-- FRONT-SIDE -->

            </div>
        </div>
    </div>
</section>
<!-- FRONT SECTION -->

<?php
get_template_part('template-parts/acf', 'map');
get_footer(); ?>