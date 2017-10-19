<?php disallow_direct_load('single.php');?>
<?php get_header(); the_post();?>
<?php 
	ob_start();
	get_sidebar('left'); 
	$leftSidebar = ob_get_clean();
?>


	<div class="row page-content" id="<?=$post->post_name?>">
		<div class="<?= $leftSidebar ? 'col-md-12 col-sm-12' : 'col-md-15 col-sm-15' ?>">
			<div id="page-title">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h1><?php the_title(); ?></h1>
					</div>
					<?php esi_include( 'output_weather_data', 'col-md-3 col-sm-3' ); ?>
				</div>
			</div>
		</div>
		<div class="<?= $leftSidebar ? 'col-md-12 col-sm-12 col-sm-push-3' : 'col-md-15 col-sm-15' ?>" id="contentcol">
			<article role="main">
				<?php the_content();?>
				&nbsp;
			</article>
		</div>
		
		<? if($leftSidebar){?>
			<div id="sidebar_left" class="col-sm-3 col-sm-pull-12" role="navigation">
				<?=get_sidebar('left');?>
			</div>
		<?}?>
	</div>
	<!--<div class="container-shadow">
		<span></span>
	</div>-->
</div>
<?php get_footer();?>
