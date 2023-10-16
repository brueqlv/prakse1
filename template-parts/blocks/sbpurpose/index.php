<?php
//Purpose block for page "Sapņu Banka"

$purposeContainer = get_field('purpose_container');
$innerPurposeContainer = $purposeContainer['inner_container'];
?>

<div class="purpose-container">
    <h3><?php echo esc_html($purposeContainer['title']); ?></h3>
    <?php if (have_rows('purpose_container_inner_container')) : ?>
        <?php $counter = 0; ?>
        <?php while (have_rows('purpose_container_inner_container')) : the_row(); ?>
            <div class="inner-container">
                <?php if ($counter % 2 != 0) : ?>
                    <p><?php echo esc_html(get_sub_field('text')); ?></p>
                <?php endif; ?>
                <img src="<?php echo esc_url(get_sub_field('image')['url']); ?>" alt="<?php echo esc_attr(get_sub_field('image')['alt']); ?>">
                <?php if ($counter % 2 == 0) : ?>
                    <p><?php echo esc_html(get_sub_field('text')); ?></p>
                <?php endif; ?>
            </div>
            <?php $counter++; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

