<?

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Menu Superior' ) )
  );
}
add_action( 'init', 'register_my_menus' );


function avoz_widgets_init() {

     wp_enqueue_style( 'farbtastic',get_template_directory_uri().'/farbtastic/farbtastic.css' );
   wp_enqueue_script("farbtastic",get_template_directory_uri()."/farbtastic/farbtastic.js" ,array('jquery'));  
	register_sidebar( array(
		'name' => __( 'Barra Lateral', 'gaspe' ),
		'id' => 'sidebar-1',
		'description' => __( 'Area para widgets da barra lateral', 'gaspe' ),
		'before_widget' => '<div  class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Rodapé Widget Twitter','gaspe' ),
		'id' => 'sidebar-2',
		'description' => __( 'Area para colocar o widget do twitter', 'gaspe' ),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '',
		'after_title' => '',
	) );

}
add_action( 'widgets_init', 'avoz_widgets_init' );

// Freatured images/ imagens destacadas
add_theme_support( 'post-thumbnails', array( 'post', 'patrocinadores' ) );
add_image_size( "Mensagens" , 200, 178,true);
add_image_size( "slider" , 1400,490,true);




// metabox slider
require_once("includes/slider_admin.php");
add_action( 'add_meta_boxes', 'avoz_meta_box_add' );
add_action( 'save_post', 'slideradmin_save');
add_action( 'admin_head-post.php', 'slideradmin_js' );
add_action( 'admin_head-post-new.php', 'slideradmin_js' );






function get_videointerno() {

    global $post, $posts;

    $thumb = '';

    $output = preg_match_all('/(\<iframe.*\<\/iframe\>)/is', $post->post_content, $matches);
    $thumb = $matches[1][0];

    return $thumb;
}





// custom post audioslides
add_action( 'init', 'criando_post_type' );
function criando_post_type() {
    register_post_type( 'patrocinadores',
        array(
            'labels' => array(
                'name' => __( 'Patrocinadores' ),
                'singular_name' => __( 'Patrocinador' )
            ),
            'menu_position' =>5,
            'public' => true,
            'rewrite' => false,
            'has_archive' => false,
            'supports' => array('title', 'thumbnail'),
        )
    );
}


?>
