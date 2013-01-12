<?

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Menu Superior' ) )
  );
}
add_action( 'init', 'register_my_menus' );
require_once("includes/override_widgets.php"); 

function avoz_widgets_init() {
    unregister_widget("WP_Widget_Categories");
    register_widget("WP_Widget_Categories2");

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
add_image_size( "destaque-categorias" , 260,200,true);
// IMPORTANTE: Lembre de instalar o plugin regenerate thumbnails para o hard crop funcionar...




// metabox slider
require_once("includes/slider_admin.php");
add_action( 'add_meta_boxes', 'avoz_meta_box_add' );
add_action( 'save_post', 'slideradmin_save');
add_action( 'admin_head-post.php', 'slideradmin_js' );
add_action( 'admin_head-post-new.php', 'slideradmin_js' );

// popular posts
require_once("includes/popular_posts.php");
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);




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


function get_related_posts($post_id) {
    $tags = wp_get_post_tags($post_id);
    if ($tags) {
        $first_tag = $tags[0]->term_id;
        $args=array(
        'tag__in' => array($first_tag),
        'post__not_in' => array($post_id),
        'showposts'=>10,
        'ignore_sticky_posts'=>1
    );
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) : $my_query->the_post();
            $the_permalink = get_permalink();
            $post_title =  get_the_title();
            $post_thumb = get_the_post_thumbnail(get_the_ID(),array(130,130));
            $related_post = '<li><a href="'.$the_permalink.'">'.$post_thumb.'</a><p><a href="'.$the_permalink.'">'.$post_title.'</a></li>';
            echo $related_post;
            endwhile;
        }
    }
}

?>
