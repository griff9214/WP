<? get_header(); ?>
    <section class="promo-section">
        <div class="wrapper">
            <div class="row">
                <div class="promo-section__left-side">
                    <h1 class="promo-section__header promo-section__header--pos">форпост -
                        север</h1>
                    <h2 class="promo-section__sub-header">безопасность - это в наших силах</h2>
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
    <main>
        <section class="aboutSection">
            <div class="wrapper aboutSection__inner">
                <div class="row row--justifySB">
                    <div class="article aboutSection__article">
                        <h2 class="section-header aboutSection__header section-header_have-logo">форпост-север</h2>
                        <h3 class="sectionSubHeader aboutSection__sub-header">надежное охранное предприятие</h3>
                        <p class="article__paragraph">Наше предприятие осуществляет свою
                            деятельность в строгом соответствии с Законом РФ «О частной детективной и охранной
                            деятельности». На всё виды деятельности имеются государственные лицензии. Оно укомплектовано
                            подготовленными сотрудниками, имеющими разрешение на данный вид деятельности. </p>
                        <p class="article__paragraph">Все охранники, экипированы форменной
                            одеждой, утвержденного ГУВД г. Москвы образца и необходимыми специальными средствами.
                            Сотрудничество с правоохранительными органами и противопожарной службой Зеленоградского
                            округа
                            позволяет эффективно защищать интересы наших клиентов.</p>
                        <p class="article__paragraph article__paragraph_marked">Во время
                            работы
                            предусматривается наша материальная ответственность и всесторонний учет Ваших интересов.</p>
                        <a href="#" data-toggle="modal" data-target="#myModal"
                           class="article__button button button_green button_shadowed">Заказать
                            консультацию</a>
                    </div>
                    <figure class="aboutSectionBoss">
                        <div class="aboutSectionBoss__portrait">
                            <img src="<? bloginfo(template_directory); ?>/images/boss.jpg" alt="">
                        </div>
                        <figcaption class="aboutSectionBoss__caption">Ю.П. Сысоев <span>ген.директор</span></figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <section class="licences ourThanks--pos">
            <div class="wrapper">
                <h3 class="textBlock__header">Официальные документы</h3>
                <div class="row row--justifySA">
                    <?php $args = array(
                        'post_type' => 'attachment',
                        'numberposts' => 3,
                        'post_status' => null,
                        'order' => 'ASC',
                        'orderby' => 'menu_order ID',
                        'post_parent' => 542
                    );
                    $attachments = get_posts($args);
                    if ($attachments) {
                        foreach ($attachments as $attachment) { ?>
                            <div class="licences__container">
                                <div class="ourThanks__slide">
                                    <img class="ourThanks__thanksgiven"
                                         src="<?php echo wp_get_attachment_image_url($attachment->ID, 'gramoty-main-slider'); ?>"
                                         data-full="<?php echo wp_get_attachment_image_url($attachment->ID, 'large'); ?>"
                                         alt="<? echo get_post_meta($attachment->ID, '_wp_attachment_image_alt', true); ?>">
                                </div>
                                <div class="licences__caption"><? echo $attachment->post_content; ?></div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section', 'our-clients'); ?>
    </main>
<?php get_template_part('template-parts/modal-window'); ?>
<?php get_footer(); ?>