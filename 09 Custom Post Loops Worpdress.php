<!-- Mostras Posts o Entradas --

<!-- ----------------------------------------------- -->

<!-- Mostras Post por categoria -->

<?php query_posts( 'cat=3' ); ?>
<?php while ( have_posts() ) : the_post();?>

	Acá va el contenido
    
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); // Reset Query?>

<!-- ----------------------------------------------- -->


<!-- Otra opción por categoria -->
<?php query_posts( array ( 'category_name' => 'nombre-categoria', 'posts_per_page' => -1 ) ); ?>
<?php while ( have_posts() ) : the_post();?>

	Acá va el contenido
    
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); // Reset Query?>


<!-- ----------------------------------------------- -->


<!-- Para que funcione paginador -->

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
query_posts("post_type=post&paged=$paged$order=asc"); ?>
<?php while (have_posts()) : the_post(); ?>
 
 	Acá va el contenido
 	
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); // Reset Query?>