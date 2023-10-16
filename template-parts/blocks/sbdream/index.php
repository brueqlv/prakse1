<?php
//Dream block for page "Sapņu Banka"

$dreamSelectContainer = get_field('dream_select_container');
$dreamSelectLeft = $dreamSelectContainer['left'];
$leftImage = $dreamSelectLeft['image'];
$dreamSelectRight = $dreamSelectContainer['right'];
$rightImage = $dreamSelectRight['image'];
?>

<div class="dream-select-container">
    <h3><?php echo esc_html($dreamSelectContainer['title']) ?></h3>
    <div class="inner-container">
        <div class="content">
            <div>
                <img class="left" src="<?php echo esc_url($leftImage['url']);  ?>" alt="<?php echo esc_url($leftImage['alt']);  ?>">
                <p><?php echo esc_html($dreamSelectLeft['text']); ?></p>
            </div>
        </div>
        <div class="content">
            <div>
                <img class="right" src="<?php echo esc_url($rightImage['url']);  ?>" alt="<?php echo esc_url($rightImage['alt']);  ?>">
                <p><?php echo esc_html($dreamSelectRight['text']); ?></p>
            </div>
        </div>
    </div>
</div>
