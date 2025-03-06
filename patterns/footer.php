<?php
/**
 * Title: footer
 * Slug: fondasi/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"categories":["footer","wireframe"],"patternName":"core/footer-with-site-title-and-credit-line","name":"Wrap"},"align":"full","className":"has-background-color","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.6rem","right":"1.6rem"}},"border":{"radius":"14px"}},"backgroundColor":"custom-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-custom-primary-background-color has-background" style="border-radius:14px;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}}},"textColor":"custom-secondary"} -->
<p class="has-custom-secondary-color has-text-color has-link-color" style="font-size:1rem"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Fondasi by %1$sLokusWP%2$s', 'fondasi' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}}},"textColor":"custom-secondary"} -->
<p class="has-custom-secondary-color has-text-color has-link-color" style="font-size:1rem"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( ' Proudly powered by %1$sWordPress%2$s ', 'fondasi' ), '<a rel="nofollow" href="' . esc_url( 'https://wordpress.org' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->