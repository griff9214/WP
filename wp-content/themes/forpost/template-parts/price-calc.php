<form class="row calc-order">
    <div class="calc-order__select-container">
        <div class="calc-order__select-caption">Тип объекта</div>
        <select class="calc-order__select calc__select" name="object-type">
            <option value="1">Предприятие</option>
            <option value="2">Объект недвижимости</option>
            <option value="3">Учреждение или организация</option>
            <option value="4">Мероприятие</option>
        </select>
    </div>
    <div class="calc-order__range-container">
        <div class="calc-order__range-caption">Количество охранников</div>
        <div id="nouislider" class="calc-order__range"></div>
        <input name="humans-q" type="text" id="range-input"
               class="calc-order__range-input modal__input">
    </div>
    <input class="calc-order__email modal__input" name="email" required
           data-inputmask="'alias': 'email'" placeholder="E-mail">
    <input type="tel" class="calc-order__phone modal__input" name="phone"
           required data-inputmask="'mask': '+7 (999) 999-99-99'"
           placeholder="Номер телефона">
    <input type="hidden" name="post-price-calc">
    <button type="button"
            class="button calc-order__button button_shadowed button_green button_squared button_centered">
        Получить расчет
    </button>
</form>
