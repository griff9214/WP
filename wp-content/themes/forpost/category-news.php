<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package forpost
 */

get_header(); ?>
    <section class="lastNews lastNews--pos">
        <div class="wrapper">
            <div class="row">
                <h2 class="section-header section-header_have-bord section-header_have-logo section-header_text-centered section-header--pos">
                    последние новости</h2>
				<?php
				$args = array(
					'numberposts' => 9,
					'category' => 7,
					'category_name' => 'news',
					'post_status' => 'publish',
				);
				$news = get_posts($args);
				foreach ($news as $post){
					setup_postdata( $post );
					?>
                    <div class="news">
                        <div class="news__imageContainer">
                            <img src="<?php echo (get_the_post_thumbnail_url($post->ID,'news-main-thumb')!='') ? get_the_post_thumbnail_url($post->ID,'news-main-thumb') : bloginfo(template_directory).'/images/logo.png'; ?>" alt="<?php the_title(); ?>" class="news__image">
                        </div>
                        <div class="news__info">
                            <div class="news__date">
                                <div class="news__day">
                                    <time datetime="<? echo the_time('c') ?>"><? echo the_time('j'); ?></time>
                                </div>
                                <span class="news__month"><? the_time('F') ?></span>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="news__title"><?php the_title(); ?></a></div>
                        <div class="news__shortText"><?php the_excerpt_max_charlength(140); ?></div>
                        <a href="<?php the_permalink(); ?>" class="news__readIt">читать далее</a>
                    </div>
				<?php }
				wp_reset_postdata();
				?>
            </div>
        </div>
    </section>
<?php

get_footer();
