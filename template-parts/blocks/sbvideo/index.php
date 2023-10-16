<?php
//Video block for page "Sapņu Banka"

$videoContainer = get_field('video_container');
$videoCover = $videoContainer['cover_image'];
?>

<div class="video-container">
    <img src="<?php echo esc_url($videoCover['url']); ?>" alt="<?php echo esc_url($videoCover['alt']); ?>">
    <button class="play-button" onclick="playVideo()"><i class="fa fa-play"></i></button>
    <div class="video-overlay" id="youtubeVideo" data-video-id="<?php echo esc_html($videoContainer['video_id']); ?>"></div>
</div>
