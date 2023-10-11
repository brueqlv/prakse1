<?php
$video_cover = get_field('video_container')['video_container_image'];
$video_ID = get_field('video_container')['video_id'];
?>
<main>
<div class="video-container">
    <img src="<?php echo esc_url($video_cover['url']); ?>" alt="<?php echo esc_attr($video_cover['alt']); ?>">
        <button class="play-button" onclick="playVideo()"><i class="fa fa-play"></i></button>
        <div class="video-overlay" id="youtubeVideo" data-video-id="<?php echo esc_html($video_ID) ?>"></div>
</div>
</main>