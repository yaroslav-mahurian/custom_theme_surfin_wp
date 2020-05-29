<?php

get_header();

?>

<div class="slide-wrapper">


<div class="container relative">
    <div class="header-social-wrapper">
        <div class="social social--header">
            <a href="#" class="social__item">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-tumblr.svg" alt="">
            </a>
            <a href="#" class="social__item">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-twitter.svg" alt="">
            </a>
            <a href="#" class="social__item">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-vimeo.svg" alt="">
            </a>
        </div>
    </div>  
</div>

<div id="headerSlider" class="owl-carousel">

    <!-- Вывод кастомного контента -->
    <?php

    global $post; /* Определение глобальной переменной post */
    $args = array(  /* Определения массива с "настройками" функции get_posts в переменную args */
        'post_type' => 'intro-elements',
        'publish' => true,
    );

    get_posts($args); /* Вызов функции get_posts (она возвращает массив с постами) */

    $intro_elements_slider = get_posts( $args ); /* То, что она возвращает необходимо записать в переменную */

    foreach( $intro_elements_slider as $post) { /* Обходим этот массив через цикл (в нем создаются переменные с названием поста, описанием, контентом, метаполями и тд)*/
    include( get_template_directory() . '/content-intro-slider.php'); /* Подключаем файл content-board-slider.php ( делается для удобочитаемости кода ), здесь не указывается get_template_directory_uri(), так как мы подключаем php файл в php файл, он не должен отображаться в браузере, например как файл стилей, в данном случае указывается конкретный физический путь на сервере в текущей папке */
    }
    wp_reset_postdata(); /* В конце выполнения необходимо делать сброс, так как дальше также может быть запрос постов и они случайно не вывелись */

    ?>
</div>

<div class="container relative">

    <!-- Slide controls -->

    <div class="slide-controls">

        <a id="headerSliderLeft" class="slide-controls__left" href="#">
            <img src="<?php echo get_template_directory_uri()?>/img/controls/header-slider-left.svg" alt="left">
        </a>

        <div class="slide-controls-number">
            <span class="slide-controls-number__active">-</span>
            <span class="slide-controls-number__from">/</span>
            <span class="slide-controls-number__total">-</span>
        </div>

        <a id="headerSliderRight" class="slide-controls__right" href="#">
            <img src="<?php echo get_template_directory_uri()?>/img/controls/header-slider-right.svg" alt="right"></a>
      
    </div>

</div>


</div>

<section class="quote">
<div class="quote-wrapper">
    <div class="quote__text">
        Surfing is the most blissful experience you can have 
        on this planet, a taste of heaven.
    </div>
    <div class="quote__author">
        John McCarthy
    </div>
</div>
</section>

    <!-- Stories -->
<section id="stories" class="club-description">
<div class="container">
    <div class="club-description-wrapper">
        <div class="club-description__img">
            <img src="<?php echo get_template_directory_uri()?>/img/img/img-2.jpg" alt="">
        </div>
        <div class="club-description-video">
            <img src="<?php echo get_template_directory_uri()?>/img/img/img-3.jpg" alt="video">
            <div class="club-description-video__controls">
                <img src="<?php echo get_template_directory_uri()?>/img/controls/control-play.svg" alt="play">
            </div>

        </div>
        <div class="club-description__text">
            By better understanding the various aspects of surfing, you will improve faster and have more fun in the water.
        </div>
        <div class="club-description__link">
            <a href="#" class="read-more-link"> Read More</a>
        </div>
    </div>
</div>
</section>



    <!-- Boards -->
<section id="boards" class="shop">

    <div class="container">
        <h2 class="title">
            <span class="subtitle">shop</span>
            Surfboards
        </h2>
    </div>


    <div class="container shop-slider-wrapper">

        <div class="shop-slider-special-holder">

            <div id="shopSlider" class="owl-carousel">

                
                                <!-- Вывод кастомного контента -->
                <?php

                global $post; /* Определение глобальной переменной post */
                $args = array(  /* Определения массива с "настройками" функции get_posts в переменную args */
                    'post_type' => 'boards',
                    'publish' => true,
                );

                get_posts($args); /* Вызов функции get_posts (она возвращает массив с постами) */

                $slider_boards = get_posts( $args ); /* То, что она возвращает необходимо записать в переменную */

                foreach( $slider_boards as $post) { /* Обходим этот массив через цикл (в нем создаются переменные с названием поста, описанием, контентом, метаполями и тд)*/
                include( get_template_directory() . '/content-board-slider.php'); /* Подключаем файл content-board-slider.php ( делается для удобочитаемости кода ), здесь не указывается get_template_directory_uri(), так как мы подключаем php файл в php файл, он не должен отображаться в браузере, например как файл стилей, в данном случае указывается конкретный физический путь на сервере в текущей папке */
                }
                wp_reset_postdata(); /* В конце выполнения необходимо делать сброс, так как дальше также может быть запрос постов и они случайно не вывелись */

                ?>

            </div>

        </div>

    </div>

    <div class="container">
        <div class="shopSlider-controls">

            <div id="shopSliderLeft" class="shopSlider-arrow shopSlider-arrow--left">
                <img src="<?php echo get_template_directory_uri()?>/img/controls/boards-left.svg" alt="prev">
            </div>

            <div id="shopSliderRight" class="shopSlider-arrow shopSlider-arrow--right">
                <img src="<?php echo get_template_directory_uri()?>/img/controls/boards-right.svg" alt="next">
            </div>

        </div>
    </div>

    <div class="container">
        <div class="shop-link-wrapper">
            <a href="#" class="read-more-link read-more-link--m0"> Show All</a>
        </div>
    </div>

</section>


<!-- ARticles -->
<section id="events" class="container">
<article class="article article--even">

    <div class="article__desc">

        <h2 class="article__title" data-number="01">
            Surf Training
        </h2>
        <div class="article__text">
            <p>By better understanding the various aspects of surfing, By better understanding the various aspects of surfing, you will improve faster and have more fun in the water.</p>
        </div>

        <a href="#" class="read-more-link read-more-link--m0"> Read More</a>
    </div>

    <div class="article__preview" >
        <img src="<?php echo get_template_directory_uri()?>/img/img/img-4.jpg" alt="">
        <div class="article__preview-desc">
            <div class="article__preview-desc-content">
                Surf Camps
            </div>
        </div>
    </div>

</article>

</section>
<section class="container">
<article class="article article--odd">

    <div class="article__desc">

        <h2 class="article__title" data-number="02">
            Point Break
        </h2>
        <div class="article__text">
            <p>By better understanding the various aspects of surfing, By better understanding the various aspects of surfing, you will improve faster and have more fun in the water.</p>
        </div>

        <a href="#" class="read-more-link read-more-link--m0"> Read More</a>
    </div>

    <div class="article__preview" >
        <img src="<?php echo get_template_directory_uri()?>/img/img/img-5.jpg" alt="">
        <div class="article__preview-desc">
            <div class="article__preview-desc-content">
                Surf Camps
            </div>
        </div>
    </div>

</article>

</section>      
<section class="subscribe-wrapper">
<div class="subscribe">
    <h2 class="title">
        Join the Club
    </h2>

    <div class="title-desc">
        By better understanding the various aspects of surfing, you will improve faster 
        and have more fun in the water.
    </div>

    <form class="subscribe-form" action="">
        <input class="subscribe__input" type="text" placeholder="Your E-mail" >
        <input class="subscribe__submit" type="submit">
    </form>
</div>
</section>
<section id="places" class="camp">
<div class="camp__img" style="background-image: url(<?php echo get_template_directory_uri()?>/img//img/img-6.jpg);"></div>

<div class="container flex-end">
    <div class="camp__desc">
        <div class="camp__label">Our Camp</div>
        <div class="camp__address">
            CA 91932, USA <br>
            Imperial Beach <br>
            560 Silver Strand Blvd
        </div>

        <a href="#" class="read-more-link read-more-link--m0">Get in Touch</a>
    </div>
</div>
</section>



<?php
get_footer();
