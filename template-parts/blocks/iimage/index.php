<?php
$imageContainer = get_field('image_container');
$image = $imageContainer['image'];
?>
<main>
<div class="image-container">
    <img class="ripped top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ripped612.png">
    <img class="cover" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <p><?php echo esc_html($imageContainer['text']); ?></p>
    <img class="ripped bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ripped613.png">
</div>
</main>