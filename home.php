<?php get_header(); ?>

<section id="blogpage">
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="card-columns">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="card">

                                <?php get_template_part('template-parts/content'); ?>
                            </div>

                    <?php endwhile;

                    else : _e('sorry, no posts found', 'coding_diy');

                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>