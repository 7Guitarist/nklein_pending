			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>
	
		<footer class="footer">
			<div class="container">
			<div class="footer-content">
				<div class="footer-logo">
					<a href="[blogurl]" aria-label="logo">
						<div class="footer-img">
							<img
								alt="footer"
								class="img-footer"
								src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-logo.png"
							/>
						</div>
					</a>
				</div>
				<div class="footer-compass">
					<a href="[blogurl]" aria-label="compass">
						<div class="footer-img">
							<img
								alt="footer"
								class="img-footer"
								src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-compass.png"
							/>
						</div>
					</a>
				</div>
					<div class="footer-wrapper">
					<h2 class="footer-sitemap">Sitemap</h2>
						<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
						<div class="footer-contact">
							<h2>Contact Info</h2>
							<div class="footer-contact-item">
								<span class="ai-font-phone"></span>
								<?php echo do_shortcode('[ai_phone href="+1.858.336.9816"] 858.336.9816[/ai_phone]'); ?>
							</div>
							<div class="footer-contact-item">
								<span class="ai-font-envelope-f"></span>
								<?php echo do_shortcode('[mail_to email="info@nikol.com"] info@nikol.com[/mail_to]'); ?>
							</div>
							<div class="footer-contact-item">
								<span class="ai-font-location-c"></span>
								<span class="location">DRE# 01982201</span>
							</div>
						</div>
					</div>
			</div>
				<div class="footer-info">
					<p>NIKOL KLEIN is committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website,
					or notice any accessibility problems, please contact us at 858.336.9816 to specify the nature of the accessibility issue and any assistive technology you use.
					We strive to provide the content you need in the format you require.</p>
					<div class="footer-bot">
    <p class="copyright">Copyright ©
        <?php echo do_shortcode('[currentYear]')?> <span class="sitename">NIKOL KLEIN. </span> All rights
        reserved. | <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap</a> |
        <?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?>
    </p>

    <!-- MLS -->
    <div class="mls">
        <em class="ai-font-eho" title="MLS"></em>
        <em class="ai-font-realtor-mls" title="MLS"></em>
    </div>
				</div>
			</div>		
		</footer>
		
		<?php do_action('aios_neighborhoods_footer')?>
		<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
