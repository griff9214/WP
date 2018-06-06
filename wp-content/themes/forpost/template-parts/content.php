<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package forpost
 */
//require_once get_template_directory() . '/inc/template-tags.php';
?>

<article>
		<?php
            echo "<h1>".single_post_title('',false)."</h1>";
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'forpost' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
        ?>
</article>
