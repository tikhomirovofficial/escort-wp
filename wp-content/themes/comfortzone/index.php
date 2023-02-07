<?php
get_header();
function get_image($path): string {
    return get_template_directory_uri().'/assets/img/' . $path;
}

?>


    <div id="modal" class="modal p-fix al-center jc-center h-100v w-100v">
        <div id="modal-body" class="modal__body flex-column al-end">
            <img id="modal-close" class="modal__close cur-pointer" src=<?= get_image('icons/close.svg') ?> alt="">
            <div class="modal__content flex-column gap-20 txt-center">
                <div class="section__title gradient-color-second">
                    девушки ждут вас!
                </div>
                <p class="gradient-color-second">Присоединяйся к нам!</p>
                <a href="https://t.me/+4nwlkD9LA45kY2Y1" target="_blank" class="modal__btn btn-unfilled btn">
                    <h3>Присоединиться</h3>
                </a>
            </div>
        </div>

    </div>
    <section class="present flex-column p-rel">
        <header>
            <div class="wrapper">
                <div class="header__block">
                    <div class="header__logo d-f al-center gap-20">
                        <img class="header__logo-image" src="assets/img/logo.jpg" alt="">
                        <p class="header__logo-text">Лучшие индивидуалки города в Comfort Zone</p>
                    </div>
                </div>
            </div>
        </header>
        <div class="present__content">
            <div class="wrapper h-100p">
                <div class="present__content-block flex-col-betw h-100p">
                    <h1 class="present__title gradient-color    ">
                        Индивидуалkи
                        в Comfort Zone
                    </h1>
                    <div class="present__near d-f al-center">
                        <img class="present__near-img" src="assets/img/heart.png" alt="">
                        <p class="present__near-text">
                            Эскорт услуги <b>в Москве и Питере</b> совсем рядом
                        </p>
                    </div>
                    <a href="https://t.me/+4nwlkD9LA45kY2Y1" target="_blank" class="present__btn-wrapper btn-wrapper">
                        <div class="present__btn btn">
                            <img src="assets/img/Telegram.svg" alt="">
                            <div class="present__btn-text">
                                <h3>
                                    Выбрать девушку
                                </h3>
                                <p>Нужно только перейти в Telegram</p>
                            </div>
                        </div>

                    </a>
                </div>


            </div>
        </div>
    </section>
    <section class="sexy-girls">
        <div class="wrapper">
            <div class="sexy-girls__block d-f js-between">
                <div class="sexy-girls__left flex-column">
                    <h1 class="gradient-color">
                        Вас ждут сеkсуальные kрасотkи:
                    </h1>
                    <div class="sexy-girls__list flex-column gap-30">
                        <div class="sexy-girl-item d-f al-center gap-10">
                            <img src="assets/img/icons/checkbox.svg" alt="">
                            <p class="gradient-color">Модели</p>
                        </div>
                        <div class="sexy-girl-item d-f al-center gap-10">
                            <img src="assets/img/icons/checkbox.svg" alt="">
                            <p class="gradient-color">Спортсменки</p>
                        </div>
                        <div class="sexy-girl-item d-f al-center gap-10">
                            <img src="assets/img/icons/checkbox.svg" alt="">
                            <p class="gradient-color">Танцовщицы</p>
                        </div>
                        <div class="sexy-girl-item d-f al-center gap-10">
                            <img src="assets/img/icons/checkbox.svg" alt="">
                            <p class="gradient-color">Звезды реалити-шоу</p>
                        </div>
                        <div class="sexy-girl-item d-f al-center gap-10">
                            <img src="assets/img/icons/checkbox.svg" alt="">
                            <p class="gradient-color">Инста-girls</p>
                        </div>
                    </div>

                    <a href="https://t.me/+oW9a0Aai8uszMTU9" target="_blank"
                       class="sexy-girls__btn-wrapper btn-wrapper">
                        <div class="sexy-girls__btn btn txt-center flex-column">
                            <p>войти на канал</p>
                            <h3>санкт-петербурга</h3>
                        </div>

                    </a>
                </div>
                <div class="sexy-girls__right flex-column">
                    <img class="sexy-girls__logo" src="assets/img/logo_big.jpg" alt="">
                    <div class="sexy-girls__features flex-column">
                        <div class="sexy-girls__feature d-f gap-10 al-center">
                            <img src="assets/img/icons/feature_1.png" alt="">
                            <p class="gradient-color">Реальное предложение</p>
                        </div>
                        <div class="sexy-girls__feature d-f gap-10 al-center">
                            <img src="assets/img/icons/feature_2.png" alt="">
                            <p class="gradient-color">Без обмана и предоплат</p>
                        </div>
                        <div class="sexy-girls__feature d-f gap-10 al-center">
                            <img src="assets/img/icons/feature_3.png" alt="">
                            <p class="gradient-color">100% безопасно и конфиденциально</p>
                        </div>
                        <div class="sexy-girls__feature d-f gap-10 al-center">
                            <img src="assets/img/icons/feature_4.png" alt="">
                            <p class="gradient-color">Эксклюзивные варианты</p>
                        </div>
                    </div>
                    <a href="https://t.me/+FkeGvtyOrrVjMjdl" target="_blank"
                       class="sexy-girls__btn-wrapper btn-wrapper">
                        <div class="sexy-girls__btn btn txt-center flex-column">
                            <p>войти на канал</p>
                            <h3>москвы</h3>
                        </div>

                    </a>
                </div>

            </div>
        </div>
    </section>
    <section class="comfort-zone">
        <div class="wrapper">
            <div class="comfort-zone__block">
                <div class="comfort-zone__title p-rel d-f jc-center">
                    <img class="comfort-zone__title-img" src="assets/img/comfort.svg" alt="">
                    <h1 class="section__title p-abs gradient-color-second">
                        Девушки ждут вас!
                    </h1>
                </div>
                <div class="comfort-zone__items flex-row-betw">
                    <div class="comfort-zone__item flex-column gap-20">
                        <div class="comfort-zone__item-top d-f al-end gap-20">
                            <h1 class="gradient-color-second">01</h1>
                            <img src="assets/img/c_zone_1.png" alt="">
                        </div>
                        <div class="comfort-zone__item-description gradient-color-second">
                            Вы — состоятельный мужчина, ценящий свое время, деньги и высокое качество услуг?
                        </div>
                    </div>
                    <div class="comfort-zone__item flex-column gap-20">
                        <div class="comfort-zone__item-top d-f al-end gap-20">
                            <h1 class="gradient-color-second">02</h1>
                            <img src="assets/img/c_zone_2.png" alt="">
                        </div>
                        <div class="comfort-zone__item-description gradient-color-second">
                            Вы — состоятельный мужчина, ценящий свое время, деньги и высокое качество услуг?
                        </div>
                    </div>
                    <div class="comfort-zone__item flex-column gap-20">
                        <div class="comfort-zone__item-top d-f al-end gap-20">
                            <h1 class="gradient-color-second">03</h1>
                            <img src="assets/img/c_zone_3.png" alt="">
                        </div>
                        <div class="comfort-zone__item-description gradient-color-second">
                            Вы — состоятельный мужчина, ценящий свое время, деньги и высокое качество услуг?
                        </div>
                    </div>
                </div>
                <div class="comfort-zone__link d-f jc-center p-rel">
                    <a href="https://t.me/+4nwlkD9LA45kY2Y1" target="_blank"
                       class="comfort-zone__btn-wrapper p-abs  btn-wrapper">
                        <div class="comfort__btn btn txt-center flex-column">
                            <h3>Осуществить свои сокровенные желания</h3>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="wrapper">
            <div class="catalog__block flex-column gap-30">
                <div class="catalog__title section__title gradient-color-second">
                    Досуг-kаталог <br>
                    Эсkорт «Comfort Zone»
                </div>
                <div class="catalog__items d-f js-between">
                    <div class="catalog__item flex-column gap-20">
                        <img src="assets/img/Vasilisa.jpg" alt="">

                        <div class="catalog__text">
                            <h2>Василиса</h2>
                            <div class="catalog__descriptions flex-column gap-30">
                                <p>
                                    Молодая, аппетитная девочка 21 год, рост 164, вес 65, грудь 3.5. Встречусь на
                                    нейтральной или на вашей территории!
                                    Сегодня в вашем полном распоряжении за 2 часика 23 000 ❤️</p>
                            </div>
                            <a href="https://t.me/krasotki_online" target="_blank" class="catalog__link">
                                Написать в телеграм
                            </a>
                        </div>

                    </div>
                    <div class="catalog__item flex-column gap-20">
                        <img src="assets/img/Kira.jpg" alt="">

                        <div class="catalog__text">
                            <h2>Кира</h2>
                            <div class="catalog__descriptions flex-column gap-30">
                                <p>
                                    Кого интересуют разовые свидания с секси красоткой ?
                                </p>
                                <p>
                                    Все свое натуральное. Яркая, общительная, индивидуальная, сексуальная .. Все
                                    остальное
                                    при встрече 😻
                                </p>
                                <p>
                                    Обо мне: 22 года, 163 см, 50 кг 3.5
                                </p>
                                <p>
                                    Выезд 2 часа 30 000 ( мбр входит ) 👄
                                </p>
                            </div>
                            <a href="https://t.me/krasotki_online" target="_blank" class="catalog__link">
                                Написать в телеграм
                            </a>
                        </div>

                    </div>
                    <div class="catalog__item flex-column gap-20">
                        <img src="assets/img/Dana.jpg" alt="">

                        <div class="catalog__text">
                            <h2>Дана</h2>
                            <div class="catalog__descriptions flex-column gap-30">
                                <p>
                                    ✨ Встречусь сегодня ! 2 часа 25 000 !
                                </p>
                                <p>
                                    ✨ Девушка с идеальным телом 173 / 57 и своей натуральной грудью 4 объем !
                                </p>
                                <p>
                                    ✨ Секс и наслаждение ! Есть желание ? Пиши 👉
                                </p>

                            </div>
                            <a href="https://t.me/krasotki_online" target="_blank" class="catalog__link">
                                Написать в телеграм
                            </a>
                        </div>

                    </div>
                    <div class="catalog__item flex-column gap-20">
                        <img src="assets/img/Olya.jpg" alt="">

                        <div class="catalog__text">
                            <h2>Оля</h2>
                            <div class="catalog__descriptions flex-column gap-30">
                                <p>
                                    Очаровательная, сексуальная , общительная ) Очень классная девушка ! Сегодня скучаю
                                    в отеле в центре ) Приглашаю к себе или принимаю приглашения❤️
                                </p>
                                <p>
                                    Немного обо мне - Ольга . 24 года , 169 рост / 57 вес / грудь 3.5 ❤️
                                </p>
                                <p>
                                    Классический секс , оральный секс , массаж расслабляющий ( эротический ) за пару
                                    часиков разврата 25 000 или часик 15 000 ❤️
                                </p>
                            </div>
                            <a href="https://t.me/krasotki_online" target="_blank" class="catalog__link">
                                Написать в телеграм
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="price">
        <div class="wrapper">
            <div class="price__block flex-row-betw w-100p p-rel">
                <div class="price__content">
                    <h1 class="price__title gradient-color-second">
                        Сkольkо стоит ваша девушkа?
                    </h1>
                    <div class="price__info">
                        <h2 class="price__subtitle gradient-color-second">
                            Цена зависит от:
                        </h2>
                        <div class="price__info-block d-f js-between">
                            <div class="price__deps flex-column gap-20">
                                <div class="price__deps-item d-f al-center gap-10">
                                    <b>•</b>
                                    <p>Продолжительности встречи</p>
                                </div>
                                <div class="price__deps-item d-f al-center gap-10">
                                    <b>•</b>
                                    <p>Наличия/отсутствия места для встречи</p>
                                </div>
                                <div class="price__deps-item d-f al-center gap-10">
                                    <b>•</b>
                                    <p>Формата (эскорт, интим, свидание, общение)</p>
                                </div>
                                <div class="price__deps-item d-f al-center gap-10">
                                    <b>•</b>
                                    <p>Специфических потребностей</p>
                                </div>
                            </div>
                            <div class="price__right flex-column jc-center gap-10">
                                <div class="price__btns flex-column gap-20">
                                    <a href="https://t.me/+nPb3SMkUEKs2ODll" target="_blank"
                                       class="price__btn-wrapper btn-wrapper">
                                        <div class="price__btn btn txt-center flex-column">
                                            <p>войти в чат</p>
                                            <h3>москвы</h3>
                                        </div>
                                    </a>
                                    <a href="https://t.me/+OE2xSbKtFUJjYTVl" target="_blank"
                                       class="price__btn btn-unfilled btn txt-center flex-column">
                                        <p>войти в чат</p>
                                        <h3>Санкт-петербурга</h3>
                                    </a>
                                </div>
                                <div class="price__note txt-center">
                                    Цена за досуг от 5 000 ₽/час
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
                <div class="price__img-wrapper p-rel">
                    <div class="price__img-block h-100p p-abs">

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="get-girl">
        <div class="wrapper">
            <div class="get-girl__block">
                <h1 class="section__title get-girl__title gradient-color-second">
                    Девушки ждут вас!
                </h1>
                <div class="get-girls__actions d-f js-between">
                    <div class="get-girls__action flex-column gap-20">
                        <img src="assets/img/getgirl_1.jpg" alt="">
                        <p>
                            Переходите в наш телеграм-канал
                        </p>
                    </div>
                    <div class="get-girls__action flex-column gap-20">
                        <img src="assets/img/getgirl_2.jpg" alt="">
                        <p>
                            Выбирайте кандидатку
                        </p>
                    </div>
                    <div class="get-girls__action flex-column gap-20">
                        <img src="assets/img/getgirl_3.jpg" alt="">
                        <p>
                            Свяжитесь с ней, чтобы договориться о встрече
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();