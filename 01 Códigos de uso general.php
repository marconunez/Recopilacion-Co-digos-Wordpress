<!-- CODIGOS DE USO GENERAL -->

<!-- Agregar clases al BODY -->
<body <?php body_class(); ?>> 

<!-- Código para llamar a la ruta del theme -->
<?php bloginfo( 'template_directory'); ?>
 
 <!-- Código para llamar a la ruta del Child theme --> 
<?php echo get_stylesheet_directory_uri(); ?>

<!-- Código para llamar a la ruta del archivo style.css -->
<?php bloginfo('stylesheet_url'); ?>

<!-- Código para llamar a la ruta de Sitio -->
<?php echo home_url(); ?>
<?php bloginfo( 'home'); ?> Obstoleto

<!-- Código muestra nombre del Sitio -->
<?php bloginfo( 'name'); ?>

<!-- Código muestra la descripción del sitio -->
<?php bloginfo( 'description'); ?>
