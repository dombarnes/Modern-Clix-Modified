<?php get_header(); ?>

	<div id="content" class="col span-8">
		<?php if (have_posts()) : ?>	
		<?php while (have_posts()) : the_post(); ?>
				
		<div class="post">
			<!--<div class="post-meta col span-2">
				<ul class="nav">
					<li><?php the_time('F j, Y'); ?></li>
					
			
					<?php comments_number('No comments yet','One comment','% comments'); ?></li>
					<?php edit_post_link('Edit this post', '<li>', '</li>'); ?>
					<ul><?php do_action('read_later'); ?> </ul>
				</ul>
			</div> -->
			
			<div class="post-content span-8 nudge-2">
				<h3><?php if (is_linked_list()): ?>
  <h2 class="entry-title linked-list-item"><a href="<?php the_linked_list_link(); ?>" title="<?php printf( esc_attr__( 'Link to %s', 'modern-clix' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>   <?php the_permalink_glyph(); ?></h2>
<?php else: ?>
  <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'modern-clix' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php endif; ?></div></h3>
<div id="title-date"><?php the_time('d M Y'); ?></div>
<div><?php do_action('read_later'); ?></div>

				<?php the_content('Continue reading...'); ?>
			</div>
		</div>
		
	<!--	<?php comments_template(); ?> -->

		<?php endwhile; ?>

	<?php else : ?>
	
		<h3>Post Not Found</h3>
		<p>Sorry, but you are looking for something that isn't here.</p>
	
	<?php endif; ?>
	
</div>

<hr />

<?php get_sidebar(); ?>

<?php get_footer(); ?>
