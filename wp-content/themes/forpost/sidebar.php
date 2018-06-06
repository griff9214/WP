<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package forpost
 */

//if ( ! is_active_sidebar( 'sidebar-1' ) ) {
//	return;
//}
?>

<aside class="aside">
<div class="aside__form">
    <div class="form-caption">
        <div class="form-caption__title">Есть вопросы?</div>
        <p class="form-caption__text">Задайте любой интересующий Вас вопрос по телефону:</p>
        <p class="form-caption__phone"><?php echo preg_replace("/^(\+7|^8{1})([0-9]{3})([0-9]{3})([0-9]{2})([0-9]{2})/i","\\1 (\\2) \\3-\\4-\\5", ale_get_option('telephone')); ?></p>
    </div>
    <form action="#" class="aside-form" method="post">
        <input type="text" class="aside-form__input" placeholder="Ваше имя*" name="name" required>
        <input type="tel" class="aside-form__input" placeholder="Ваш телефон*" name="phone" data-inputmask="'mask': '+7 (999) 999-99-99'">
        <textarea class="aside-form__textarea" name="text" placeholder="Текст сообщения..."></textarea>
        <input type="hidden" name="aside-form" value="aside-form">
        <button class="button button_green button_centered aside-form__button">Отправить</button>
    </form>
</div>
</aside>
