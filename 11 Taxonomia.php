<!-- Registrar taxonomia en functions.php -->
<?php 
function crear_mis_taxonomias() {
	// Crear Taxonomia
	register_taxonomy('nombre-taxonomia', 'nombre_custom_post', array(
	'hierarchical' => true, 'label' => 'Título Taxonomia',
	'query_var' => true, 'rewrite' => true, 'show_admin_column' => true));
   
	// Replicar Taxonomia en Varios Custom
	register_taxonomy('nombre-taxonomia',array( 'nombre_custom_post1','nombre_custom_post'), array(
	'hierarchical' => true, 'label' => 'Año',
	'query_var' => true, 'rewrite' => true, 'public' => true, 'show_admin_column' => true, 'show_ui' => true));
}
add_action('init', 'crear_mis_taxonomias', 0);
?>



<!-- Imprimir taxonomia individual Ojo que tiene problema de no marcar -->
<?php
$terms = get_the_terms( $post->ID , 'nombretaxonomia' );
foreach ( $terms as $term ) {
echo $term->name;
}
?>

<!-- Imprimir taxonomia individual OK -->
			<?php
            	if (get_the_terms($post->ID, 'nombretaxonomia')) {
                $taxonomy_ar = get_the_terms($post->ID, 'nombretaxonomia');
                                            
                $output = '<ul>';
                foreach ($taxonomy_ar as $taxonomy_term) {
                $output .= '<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem active">
                <span class="fa fa-check"></span>'. $taxonomy_term->name .'</div>';
                }
                $output .= '</ul>';
                                            
                echo $output;
                }
            ?>
            
            


<!-- Mostrar todas las  taxonomia -->
 <?php
	//listado de taxonomias
 	$taxonomy = 'nombretaxonomia';
    $tax_terms = get_terms($taxonomy);
?>
<ul>
<?php
	foreach ($tax_terms as $tax_term) {
	echo '<li class="col-xs-12 col-sm-6"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> '.$tax_term->name.'</li>';
    }
?>
</ul>


// Listado con Link
<ul class="filtros-sidebar mb-50">
	<?php
	$terms = get_terms(
	array(
		'taxonomy'   => 'filtros',
		'hide_empty' => false,
	));
	// Check if any term exists
	if ( ! empty( $terms ) && is_array( $terms ) ) {		
	// Run a loop and print them all
	foreach ( $terms as $term ) { ?>

	<li class="font-size-13">
		<a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
			<i class="fas fa-tags"></i> <?php echo $term->name; ?>
		</a>
	</li>	
	<?php } } ?>
</ul>


<!-- Otra opcion de mostrar taxonomias -->
<?php echo get_the_term_list($post->ID, 'work_type', '', ', ', ''); ?>

<!-- Mostrar taxonomia en el theme como listado -->

<?php query_posts(array('post_type'=>'proyectos',  'ubicacion'=>'centro',  'order' => 'ASC', 'posts_per_page' => "10"  ));?>
<?php while ( have_posts() ) : the_post();?>
						
	Acá va el Contenidoo
                        
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); // Reset Query?>



<!-- Agregar al archivo archive.php -->
 <?php } elseif( is_tax() ) { ?>
 <?php _e('Comuna de ', 'blank'); ?> &#8220;<?php single_tag_title(); ?>&#8221;
