<?php

add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

function reg_scripts()
{
	wp_enqueue_style('bootstrapstyle', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true);
	wp_enqueue_style('themestyle', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'reg_scripts');

function register_my_menus()
{
	register_nav_menus(
		array(
			'primary' => __('Header'),
			'footer' => __('Footer')
		)
	);
}
add_action('init', 'register_my_menus');

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );

add_theme_support( 'custom-background');

add_theme_support( 'post-thumbnails' );



$theme = 'bootstrap_theme';

function add_color_settings($wp_customize, $priority, $theme_name)
{
	$section_name = 'color_settings';
	$wp_customize->add_section($section_name, array(
		'title'      => __('Color Settings', $theme_name),
		'priority'   => $priority,
	));

	$wp_customize->add_setting('color_primary', array('default' => '#007bff', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color-primary',  array(
		'label'      => __('Primary Color', $theme_name),
		'description' => __('This will set the "primary" color.'),
		'settings'   => 'color_primary',
		'priority'   => 1,
		'section'    => $section_name,
	)));

	$wp_customize->add_setting('color_secondary', array('default' => '#6c757d', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_secondary',  array(
		'label'      => __('Secondary Color', $theme_name),
		'description' => __('This will set the "secondary" color.'),
		'settings'   => 'color_secondary',
		'priority'   => 2,
		'section'    => $section_name,
	)));

	$wp_customize->add_setting('color_light', array('default' => '#f8f9fa', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_light',  array(
		'label'      => __('Light Color', $theme_name),
		'description' => __('This will set the "light" color.'),
		'settings'   => 'color_light',
		'priority'   => 3,
		'section'    => $section_name,
	)));

	$wp_customize->add_setting('color_dark', array('default' => '#343a40', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_dark',  array(
		'label'      => __('Dark Color', $theme_name),
		'description' => __('This will set the "dark" color.'),
		'settings'   => 'color_dark',
		'priority'   => 4,
		'section'    => $section_name,
	)));

	$wp_customize->add_setting('color_success', array('default' => '#28a745', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_success',  array(
		'label'      => __('Success Color', $theme_name),
		'description' => __('This will set the "success" color.'),
		'settings'   => 'color_success',
		'priority'   => 5,
		'section'    => $section_name,
	)));

	$wp_customize->add_setting('color_danger', array('default' => '#dc3545', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_danger',  array(
		'label'      => __('Danger Color', $theme_name),
		'description' => __('This will set the "danger" color.'),
		'settings'   => 'color_danger',
		'priority'   => 5,
		'section'    => $section_name,
	)));

	$wp_customize->add_setting('color_warning', array('default' => '#ffc107', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_warning',  array(
		'label'      => __('Warning Color', $theme_name),
		'description' => __('This will set the "warning" color.'),
		'settings'   => 'color_warning',
		'priority'   => 6,
		'section'    => $section_name,
	)));

	$wp_customize->add_setting('color_info', array('default' => '#17a2b8', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_info',  array(
		'label'      => __('Info Color', $theme_name),
		'description' => __('This will set the "info" color.'),
		'settings'   => 'color_info',
		'priority'   => 7,
		'section'    => $section_name,
	)));

	$wp_customize->add_setting('color_muted', array('default' => '#6c757d', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_muted',  array(
		'label'      => __('Muted Color', $theme_name),
		'description' => __('This will set the "muted" color.'),
		'settings'   => 'color_muted',
		'priority'   => 8,
		'section'    => $section_name,
	)));

	$wp_customize->add_setting('color_white', array('default' => '#fff', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_white',  array(
		'label'      => __('White Color', $theme_name),
		'description' => __('This will set the "white" color.'),
		'settings'   => 'color_white',
		'priority'   => 9,
		'section'    => $section_name,
	)));
}

function add_font_settings($wp_customize, $priority, $theme_name)
{
	$section_name = 'font_settings';
	$wp_customize->add_section($section_name, array(
		'title'      => __('Font Settings', $theme_name),
		'priority'   => $priority,
	));
	$wp_customize->add_setting('font-family-google', array('default'   => 'sans-serif', 'transport' => 'refresh',));
	$wp_customize->add_setting('font-family', array('default' => 'Verdana', 'transport' => 'refresh',));
	$wp_customize->add_setting('font-family-generic', array('default' => 'sans-serif', 'transport' => 'refresh',));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'font-family-google',  array(
		'label'      => __('Google Font', $theme_name),
		'description' => __('This will be used as primary font. See https://fonts.google.com/ to get the names.'),
		'settings'   => 'font-family-google',
		'priority'   => 10,
		'section'    => $section_name,
		'type'    => 'text',
	)));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'font-family',  array(
		'label'      => __('Font Family', $theme_name),
		'description' => __('Will be used when the google font above is "-" or not available on the client browser.'),
		'settings'   => 'font-family',
		'priority'   => 20,
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'' => '-',
			'Times New Roman' => 'Times New Roman',
			'Tahoma' => 'Tahoma',
			'Georgia' => 'Georgia',
			'Garamond' => 'Garamond',
			'Arial' => 'Arial',
			'Verdana' => 'Verdana',
			'Helvetica' => 'Helvetica',
			'Courier New' => 'Courier New',
			'Lucida Console' => 'Lucida Console',
			'Monaco' => 'Monaco',
			'Brush Script MT' => 'Brush Script MT',
			'Lucida Handwriting' => 'Lucida Handwriting',
			'Copperplate' => 'Copperplate',
			'Papyrus' => 'Papyrus',
		)
	)));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'font-family-generic',  array(
		'label'      => __('Fallback Font', $theme_name),
		'description' => __('Will be used when the fonts above are "-" or not available on the client browser.'),
		'settings'   => 'font-family-generic',
		'priority'   => 30,
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'sans-serif' => 'sans-serif',
			'serif' => 'serif',
			'monospace' => 'monospace',
			'cursive' => 'cursive',
			'fantasy' => 'fantasy',
		)
	)));
}

function add_header_settings($wp_customize, $priority, $theme_name)
{
	$section_name = 'header_settings';
	$wp_customize->add_section($section_name, array(
		'title'      => __('Header Settings', $theme_name),
		'priority'   => $priority,
	));

	$wp_customize->add_setting('header_width_class', array('default' => 'container', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_width_class',  array(
		'label'      => __('Header Menu Width', $theme_name),
		'settings'   => 'header_width_class',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'container' => 'Containered Full Width',
			'container-fluid' => 'Full Width',
		)
	)));

	$wp_customize->add_setting('header_bg_color_class', array('default' => 'bg-transparent', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_bg_color_class',  array(
		'label'      => __('Header Background Color Profile', $theme_name),
		'settings'   => 'header_bg_color_class',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'bg-transparent' => 'Transparent (None)',
			'bg-primary' => 'Primary',
			'bg-secondary' => 'Secondary',
			'bg-success' => 'Success',
			'bg-danger' => 'Danger',
			'bg-warning' => 'Warning',
			'bg-info' => 'Info',
			'bg-light' => 'Light',
			'bg-dark' => 'Black',
			'bg-body' => 'Body',
			'bg-white' => 'White'
		)
	)));

	$wp_customize->add_setting('header_cover_image_height', array('default' => 'vh-100', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_cover_image_height',  array(
		'label'      => __('Header Cover Image', $theme_name),
		'settings'   => 'header_cover_image_height',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'vh-100' => '100% header',			
			'vh-75' => '75% header',
			'vh-50' => '50% header',
			'vh-25' => '25% header',
		)
	)));

}

function add_navbar_settings($wp_customize, $priority, $theme_name)
{
	$section_name = 'navbar_settings';
	$wp_customize->add_section($section_name, array(
		'title'      => __('Navbar Settings', $theme_name),
		'priority'   => $priority,
	));

	$wp_customize->add_setting('navbar_padding', array('default' => 'py-0', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_padding',  array(
		'label'      => __('Padding', $theme_name),
		'settings'   => 'navbar_padding',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'py-0' => 'Default',
			'py-1' => '1',
			'py-2' => '2',
			'py-3' => '3',
			'py-4' => '4',
			'py-5' => '5',
		)
	)));

	$wp_customize->add_setting('navbar_sticky', array('default' => 'position-fixed sticky-top', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_sticky',  array(
		'label'      => __('Stick To Top?', $theme_name),
		'settings'   => 'navbar_sticky',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'position-fixed sticky-top' => 'Yes',
			'' => 'No',
		)
	)));

	$wp_customize->add_setting('navbar_width', array('default' => 'container', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_width',  array(
		'label'      => __('Width', $theme_name),
		'settings'   => 'navbar_width',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'container' => 'Containered Full Width',
			'container-fluid' => 'Full Width',
		)
	)));

	$wp_customize->add_setting('navbar_logo_position', array('default' => 'left', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_logo_position',  array(
		'label'      => __('Logo Position', $theme_name),
		'settings'   => 'navbar_logo_position',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'left' => 'Left',			
			'right' => 'Right',
			'both' => 'Both',
		)
	)));

	$wp_customize->add_setting('navbar_menu_position', array('default' => 'ml-auto', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_menu_position',  array(
		'label'      => __('Menu Position', $theme_name),
		'settings'   => 'navbar_menu_position',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'mr-auto' => 'Left',
			'm-auto' => 'Center',
			'ml-auto' => 'Right',
		)
	)));


	$wp_customize->add_setting('navbar_font_color', array('text-primary' => '', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_font_color',  array(
		'label'      => __('Font Color Class', $theme_name),
		'settings'   => 'navbar_font_color',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'text-primary' => 'Primary',
			'text-secondary' => 'Secondary',
			'text-light' => 'Light',
			'text-dark' => 'Dark',
			'text-success' => 'Success',
			'text-danger' => 'Danger',
			'text-warning' => 'Warning',
			'text-info' => 'Info',
			'text-muted' => 'Muted',
			'text-white' => 'White',
		)
	)));

	$wp_customize->add_setting('navbar_link_color', array('text-secondary' => '', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_link_color',  array(
		'label'      => __('Links Font Color Class', $theme_name),
		'settings'   => 'navbar_link_color',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'text-primary' => 'Primary',
			'text-secondary' => 'Secondary',
			'text-light' => 'Light',
			'text-dark' => 'Dark',
			'text-success' => 'Success',
			'text-danger' => 'Danger',
			'text-warning' => 'Warning',
			'text-info' => 'Info',
			'text-muted' => 'Muted',
			'text-white' => 'White',
		)
	)));

	$wp_customize->add_setting('navbar_bg_class', array('default' => 'bg-transparent', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_bg_class',  array(
		'label'      => __('Background Color Class', $theme_name),
		'settings'   => 'navbar_bg_class',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'bg-transparent' => 'Transparent (None)',
			'bg-primary' => 'Primary',
			'bg-secondary' => 'Secondary',
			'bg-success' => 'Success',
			'bg-danger' => 'Danger',
			'bg-warning' => 'Warning',
			'bg-info' => 'Info',
			'bg-light' => 'Light',
			'bg-dark' => 'Black',
			'bg-body' => 'Body',
			'bg-white' => 'White'
		)
	)));

	$wp_customize->add_setting('navbar_bg_scroll_class', array('default' => 'bg-transparent', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_bg_scroll_class',  array(
		'label'      => __('Background Color Class When Scrolling', $theme_name),
		'settings'   => 'navbar_bg_scroll_class',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'bg-transparent' => 'Transparent (None)',
			'bg-primary' => 'Primary',
			'bg-secondary' => 'Secondary',
			'bg-success' => 'Success',
			'bg-danger' => 'Danger',
			'bg-warning' => 'Warning',
			'bg-info' => 'Info',
			'bg-light' => 'Light',
			'bg-dark' => 'Black',
			'bg-body' => 'Body',
			'bg-white' => 'White'
		)
	)));
}

function add_content_settings($wp_customize, $priority, $theme_name)
{
	$section_name = 'content_settings';
	$wp_customize->add_section($section_name, array(
		'title'      => __('Content Settings', $theme_name),
		'priority'   => $priority,
	));

	$wp_customize->add_setting('content_page_title_position', array('default' => 'center', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'content_page_title_position',  array(
		'label'      => __('Page Title Position', $theme_name),
		'settings'   => 'content_page_title_position',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'left' => 'Left',
			'center' => 'Center',
			'right' => 'Right',
		)
	)));
}

function add_footer_settings($wp_customize, $priority, $theme_name)
{
	$section_name = 'footer_settings';
	$wp_customize->add_section($section_name, array(
		'title'      => __('Footer Settings', $theme_name),
		'priority'   => $priority,
	));

	$wp_customize->add_setting('footer_menu_width', array('default' => 'container', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_menu_width',  array(
		'label'      => __('Footer Menu Width', $theme_name),
		'settings'   => 'footer_menu_width',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'container' => 'Containered Full Width',
			'container-fluid' => 'Full Width',
		)
	)));

	$wp_customize->add_setting('footer_padding', array('default' => 'py-0', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_padding',  array(
		'label'      => __('Footer Padding', $theme_name),
		'settings'   => 'footer_padding',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'py-0' => 'Default',
			'py-1' => '1',
			'py-2' => '2',
			'py-3' => '3',
			'py-4' => '4',
			'py-5' => '5',
		)
	)));

	$wp_customize->add_setting('footer_logo_position', array('default' => 'right', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_logo_position',  array(
		'label'      => __('Footer Logo Position', $theme_name),
		'settings'   => 'footer_logo_position',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'left' => 'Left',
			'right' => 'Right',
			'both' => 'Both',
		)
	)));

	$wp_customize->add_setting('footer_menu_position', array('default' => 'mr-auto', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_menu_position',  array(
		'label'      => __('Footer Menu Position', $theme_name),
		'settings'   => 'footer_menu_position',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'mr-auto' => 'Left',
			'm-auto' => 'Center',
			'ml-auto' => 'Right',
		)
	)));

	$wp_customize->add_setting('footer_bg_color', array('default' => 'bg-transparent', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_bg_color',  array(
		'label'      => __('Footer Background Color Profile', $theme_name),
		'settings'   => 'footer_bg_color',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'bg-transparent' => 'Transparent (None)',
			'bg-primary' => 'Primary',
			'bg-secondary' => 'Secondary',
			'bg-success' => 'Success',
			'bg-danger' => 'Danger',
			'bg-warning' => 'Warning',
			'bg-info' => 'Info',
			'bg-light' => 'Light',
			'bg-dark' => 'Black',
			'bg-body' => 'Body',
			'bg-white' => 'White'
		)
	)));

	$wp_customize->add_setting('footer_font_color', array('text-primary' => '', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_font_color',  array(
		'label'      => __('Footer Font Color Profile', $theme_name),
		'settings'   => 'footer_font_color',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'text-primary' => 'Primary',
			'text-secondary' => 'Secondary',
			'text-light' => 'Light',
			'text-dark' => 'Dark',
			'text-success' => 'Success',
			'text-danger' => 'Danger',
			'text-warning' => 'Warning',
			'text-info' => 'Info',
			'text-muted' => 'Muted',
			'text-white' => 'White',
		)
	)));

	$wp_customize->add_setting('footer_link_color', array('text-secondary' => '', 'transport' => 'refresh',));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_link_color',  array(
		'label'      => __('Footer Links Font Color Profile', $theme_name),
		'settings'   => 'footer_link_color',
		'section'    => $section_name,
		'type'    => 'select',
		'choices' => array(
			'text-primary' => 'Primary',
			'text-secondary' => 'Secondary',
			'text-light' => 'Light',
			'text-dark' => 'Dark',
			'text-success' => 'Success',
			'text-danger' => 'Danger',
			'text-warning' => 'Warning',
			'text-info' => 'Info',
			'text-muted' => 'Muted',
			'text-white' => 'White',
		)
	)));	
}

function mytheme_customize_register($wp_customize)
{
	$theme_name = 'webkumpel_bootstrap_theme';
	add_color_settings($wp_customize, 1, $theme_name);
	add_font_settings($wp_customize, 2, $theme_name);
	add_header_settings($wp_customize, 3, $theme_name);
	add_navbar_settings($wp_customize, 4, $theme_name);
	add_content_settings($wp_customize, 5, $theme_name);
	add_footer_settings($wp_customize, 6, $theme_name);
}

add_action('customize_register', 'mytheme_customize_register');

function customize_header()
{
	if (get_theme_mod('font-family-google', '') != '') { ?>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo get_theme_mod('font-family-google', '') ?>">
	<?php }	?>
	<style id="font-style" type="text/css">
		* {
			font-family: "<?php echo get_theme_mod('font-family-google', '') ?>", "<?php echo get_theme_mod('font-family', 'verdana'); ?>", "<?php echo get_theme_mod('font-family-generic', 'sans-serif'); ?>";			
		}
		.text-primary { color: <?php echo get_theme_mod('color_primary', ''); ?>!important; }
		.text-secondary { color: <?php echo get_theme_mod('color_secondary', ''); ?>!important; }
		.text-light { color: <?php echo get_theme_mod('color_light', ''); ?>!important; }
		.text-dark { color: <?php echo get_theme_mod('color_dark', ''); ?>!important; }
		.text-success { color: <?php echo get_theme_mod('color_success', ''); ?>!important; }
		.text-danger { color: <?php echo get_theme_mod('color_danger', ''); ?>!important; }
		.text-warning { color: <?php echo get_theme_mod('color_warning', ''); ?>!important; }
		.text-info { color: <?php echo get_theme_mod('color_info', ''); ?>!important; }
		.text-muted { color: <?php echo get_theme_mod('color_muted', ''); ?>!important; }
		.text-white { color: <?php echo get_theme_mod('color_white', ''); ?>!important; }
		.bg-primary { background-color: <?php echo get_theme_mod('color_primary', ''); ?>!important; }
		.bg-secondary { background-color: <?php echo get_theme_mod('color_secondary', ''); ?>!important; }
		.bg-light { background-color: <?php echo get_theme_mod('color_light', ''); ?>!important; }
		.bg-dark { background-color: <?php echo get_theme_mod('color_dark', ''); ?>!important; }
		.bg-success { background-color: <?php echo get_theme_mod('color_success', ''); ?>!important; }
		.bg-danger { background-color: <?php echo get_theme_mod('color_danger', ''); ?>!important; }
		.bg-warning { background-color: <?php echo get_theme_mod('color_warning', ''); ?>!important; }
		.bg-info { background-color: <?php echo get_theme_mod('color_info', ''); ?>!important; }
		.bg-muted { background-color: <?php echo get_theme_mod('color_muted', ''); ?>!important; }
		.bg-white { background-color: <?php echo get_theme_mod('color_white', ''); ?>!important; }		
	</style>
	<script src="https://use.fontawesome.com/e785353753.js"></script>
	<script type="text/javascript">
		document.addEventListener('scroll', function(e) {
			var scrollTop = window.scrollY;
			var navbar = document.getElementById("navbar");			
			navbar.classList.toggle('<?php echo get_theme_mod('navbar_bg_scroll_class', 'bg-transparent'); ?>', scrollTop > navbar.clientHeight);

			const checkpoint = 300;
			var scrollDiv = document.getElementById('scroll');
			const currentScroll = window.pageYOffset;
			if (currentScroll <= checkpoint) {
				opacity = 1 - currentScroll / checkpoint;
			} else {
				opacity = 0;
			}
			scrollDiv.style.opacity = opacity;
			
		});
	</script>
<?php
}

add_action('wp_head', 'customize_header');
