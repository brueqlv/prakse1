<?php
//Text block for page "Home"

$main_text = get_field('text_container')['main_text'];
?>

<div class="text-container">
        <p><?php echo esc_html($main_text); ?></p>
</div>
