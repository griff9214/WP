<? get_header(); ?>
<section class="promo-section">
    <div class="wrapper">
        <div class="row">
            <div class="promo-section__left-side">
                <div class="promo-section__header promo-section__header--pos">форпост -
                    север</div>
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
<main>
    <section id="ourServices" class="ourServices ourServices--pos">
        <div class="wrapper">
            <div class="row">
                <div class="section-header section-header_have-logo section-header_have-bord section-header_text-centered section-header--pos">
                    Наши
                    услуги</div>
                <? mosaic_menu(8); ?>
            </div>
        </div>
        <a href="<?=get_permalink(538);?>" class="ourServices__button button button_green">Все услуги охраны</a>
    </section>
    <div class="parallax-window" data-parallax="scroll" data-position="center center"
         data-image-src="<? bloginfo(template_directory); ?>/images/parallax1.png">
        <div class="wrapper">
            <div class="row row--justifySB">
                <div class="parallax-window__text">
                    <div class="parallax-window__header">Есть вопросы?</div>
                    <div class="parallax-window__subheader">Оставьте номер телефона и наш сотрудник свяжется
                        с Вами для уточнения всех интересующих деталей
                    </div>
                </div>
                <form action="#" method="post" class="parallax-window__form">
                    <input type="tel" name="only-phone" class="parallax-window__input" data-inputmask="'mask': '+7 (999) 999-99-99'"
                           required placeholder="+7 (___) ___-__-__">
                    <button type="button" class="button parallax-window__button button_green button_shadowed">
                        получить
                        консультацию
                    </button>

                </form>
            </div>
        </div>
    </div>
    <section class="aboutUs aboutUs--pos">
        <div class="wrapper">
            <div class="row aboutUs__background">
                <div class="textBlock aboutUs__column">
                    <div class="textBlock__header">При осуществлении физической охраны объектов мы обеспечим</div>
                    <ul class="someItems">
                        <li class="someItems__item">Охрану материальных ценностей от расхищения и недопущение
                            проникновения посторонних лиц на объект
                        </li>
                        <li class="someItems__item">Пропускной режим, контроль вноса-выноса материальных ценносте
                        </li>
                        <li class="someItems__item">Осмотр помещений, зданий и территорий на наличие взрывоопасных
                            устройств и т.д.
                        </li>
                        <li class="someItems__item">Эвакуацию и спасение людей, имущества и документов при
                            наступлении
                            чрезвычайных обстоятельств (пожар, стихийное бедствие и т.д.)
                        </li>
                        <li class="someItems__item">При необходимости, для обеспечения безопасности объектов могут
                            быть
                            использованы автотранспортные средства
                        </li>
                    </ul>
                </div>
                <div class="textBlock aboutUs__column">
                    <div class="textBlock__header">Все сотрудники охраны
                        имеют опыт работы</div>
                    <ul class="someItems">
                        <li class="someItems__item">По обеспечению пропускного и внутриобъектного режима</li>
                        <li class="someItems__item">С документами удостоверяющими личность, знают признаки подделки
                            документов
                        </li>
                        <li class="someItems__item">С различными системами видеонаблюдения</li>
                        <li class="someItems__item">С различными системами охранно-пожарной сигнализации</li>
                    </ul>
                    <a href="" type="button" data-toggle="modal" data-target="#myModal"
                       class="button button_centered button_green button_shadowed">хочу такую охрану</a>
                </div>
            </div>
            <div class="row aboutUs__icons">
                <div class="icon aboutUs__icon">
                    <img src="<? bloginfo(template_directory); ?>/images/ico01.png" alt="" class="icon__img">
                    <div class="icon__title">защита от проникновения</div>
                </div>
                <div class="icon aboutUs__icon">
                    <img src="<? bloginfo(template_directory); ?>/images/ico02.png" alt="" class="icon__img">
                    <div class="icon__title">Защита от нападения</div>
                </div>
                <div class="icon aboutUs__icon">
                    <img src="<? bloginfo(template_directory); ?>/images/ico03.png" alt="" class="icon__img">
                    <div class="icon__title">Собственные Группы Быстрого Реагирования</div>
                </div>
                <div class="icon aboutUs__icon">
                    <img src="<? bloginfo(template_directory); ?>/images/ico04.png" alt="" class="icon__img">
                    <div class="icon__title">24/7 мониторинг</div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/section', 'our-reviews'); ?>
    <?php get_template_part('template-parts/section', 'our-thanks'); ?>
    <div class="parallax-window" data-parallax="scroll" data-position="center center"
         data-speed="0.1" data-image-src="<? bloginfo(template_directory); ?>/images/parallax2.png"
         data-natural-width="1200px">
        <div class="wrapper">
            <div class="row row--justifySB">
                <div class="parallax-window__text">
                    <div class="parallax-window__header">Есть вопросы?</div>
                    <div class="parallax-window__subheader">Оставьте номер телефона и наш сотрудник свяжется
                        с Вами для уточнения всех интересующих деталей
                    </div>
                </div>
                <form action="#" method="post" class="parallax-window__form">
                    <input type="tel" name="only-phone" class="parallax-window__input" data-inputmask="'mask': '+7 (999) 999-99-99'"
                           required placeholder="+7 (___) ___-__-__">
                    <button type="button" class="button parallax-window__button button_green button_shadowed">
                        получить консультацию
                    </button>

                </form>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/section', 'last-news'); ?>
    <?php get_template_part('template-parts/section', 'our-clients'); ?>
</main>
<?php get_footer(); ?>