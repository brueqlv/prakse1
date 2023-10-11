<?php
$image1 = get_field('image_container')['image1'];
$image2 = get_field('image_container')['image2'];
$image3 = get_field('image_container')['image3'];
$image4 = get_field('image_container')['image4'];
$image5 = get_field('image_container')['image5'];
?>
<main>
    <div class="img-container">
        <img class="ripped top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ripped67.png">
        <div class="img-container-inner">
        <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>">
        </div>
        <div class="img-container-inner">
        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>">
        </div>
        <div class="img-container-inner">
        <img src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>">
        </div>
        <div class="img-container-inner">
        <img src="<?php echo esc_url($image5['url']); ?>" alt="<?php echo esc_attr($image5['alt']); ?>">
        </div>
        <img class="ripped bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ripped68.png">
    </div>
</main>