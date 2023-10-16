<?php
//Partners block for page "Home"

$partners_container = get_field('partners_container');
$partners_header = $partners_container['header'];
$partners_logos = $partners_container['partners_logo'];
?>

<div class="partners-container">
    <div class="wavy-top"></div>
    <h2><?php echo esc_html($partners_header); ?></h2>
    <div class="partners-container-inner">
        <?php 
            if ($partners_logos && is_array($partners_logos)) {
                foreach ($partners_logos as $partner_logo) {
                    $logo = $partner_logo['logo']; 
                    if ($logo && is_array($logo)) {
                        echo '<div><img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '"></div>';
                    }
                }
            }
        ?>
    </div>
</div>