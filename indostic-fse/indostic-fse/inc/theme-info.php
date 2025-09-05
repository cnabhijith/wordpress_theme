<?php
/**
 * Add Theme info Page
 */

function indostic_fse_menu() {
	add_theme_page( esc_html__( 'Indostic FSE', 'indostic-fse' ), esc_html__( 'About Indostic FSE', 'indostic-fse' ), 'edit_theme_options', 'about-indostic-fse', 'indostic_fse_theme_page_display' );
}
add_action( 'admin_menu', 'indostic_fse_menu' );

function indostic_fse_admin_theme_style() {
	wp_enqueue_style('indostic-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'indostic_fse_admin_theme_style');

/**
 * Display About page
 */
function indostic_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'indostic-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'The Indostic FSE is a free factory WordPress theme design for industrial, machinery, manufacturer, manufacturing, production, products, supplier, textile and trading.', 'indostic-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'indostic-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'indostic-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'indostic-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'indostic-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'indostic-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'indostic-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'indostic-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'indostic-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'indostic-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get Indostic PRO', 'indostic-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'indostic-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/industrial-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'indostic-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'indostic-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/indostic/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'indostic-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/indostic/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'indostic-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'indostic-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'indostic-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with Indostic FSE, please give your feedback.', 'indostic-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/indostic-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'indostic-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>