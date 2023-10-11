<?php
$teamContainer = get_field('sparkle_team_container');
?>
<main>
<div class="sparkle-team-container">
            <h2><?php echo esc_html($teamContainer['title']); ?></h2>
            <p><?php echo esc_html($teamContainer['text']); ?></p>
            <div class="image-container">
                <?php if(have_rows('sparkle_team_container_team')) : ?>
                    <?php while(have_rows('sparkle_team_container_team')) : the_row(); ?>
                        <div class="small-container">
                            <img src="<?php echo esc_url(get_sub_field('image')['url']); ?>" alt="<?php echo esc_url(get_sub_field('image')['alt']); ?>">
                            <div>
                                <h5><?php echo esc_html(get_sub_field('name')); ?></h5>
                                <p><?php echo esc_html(get_sub_field('role')); ?></p>
                            </div>
                        </div>
                     <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
</main>