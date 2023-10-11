<?php
/*
Template Name: Sapnus Atbalsta Page Template
*/
?>

<?php get_header(); ?>

<?php if ( ! get_field( 'hide_page_title' ) ): ?>
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
<?php endif; ?>

<?php
$textContainer = get_field('text_container');
$searchContainer = get_field('search_container');
$cityMenu = $searchContainer['city_menu'];
$cityRepeater = $cityMenu['city_repeater'];
$typeMenu = $searchContainer['type_menu'];
$typeRepeater = $typeMenu['type_repeater'];
?>

    <main>
        <div class="text-container">
            <h1><?php echo esc_html($textContainer['title']); ?></h1>
            <p><?php echo esc_html($textContainer['text']); ?></p>
        </div>

        <div class="search-container">
            <div class="custom-select">
                <label for="city-select"><?php echo esc_html($cityMenu['title']) ?></label>
                <div class="select-wrapper" id="city-select">
                    <div class="selected-value">Izvēlies</div>
                    <img class="arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/DownArrow.svg" />
                    <ul class="dropdown">
                        <?php
                            if ($cityRepeater) {
                                foreach ($cityRepeater as $cityItem) {
                                    $cityName = $cityItem['city'];
                                    if ($cityName) {
                                        echo '<li>' . esc_html($cityName) . '</li>';
                                    }
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="custom-select">
                <label for="type-select"><?php echo esc_html($typeMenu['title']) ?></label>
                <div class="select-wrapper" id="type-select">
                    <div class="selected-value">Izvēlies</div>
                    <img class="arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/DownArrow.svg" />
                    <ul class="dropdown">
                        <?php
                            if ($typeRepeater) {
                                foreach ($typeRepeater as $typeItem) {
                                    $typeName = $typeItem['type'];
                                    if ($typeName) {
                                        echo '<li>' . esc_html($typeName) . '</li>';
                                    }
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="company-container">
            <?php if(have_rows('company_container')) : ?>
                <?php while (have_rows('company_container')) : the_row(); ?>
                    <div class="inner-container edinasana" data-company-id="1">
                        <img class="logo" src="<?php echo esc_url(get_sub_field('logo')['url']); ?>" alt="<?php echo esc_url(get_sub_field('logo')['alt']); ?>" />
                        <h3 class="name"><?php echo esc_html(get_sub_field('name')); ?></h3>
                        <h3 class="type"><?php echo esc_html(get_sub_field('type')); ?></h3>
                        <div>
                            <p class="phone-number"><?php echo esc_html(get_sub_field('phone_number')); ?></p>
                            <p class="city"><?php echo esc_html(get_sub_field('city')); ?></p>
                            <p class="address"><?php echo esc_html(get_sub_field('address')); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="map-container">
            <div id="map" class="map-inner-container"></div>
            <button id="zoom-in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/+.png" /></button>
            <button id="zoom-out"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/-.png" /></button>
        </div>
    </main>


<div class="editor">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>