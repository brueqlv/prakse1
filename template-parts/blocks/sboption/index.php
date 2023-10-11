<?php
$optionContainer = get_field('option_container');
$leftOption = $optionContainer['left'];
$rightOption = $optionContainer['right'];
?>
<main>
<div class="option-container">
    <div>
        <h3><?php echo esc_html($leftOption['title']); ?></h3>
        <button><?php echo esc_html($leftOption['button']); ?></button>
    </div>
    <div>
        <h3><?php echo esc_html($rightOption['title']); ?></h3>
        <button><?php echo esc_html($rightOption['button']); ?></button>
    </div>
    </div>
 </main>
