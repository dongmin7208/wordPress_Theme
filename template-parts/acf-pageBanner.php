<?php if (is_home() && !is_front_page()) : ?>

    <section id="jumbotron" style="background: url(<?php echo get_field('banner_img', 28)['url']; ?>); background-repeat: no-repeat; background-size:cover; background-position: center center;">
    <?php else : ?>
        <section id="jumbotron" style="background: url(<?php echo get_field('banner_img')['url']; ?>); background-repeat: no-repeat; background-size:cover; background-position: center center;">
        <?php endif; ?>

        <div class="container">
            <div class="row">
                <div class="col-10 offset-1 justify-content-center text-white text-center">
                    <h1 class="display-4"><?php
                                            if (is_home() && !is_front_page()) : echo get_the_title(28);
                                            else : echo get_the_title();
                                            endif; ?></h1>
                    <hr style="display: block; border-top: 1px solid #fff;">
                    <p class="lead"><?php
                                    if (is_home() && !is_front_page()) : echo get_field('banner_desc', 28);
                                    else : echo get_field('banner_desc');
                                    endif; ?></p>
                </div>
                <!-- </div><a href="">Pixabay</a>로부터 입수된 <a href="https://pixabay.com/ko/users/distelapparath-2726923/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4436154">Markus Distelrath</a>님의 이미지 입니다. -->
            </div>
        </div>
        </section>