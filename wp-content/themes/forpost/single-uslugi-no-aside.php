<?php
/*
Template Name: Шаблон без боковой колонки
Template Post Type: uslugi
*/
get_header(); ?>
<? $banner = ale_get_meta( 'header_banner' ); ?>
    <div class="promo-section <? if ( $banner != '' ) { ?> promo-section_shadowed" style="background: url('<? echo $banner; ?>') center/cover;" <? } else echo'"';?>>
        <div class="wrapper">
            <div class="row">
                <div class="promo-section__left-side" <? if ( $banner != '' ) { ?> style="padding-bottom: 0;" <? } ?>>
                    <span class="promo-section__sub-header promo-section__sub-header_have-bord promo-section__header--pos">
                        <? echo ale_get_meta( 'header_heading' ); ?></span>
                    <div class="promo-section__text">
						<? echo ale_get_meta( 'header_text' ); ?>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#myModal"
                       class="button promo-section__button button_green button_cont-fit">Расчитать стоимость охраны</a>
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
                            </div>
                        </div>
                    </div>
                    <?
                } ?>
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
        <div class="promo-section__breadcrumbs">
            <div class="wrapper">
				<? echo get_breadcrumbs(); ?>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="wrapper">
            <div class="row">
                <main class="main_inside main_inside-8">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-uslugi', get_post_type() );

					endwhile; // End of the loop.
					?>

                </main>
            </div>
        </div>
    </div>
    <!-- #main -->
<?php
get_footer();
?>
