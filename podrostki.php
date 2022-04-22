<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="новинки, женщины, мужчины, подростки, дети, Куртки, Толстовки, 
    Спорт, Футболки и топы, Платья">
    <meta name="description" content="одежда для подростков Куртки, Толстовки, Спорт, Футболки и топы">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_podrostki3.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/logo.png" type="img/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Подростки</title>
</head>
<body>
    
<?php require "document/header-sale.php" ?>


<div class="header__logo">
    <h3>
        <strong>
            KARAMBOLLA | подростки
        </strong> 
    </h3>
</div>
<?php require "document/header-menu.php" ?>

<main class="main">
        <div class="cart">
            <div class="cart_img">
                <img src="img/podrostki.png" alt="">
            </div>
        </div>
    <div class="d-flex_main">
        <div class="cart">
            <div class="cart_img">
                <img src="img/podrostki-2.png" alt="">
            </div>
            <div class="linear">
                <a href="#">Подробнее</a>
            </div>
            <h3>
                
            </h3>
        </div>
        <div class="cart">
            <div class="cart_img">
                <img src="img/podrostki-3.png" alt="">
            </div>
            <div class="linear">
                <a href="#">Подробнее</a>
            </div>
            <h3>
                Куртки
            </h3>
        </div>
        <div class="cart">
            <div class="cart_img">
                <img src="img/podrostki-4.png" alt="">
            </div>
            <div class="linear">
                <a href="#">Подробнее</a>
            </div>
            <h3>
                Толстовки
            </h3>
        </div>
    </div>

    <div class="d-flex_main">
    <div class="cart">
            <div class="cart_img">
                <img src="img/podrostki-5.png" alt="">
            </div>
            <div class="linear">
                <a href="#">Подробнее</a>
            </div>
            <h3>
                Спорт
            </h3>
        </div>
        <div class="cart">
            <div class="cart_img">
                <img src="img/podrostki-6.png" alt="">
            </div>
            <div class="linear">
                <a href="#">Подробнее</a>
            </div>
            <h3>
                Футболки и топы
            </h3>
        </div>
        <div class="cart">
            <div class="cart_img">
                <img src="img/podrostki-7.png" alt="">
            </div>
            <div class="linear">
                <a href="#">Подробнее</a>
            </div>
            <h3>
                Платья
            </h3>
        </div>
    </div>
</main>

<div class="dop__info">
    <h3>Смотрите также</h3>
    <div class="d-flex_info">
        <div class="cart__info">
            <div class="img_info">
                <img src="img/dop-info.png" alt="">
            </div>
            <div class="title__info">
                <h4>
                    <a href="menu-gerl.php">Женщины</a>
                </h4>
            </div>
        </div>
        <div class="cart__info">
            <div class="img_info">
                <img src="img/dop-info-2.png" alt="">
            </div>
            <div class="title__info">
                <h4>
                    <a href="menu-men.php">Мужчины</a>
                </h4>
            </div>
        </div>
        <div class="cart__info">
            <div class="img_info">
                <img src="img/dop-info-3.png" alt="">
            </div>
            <div class="title__info">
                <h4>
                    <a href="menu-deti.php">Дети</a>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="select__list">
    <div class="container__select">
        <div class="select__flex">
            <h3>
                Подпишись на нашу рассылку и получи скидку 10% на заказ онлайн.
            </h3>
            <p>
                Получай специальные скидки и ранний доступ к специальным предложениям,
                новым коллекциям и актуальным трендам.
            </p>
            <form action="" class="form__select">
                <input type="email" name="email" placeholder="E-mail">
                <input type="submit" value="ПОДПИСАТЬСЯ">
            </form>
            <span>
                Нажимая кнопку “Подписаться”, вы принимаете условия <a href="#">рассылки</a>
            </span>
        </div>
    </div>
</div>





<?php require "document/footer.php" ?>
    <script>
        function popupp(){
        const popup2 = document.getElementById("search-form");
        const popup3 = document.getElementById("search-form__vxod");
        popup2.classList.toggle("active2");
        popup3.classList.toggle("active3");
    }
    </script>
    <script>
        function popuptoggle(){
        const popup = document.getElementById("modal");
        popup.classList.toggle("active");
    }
    </script>

    <script>
        function popup(){
        const popup4 = document.getElementById("korzina");
        popup4.classList.toggle("active4");
    }
    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>