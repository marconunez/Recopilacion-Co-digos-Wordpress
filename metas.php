    <!-- Provide a short description of the page. -->
    <meta name="description" content="<?php the_field('descripcion_sitio_web', 'option'); ?>">
    <!-- This meta tag tells Google not to show the sitelinks search box. -->
    <meta name="google" content="nositelinkssearchbox" />
    <!-- Control the behavior of search engine crawling and indexing.
 The robots meta tag applies to all search engines, while the "googlebot" meta tag is specific to Google. -->
    <meta name="robots" content="<?php the_field('etiquetas_del_sitio', 'option'); ?>" />
    <meta name="http-equiv" content="X-Robots-Tag : noindex, follow" />
    <meta name="googlebot" content="<?php the_field('etiquetas_del_sitio', 'option'); ?>" />
    <!-- Used for verifying ownership of a site. -->
    <meta name="verify" content="<?php the_field('descripcion_sitio_web', 'option'); ?>" />

    <!-- Open Graph Meta Tags -->
    <!-- Set the canonical URL for the page you are sharing. -->
    <meta property="og:url" content="<?php bloginfo( 'home'); ?>">
    <!-- The title to accompany the URL. -->
    <meta property="og:title" content="<?php bloginfo( 'name'); ?>" />
    <!-- Provides Facebook the name that you would like your website to be recognized by. -->
    <meta property="og:site_name" content="<?php bloginfo( 'name'); ?>">
    <!-- Provides Facebook the type of website that you would like your website to be categorized by. -->
    <meta property="og:type" content="website">
    <!-- Defines the language, American English is the default. -->
    <meta property="og:locale" content="es-ES">
    <!-- Directs Facebook to use the specified image when the page is shared. -->
    <meta property="og:image" content="<?php the_field('image_rrss', 'option'); ?>">
    <!-- Similar to the meta description tag in HTML. This description is shown below the link title on Facebook. -->
    <meta property="og:description" content="<?php the_field('descripcion_sitio_web', 'option'); ?>" />

    <!-- Twitter Card data -->
    <!-- The type of card to be created: summary, photo, or video -->
    <meta name="twitter:card" content="summary" />
    <!-- Title of the Twitter Card -->
    <meta name="twitter:title" content="<?php bloginfo( 'name'); ?>" />
    <!-- Description of content -->
    <meta name="twitter:description" content="<?php the_field('descripcion_sitio_web', 'option'); ?>" />
    <!-- URL of image to use in the card. Used with summary, summary_large_image, player cards -->
    <meta name="twitter:image" content="<?php the_field('image_rrss', 'option'); ?>" />
