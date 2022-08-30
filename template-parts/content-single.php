<?php
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
while (have_posts()) : the_post(); ?>

    <!-- MAin -->
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-8 col-md-12'); ?>>

        <div class="featured-image">
            <?php if ($thumbnail_url) { ?>
                <img src="<?php echo $thumbnail_url; ?>" alt="" class="img-fluid img-raised">
            <?php } else  //fallback image 
            ?>
            <img class="img-fluid img-raised" src="http://via.placeholder.com/900x600" alt="">
        </div>

        <div class="post-meta mt-5">
            <small class="text-muted mb-5">
                <i class="fa fa-user"></i> <strong><?php the_author(); ?></strong>
                | <i class="fa fa-clock-o"></i><?php the_date('Y-m-d'); ?> |
                <i class="fa fa-folder-open-o"></i><strong><?php the_category(', '); ?></strong>|
                <i class="fa fa-tags"></i> <strong><?php the_tags(); ?></strong>
            </small>
        </div>
        <?php the_content(); ?>

        <br>
        <hr style="display: block;"><br>

        <!--social icon -->
        <div class="text-center">
            <h3 class="mb-4">Share with my social network</h3>
            <a target="_blank" href="https://www.facebook.com/dmm_0877" class="social badge facebook mx-2">
                <i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://plus.google.com/dmm_0877" class="social badge gplus mx-2">
                <i class="fa fa-google-plus"></i></a>
            <a target="_blank" href="https://www.twitter.com/dmm_0877" class="social badge twitter mx-2">
                <i class="fa fa-twitter"></i></a>
            <a target="_blank" href="https://www.pinterest.com/dmm_0877" class="social badge pinterest mx-2">
                <i class="fa fa-pinterest"></i></a>
            <a target="_blank" href="https://www.instagram.com/dmm_0877" class="social badge instagram mx-2">
                <i class="fa fa-instagram"></i></a>
        </div>
        <!--social icon -->
        <div class="author-box p-4 my-4">
            <h3 class="text-center">About Author</h3>
            <br>
            <div class="row">
                <div class="col-12 col-sm-2 text-center">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/myphoto.jpg" alt="" class="img-fluid rounded-circle mb-4">
                </div>
                <div class="col-12 col-sm-10">
                    <div>
                        <p><strong><?php echo get_the_author_meta('nickname'); ?></strong>
                            <span class="float-right">
                                <a class="mr-2" href="http://naver.com/"><i class="fa fa-newspaper-o"></i></a>
                                <a href="mailto:your_email@gmail.com"></a>
                                <i class="fa fa-envelope-o"></i>
                            </span>
                        </p>
                    </div>
                    <p><?php echo get_the_author_meta('description'); ?></p>
                </div>
            </div>
        </div>
        <br><br>
        <!-- related posts -->
        <div class="related-posts">

            <h3 class="text-center mb-5">Related Posts</h3>

            <div class="row">

                <?php $relatedPost = new WP_Query(array(
                    'author'    => get_the_author_meta('ID'),
                    'category__in'    => wp_get_post_categories($post->ID),
                    'posts_per_page'    => 3,
                    'post__not_in'    => array(get_the_ID())
                ));

                if ($relatedPost->have_posts()) : while ($relatedPost->have_posts()) : $relatedPost->the_post();
                ?>

                        <div class="col-md-4">

                            <div class="card">

                                <?php if (has_post_thumbnail()) { ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('Large', ['class' => 'img-fluid']); ?></a>
                                <?php } else { ?>
                                    <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="http://via.placeholder.com/300x200" alt=""></a>
                                <?php } ?>
                                <p class="text-center p-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                            </div>

                        </div><!-- col-md-4 -->

                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
        <br><br>
        <?php get_template_part('template-parts/widget', 'comment'); ?>
        <!-- <div class="comments">
                                    
                                </div> -->
    </article>
<?php endwhile; ?>