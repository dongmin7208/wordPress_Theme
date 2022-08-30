<!-- SIDEBAR
====================================================== -->
<aside class="col-xl-4 col-md-12 widget-column">

    <?php get_sidebar(); ?>

    <br>

    <div class="text-box bg-info my-4">

        <p class="lead text-white text-center py-2">The Latest Posts</p>

    </div><!-- text-box -->

    <?php
    $args = array(
        'post_type'            => 'post',
        'posts_per_page'    => 3,
        'category__not_in'    => 1,
        // 'orderby'			=> 'DESC'
    );

    $featuredPost = new WP_Query($args);

    if ($featuredPost->have_posts()) : while ($featuredPost->have_posts()) : $featuredPost->the_post();
    ?>

            <div class="news">

                <?php if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('Large', ['class' => 'img-fluid img-raised']); ?></a>
                <?php } else { ?>
                    <a href="<?php the_permalink(); ?>"><img src="http://via.placeholder.com/600x400" alt="" class="img-fluid img-raised"></a>
                <?php } ?>

                <div class="news-data mt-4">
                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <small class="float-right"><span class="badge badge-warning"><?php the_category(', '); ?></span></small></h6>
                </div>

            </div>

            <hr>

    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>

</aside>
<!-- SIDEBAR -->