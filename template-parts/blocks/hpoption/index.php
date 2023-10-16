<?php
// Option block for page "Home"

$option_container = get_field('option_container');
$left_side = $option_container['left_side'];
$right_side = $option_container['right_side'];
?>

<div class="option-container">
    <div>
        <h3><?php echo esc_html($left_side['header']); ?></h3>
        <a href="<?php echo esc_url($left_side['button_link']); ?>"><button><?php echo esc_html($left_side['button']); ?></button></a>
    </div>
    <div>
        <h3><?php echo esc_html($right_side['header']); ?></h3>
        <a href="<?php echo esc_url($right_side['button_link']); ?>"><button><?php echo esc_html($right_side['button']); ?></button></a>
    </div>
</div>
