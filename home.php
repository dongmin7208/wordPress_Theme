<?php
get_header();
get_template_part('template-parts/acf', 'pageBanner');
?>

<!-- BLOG
====================================================== -->
<section id="blogpage">
    <div class="section-content">
        <div class="container">
            <div class="row">

                <div class="card-columns">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <div class="card">

                                <?php get_template_part('template-parts/content', get_post_format()); ?>

                            </div><!-- card -->

                    <?php endwhile;

                    else : _e('Sorry, no posts found', 'coding_diy');

                    endif; ?>

                </div><!-- card-columns -->

            </div><!-- row -->
        </div><!-- container -->
    </div><!-- section-content -->
</section>
<!-- BLOG -->

<?php
get_template_part('template-parts/acf', 'map');
get_footer(); ?>