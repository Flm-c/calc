<html>
    <head>
        <title>Калькулятор</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
<!--    logo,contact info-->
<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <img src="Слой%202.1.png">
        </div>
        <div class="col-2 mt-3 phone_numb">
            8-800-100-5005<br>
            +7(3452)522-000
        </div>
    </div>
<!--    header-->
    <div class="row mt-3 mb-2 headr">
        <div class="col-2 headr_col alignall"><a class="in_headr without_decor" href="">Кредитные карты</a></div>
        <div class="col-2 alignall"><a class="in_headr without_decor" href="">Вклады</a></div>
        <div class="col-2 headr_col alignall bd_left"><a class="in_headr without_decor" href="">Дебетовая карта</a></div>
        <div class="col-2 headr_col alignall bd_left"><a class="in_headr without_decor" href="">Страхование</a></div>
        <div class="col-1 headr_col alignall bd_left"><a class="in_headr without_decor" href="">Друзья</a></div>
        <div class="col-3 headr_col alignall bd_left"><a class="in_headr without_decor" href="">Интернет-банк</a></div>
    </div>
<!--    breadcrumbs-->
    <div class="row mb-3 breadcr">
        <div class="container">
            <a class="in_breadcr" href="">Главная</a> -
            <a class="in_breadcr" href="">Вклады</a> -
            <a class="in_breadcr without_decor" href="">Калькулятор</a>
        </div>
    </div>
<!--    main module-->
    <form action="">
    <div class="row calc_cont">
        <div class="row margg">
            <div class="col-2"></div>
            <div class="col-4 mt-3" id="calc_title">
                <h2>Калькулятор</h2>
            </div>
        </div>
        <div class="row margg">
            <div class="col-4" align="right">Дата оформления вклада</div>
            <div class="col-3">
                <input type="text" id="datepick" name="date_v" style="width: 105px" readonly>
            </div>
        </div>
        <div class="row margg">
            <div class="col-4" align="right">Сумма вклада</div>
            <div class="col-2" id="after1">
                <input type="number" name="sum_v" min="1000" max="3000000" value="1000" id="num_sum" name="num_sum">
            </div>
        </div>
        <div class="row margg">
            <div class="col-4" align="right">Срок вклада</div>
            <div class="col-3">
                <select name="srok" id="sr" style="width: 105px">
                    <option value="12">1 год</option>
                    <option value="24">2 года</option>
                    <option value="36">3 года</option>
                    <option value="48">4 года</option>
                    <option value="60">5 лет</option>
                </select>
            </div>
        </div>
        <div class="row margg">
            <div class="col-4" align="right">Пополнение вклада</div>
            <div class="col-8">
                <input type="radio" class="rad_cl" name="rad" id="radNo" value="0" checked>
                <label for="radNo">Нет</label>
                <input type="radio" class="rad_cl" name="rad" id="radYes" value="1">
                <label for="radYes">Да</label>
            </div>
        </div>
        <div class="row margg">
            <div class="col-4" align="right">Сумма пополнения вклада</div>
            <div class="col-2" id="after2">
                <input type="number" name="sum_p_v" min="1000" max="3000000" value="1000" id="num_popoln">
            </div>
        </div>
        <div class="row resultrow">
            <div class="col-3 fl">
                <input type="submit" class="btn btn-success bt" id="butn" value="Рассчитать">
            </div>
            <div class="col fl" id="result">
                <span id="result_num"> </span>
            </div>
        </div>
    </div>
    </form>
    <div class="text-danger"id="errorsMessages"></div>
</div>
<!--footer-->
<div class="row fixed-bottom">
    <div class="container foot">
        <div class="row">
            <div class="col" align="center"></div>
            <div class="col" align="center"><a class="in_footer" href="">Кредитные карты</a></div>
            <div class="col" align="center"><a class="in_footer" href="">Вклады</a></div>
            <div class="col" align="center"><a class="in_footer" href="">Дебетовая карта</a></div>
            <div class="col" align="center"><a class="in_footer" href="">Страхование</a></div>
            <div class="col" align="center"><a class="in_footer" href="">Друзья</a></div>
            <div class="col" align="center"><a class="in_footer" href="">Интернет-банк</a></div>
            <div class="col-4"></div>
        </div>
    </div>
</div>
    <!--Подключение скриптов-->
<script src="script.js"></script>
    </body>
</html>