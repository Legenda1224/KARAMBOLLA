<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="KARAMBOLLA Одежда новинки, женщины, мужчины,
    подростки, дети, Рубашки, Куртки, Брюки, Джинсы, Толстовки, Аксессуары, Головные уборы">
    <meta name="description" content="KARAMBOLLA интернет-магазин для мужчин одежда, обувь и аксессуары">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu-men1.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/logo.png" type="img/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Мужчины</title>
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
        <ul>
            <h3>Одежда</h3>
            <li><a href="#">Футболки</a></li>
            <li><a href="men-dzhinsovki.php">Рубашки</a></li>
            <li><a href="#">Поло</a></li>
            <li><a href="men-kurtki.php">Куртки </a></li>
            <li><a href="men-jeans.php">Брюки</a></li>
            <li><a href="men-jeans-2.php">Джинсы</a></li>
            <li><a href="#">Деним</a></li>
            <li><a href="#">Пиджаки</a></li>
            <li><a href="men-tolstovki.php">Толстовки</a></li>
            <li><a href="#">Нижнее белье</a></li>
        </ul>
        <ul>
            <h3>Обувь</h3>
            <li><a href="#">Ботинки</a></li>
            <li><a href="#">Сапоги</a></li>
            <li><a href="#">Кеды и кроссовки</a></li>
            <li><a href="#">Туфли</a></li>
            <li><a href="#">Шлепанцы</a></li>
        </ul>
        <ul>
            <h3>Аксессуары</h3>
            <li><a href="#">Рюкзаки и сумки</a></li>
            <li><a href="#">Ремни</a></li>
            <li><a href="#">Солцезащитные очки</a></li>
            <li><a href="#">Галстуки и бабочки</a></li>
            <li><a href="#">Кошельки</a></li>
            <li><a href="#">Платки</a></li>
            <li><a href="men-aksessuary.php">Головные уборы</a></li>
        </ul>
        <div class="d-flex_img">
            <div class="menu__img">
                <img src="img/menu-men.png" alt="">
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