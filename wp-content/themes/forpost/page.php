<?php
/**
 * The template for displaying single page for uslugi
 *
 * @package forpost
 */
get_header(); ?>
    <section class="promo-section">
        <div class="wrapper">
            <div class="row">
                <div class="promo-section__left-side">
                    <div class="promo-section__header promo-section__header--pos">форпост -
                        север
                    </div>
                    <div class="promo-section__sub-header">безопасность - это в наших силах</div>
                    <div class="animateNumbers animateNumbers__promoSection animateNumbers--pos">
                        <div class="animateNumbersNum">
                            <div class="animateNumbersNum__num">16</div>
                            <div class="animateNumbersNum__caption">лет бесценного опыта</div>
                        </div>
                        <div class="animateNumbersNum animateNumbersNum__pos">
                            <div class="animateNumbersNum__num">78</div>
                            <div class="animateNumbersNum__caption">сотрудников в штате</div>
                        </div>
                        <div class="animateNumbersNum animateNumbersNum__pos">
                            <div class="animateNumbersNum__num">23</div>
                            <div class="animateNumbersNum__caption">объектов сейчас под охраной</div>
                        </div>
                    </div>
                    <div data-toggle="modal" data-target="#myModal"
                       class="button promo-section__button button_green">заказать
                        охрану</div>
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
                <?
                $title = (isset(get_post_custom($post->ID)['post_title'][0])) ? get_post_custom($post->ID)['post_title'][0] : get_the_title();
                ?>
                <h1 class="section-header section-header_have-logo section-header_have-bord section-header_text-centered section-header--pos">
                    <?= $title; ?></h1>
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
