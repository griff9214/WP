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
                <main class="main_inside main_inside-8">
                    <div class="vacancies-container">
                        <div class="vacancy">
                            <div class="vacancy__header">
                                <div class="vacancy__header-text">Охранник сети гипермаркетов строительных товаров
                                    (Москва и Московская область)
                                </div>
                                <div class="vacancy__header-icon hamburger hamburger--emphatic">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </div>

                            </div>
                            <div class="vacancy__body">
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Обязанности</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Видеонаблюдение;</li>
                                            <li> Патруль территории объекта;</li>
                                            <li> Контроль парковки автотранспорта;</li>
                                            <li> Предотвращение хищений и порчи имущества;</li>
                                            <li> Проверка чеков;</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Условия</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> График работы Вахта (7/7, 15/15, 20/10 и более длительная);</li>
                                            <li> Оказываем содействие в получении лицензии;</li>
                                            <li> Трудоустройство в день проведения собеседования;</li>
                                            <li> Бесплатное проживание на объектах/общежитиях, хорошие бытовые
                                                условия;
                                            </li>
                                            <li> Заработная плата без задержек, выплата 2 раза в месяц;</li>
                                            <li> Премирование лучших сотрудников (от 1.000 до 5.000 руб.);</li>
                                            <li> Возможность подработки.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Требования</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Дисциплинированность;</li>
                                            <li> Ответственность.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vacancy">
                            <div class="vacancy__header">
                                <div class="vacancy__header-text">Охранник сети гипермаркетов строительных товаров
                                    (Москва и Московская область)
                                </div>
                                <div class="vacancy__header-icon hamburger hamburger--emphatic">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </div>

                            </div>
                            <div class="vacancy__body">
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Обязанности</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Видеонаблюдение;</li>
                                            <li> Патруль территории объекта;</li>
                                            <li> Контроль парковки автотранспорта;</li>
                                            <li> Предотвращение хищений и порчи имущества;</li>
                                            <li> Проверка чеков;</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Условия</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> График работы Вахта (7/7, 15/15, 20/10 и более длительная);</li>
                                            <li> Оказываем содействие в получении лицензии;</li>
                                            <li> Трудоустройство в день проведения собеседования;</li>
                                            <li> Бесплатное проживание на объектах/общежитиях, хорошие бытовые
                                                условия;
                                            </li>
                                            <li> Заработная плата без задержек, выплата 2 раза в месяц;</li>
                                            <li> Премирование лучших сотрудников (от 1.000 до 5.000 руб.);</li>
                                            <li> Возможность подработки.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Требования</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Дисциплинированность;</li>
                                            <li> Ответственность.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vacancy">
                            <div class="vacancy__header">
                                <div class="vacancy__header-text">Охранник сети гипермаркетов строительных товаров
                                    (Москва и Московская область)
                                </div>
                                <div class="vacancy__header-icon hamburger hamburger--emphatic">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </div>

                            </div>
                            <div class="vacancy__body">
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Обязанности</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Видеонаблюдение;</li>
                                            <li> Патруль территории объекта;</li>
                                            <li> Контроль парковки автотранспорта;</li>
                                            <li> Предотвращение хищений и порчи имущества;</li>
                                            <li> Проверка чеков;</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Условия</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> График работы Вахта (7/7, 15/15, 20/10 и более длительная);</li>
                                            <li> Оказываем содействие в получении лицензии;</li>
                                            <li> Трудоустройство в день проведения собеседования;</li>
                                            <li> Бесплатное проживание на объектах/общежитиях, хорошие бытовые
                                                условия;
                                            </li>
                                            <li> Заработная плата без задержек, выплата 2 раза в месяц;</li>
                                            <li> Премирование лучших сотрудников (от 1.000 до 5.000 руб.);</li>
                                            <li> Возможность подработки.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Требования</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Дисциплинированность;</li>
                                            <li> Ответственность.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vacancy">
                            <div class="vacancy__header">
                                <div class="vacancy__header-text">Охранник сети гипермаркетов строительных товаров
                                    (Москва и Московская область)
                                </div>
                                <div class="vacancy__header-icon hamburger hamburger--emphatic">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </div>

                            </div>
                            <div class="vacancy__body">
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Обязанности</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Видеонаблюдение;</li>
                                            <li> Патруль территории объекта;</li>
                                            <li> Контроль парковки автотранспорта;</li>
                                            <li> Предотвращение хищений и порчи имущества;</li>
                                            <li> Проверка чеков;</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Условия</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> График работы Вахта (7/7, 15/15, 20/10 и более длительная);</li>
                                            <li> Оказываем содействие в получении лицензии;</li>
                                            <li> Трудоустройство в день проведения собеседования;</li>
                                            <li> Бесплатное проживание на объектах/общежитиях, хорошие бытовые
                                                условия;
                                            </li>
                                            <li> Заработная плата без задержек, выплата 2 раза в месяц;</li>
                                            <li> Премирование лучших сотрудников (от 1.000 до 5.000 руб.);</li>
                                            <li> Возможность подработки.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Требования</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Дисциплинированность;</li>
                                            <li> Ответственность.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vacancy">
                            <div class="vacancy__header">
                                <div class="vacancy__header-text">Охранник сети гипермаркетов строительных товаров
                                    (Москва и Московская область)
                                </div>
                                <div class="vacancy__header-icon hamburger hamburger--emphatic">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </div>

                            </div>
                            <div class="vacancy__body">
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Обязанности</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Видеонаблюдение;</li>
                                            <li> Патруль территории объекта;</li>
                                            <li> Контроль парковки автотранспорта;</li>
                                            <li> Предотвращение хищений и порчи имущества;</li>
                                            <li> Проверка чеков;</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Условия</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> График работы Вахта (7/7, 15/15, 20/10 и более длительная);</li>
                                            <li> Оказываем содействие в получении лицензии;</li>
                                            <li> Трудоустройство в день проведения собеседования;</li>
                                            <li> Бесплатное проживание на объектах/общежитиях, хорошие бытовые
                                                условия;
                                            </li>
                                            <li> Заработная плата без задержек, выплата 2 раза в месяц;</li>
                                            <li> Премирование лучших сотрудников (от 1.000 до 5.000 руб.);</li>
                                            <li> Возможность подработки.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Требования</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Дисциплинированность;</li>
                                            <li> Ответственность.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vacancy">
                            <div class="vacancy__header">
                                <div class="vacancy__header-text">Охранник сети гипермаркетов строительных товаров
                                    (Москва и Московская область)
                                </div>
                                <div class="vacancy__header-icon hamburger hamburger--emphatic">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </div>

                            </div>
                            <div class="vacancy__body">
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Обязанности</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Видеонаблюдение;</li>
                                            <li> Патруль территории объекта;</li>
                                            <li> Контроль парковки автотранспорта;</li>
                                            <li> Предотвращение хищений и порчи имущества;</li>
                                            <li> Проверка чеков;</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Условия</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> График работы Вахта (7/7, 15/15, 20/10 и более длительная);</li>
                                            <li> Оказываем содействие в получении лицензии;</li>
                                            <li> Трудоустройство в день проведения собеседования;</li>
                                            <li> Бесплатное проживание на объектах/общежитиях, хорошие бытовые
                                                условия;
                                            </li>
                                            <li> Заработная плата без задержек, выплата 2 раза в месяц;</li>
                                            <li> Премирование лучших сотрудников (от 1.000 до 5.000 руб.);</li>
                                            <li> Возможность подработки.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Требования</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Дисциплинированность;</li>
                                            <li> Ответственность.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vacancy">
                            <div class="vacancy__header">
                                <div class="vacancy__header-text">Охранник сети гипермаркетов строительных товаров
                                    (Москва и Московская область)
                                </div>
                                <div class="vacancy__header-icon hamburger hamburger--emphatic">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </div>

                            </div>
                            <div class="vacancy__body">
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Обязанности</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Видеонаблюдение;</li>
                                            <li> Патруль территории объекта;</li>
                                            <li> Контроль парковки автотранспорта;</li>
                                            <li> Предотвращение хищений и порчи имущества;</li>
                                            <li> Проверка чеков;</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Условия</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> График работы Вахта (7/7, 15/15, 20/10 и более длительная);</li>
                                            <li> Оказываем содействие в получении лицензии;</li>
                                            <li> Трудоустройство в день проведения собеседования;</li>
                                            <li> Бесплатное проживание на объектах/общежитиях, хорошие бытовые
                                                условия;
                                            </li>
                                            <li> Заработная плата без задержек, выплата 2 раза в месяц;</li>
                                            <li> Премирование лучших сотрудников (от 1.000 до 5.000 руб.);</li>
                                            <li> Возможность подработки.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vacancy__part">
                                    <div class="vacancy__left">Требования</div>
                                    <div class="vacancy__right">
                                        <ul>
                                            <li> Дисциплинированность;</li>
                                            <li> Ответственность.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php

get_footer();
