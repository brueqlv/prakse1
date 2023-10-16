<?php
//option block for page "Sapņu Banka"

$optionContainer = get_field('option_container');
$leftOption = $optionContainer['left'];
$rightOption = $optionContainer['right'];
?>

<div class="option-container">
    <div>
        <h3><?php echo esc_html($leftOption['title']); ?></h3>
        <a href="<?php echo esc_url($leftOption['button_link']); ?>"><button><?php echo esc_html($leftOption['button']); ?></button></a>
    </div>
    <div>
        <h3><?php echo esc_html($rightOption['title']); ?></h3>
        <a href="<?php echo esc_url($rightOption['button_link']); ?>"><button><?php echo esc_html($rightOption['button']); ?></button></a>
    </div>
</div>

