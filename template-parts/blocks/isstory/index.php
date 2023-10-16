<?php
//Story block for page "Ideja"

$storyContainer = get_field('story_container');
?>

<div class="popup-overlay" id="popupOverlay">
    <div class="popup">
        <div class="video-container">
            <iframe id="videoPlayer" width="560" height="315" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="video-text">
            <h5 id="popupName"></h5>
            <h5 id="popupSurname"></h5>
        </div>
    </div>
</div>

<div class="story-container" id="story-container">
    <?php if(have_rows('story_container')) : ?>
        <?php $number = 1; ?>
        <?php while(have_rows('story_container')) : the_row(); ?>
             <div class="inner-container">
                <div class="background"></div>
                <h4 class="number"><?php echo $number; ?></h4>
                <div class="fullname">
                    <h5 class="name"><?php echo esc_html(get_sub_field('name')); ?></h5>
                    <h5 class="surname"><?php echo esc_html(get_sub_field('surname')); ?></h5>
                </div>
                <p class="text"><?php echo esc_html(get_sub_field('text')); ?></p>
                <?php $image = get_sub_field('image');?>
                <?php if (!empty($image)):?>
                    <img class="photo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>                        
                <div class="video-link" data-video-id="<?php echo esc_html(get_sub_field('video_link')); ?>">"></div>
            </div>
            <?php $number++ ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="button-container">
    <button class="load"><?php _e('Skatīt vairāk', 'sparkle') ?></button>
</div>