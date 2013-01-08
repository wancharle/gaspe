<?
require_once('includes/vcard-widget.php');

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Menu Superior' ) )
  );
}
add_action( 'init', 'register_my_menus' );


function avoz_widgets_init() {

    register_widget( 'Contacts_Widget' );
    
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
		'name' => __( 'Rodapé 1ª coluna','gaspe' ),
		'id' => 'sidebar-3',
		'description' => __( 'Uma area para widgets na 1ª coluna do rodape', 'gaspe' ),
		'before_widget' => '<div  class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'avoz_widgets_init' );

// Freatured images/ imagens destacadas
add_theme_support( 'post-thumbnails' );
add_image_size( "Mensagens" , 200, 178,true);

?>
