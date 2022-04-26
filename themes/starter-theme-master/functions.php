<?php

/**

 * Timber starter-theme

 * https://github.com/timber/starter-theme

 *

 * @package  WordPress

 * @subpackage  Timber

 * @since   Timber 0.1

 */



use Timber\Loader;

use Timber\Menu;

use Timber\PostQuery;


require_once get_template_directory() . '/inc/admin/dawei-admin.php';
require_once get_template_directory() . '/inc/tgm/tgm.php';
require_once get_template_directory() . '/inc/theme-settings.php';
require_once get_template_directory() . '/inc/add-livereload.php';
require_once get_stylesheet_directory() . '/inc/acf/acf.php';



if (!class_exists('Timber')) {

	add_action('admin_notices', function () {

		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
	});



	add_filter('template_include', function ($template) {

		return get_stylesheet_directory() . '/static/no-timber.html';
	});



	return;
}
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Global Settings',
		'menu_title'	=> 'Global Settings',
		'menu_slug' 	=> 'obecne-nastaveni',
	));
}
/**

 * Sets the directories (inside your theme) to find .twig files

 */

Timber::$dirname = array('templates', 'views');



/**

 * By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?

 * No prob! Just set this value to true

 */

Timber::$autoescape = false;





/**

 * We're going to configure our theme inside of a subclass of Timber\Site

 * You can move this to its own file and include here via php's include("MySite.php")

 */

class StarterSite extends Timber\Site
{

	/** Add timber support. */

	public function __construct()
	{

		add_action('after_setup_theme', array($this, 'theme_supports'));

		add_filter('timber_context', array($this, 'add_to_context'));

		add_filter('get_twig', array($this, 'add_to_twig'));

		add_filter('wpseo_metabox_prio', function () {
			return 'low';
		});


		add_action('init', array($this, 'add_settings_page'));

		add_action('init', array($this, 'register_post_types'));

		add_action('init', array($this, 'register_taxonomies'));

		add_action('wp_enqueue_scripts', array($this, 'loadStyles'));

		add_action('wp_enqueue_scripts', array($this, 'loadScripts'));

		add_action('acf/init', array($this, 'add_google_maps_key'));

		add_action('wp_ajax_ajax_posts', array($this, 'ajax_posts')); // wp_ajax_{action}

		add_action('wp_ajax_nopriv_ajax_posts', array($this, 'ajax_posts')); // wp_ajax_nopriv_{action}


		parent::__construct();
	}

		/** This is where you can register custom taxonomies. */

		public function register_taxonomies()
		{
	
			$args = array(
	
				'label' => 'Kategorie',
	
				'hierarchical' => true,
	
				'public' => true,
	
				'show_ui' => true,
	
				'show_admin_column' => true,
	
				'show_in_nav_menus' => true,
	
				'show_tagcloud' => false,
	
				'has_archive' => true,
	
				'rewrite' => array('hierarchical' => false),
	
			);
	
			register_taxonomy('interviews-category', 'interviews', array(
				'label'        => 'Kategorie',
				'hierarchical' => true,
				'show_in_rest' => true,
			));
		}

	/** This is where you can register custom post types. */

	public function register_post_types()
	{

		$args = array(
			'labels'             => array(
				'name' => 'Reference'
			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array('slug' => 'reference'),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 25,
			'show_in_rest' => true,
			'supports'           => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
		);

		register_post_type('reference', $args);
	}


	/** This is where you add some context

	 *

	 * @param string $context context['this'] Being the Twig's {{ this }}.

	 */

	public function add_to_context($context)
	{

		$context['foo'] = 'bar';

		$context['stuff'] = 'I am a value set in your functions.php file';

		$context['notes'] = 'These values are available everytime you call Timber::get_context();';

		$context['primary_nav'] = new Timber\Menu('primary_nav');

		$context['language_switcher'] = new Timber\Menu('language_switcher');

		$context['global'] = get_fields('options');

		$context['header'] = get_fields('header');

		$context['site'] = $this;

		return $context;
	}

	public function theme_supports()
	{

		// Add default posts and comments RSS feed links to head.

		add_theme_support('automatic-feed-links');



		/*

		 * Let WordPress manage the document title.

		 * By adding theme support, we declare that this theme does not use a

		 * hard-coded <title> tag in the document head, and expect WordPress to

		 * provide it for us.

		 */

		add_theme_support('title-tag');



		/*

		 * Enable support for Post Thumbnails on posts and pages.

		 *

		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/

		 */

		add_theme_support('post-thumbnails');



		/*

		 * Switch default core markup for search form, comment form, and comments

		 * to output valid HTML5.

		 */

		add_theme_support(

			'html5',
			array(

				'comment-form',

				'comment-list',

				'gallery',

				'caption',

			)

		);



		/*

		 * Enable support for Post Formats.

		 *

		 * See: https://codex.wordpress.org/Post_Formats

		 */

		add_theme_support(

			'post-formats',
			array(

				'aside',

				'image',

				'video',

				'quote',

				'link',

				'gallery',

				'audio',

			)

		);



		add_theme_support('menus');

		register_nav_menus(array(

			'primary_nav' => 'Hlavní navigace',

			'language_switcher' => 'Jazykové mutace',

		));

		add_image_size('contact-card-avatar', 120, 120, true);
		add_image_size('medium-thumb', 400, 400, true);
		add_image_size('banner-thumb', 1980, 800, true);

		/**
		 * Remove the content editor from ALL pages 
		 */
		function remove_content_editor()
		{
			remove_post_type_support('page', 'editor');
		}

		add_action('admin_init', 'remove_content_editor');
	}


	public function loadStyles()
	{

		wp_enqueue_style('main', get_template_directory_uri() . '/static/styles/style.min.css', array(), '1.0');
		wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,500,700|Quicksand:400,500,700&display=swap', null, null, 'screen');
	}

	public function loadScripts()
	{
		wp_enqueue_script('vendor', get_template_directory_uri() . '/static/scripts/vendor.js', array('jquery'), '1.0', true);

		wp_enqueue_script('app', get_template_directory_uri() . '/static/scripts/app.js', array('jquery'), '1.0', true);


		// wp_deregister_script('jquery');

		// wp_deregister_script('jquery-migrate');

	}

	/** This Would return 'foo bar!'.

	 *

	 * @param string $text being 'foo', then returned 'foo bar!'.

	 */

	public function myfoo($text)
	{

		$text .= ' bar!';

		return $text;
	}



	public function get_browser_data()
	{

		$ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');



		if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {

			return 'ie';
		}



		return '';
	}



	public function get_svg($attachment_id)
	{

		include get_attached_file($attachment_id);
	}



	/** This is where you can add your own functions to twig.

	 *

	 * @param string $twig get extension.

	 */

	public function add_to_twig($twig)
	{

		$twig->addExtension(new Twig_Extension_StringLoader());

		$twig->addFilter(new Twig_SimpleFilter('myfoo', array($this, 'myfoo')));

		$twig->addFunction(new Twig_SimpleFunction('get_browser_data', array($this, 'get_browser_data')));

		$twig->addFunction(new Twig_SimpleFunction('svg', array($this, 'get_svg')));



		return $twig;
	}


	public function add_google_maps_key()
	{

		acf_update_setting('google_api_key', 'AIzaSyBWnZtWpYpyj_benkTND8R9ChmDK_jB5J0');
	}
}



new StarterSite();
