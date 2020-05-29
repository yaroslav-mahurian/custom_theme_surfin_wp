<div class="container slide-item">
    <div class="slide-item__desc">
    <h2 class="slide-item__heading">
        <span><?php the_field('intro_subtitle');?></span>
        <?php the_field('intro_title');?>
    <div class="slide-item__text">
        <p> <?php the_field('intro_desc');?></p>
    </div>
    </h2>
    </div>
    <div class="slide-item__img">
            <?php 

            $image = get_field('intro_image');

            if( !empty($image) ): 

                // переменные
                $url = $image['url'];
                $alt = $image['alt'];

                // миниатюра
                $size = 'intro-element-slider';
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                ?>
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

        <?php endif; ?>
    </div>
</div>