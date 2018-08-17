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
                        <div class="promo-section__text"><? echo $header_text; ?></div>
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
                            <!--                            <svg height="0" xmlns="http://www.w3.org/2000/svg">-->
                            <!--                            <filter id="drop-shadow">-->
                            <!--                            <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>-->
                            <!--                            <feOffset dx="12" dy="12" result="offsetblur"-->
                            <!--                            data-bind="attr: { dx: - relativeMouse.x()}"/>-->
                            <!--                            <feFlood flood-color="rgba(0,0,0,0.5)"/>-->
                            <!--                            <feComposite in2="offsetblur" operator="in"/>-->
                            <!--                            <feMerge>-->
                            <!--                            <feMergeNode/>-->
                            <!--                            <feMergeNode in="SourceGraphic"/>-->
                            <!--                            </feMerge>-->
                            <!--                            </filter>-->
                            <!--                            </svg>-->
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
                <? if (empty($header_title)): ?>
                    <h1 class="section-header section-header_have-logo section-header_have-bord section-header_text-centered section-header--pos">
                        <? the_title(); ?></h1>
                <? endif; ?>
                <? mosaic_menu(8); ?>
            </div>
        </div>
        <div class="wrapper">
            <div class="row">
                <main class="main_inside main_inside-8">
                    <? the_content(); ?>
                </main>
            </div>
        </div>
    </div>

<?php

get_footer();
