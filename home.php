<?php get_header();?>
<?php $options = get_option(THEME_OPTIONS_NAME);?>
<?php $page    = get_page_by_title('Home');?>
	<div class="row" id="home" data-template="home-nodescription" role="main">
		<?php/*get_theme_option('home_page_theme') == '0' ? frontpage_opportunities() : '';
		get_theme_option('home_page_theme') == '1' ? frontpage_interests() : '';
 		get_theme_option('home_page_theme') == '0' || get_theme_option('home_page_theme') == '2' ? frontpage_spotlights() : '';
		get_theme_option('home_page_theme') == '0' && ? frontpage_events() : '';*/?>
	</div>
	<!--<div class="container-shadow">
		<span></span>
	</div>-->
</div><!--[container]-->
<?php get_footer();?>
