<? get_header();
$header_title = get_post_meta(get_the_ID(), 'page_header_title', true);
$header_text = get_post_meta(get_the_ID(), 'page_header_text', true);
?>
    <section class="promo-section">
        <div class="wrapper">
            <div class="row">
                <div class="promo-section__left-side">
                    <? if (!empty($header_title)): ?>
                        <h1 class="promo-section__sub-header promo-section__sub-header_have-bord promo-section__header--pos">
                            <? echo $header_title; ?></h1>
                    <? endif; ?>
                    <? if (!empty($header_text)): ?>
                        <div class="promo-section__sub-header"><? echo $header_text; ?></div>
                    <? endif; ?>
                    <a href="#" data-toggle="modal" data-target="#myModal"
                       class="button promo-section__button button_green">заказать
                        охрану</a>
                </div>
                <div class="promo-section__right-side">
                    <div id="parallxWrapper">
                        <div class="parallxBackground">
                            <div class="parallxLayerFirst shadowed"
                                 data-bind="attr: { style:'-webkit-transform:perspective(1000px) translateZ(20px) rotateY(' + relativeMouse.x() * 0.9 + 'deg) rotateX(' + relativeMouse.y() + 'deg);transform:perspective(1000px) translateZ(20px) rotateY(' + relativeMouse.x() * 0.9 + 'deg) rotateX(' + relativeMouse.y() + 'deg)' }"></div>
                            <div class="parallxLayerSecond shadowed"
                                 data-bind="attr: { style:'-webkit-transform:perspective(1000px) translateZ(100px) rotateY(' + relativeMouse.x() * 0.7 + 'deg) rotateX(' + relativeMouse.y() + 'deg);transform:perspective(1000px) translateZ(100px) rotateY(' + relativeMouse.x() * 0.7 + 'deg) rotateX(' + relativeMouse.y() + 'deg)' }"></div>
                            <div class="parallxLayerThird shadowed"
                                 data-bind="attr: { style:'-webkit-transform:perspective(1000px) translateZ(20px) rotateY(' + relativeMouse.x() + 'deg) rotateX(' + relativeMouse.y() + 'deg);transform:perspective(1000px) translateZ(20px) rotateY(' + relativeMouse.x() + 'deg) rotateX(' + relativeMouse.y() + 'deg)' }"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="smoke" class="smokeParallax">
                <div data-depth="-0.8" class="smokeRightTop"></div>
                <div data-depth="1.3" class="smokeLeftTop"></div>
                <div data-depth="0.4" class="smokeLeftBottom"></div>
                <div data-depth="0.5" class="smokeRightBottom"></div>
                <div data-depth="-0.1" class="smokeCenter"></div>
            </div>
        </div>
    </section>
    <div class="page-content">
        <div class="wrapper">
            <div class="row">
                <main class="main-otz">

                    <?php
                    $args = array(
                        'numberposts' => 0,
                        'post_type' => 'otzivy',
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
