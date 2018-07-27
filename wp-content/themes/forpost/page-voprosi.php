<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package forpost
 */

get_header(); ?>
    <div class="promo-section promo-section_shadowed">
        <div class="wrapper">
            <div class="row">
                <div class="promo-section__left-side promo-section__left-side_in-faq">
                </div>
                <div class="promo-section__right-side promo-section__right-side_in-faq">
                    <a href="#" data-toggle="modal" data-target="#myModal"
                       class="button button_green button_cont-fit button_anim-shadow">Расчитать стоимость охраны</a>
                </div>

            </div>
        </div>
        <div class="promo-section__breadcrumbs">
            <div class="wrapper">
                <? echo get_breadcrumbs(); ?>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="wrapper">
            <div class="row">
                <main class="main_faq">
                    <article>
                        <p class="faq-answer">
                            <?php
                            $args = array(
                                'post_type' => 'voprosi',
				'numberposts' => 20,

                            );
                            $voprosi = get_posts($args);
                            foreach ($voprosi as $post) {
                                setup_postdata($post);
                                //608 - айди родительского вопроса, сделанного для хлебных крошек
                                if ($post->ID != 608) {
                                    echo '<a href=' . get_permalink($post) . '>' . get_the_title($post) . '</a><br>';
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </p>
                    </article>
                </main>
            </div>
        </div>
    </div>
<?php
get_footer();
