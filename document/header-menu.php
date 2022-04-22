<div class="container">
    <div class="header">
        <div class="header__flex">
            <nav class="header__menu">
                <ul class="header__menu__list">
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="index.php">новинки</a>
                    </li>   
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="menu-gerl.php">женщины</a>
                    </li>   
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="menu-men.php">мужчины</a>
                    </li>   
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="menu-podrostki.php">подростки</a>
                    </li>   
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="menu-deti.php">дети</a>
                    </li>   
                </ul>
            </nav>
            <div class="burger-menu">
            <a href="" class="burger-menu_button">
            <span class="burger-menu_lines"></span>
            </a>
            <nav class="burger-menu_nav">
                <a href="novinki.php" class="burger-menu_link">новинки</a>
                <a href="menu-gerl.php" class="burger-menu_link">женщины</a>
                <a href="menu-men.php" class="burger-menu_link">мужчины</a>
                <a href="menu-podrostki.php" class="burger-menu_link">подростки</a>
                <a href="menu-deti.php" class="burger-menu_link">дети</a>
            </nav>
            <div class="burger-menu_overlay"></div>
        </div>
            <div class="header__icons">
                <img class="header__img" src="img/search.png" alt="search">
                <img class="header__img" src="img/cart.png" alt="cart" onclick="popup();">
                <img class="header__img" src="img/heart.png" alt="heart">
                <?if($_COOKIE['user'] == ""):?>
                <img class="header__img" id="search-btn" src="img/exit.png" alt="exit" onclick="popuptoggle();">
                <?else:?>
                
                <form action="document/exit.php" method="post">
                    <?echo $_COOKIE['user']?>
                <i class="fa-solid fa-user" style="padding-left: 1vw;padding-right: 1vw;"></i>
                <button type="submit" style="padding:0; border:none;background: none;">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
                </form>
                <?endif;?>
            </div>
            <div id="korzina">
                <h3 style="text-align:center; font-family: 'Montserrat';">Корзина</h3>
                <i class='bx bx-x' onclick="popup();"></i>
            </div>
            <script>

            </script>
            <div id="modal">
                <div id="modal__click" onclick="popuptoggle();"></div>
                <div class="modal-search">
                    <form action="/document/regist.php" id="search-form" method="post">
                        <h3>Регистрация</h3>
                        <input type="email" name="email" placeholder="E-mail*">
                        <input type="text" name="name" placeholder="Имя и Фамилия*">
                        <input type="password" name="password" placeholder="Придумайте пароль*">
                        <input name="tel" type="tel" pattern="^\+7\d{3}\d{7}$" maxlength="12" placeholder="Моб. телефон*">
                        <input type="submit" value="Зарегестрироваться">
                        <p>У вас есть аккаунт? <a id="vxod" onclick="popupp();"> Войти.</a></p>
                    </form>
                    <div class="modal-search">
                        <form action="document/log.php" id="search-form__vxod">
                            <h3>Вход</h3>
                            <input type="email" name="email" placeholder="E-mail">
                            <input type="password" name="password" placeholder="Пароль">
                            <input type="submit" value="Войти">
                            <p><a href="#">Забыли пароль?</a></p>
                            <p>У вас нет аккаунта? <a id="registr" onclick="popupp();"> Зарегестрируйтесь.</a></p>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>