<!-- Código Custom Post Type Agregar en Functions.php -->
<?php
add_action( 'init', 'create_post_eventos' );
function create_post_eventos() {
  register_post_type( 'eventos', // Se registra el Custom Post Type
	array(
		'public' => true,
		'labels' => array( // Datos de Pantalla Admin
			'name' => __( 'Eventos' ),
			'singular_name' => __( 'Eventos' ),
			'add_new' => __( 'Añadir evento' ),
			'add_new_item' => __( 'Añadir Nuevo evento' ),
			'edit' => __( 'Editar' ),
			'edit_item' => __( 'Editar evento' ),
			'new_item' => __( 'Nuevo evento' ),
			'view' => __( 'Ver evento' ),
			'view_item' => __( 'Ver evento' ),
			'search_items' => __( 'Buscar evento' ),
			'not_found' => __( 'Info No Encontrado' ),
			'not_found_in_trash' => __( 'Info no encontrado en Papelera' )
		),
		'description' => __( 'Eventos' ),
		'menu_position' => 5, // Posición en el Menú de Admin
		//'menu_icon' => get_stylesheet_directory_uri() . '/images/libros.png',
		'query_var' => true,
		'supports' => array( // Elementos que tendra en el admin
			'title',
			'editor',
			'comments',
			'trackbacks',
			'page-attributes',
			'thumbnail' ),
		'rewrite' => array( 'slug' => 'eventos'), //->Ver Error 404
		'capability_type' => 'post'
	)
  );
}
?>



<!-- Agregar en el Loop -->

<?php query_posts(array('post_type'=>'eventos','order' => 'DESC', 'posts_per_page' => "20", 'offset' => "1", 'post__not_in' => array($post->ID) ));?>
<?php while ( have_posts() ) : the_post();?>
						
	<?php the_title(); ?>
                        
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); // Reset Query?>



<?php query_posts(array('post_type'=>'section','order' => 'DESC', 'posts_per_page' => "20", 'page_id=11' ));?>
<?php while ( have_posts() ) : the_post();?>
						
	<?php the_title(); ?>
                        
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); // Reset Query?>
