<?php
$main_text = get_field('text_container')['main_text'];
?>
<main>
<div class="text-container">
        <p>
        <?php echo esc_html($main_text); ?>
        </p>
</div>
</main>