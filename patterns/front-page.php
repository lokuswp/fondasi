<?php
/**
 * Title: front-page
 * Slug: fondasi/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Banner"},"align":"wide","style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.6rem","right":"1.6rem"}},"border":{"radius":"14px"},"color":{"background":"#f7f7f7bf"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background" style="border-radius:14px;background-color:#f7f7f7bf;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"auto","height":"200px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image.png" alt="" style="border-radius:12px;width:auto;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e('Transforming Business with Web3 Technology', 'fondasi');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post"},"align":"wide","style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.6rem","right":"1.6rem"},"blockGap":"var:preset|spacing|60"},"border":{"radius":"14px"},"color":{"background":"#f7f7f7bf"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background" style="border-radius:14px;background-color:#f7f7f7bf;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"1.8rem"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}}} -->
<h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;font-size:1.8rem"><?php esc_html_e('Transforming Business with Web3 Technology', 'fondasi');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Help', 'fondasi');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":33,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"14px"}},"backgroundColor":"custom-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-light-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"color":{"duotone":"var:preset|duotone|dark-grayscale"},"border":{"radius":"14px"}}} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"1.2rem"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->