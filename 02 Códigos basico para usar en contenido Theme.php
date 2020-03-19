<!-- CODIGOS PARA THEME PARA USO DE CONTENIDO -->

<!-- Titulos-->
<?php the_title(); ?>

<!-- Contenido-->
<?php the_content(); ?>

<!-- Extracto-->
<?php the_excerpt(); ?> 

<!-- Enlace URL del post o pagina -->
<?php the_permalink() ?>

<!-- Fecha-->
<?php the_time('l, j F, Y') ?> 

<!-- Lista de Categorias -->
<?php wp_list_categories( ); ?>

<!-- Categorias -->
<?php the_category(', ') ?>

<!-- Tags -->
<?php the_tags( __('Tags: ', 'blank'), ", ", " <br />" ) ?>

<!-- Para uso de Plugins ACF -->
<?php the_field('nombre-field'); ?>

<!-- Código para insertar Shortcode -->
<?php echo do_shortcode ('[promoslider]'); ?>

<!-- Código para obtener ID del Post -->
<?php $post_id = get_the_ID();echo $post_id; ?>

<!-- Código para ACF si un valor no existe no aparece -->
<?php $value = get_field( "titulo" );
if( $value ) { ?>
<strong>Título:</strong> <?php echo $value; ?> <br>
<?php } else {echo '';}?>

<!-- Condicional Page ID https://www.isitwp.com/ultimate-guide-wordpress-conditional-tags/  / https://www.proyectoalfa.es/blog/diferencia-is-page-single-singular-wordpress/ -->
<?php
if ( is_page(34) ) { ?>
// Info
<?php } else { ?>
// Info
<?php } ?>

<!-- Condicional Tags -->
<?php if ( is_page_template( 'page-dermoland.php') || (get_post_type() === 'dermoland') )  { ?>
// Contenido									
<?php } else { ?>
// Contenido									
<?php  }?>
