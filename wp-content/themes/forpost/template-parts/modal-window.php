<?php
/**
 * Created by PhpStorm.
 * User: Вера
 * Date: 31.10.2017
 * Time: 17:02
 */?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal__header">
				<a href="#" class="close" data-dismiss="modal"></a>
				<div class="modal__title">Оформление заявки</div>
			</div>
			<div class="modal__body">
				<form action="#" method="post" class="modal__form">
					<fieldset class="modal__fieldset">
						<input type="text" class="modal__input" name="name" required placeholder="Иванов Иван">
						<input class="modal__input input__email" name="email" data-inputmask="'alias': 'email'" required
						       placeholder="example@mail.ru">
						<input type="tel" class="modal__input" name="phone"
						       data-inputmask="'mask': '+7 (999) 999-99-99'" required
						       placeholder="Номер телефона">
						<textarea name="order-text" class="modal__textarea" cols="30" rows="10"
						          placeholder="Sometext"></textarea>
					</fieldset>
					<fieldset class="modal__fieldset">

						<label class="checkbox">
							<input class="checkbox__input" type="checkbox" name="check" value="1" required>
							<span class="checkbox__ico"></span>
							<span class="checkbox__text">Нужно выбрать опцию</span>
						</label>
						<label class="checkbox">
							<input class="checkbox__input" type="checkbox" name="check" value="2">
							<span class="checkbox__ico"></span>
							<span class="checkbox__text">Нужно выбрать опцию</span>
						</label>
						<label class="checkbox">
							<input class="checkbox__input" type="checkbox" name="check" value="3">
							<span class="checkbox__ico"></span>
							<span class="checkbox__text">Нужно выбрать опцию</span>
						</label>
					</fieldset>
					<fieldset class="modal__fieldset">
						<label class="radio">
							<input class="radio__input" type="radio" name="radio" value="1" checked>
							<span class="radio__ico"></span>
							<span class="radio__text">Нужно выбрать опцию</span>
						</label>
						<label class="radio">
							<input class="radio__input" type="radio" name="radio" value="2">
							<span class="radio__ico"></span>
							<span class="radio__text">Нужно выбрать опцию</span>
						</label>
						<label class="radio">
							<input class="radio__input" type="radio" name="radio" value="3">
							<span class="radio__ico"></span>
							<span class="radio__text">Нужно выбрать опцию</span>
						</label>
					</fieldset>
					<fieldset class="modal__fieldset modal__fieldset_antigate">
                        <div id="modal_recaptcha"></div>
						<button type="button" class="button modal__button button_green button_shadowed button_centered">заказать охрану</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->

