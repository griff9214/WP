<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package forpost
 */

?>

<div class="page__footer">
    <footer class="footer">
        <div class="wrapper">
            <div class="row">
                <div class="footer__contacts">
                    <p class="footer__text">Юридический адрес: <?php echo ale_get_option('footer_legal_addr');?> тел: <?php echo preg_replace("/^(\+7|^8{1})([0-9]{3})([0-9]{3})([0-9]{2})([0-9]{2})/i","\\2-\\3-\\4-\\5", ale_get_option('telephone')); ?></p>
                    <p class="footer__text">Фактический адрес: <?php echo ale_get_option('footer_fact_addr');?> тел: <?php echo preg_replace("/^(\+7|^8{1})([0-9]{3})([0-9]{3})([0-9]{2})([0-9]{2})/i","\\2-\\3-\\4-\\5", ale_get_option('telephone')); ?></p>
                    <p class="footer__text"><?php echo ale_get_option('footer_requisites');?></p>

                </div>
                <div class="footer__center-block">
                    <div class="footer__subheader">надежное охранное предприятие</div>
                    <div class="footer__header">форпост север</div>
                    <div class="footer__nav footer__nav_left">
                        <div class="footer-nav">
                            <div class="footer-nav__title">Главное</div>
							<? footer_main_menu(5) ?>
                        </div>
                    </div>
                    <div class="footer__nav footer__nav_right">
                        <div class="footer-nav">
                            <div class="footer-nav__title">Услуги</div>
							<? footer_services_menu(4) ?>
                        </div>
                    </div>
                </div>
                <div class="footer__form">
                    <div class="miniform">
                        <div class="miniform__header">
                            <div class="miniform__title">Остались Вопросы?</div>
                            <div class="miniform__subtitle">Напишите нам и наш сотрудник свяжется с Вами</div>
                        </div>
                        <div class="miniform__gradient"></div>
                        <form action="/mailer.php" class="miniform__form">
                            <input type="text" class="miniform__input" name="name" required placeholder="Ваше имя">
                            <input class="miniform__input input__email" name="email"
                                   data-inputmask="'alias': 'email'"
                                   required
                                   placeholder="E-mail">
                            <input type="tel" class="miniform__input" name="phone"
                                   data-inputmask="'mask': '+7 (999) 999-99-99'" required
                                   placeholder="Номер телефона">
                            <input type="hidden" name="footer-form" value="footer-form">
                            <textarea name="order-text" class="miniform__textarea" cols="30" rows="1"
                                      placeholder="Текст..."></textarea>
                            <button type="button"
                                    class="button button_small button_green button_shadowed button_centered">
                                отправить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<?php
get_template_part( 'template-parts/modal-window' );

wp_footer();
?>

</body>
</html>