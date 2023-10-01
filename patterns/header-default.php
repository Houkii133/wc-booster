<?php
/**
 * Title: Default Header
 * Slug: wc-booster/header-default
 * Categories: wc-booster
 *
 * @package WC Booster
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"navbar-section","layout":{"type":"default"}} -->
<header class="wp-block-group navbar-section" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|30"},"blockGap":"0"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|40","left":"0"}}},"className":"header-top-bar","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal","verticalAlignment":"center"}} -->
<div class="wp-block-group header-top-bar" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#FFFFFF","size":"has-small-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"www.twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"www.vimeo.com","service":"vimeo"} /-->

<!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"background","className":"delivery","fontSize":"tiny"} -->
<p class="has-text-align-right delivery has-background-color has-text-color has-tiny-font-size" style="font-style:normal;font-weight:300"><strong><?php echo esc_html__( 'Free delivery', 'wc-booster' ); ?></strong><?php echo esc_html__( '&nbsp;- On all orders over $60', 'wc-booster' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","bottom":"30px","left":"var:preset|spacing|30","top":"30px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"className":"header-bar","layout":{"type":"constrained","contentSize":"","justifyContent":"center"}} -->
<div class="wp-block-group header-bar" style="margin-top:0;margin-bottom:0;padding-top:30px;padding-right:var(--wp--preset--spacing--30);padding-bottom:30px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"header-menu-bar","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group header-menu-bar"><!-- wp:site-title {"textAlign":"center","style":{"spacing":{"margin":{"right":"var:preset|spacing|0"}}}} /-->

<!-- wp:navigation {"ref":4,"icon":"menu","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Menu","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->