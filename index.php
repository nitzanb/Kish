<?
get_header(); 
?>

<div id="main" role="main">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div id="post-<?=$post->ID;?>" class="post">
				<h2><?the_title();?></h2>
				<?the_content();?>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<h2><?_e('Not Found','kish');?></h2>
		<p><?_e("Sorry, but you are looking for something that isn't here.",'kish');?></p>
		<?php get_search_form(); ?>
	<?php endif; ?>		
</div>

<?
get_sidebar();
get_footer(); 
?>
