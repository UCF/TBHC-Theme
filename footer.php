			<div id="footer" style="<?=get_theme_option('footer_bg_color') ? 'background-color:'.get_theme_option('footer_bg_color').' !important;' : ''?>">
				<div id="footer-navwrap" class="row">
					<?if(/*get_theme_option('home_page_theme') != '2'*/true){ ?>
					<div class="hidden-sm hidden-xs footerCol <?=get_theme_option('home_page_theme') == '2' ? 'hidden-md hidden-lg' : 'col-md-3'?>">
						<?=wp_nav_menu(array(
							'theme_location' => 'footer-outer-left-collapse',
							//'menu' => 'footer-audience',
							'menu_id' => 'footer-outer-left-collapse',
							'container' => 'false',
							'menu_class' => 'menu list-unstyled screen-only',
							'fallback_cb' => false,
							'depth' => 1,
							'walker' => new Bootstrap_Walker_Nav_Menu()
							));
						?>				
					</div>
					<div class="hidden-sm hidden-xs footerCol <?=get_theme_option('home_page_theme') == '2' ? 'hidden-md hidden-lg' : 'col-md-3'?>">
						<?=wp_nav_menu(array(
							'theme_location' => 'footer-inner-left-collapse',
							//'menu' => 'footer-quick-links',
							'container' => 'false',
							'menu_class' => 'menu list-unstyled',
							'menu_id' => 'footer-inner-left-collapse',
							'fallback_cb' => false,
							'depth' => 1,
							'walker' => new Bootstrap_Walker_Nav_Menu()
							));
						?>
					</div>
					<?}?>
					<div id="footer-logo" class="col-xs-15 col-sm-5 col-sm-push-5 <?=get_theme_option('home_page_theme') == '2' ? '' : 'col-md-push-0 col-md-3'?>">
						<a href="<?= site_url() ?>">
							<img id="tbhcFooterLogo" src="<?php bloginfo('stylesheet_directory'); ?>/static/img/WebsiteFooterShort.png" alt="The Burnett Honors College">
							</img>
						</a>
						<?=wp_nav_menu(array(
							'theme_location' => 'social-links',
							'container' => 'div',
							'container_id' => 'social-menu-wrap',
							'menu_class' => 'menu list-unstyled list-inline screen-only',
							'menu_id' => 'social-menu',
							'depth' => 1,
							));
						?>
					</div>				
					<div class="footerCol col-xs-half col-sm-5 col-sm-pull-5 <?=get_theme_option('home_page_theme') == '2' ? 'opaRight' : 'col-md-pull-0 col-md-3'?>">
						<?=wp_nav_menu(array(
							'theme_location' => 'footer-inner-right',
							//'menu' => 7,
							'menu_id' => 'footer-inner-right',
							'container' => 'div',
							'menu_class' => 'menu list-unstyled screen-only',
							//'menu_id' => 'department-sites',
							'depth' => 1,
							));
						if(get_theme_option('home_page_theme') == '2'){?>
							<div id="contactInfo">
								<div class="location-title">
									Contact US
								</div>
								<div class="adr">
									<div class="tel">
										<a href="tel:4078234019">p.  407.823.4019</a>
									</div>
									<div class="tel">
										<a href="tel:4078236583">f.  407.823.6583</a>
									</div>
									<div class="email">
										<a href="mailto:honors@ucf.edu">e.  honors@ucf.edu</a>
									</div>
								</div>
							</div>
						<?}?>
					</div>	
					<div class="footerCol col-xs-half col-sm-5 <?=get_theme_option('home_page_theme') == '2' ? 'opaLeft' : 'col-md-3'?>">
						<div id="contactInfo" role="contentinfo" class="vcard">
							<?if(get_theme_option('home_page_theme') == '2'){?>
								<div class="location-title">
									Location
									<span class="street-address">Trevor Colbourn Hall, Suite 248D</span>
									<span class="locality">Orlando,</span>
									<span class="region">FL</span>
									<span class="postal-code">32816</span>
								</div>
							<?}?>
							<a href="https://honors.ucf.edu" class="print-noexpand fn org url">
								<span class="organization-name">The Burnett Honors College</span>
							</a>
							<div class="adr">
								<span class="street-address">P.O. Box 161800</span>
								<div>
									<span class="locality">Orlando,</span>
									<span class="region">FL</span>
									<span class="postal-code">32816</span>
								</div>
								<?if(get_theme_option('home_page_theme') != '2'){?>
									<div class="tel">
										<a href="tel:4078232076">407.823.2076</a>
									</div>
									<div class="email">
										<a href="mailto:honors@ucf.edu">honors@ucf.edu</a>
									</div>
								<?}?>
							</div>
							<!--<br/>
								<a href="<?=site_url()?>/feedback/">Comments and Feedback</a> | &copy;
								<a href="<?=site_url()?>" class="print-noexpand fn org url">
								<span class="organization-name">The Burnett Honors College</span>
							</a>-->
						</div>
					</div>
				</div>
			</div>
			<div id="subfooter" style="<?=get_theme_option('footer_bg_color') ? 'background-color:'.get_theme_option('footer_bg_color').' !important;' : ''?>">
				<?php
					//custom_breadcrumbs();
				?>
			</div>
		</div><!-- .container -->
	</body>
	<?="\n".footer_()."\n"?>
</html>
