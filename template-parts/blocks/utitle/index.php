<?php
$textContainer =  get_field('text_container');
?>
<div class="text-container">
    <h1><?php echo esc_html($textContainer['title']); ?></h1>
    <p><?php echo esc_html($textContainer['text']); ?></p>
</div>
