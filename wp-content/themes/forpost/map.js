var myMap;
ymaps.ready(init);

function init () {
    myMap = new ymaps.Map('map', {
        center: [55.982598, 37.202991],
        zoom: 16,
        controls: ['zoomControl']
    }, {
        searchControlProvider: 'yandex#search'
    });

    myMap.behaviors.disable(['scrollZoom']);

    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    );

    myPlacemarkWithContent = new ymaps.Placemark([55.982598, 37.202991], {
        hintContent: 'ООО ЧОП "ФОРПОСТ-СЕВЕР"',
    }, {
        iconLayout: 'default#imageWithContent',
        iconImageHref: '/logo.png',
        iconImageSize: [48, 48],
        iconImageOffset: [-24, -24],
        iconContentOffset: [15, 15],
        iconContentLayout: MyIconContentLayout
    });

    myMap.geoObjects.add(myPlacemarkWithContent);

}