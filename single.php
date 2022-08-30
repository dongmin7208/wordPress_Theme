<?php get_header();
get_template_part('template-parts/acf', 'pageBanner');
?>
<section id="post"></section>
<div class="section-content">
    <div class="container">

        <!-- page-hader -->
        <?php get_template_part('template-parts/content', 'pageHeader'); ?>

        <div class="row">
            <?php get_template_part('template-parts/content', 'single'); ?>
            <!-- MAin -->
            <?php get_template_part('template-parts/content', 'sidebar'); ?>

        </div>



    </div>
</div>
</section>


<?php get_template_part('template-parts/acf', 'howtoContact'); ?>
<?php get_footer(); ?>