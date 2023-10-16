<?php
//Option block for page "Piesaki Sapni"

$optionLeft = get_field('option_container')['left'];
$leftImage = $optionLeft['image'];
$leftDecor = $optionLeft['decor'];
$optionRight = get_field('option_container')['right'];
$rightImage = $optionRight['image'];
$rightDecor = $optionRight['decor'];
?>

<div class="option-container">
    <div class="option-inner-container left">
        <div>
            <div>
                <img class="object-left" src="<?php echo esc_url($leftImage['url']); ?>" alt="<?php echo esc_url($leftImage['alt']); ?>">
                <img class="stars-left" src="<?php echo esc_url($leftDecor['url']); ?>" alt="<?php echo esc_url($leftDecor['alt']); ?>">
            </div>
            <h3><?php echo esc_html($optionLeft['title']); ?></h3>
            <p><?php echo esc_html($optionLeft['text']); ?></p>
        </div>
        <button><?php echo esc_html($optionLeft['button_text']); ?></button>
    </div>
    <div class="option-inner-container right">
        <div>
            <div>
                <img class="object-right" src="<?php echo esc_url($rightImage['url']); ?>" alt="<?php echo esc_url($rightImage['alt']); ?>">
                <img class="stars-right" src="<?php echo esc_url($rightDecor['url']); ?>" alt="<?php echo esc_url($rightDecor['alt']); ?>">
            </div>
            <h3><?php echo esc_html($optionRight['title']); ?></h3>
            <p><?php echo esc_html($optionRight['text']); ?></p>
        </div>
        <button><?php echo esc_html($optionRight['button_text']); ?></button>
    </div>
</div>
