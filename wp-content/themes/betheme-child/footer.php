<?php
/**
 * The template for displaying the footer.
 *
 * @package Betheme
 * @author Muffin group
 * @link https://muffingroup.com
 */


$back_to_top_class = mfn_opts_get('back-top-top');

if( $back_to_top_class == 'hide' ){
	$back_to_top_position = false;
} elseif( strpos( $back_to_top_class, 'sticky' ) !== false ){
	$back_to_top_position = 'body';
} elseif( mfn_opts_get('footer-hide') == 1 ){
	$back_to_top_position = 'footer';
} else {
	$back_to_top_position = 'copyright';
}

?>

<?php do_action( 'mfn_hook_content_after' ); ?>

<?php if( 'hide' != mfn_opts_get( 'footer-style' ) ): ?>
	<!-- #Footer -->
	<footer id="Footer" class="clearfix">

		<?php if ( $footer_call_to_action = mfn_opts_get('footer-call-to-action') ): ?>
		<div class="footer_action">
			<div class="container">
				<div class="column one column_column">
					<?php echo do_shortcode( $footer_call_to_action ); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php
			$sidebars_count = 0;
			for( $i = 1; $i <= 5; $i++ ){
				if ( is_active_sidebar( 'footer-area-'. $i ) ) $sidebars_count++;
			}

			if( $sidebars_count > 0 ){

				$footer_style = '';

				if( mfn_opts_get( 'footer-padding' ) ){
					$footer_style .= 'padding:'. mfn_opts_get( 'footer-padding' ) .';';
				}

				echo '<div class="widgets_wrapper" style="'. $footer_style .'">';
					echo '<div class="container">';

						if( $footer_layout = mfn_opts_get( 'footer-layout' ) ){
							// Theme Options

							$footer_layout 	= explode( ';', $footer_layout );
							$footer_cols 	= $footer_layout[0];

							for( $i = 1; $i <= $footer_cols; $i++ ){
								if ( is_active_sidebar( 'footer-area-'. $i ) ){
									echo '<div class="column '. $footer_layout[$i] .'">';
										dynamic_sidebar( 'footer-area-'. $i );
									echo '</div>';
								}
							}

						} else {
							// Default - Equal Width

							$sidebar_class = '';
							switch( $sidebars_count ){
								case 2: $sidebar_class = 'one-second'; break;
								case 3: $sidebar_class = 'one-third'; break;
								case 4: $sidebar_class = 'one-fourth'; break;
								case 5: $sidebar_class = 'one-fifth'; break;
								default: $sidebar_class = 'one';
							}

							for( $i = 1; $i <= 5; $i++ ){
								if ( is_active_sidebar( 'footer-area-'. $i ) ){
									echo '<div class="column '. $sidebar_class .'">';
										dynamic_sidebar( 'footer-area-'. $i );
									echo '</div>';
								}
							}

						}

					echo '</div>';
				echo '</div>';
			}
		?>
<!-- CUSTOM FOOTER AREA -->

<div class="container-fluid">
  <div class="row">
  	<hr class="footer-hr-grey">


		<h2 style="color:#005099;text-align:center;font-weight:bold;font-size: 2.5em;padding-top: 18px;line-height: 1.1;">We proudly provide compliance services for:</h2>
    <div class="col footer-client-logos"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/05/Footer-logos.png" class="center-block img-responsive scale-with-grid"></div>
    <hr class="footer-hr-grey">
  </div>
</div>

<div class="widgets_wrapper test" style="padding:10px 0;">
    <div class="container row">
        <!--<div class="column one-fourth">
			<aside id="custom_html-2" class="widget_text widget widget_custom_html">
				<div class="textwidget custom-html-widget">
					<div class="social-icons footer-box-bottom">
						<a href="https://www.facebook.com/labyrinthinc/" target="_blank"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/02/fb-40px.png"></a>
						<a href="https://twitter.com/labyrinthinc" target="_blank"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/02/twit-40px.png"></a>
						<a href="https://www.linkedin.com/company/labyrinth-inc-" target="_blank"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/02/li-40px.png"></a>
					</div>
				</div>
			</aside>
		</div>-->
        <!--<div class="column one-second center-footer-1">-->
        <div class="column one-fourth center-ft">
        <div class="social-icons footer-box-bottom">
            <a href="https://www.facebook.com/labyrinthinc/" target="_blank"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/02/fb-40px.png"></a>
            <a href="https://twitter.com/labyrinthinc" target="_blank"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/02/twit-40px.png"></a>
            <a href="https://www.linkedin.com/company/labyrinth-inc-" target="_blank"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/02/li-40px.png"></a>
            </div></div>
        <div class="column one-fourth center-ft">
        <aside id="custom_html-3" class="widget_text widget widget_custom_html">
            <div class="textwidget custom-html-widget">
                <div class="footer-box-bottom">
                    <a href="https://www.bbb.org/us/md/rockville/profile/compliance-consulting/labyrinth-inc-0241-236010123#bbbonlineclick"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/03/bbb-logo-1x120.png"></a>
                </div>
            </div>
            </aside>
			</div>
			<div class="column one-fourth center-ft">
			<aside id="custom_html-5" class="widget_text widget widget_custom_html">
            <div class="textwidget custom-html-widget">
                <div class="footer-box-bottom">
                    <a href="#"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/04/Data-privacyx120.png"></a>
                </div>
            </div>
            </aside>
			</div>
        <div class="column one-fourth center-ft">
        <aside id="custom_html-4" class="widget_text widget widget_custom_html">
            <div class="textwidget custom-html-widget">
                <div class="footer-box-bottom">
                    <a href="#"><img src="https://www.labyrinthinc.com/wp-content/uploads/2019/03/norton-120px.png"></a>
                </div>
            </div>
            </aside></div>
        <!--<div class="column one-second">
			<aside id="custom_html-5" class="widget_text widget widget_custom_html">
				<div class="textwidget custom-html-widget">
					<div class="footer-box-bottom"><a href="https://www.labyrinthinc.com/?page_id=3&amp;preview=true">Privacy
							Policy</a></div>
				</div>
			</aside>
		</div>--></div>
</div>

<!-- END CUSTOM FOOTER AREA -->
		<?php if( mfn_opts_get('footer-hide') != 1 ): ?>

			<div class="footer_copy">
				<div class="container">
					<div class="column one">

						<?php
							if( $back_to_top_position == 'copyright' ){
								echo '<a id="back_to_top" class="button button_js" href=""><i class="icon-up-open-big"></i></a>';
							}
						?>

						<!-- Copyrights -->
						<div class="copyright">
						<div class="footer-box-bottom"><a href="https://www.labyrinthinc.com/?page_id=3&amp;preview=true">Privacy
							Policy</a></div>
							<?php
								if( mfn_opts_get('footer-copy') ){
									echo do_shortcode( mfn_opts_get('footer-copy') );
								} else {
									echo '&copy; '. date( 'Y' ) .' '. get_bloginfo( 'name' ) .'. All Rights Reserved. <a target="_blank" rel="nofollow" href="https://muffingroup.com">Muffin group</a>';
								}
							?>
						</div>

						<?php
							if( has_nav_menu( 'social-menu-bottom' ) ){
								mfn_wp_social_menu_bottom();
							} else {
								get_template_part( 'includes/include', 'social' );
							}
						?>

					</div>
				</div>
			</div>

		<?php endif; ?>

		<?php
			if( $back_to_top_position == 'footer' ){
				echo '<a id="back_to_top" class="button button_js in_footer" href=""><i class="icon-up-open-big"></i></a>';
			}
		?>

	</footer>
<?php endif; ?>

</div><!-- #Wrapper -->

<?php
	// Responsive | Side Slide
	if( mfn_opts_get( 'responsive-mobile-menu' ) ){
		get_template_part( 'includes/header', 'side-slide' );
	}
?>

<?php
	if( $back_to_top_position == 'body' ){
		echo '<a id="back_to_top" class="button button_js '. $back_to_top_class .'" href=""><i class="icon-up-open-big"></i></a>';
	}
?>

<?php if( mfn_opts_get('popup-contact-form') ): ?>
	<div id="popup_contact">
		<a class="button button_js" href="#"><i class="<?php mfn_opts_show( 'popup-contact-form-icon', 'icon-mail-line' ); ?>"></i></a>
		<div class="popup_contact_wrapper">
			<?php echo do_shortcode( mfn_opts_get('popup-contact-form') ); ?>
			<span class="arrow"></span>
		</div>
	</div>
<?php endif; ?>

<?php do_action( 'mfn_hook_bottom' ); ?>


<!-- wp_footer() -->
<?php wp_footer(); ?>





</body>
</html>