<?php 
//Footer block

$header = get_option('custom_header_data');
$logo = get_field('footer_logo');
$bankDetails = get_field('bank_details');
$contactInfo = get_field('contact_information');
$socialLink = get_field('social_network');
?>

</main>
<footer>
    <div class=" wavy-top-footer"></div>
    <div class="footer-top-container">
        <div class="top-container-inner image-container">
            <div>
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                <h4 class="show-on-tablet-phone"><?php echo esc_html($contactInfo['name']); ?></h4>
            </div>
        </div>
        <?php
            if ($header['navbar']) {
                echo '<nav class="top-container-inner hide-on-tablet">';
                foreach ($header['navbar'] as $link) {
                    $link_text = esc_html($link['link_text']);
                    $link_url = esc_url($link['link_url']);
                    echo '<a href="' . $link_url . '">' . $link_text . '</a>';
                }
                echo '</nav>';
            }
        ?>
        <div class="top-container-inner bank-details  hide-on-tablet">
            <h4><?php echo esc_html($bankDetails['name']); ?></h4>
            <h5><?php _e('Reģistrācijas nr.', 'sparkle') ?> <?php echo esc_html($bankDetails['registration_number']); ?></h5>
            <h5><?php _e('Banka:', 'sparkle') ?> <?php echo esc_html($bankDetails['bank_name']); ?></h5>
            <h5><?php echo esc_html($bankDetails['account_number']); ?></h5>
        </div>
        <div class="top-container-inner details">
            <h4 class="hide-on-tablet"><?php echo esc_html($contactInfo['name']); ?></h4>
            <h5><?php echo esc_html($contactInfo['email']); ?></h5>
            <h5><?php echo esc_html($contactInfo['phone_number']); ?></h5>
            <h5><?php echo esc_html($contactInfo['address']); ?></h5>
            <a href="#" class="footer-link show-on-tablet-phone"><?php _e('Skatīt rekvizītus', 'sparkle') ?></a>
            <div class="social-network-container">
                <a class="social-network" href="<?php echo esc_html($socialLink['facebook']); ?>"><i class="icon fa fa-facebook"></i></a>
                <a class="social-network" href="<?php echo esc_html($socialLink['instagram']); ?>"><i class="icon fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom-container">
        <p class="footer-left-p">© SparkleHeart <?php echo date('Y'); ?>. <?php _e('Visas tiesības aizsargātas.', 'sparkle') ?> </p>
        <p class="footer-right-p"><?php _e('Privātuma politika', 'sparkle') ?></p>
    </div>
    <div id="scrollToTop" class="scroll-to-top">
        <i class="icon fa fa-arrow-up"></i>
    </div>
</footer>
