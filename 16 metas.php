<!-- Metas -->
    <meta name="description" content="<?php the_field('descripcion_sitio_web', 'option'); ?>">
    <meta name="google" content="nositelinkssearchbox" />
    <meta name="robots" content="<?php the_field('etiquetas_del_sitio', 'option'); ?>" />
    <meta name="http-equiv" content="X-Robots-Tag : noindex, follow" />
    <meta name="googlebot" content="<?php the_field('etiquetas_del_sitio', 'option'); ?>" />
    <meta name="verify" content="<?php the_field('descripcion_sitio_web', 'option'); ?>" />

    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:title" content="<?php bloginfo( 'name'); ?>" />
    <meta property="og:site_name" content="<?php bloginfo( 'name'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es-ES">
    <?php if ( is_home()) { ?>
    <meta property="og:image" content="<?php the_field('image_rrss', 'option'); ?>">
    <?php } else { ?>
    <?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true); ?>
    <meta property="og:image" content="<?php echo $thumb_url[0]; ?> ">
    <?php } ?>

    <meta property="og:description" content="<?php the_field('descripcion_sitio_web', 'option'); ?>" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php bloginfo( 'name'); ?>" />
    <meta name="twitter:description" content="<?php the_field('descripcion_sitio_web', 'option'); ?>" />
    <?php if ( is_home()) { ?>
    <meta property="twitter:image" content="<?php the_field('image_rrss', 'option'); ?>">
    <?php } else { ?>
    <?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true); ?>
    <meta property="twitter:image" content="<?php echo $thumb_url[0]; ?> ">
    <?php } ?>
