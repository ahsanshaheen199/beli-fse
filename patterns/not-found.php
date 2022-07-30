<?php
/**
 * Title: Not Found
 * Slug: beli/not-found
 * Categories: beli
 * Description: 404 page content
 */
?>
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.1","fontSize":"150px"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<h2 class="has-text-align-center" style="font-size:150px;font-style:normal;font-weight:800;line-height:1.1;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><?php echo esc_html__( '404', 'beli' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"40px"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<h4 class="has-text-align-center" style="font-size:40px;font-style:normal;font-weight:800;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><?php echo esc_html__( 'Page Not Found', 'beli' ); ?></h4>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html__( 'It Looks Like Nothing Was Found At This Location.', 'beli' );  ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"25px"}}}} -->
	<div class="wp-block-buttons" style="margin-top:25px"><!-- wp:button {"align":"center"} -->
		<div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Back to Home', 'beli' ); ?></a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
<!-- /wp:group -->
