<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="KARAMBOLLA  дети, новинки, женщины, мужчины, подростки, дети, Девочки">
    <meta name="description" content="KARAMBOLLA интернет-магазин одежда для детей, Мальчиков, Новорожденных">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu-gerl5.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/logo.png" type="img/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Дети</title>
</head>
<body>
    
<?php require "document/header-sale.php" ?>


<div class="header__logo">
    <h3>
        <strong>
            KARAMBOLLA  
        </strong>
    </h3>
</div>
<?php require "document/header-menu.php" ?>

<div class="menu__container">
    <nav class="menu">
        <ul><br><br>
            <li><a href="children-gerl.php">Девочки</a></li>
            <li><a href="#">Мальчики</a></li>
            <li><a href="#">Новорожденные</a></li>
        </ul>
        <ul>
            <h3>Новинки</h3>
            <li><a href="#">Одежда</a></li>
            <li><a href="#">Аксессуары</a></li>
            <li><a href="#">Распродажа</a></li>
            <li><a href="#">Обувь</a></li>
        </ul>
        <ul><br><br>
            <a href="#">Смотреть подробнее</a>
            <!-- <li><a href="#">Рюкзаки и сумки</a></li>
            <li><a href="#">Ремни</a></li>
            <li><a href="#">Солцезащитные очки</a></li>
            <li><a href="#">Галстуки и бабочки</a></li>
            <li><a href="#">Кошельки</a></li>
            <li><a href="#">Платки</a></li>
            <li><a href="#">Головные уборы</a></li> -->
        </ul>
        <div class="d-flex_img">
            <div class="menu__img">
                <img src="img/menu-podrostki.png" alt="">
            </div>
        </div>
    </nav>
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