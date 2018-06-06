<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package forpost
 */

get_header(); ?>
    <div class="page-content">
        <div class="wrapper">
            <div class="row">
                <main class="main-otz">

                    <?php
                    $args = array(
                        'post_type' => 'faq',
                    );
                    $news = get_posts($args);
                    $col1 = '<div class="main-otz__container">';
                    $col2 = '<div class="main-otz__container">';
                    $col3 = '<div class="main-otz__container">';
                    $i = 1;
                    foreach ($news as $post) {
                        setup_postdata($post);
                        $otzivData = (ale_get_meta('otziv_photo') != '') ? 'data-full="' . ale_get_meta('otziv_photo') . '"' : '';
                        $otziv = '<div class="review '.$i.'"' . $otzivData . '>
                                    <div class="review__caption review__caption_on-page">
                                        <div class="review__firm">' . ale_get_meta('otziv_company') . '</div>
                                        <div class="review__text">' . get_the_content() . '</div>
                                        <img src="' . ale_get_meta('otziv_company_logo') . '" alt="" class="review__firmLogo review__firmLogo_on-page">
                                    </div>
                                    <div class="review__author">' . ale_get_meta('otziv_author') . '</div>
                                   </div>';
                        switch ($i % 3) {
                            case 1:
                                $col1 .= $otziv;
                                break;
                            case 2:
                                $col2 .= $otziv;
                                break;
                            case 0:
                                $col3 .= $otziv;
                                $i = 0;
                                break;
                        }
                        $i++;
                    }
                    $col1 .= '</div>';
                    $col2 .= '</div>';
                    $col3 .= '</div>';
                    wp_reset_postdata();
                    echo $col1 . $col2 . $col3;
                    ?>

                </main>
            </div>
        </div>
    </div>
<?php
get_footer();
