<div class="modal" id="modal">
    <div class="bg"></div>
    <div class="content" id="content">
        <i class="fas fa-times-circle" id="close" onclick="close_block()"></i>
        <h2>Выберите город:</h2>
        <div class="city_container">
            <div class="city_list">
                <ul>
                    <li onclick="city_moscow()">Москва</li>
                    <li onclick="city_peter()">Санкт-Петербург</li>
                    <li onclick="city_novosibirsk()">Новосибирск</li>
                    <li onclick="city_yekaterinburg()">Екатеринбург</li>
                    <li onclick="city_novgorod()">Нижний Новгород</li>
                </ul>
            </div>
            <div class="city_list">
                <ul>
                    <li onclick="city_kazan()">Казань</li>
                    <li onclick="city_samara()">Самара</li>
                    <li onclick="city_omsk()">Омск</li>
                    <li onclick="city_chelyabinsk()">Челябинск</li>
                    <li onclick="city_rostov()">Ростов-на-дону</li>
                </ul>
            </div>
            <div class="city_list">
                <ul>
                    <li onclick="city_ufa()">Уфа</li>
                    <li onclick="city_volgograd()">Волгорад</li>
                    <li onclick="city_krasnoyarsk()">Красноярск</li>
                    <li onclick="city_permian()">Пермь</li>
                    <li onclick="city_voronezh()">Воронеж</li>
                </ul>
            </div>
        </div>
        <form action="">
            <label for="create_city">Или укажите в поле:</label>
            <input type="text" placeholder="Ваш город" class="create_city" id="create_city">
        </form>
        <div class="choice_do">
            <i class="fas fa-ellipsis-v dots" onclick="get_discharge_button()"></i>
            <div class="choice_do_sub" onmouseleave="close_discharge_button()">
                <button class="discharge" onclick="discharge_city()">Сбросить город!</button>
            </div>
        </div>
    </div>
</div>
