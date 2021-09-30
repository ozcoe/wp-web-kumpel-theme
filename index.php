<!DOCTYPE html>

<?php
$logo .=  '<a class="navbar-brand" href="#">' . get_bloginfo('name') . '</a>';

$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');

$header_bg_color_class_class = get_theme_mod('header_bg_color_class', 'bg-secondary');
$header_width_class = get_theme_mod('header_width_class', 'container-fluid');

$navbar_padding = get_theme_mod('navbar_padding', 'py-0');
$navbar_font_color = get_theme_mod('navbar_font_color', 'text-primary');
$header_height_class = get_theme_mod('header_cover_image_height', 'vh-100');
$navbar_width = get_theme_mod('navbar_width', 'container');
$navbar_menu_position = get_theme_mod('navbar_menu_position', 'ml-auto');
$navbar_logo_position = get_theme_mod('navbar_logo_position', 'left');

$navbar_stick_class = get_theme_mod('navbar_sticky', 'position-fixed sticky-top');
$navbar_bg_class = get_theme_mod('navbar_bg_class', 'bg-secondary');

/* HEADER CLASSES */
$header_classes .= $header_width_class . ' ' . $header_bg_color_class;

/* NAVBAR CLASSES */
$navbar_classes .=  'w-100 navbar navbar-expand-md navbar-light ' . $navbar_stick_class . ' ' . $navbar_padding . ' ' . $navbar_bg_class;

if ($featured_img_url != '' && $featured_img_url != null) {
    $cover_image_style .= 'background:url(' . $featured_img_url . ');background-repeat:no-repeat;background-size:cover;';
    $navbar_classes .= ' ';
}

switch ($navbar_logo_position) {
    case 'left':
        $header_logo_left = true;
        break;
    case 'right':
        $header_logo_right = true;
        break;
    case 'both':
        $header_logo_right = true;
        $header_logo_left = true;
        break;
}

$content_cover_image = get_header_image();
$content_title_position = get_theme_mod('content_page_title_position', 'center');

$footer_padding = get_theme_mod('footer_padding', 'py-0');
$footer_font_color = get_theme_mod('footer_font_color', 'text-primary');
$footer_bg_color = get_theme_mod('footer_bg_color', 'bg-secondary');
$footer_classes .= 'mt-5 ' . $footer_padding . ' ' . $footer_font_color . ' ' . $footer_bg_color;
$footer_menu_position = get_theme_mod('footer_menu_position', 'ml-auto');
$footer_menu_width = get_theme_mod('footer_menu_width', 'container');

$footer_logo_position = get_theme_mod('footer_logo_position', 'right');
switch ($footer_logo_position) {
    case 'left':
        $footer_logo_left = true;
        break;
    case 'right':
        $footer_logo_right = true;
        break;
    case 'both':
        $footer_logo_right = true;
        $footer_logo_left = true;
        break;
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="sidebar-left" class="position-absolute vh-100">

        <div class="toggle-button toogle-background" id="toggle">
            <span class="bar top"></span>
            <span class="bar middle"></span>
            <span class="bar bottom"></span>
        </div>

        <div id="side-title" class="position-absolute"><p>This is a Test</p></div>

        <div id="side-scroll-top" class="position-absolute">
            <a href="#"><i class="fa fa-chevron-circle-up fa-2x"></i></a>            
        </div>

    </div>

    <header id="header" class="<?php echo $header_classes; ?>">
        <div class="row">
            <nav id="navbar" class="<?php echo $navbar_classes; ?>">
                <div class="<?php echo $navbar_width; ?>">
                    <?php

                    if ($header_logo_left) {
                        echo $logo;
                    }

                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'depth'           => 2,
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbar-header',
                        'menu_class'      => 'navbar-nav ' . $navbar_menu_position,
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ));

                    if ($header_logo_right) {
                        echo $logo;
                    }

                    ?>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
            </nav>
        </div>
    </header>

    <div id=cover-image" class="w-100 p-0 m-0">
        <img src="<?php echo $featured_img_url ?>" style="width:100%;object-fit: cover" />
    </div>

    <div id="title" class="w-100 p-0 m-0 position-absolute text-center" style="top:45vh;">
        <h1><?php the_title(); ?><h1>
    </div>

    <div id="scroll" class="w-100 p-0 m-0 position-absolute text-center" style="top:90vh;">
        <i class="fa fa-chevron-circle-down fa-2x"></i>
    </div>

    <div id="main" class="container">

        <div class="row" id="middle">

            <div class="col-0" id="sidebar-left">

            </div><!-- #sidebar-left -->

            <div class="col" id="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">
                            <h1 class="full-width text-<?php echo $content_title_position ?> p-5">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink() ?>"></a>
                    <?php endwhile;
                else : ?>
                    <p>There no posts to show</p>
                <?php endif; ?>

            </div>

            <div class="col-0" id="sidebar-right">

            </div><!-- #sidebar-right -->

        </div><!--  #middle -->
    </div>

    <footer class="<?php echo $footer_classes; ?>">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="<?php echo $footer_menu_width; ?>">
                <?php
                if ($footer_logo_left) {
                    echo $logo;
                }

                wp_nav_menu(array(
                    'theme_location'  => 'footer',
                    'depth'           => 2,
                    'container'       => 'div',
                    'container_class' => 'navbar',
                    'container_id'    => 'navbar-footer',
                    'menu_class'      => 'navbar-nav ' . $footer_menu_position,
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ));

                if ($footer_logo_right) {
                    echo $logo;
                }
                ?>
            </div>
        </nav>
    </footer>
</body>

</html>