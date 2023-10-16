<?php
//Orange block for page "Sapņu Banka"

$orangeContainer = get_field('orange_container');
$orangeImage = $orangeContainer['image'];
?>

<div class="orange-container">
    <div class="background"></div>
    <div class="content">
        <div class="img-container">
            <img src="<?php echo esc_url($orangeImage['url']); ?>" alt="<?php echo esc_url($orangeImage['alt']); ?>">
        </div>
        <p><?php echo esc_html($orangeContainer['text']); ?> </p>
    </div>
</div>
