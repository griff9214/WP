<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package forpost
 */

get_header(); ?>
<? $banner = ale_get_meta( 'header_banner' ); ?>
    <div class="promo-section" <? if ( $banner != '' ) { ?> style="background: url('<? echo $banner; ?>') center/cover;" <? } ?>>
        <div class="wrapper">
            <div class="row">
                <div class="promo-section__left-side" <? if ( $banner != '' ) { ?> style="padding-bottom: 0;" <? } ?>>
                    <span class="promo-section__sub-header promo-section__sub-header_have-bord promo-section__header--pos">
                        <? echo single_post_title(); ?></span>
                    <div class="promo-section__text">
                        <? echo ale_get_meta( 'header_text' ); ?>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#myModal"
                       class="button promo-section__button button_green button_cont-fit">Расчитать стоимость охраны</a>
                </div>
            </div>
            <? if ( $banner == '' ) { ?>
                <div id="smoke" class="smokeParallax">
                    <div data-depth="-0.8" class="smokeRightTop"></div>
                    <div data-depth="1.3" class="smokeLeftTop"></div>
                    <div data-depth="0.4" class="smokeLeftBottom"></div>
                    <div data-depth="0.5" class="smokeRightBottom"></div>
                    <div data-depth="-0.1" class="smokeCenter"></div>
                </div>
                <?
            } ?>
        </div>
        <? if ( $banner == '' ) { ?>
            <div class="promo-section__right-side">
                <div id="parallxWrapper">
                    <div class="parallxBackground">
                        <div class="parallxLayerFirst shadowed"
                             data-bind="attr: { style:'-webkit-transform:perspective(1000px) translateZ(20px) rotateY(' + relativeMouse.x() * 0.9 + 'deg) rotateX(' + relativeMouse.y() + 'deg);transform:perspective(1000px) translateZ(20px) rotateY(' + relativeMouse.x() * 0.9 + 'deg) rotateX(' + relativeMouse.y() + 'deg)' }"></div>
                        <div class="parallxLayerSecond shadowed"
                             data-bind="attr: { style:'-webkit-transform:perspective(1000px) translateZ(100px) rotateY(' + relativeMouse.x() * 0.7 + 'deg) rotateX(' + relativeMouse.y() + 'deg);transform:perspective(1000px) translateZ(100px) rotateY(' + relativeMouse.x() * 0.7 + 'deg) rotateX(' + relativeMouse.y() + 'deg)' }"></div>
                        <div class="parallxLayerThird shadowed"
                             data-bind="attr: { style:'-webkit-transform:perspective(1000px) translateZ(20px) rotateY(' + relativeMouse.x() + 'deg) rotateX(' + relativeMouse.y() + 'deg);transform:perspective(1000px) translateZ(20px) rotateY(' + relativeMouse.x() + 'deg) rotateX(' + relativeMouse.y() + 'deg)' }"></div>
                        <!--<svg height="0" xmlns="http://www.w3.org/2000/svg">-->
                        <!--<filter id="drop-shadow">-->
                        <!--<feGaussianBlur in="SourceAlpha" stdDeviation="4"/>-->
                        <!--<feOffset dx="12" dy="12" result="offsetblur"-->
                        <!--data-bind="attr: { dx: - relativeMouse.x()}"/>-->
                        <!--<feFlood flood-color="rgba(0,0,0,0.5)"/>-->
                        <!--<feComposite in2="offsetblur" operator="in"/>-->
                        <!--<feMerge>-->
                        <!--<feMergeNode/>-->
                        <!--<feMergeNode in="SourceGraphic"/>-->
                        <!--</feMerge>-->
                        <!--</filter>-->
                        <!--</svg>-->
                    </div>
                </div>
            </div>
            <?
        } ?>
        <div class="promo-section__breadcrumbs">
            <div class="wrapper">
                <? echo get_breadcrumbs(); ?>
            </div>
        </div>
    </div>

   <div class="page-content">
        <div class="wrapper">
            <div class="row">
                <main class="main_inside">
                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile; // End of the loop.
                    ?>

                </main>
                <?php
                get_sidebar();
                ?>
            </div>
        </div>
    </div>

<?php
get_sidebar();
get_footer();
