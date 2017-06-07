<?php disallow_direct_load('single-spotlight.php');?>
<?php get_header(); the_post();?>

	<div class="row page-content" id="<?=$post->post_name?>">
		<div class="col-md-15 col-sm-15">
			<div id="page-title">
				<div class="row">
					<div class="col-md-15 col-sm-15">
						<h1><?=has_term('scholarship-categories','event_groups') ? 'Scholarship' : 'Spotlight'?>: <?php the_title(); ?></h1>
					</div>
					<?php esi_include( 'output_weather_data', 'col-md-3 col-sm-3' ); ?>
				</div>
			</div>
		</div>
		<div id="contentcol" class="col-md-15 col-sm-15">
			<article role="main">
				<?if(has_term('scholarship-categories','event_groups')){?>
					<div class="scholarship-single-table">
						<div class="row">
							<div class="col-xs-15 col-md-5">
								Award:
							</div>
							<div class="col-xs-15 col-md-10">
								<?=get_post_meta( get_the_ID(), 'award', true )?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-15 col-md-5">
								Institutional Endorsement/Nomination Required:
							</div>
							<div class="col-xs-15 col-md-10">
								<?=get_post_meta( get_the_ID(), 'institutional_endorsement/nomination_required', true )?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-15 col-md-5">
								Deadline:
							</div>
							<div class="col-xs-15 col-md-10">
								<?=get_post_meta( get_the_ID(), 'deadline', true )?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-15 col-md-5">
								Field of Study:
							</div>
							<div class="col-xs-15 col-md-10">
								<?=get_post_meta( get_the_ID(), 'field_of_study', true )?>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-15 col-md-5">
								Website:
							</div>
							<div class="col-xs-15 col-md-10">
								<?=get_post_meta( get_the_ID(), 'website', true )?>
							</div>
						</div>
					</div>
				<?}?>
				<?=the_content();?>
			</article>
		</div>
	</div>

<?php get_footer();?>
