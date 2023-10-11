<?php
$left_side = get_field('option_container')['left_side'];
$right_side = get_field('option_container')['right_side'];
?>

<main>
    <div class="option-container">
        <div>
        <h3><?php echo esc_html($left_side['header']); ?></h3>
        <button><?php echo esc_html($left_side['button']); ?></button>
        </div>
        <div>
        <h3><?php echo esc_html($right_side['header']); ?></h3>
        <button><?php echo esc_html($right_side['button']); ?></button>
        </div>
    </div>
</main>