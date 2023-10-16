<?php
//Quote block for page "Ideja"

$quoteContainer = get_field('quote_container');
?>

<div class="quote-container">
    <div class="quote-container-inner">
        <?php if (have_rows('quote_container')) : ?>
            <?php while (have_rows('quote_container')) : the_row(); ?>
                <div class="quote">
                    <h2><?php echo esc_html(get_sub_field('author')); ?></h2>
                    <h3><?php echo esc_html(get_sub_field('occupation')); ?></h3>
                    <p><?php echo esc_html(get_sub_field('quote')); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="button-container">
        <button class="back" onclick="showPreviousQuote()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Poga.svg"
                alt="arrow button"></button>
        <button class="forward" onclick="showNextQuote()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Poga.svg"
                alt="arrow button"></button>
    </div>
</div>
