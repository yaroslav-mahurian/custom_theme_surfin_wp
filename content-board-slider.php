<?php 

/* $type = get_post_meta( get_the_ID(), 'board_type', true); /* Записываем в переменную функцию get_post_meta, в аргументы входит id поста, название метаполя, в данном случае board_type  */
/* $price = get_post_meta( get_the_ID(), 'board_price', true); */
?>

<?php //the_meta(); ?>  <!-- Вывод метаданных, технические данные, позволяют увидеть какие есть метаполя и как они называются-->


<?php
   /*  echo get_the_post_thumbnail(get_the_ID(), 'board_slider'); Возвращает картинку (путь к картинке), но не распечатывает его, для этого в начале прописыываем echo. Первый аргумент id постак к которому нужно получить картинку превью, второй аргумент название превью 'board slider' */
?>


<div class="board">
    <div class="board__img-holder">
        <!-- <img class="board__img" src="" alt="board"> -->
        <?php 

        $image = get_field('board_image');

        if( !empty($image) ): 

            // переменные
            $url = $image['url'];
            $alt = $image['alt'];

            // миниатюра
            $size = 'board-slider';
            $thumb = $image['sizes'][ $size ];
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
            ?>
                <img class="board__img" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

        <?php endif; ?>

     

    </div>


    <div class="board-desc">
        <div class="board__cat"><?php the_field('board_type');?> <!-- Вывод кастомного поля, в данном случае типа борда (имя определяем сами в переменных выше)  --> </div>
        <div class="board__title"><?php the_title(); ?> <br> <!-- Вывод заголовка --></div>

        <div class="board-buy">
            <div class="board-buy__price">$<?php the_field('price');?><!--  Вывод кастомного поля, в данном случае цены борда (имя определяем сами в переменных выше) --> </div>
            <div class="board-buy__link">Buy</div>
        </div>
    </div>
</div>  