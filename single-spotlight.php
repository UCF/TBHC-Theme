<?php disallow_direct_load('single-spotlight.php');?>
<?php get_header(); the_post();?>
<?php $leftSidebar = get_sidebar('left'); print_r(strlen($leftSidebar));?>

	<div class="row page-content" id="<?=$post->post_name?>">
		<div class="col-md-15 col-sm-15">
			<div id="page-title">
				<div class="row">
					<div class="<?= !ctype_space($leftSidebar) ? 'col-md-12 col-sm-12' : 'col-md-15 col-sm-15' ?>">
						<h1><?=has_term('scholarship-categories','event_groups') ? 'Scholarship' : 'Spotlight'?>: <?php the_title(); ?></h1>
					</div>
					<?php esi_include( 'output_weather_data', 'col-md-3 col-sm-3' ); ?>
				</div>
			</div>
		</div>
		<div id="contentcol" class="<?= !(ctype_space($leftSidebar) && $leftSidebar == '') ? 'col-md-12 col-sm-12 col-sm-push-3' : 'col-md-15 col-sm-15' ?>">
			<article role="main">
				<?if(has_term('scholarship-category','event_groups')){?>
					<div class="scholarship-single-table">
						<div class="row">
							<div class="col-xs-15 col-md-5">
								<b>Award:</b>
							</div>
							<div class="col-xs-15 col-md-10">
								<?=get_post_meta( get_the_ID(), 'award', true )?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-15 col-md-5">
								<b>Endorsement/Nomination Required:</b>
							</div>
							<div class="col-xs-15 col-md-10">
								<?=get_post_meta( get_the_ID(), 'endorsement/nomination_required', true )?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-15 col-md-5">
								<b>Deadline:</b>
							</div>
							<div class="col-xs-15 col-md-10">
								<?=get_post_meta( get_the_ID(), 'deadline', true )?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-15 col-md-5">
								<b>Field of Study:</b>
							</div>
							<div class="col-xs-15 col-md-10">
								<?=get_post_meta( get_the_ID(), 'field_of_study', true )?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-15 col-md-5">
								<b>Website:</b>
							</div>
							<div class="col-xs-15 col-md-10">
								<a href="<?=get_post_meta( get_the_ID(), 'website', true )?>"><?=get_post_meta( get_the_ID(), 'website', true )?></a>
							</div>
						</div>
					</div>
				<?}?>
				<?=the_content();?>
			</article>
		</div>
		
		<? if($leftSidebar !== strip_tags($leftSidebar)){?>
			<div id="sidebar_left" class="col-sm-3 col-sm-pull-12" role="navigation">
				<?=$leftSidebar?>
			</div>
		<?}?>
	</div>
</div>

<?php get_footer();?>
