<?php get_header();?>
<?php $options = get_option(THEME_OPTIONS_NAME);?>
<?php $page    = get_page_by_title('Home');?>
	<div class="row" id="home" data-template="home-nodescription" role="main">
		<?=print_r(get_theme_option('home_page_theme');frontpage_opportunities();?>
		<?=frontpage_interests()?>
 		<?=frontpage_spotlights()?>
		<?=frontpage_events()?>
	</div>
	<!--<div class="container-shadow">
		<span></span>
	</div>-->
</div><!--[container]-->
<?php get_footer();?>
