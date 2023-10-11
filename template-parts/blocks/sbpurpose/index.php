<?php
$purposeContainer = get_field('purpose_container');
$innerPurposeContainer = $purposeContainer['inner_container'];
?>
<main>
<div class="purpose-container">
            <h3><?php echo esc_html($purposeContainer['title']); ?></h3>
            <?php if (have_rows('purpose_container_inner_container')) : ?>
                <?php while (have_rows('purpose_container_inner_container')) : the_row(); ?>
                    <div class="inner-container">
                        <img src="<?php echo esc_url(get_sub_field('image')['url']); ?>" alt="<?php echo esc_attr(get_sub_field('image')['alt']); ?>">
                        <p><?php echo esc_html(get_sub_field('text')); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
</main>