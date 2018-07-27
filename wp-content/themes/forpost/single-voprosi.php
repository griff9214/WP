<?php
/**
 * The template for displaying single page for faq
 *
 * @package forpost
 */
get_header(); ?>
<?
$question_text = ale_get_meta('question_text');
$reply_text = ale_get_meta('reply_text');
$question_author = ale_get_meta('question_author');
?>
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
                <h1><?= get_the_title() ?></h1>
                <div class="review review_in-faq">
                    <div class="review__caption review__caption_in-faq">
                        <? echo ($question_author != "") ? '<div class="review__firm">' . $question_author . '</div>' : ""; ?>
                        <div class="review__text"><?= $question_text ?>
                        </div>
                    </div>
                </div>
                <article><div class="faq-answer"><?= $reply_text ?></div></article>
            </main>
        </div>
    </div>
</div>
<!-- #main -->
<?php
get_footer();
?>
