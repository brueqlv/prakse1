<?php 
//Header block

$header = get_field('header');
$header_logo = $header['header_logo'];
update_option('custom_header_data', $header);
?>

<header class="site-header">
    <div class="header-container">
        <div class="header-container-inner">
            <a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_attr($header_logo['alt']); ?>"></a>
            <div>
                <i id="menu-icon" class="icon fa fa-bars show-on-tablet"></i>
                <i id="close-icon" class="icon fa fa-close show-on-phone"></i>
            </div>
            <!-- For changing navigation links -->
            <?php
                if ($header['navbar']) {
                    echo '<nav>';
                    foreach ($header['navbar'] as $link) {
                        $link_text = esc_html($link['link_text']);
                        $link_url = esc_url($link['link_url']);
                        echo '<a href="' . $link_url . '">' . $link_text . '</a>';
                    }
                    echo '</nav>';
                }
            ?>
            <nav class="language-navbar">
                <a href="" onclick="toggleVisibility('lv');">LV</a>
                <a href="" onclick="toggleVisibility('en');">EN</a>
                <a href="" onclick="toggleVisibility('ru');">RU</a>
            </nav>
        </div>
    </div>
</header>
 <main>

<div class="header-navbar-popup">
    <nav class="language-navbar">
        <a href="">LV</a>
        <a href="">EN</a>
        <a href="">RU</a>
    </nav>
    <?php
        if ($header['navbar']) {
            echo '<nav class="link-navbar">';
            foreach ($header['navbar'] as $link) {
                $link_text = esc_html($link['link_text']);
                $link_url = esc_url($link['link_url']);
                echo '<a href="' . $link_url . '">' . $link_text . '</a>';
            }
            echo '</nav>';
        }
    ?>
 </div>

