<?php
/**
 * The template part for displaying the post meta.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rock
 */
?>
<footer class="entry-footer">
	<div class="entry-footer-right">
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( esc_html__( 'Leave a comment', 'rock' ), esc_html__( '1 Comment', 'rock' ), esc_html__( '% Comments', 'rock' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( esc_html__( 'Edit', 'rock' ), '<span class="edit-link">', '</span>' ); ?>
	</div>

	<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'rock' ) );
			if ( $categories_list && rock_categorized_blog() ) :
		?>
		<span class="cat-links">
			<?php printf( esc_html__( 'Posted in: %1$s', 'rock' ), $categories_list ); ?>
		</span>
		<?php endif; // End if categories ?>

		<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'rock' ) );
			if ( $tags_list ) :
		?>
		<span class="tags-links">
			<?php printf( esc_html__( 'Filed under: %1$s', 'rock' ), $tags_list ); ?>
		</span>
		<?php endif; // End if $tags_list ?>
	<?php endif; // End if 'post' == get_post_type() ?>
</footer><!-- .entry-footer -->
