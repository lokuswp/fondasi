<?php
/**
 * Title: index
 * Slug: fondasi/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50","padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0rem","left":"0rem"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"custom-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-custom-light-background-color has-background" style="padding-right:0rem;padding-left:0rem"><!-- wp:group {"metadata":{"name":"Banner"},"align":"wide","style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.6rem","right":"1.6rem"}},"border":{"radius":"6px"},"color":{"background":"#f7f7f7bf"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background" style="border-radius:6px;background-color:#f7f7f7bf;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"auto","height":"200px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/square-placeholder.webp" alt="" class="" style="border-radius:12px;width:auto;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"right","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-right has-large-font-size"><?php esc_html_e('WordPress FSE', 'fondasi');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><?php esc_html_e('Full Site Editing', 'fondasi');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post"},"align":"wide","style":{"spacing":{"padding":{"top":"1.6rem","bottom":"1.6rem","left":"1.6rem","right":"1.6rem"},"blockGap":"var:preset|spacing|60"},"border":{"radius":"14px","color":"#ebebeb","width":"1px"},"color":{"background":"#f7f7f7bf"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color has-background" style="border-color:#ebebeb;border-width:1px;border-radius:14px;background-color:#f7f7f7bf;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"1.8rem"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}}} -->
<h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;font-size:1.8rem"><?php esc_html_e('Find resources to build your WordPress FSE', 'fondasi');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('build and manage your WordPress site without technical hassle.', 'fondasi');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":33,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:6px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","linkTarget":"_blank","style":{"color":{"duotone":"unset"},"border":{"radius":"14px"}}} /-->

<!-- wp:post-title {"level":4,"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontSize":"1.1rem","fontStyle":"normal","fontWeight":"400"}}} /-->

<!-- wp:post-date {"isLink":true,"displayType":"modified","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->