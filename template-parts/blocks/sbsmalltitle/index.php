<?php
$titleContainer = get_field('small_title_container');
?>
<main>
<div class="mission-container">
            <h3><?php echo esc_html($titleContainer['title']); ?></h3>
            <p><?php echo esc_html($titleContainer['text']); ?></p>
        </div>
</main>