<?php get_header(); ?>

<!-- single.php -->

<div id="content">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
				<p class="postmetadata"><?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?>
				
				<div class="post_content">
					<?php the_content(); ?>
				</div>
		</div>

<div class="comments-template">
<?php comments_template(); ?>
</div>

<?php endwhile; ?>
<?php else : ?>
		<p>Désolé, aucun article ne correspond à vos critères.</p>
<?php endif; ?>
</div>

<!-- fin single.php -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>