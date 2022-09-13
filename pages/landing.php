<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- modal -->
    <div id="modal">
        <div class="modal__okno">
            <a href="#" class="modal__header">
                <img src="../img/carbon_close.png" alt="">
            </a>
            <div class="modal__body">
                <h1 class="modal__title">
                    Сделать заказ
                </h1>
                <form action="" class="modal__form">
                    <div class="form__categorys">
                        <p class="categorys__title">
                            Проект:
                        </p>
                        <div class="categorys_buttons">
                            <div class="form_radio_btn">
                                <input id="radio-1" type="radio" name="radio" value="1">
                                <label for="radio-1">Сайт</label>
                            </div>
                            <div class="form_radio_btn">
                                <input id="radio-2" type="radio" name="radio" value="2">
                                <label for="radio-2">Приложение</label>
                            </div>
                            
                            <div class="form_radio_btn">
                                <input id="radio-3" type="radio" name="radio" value="3">
                                <label for="radio-3">Айдентика</label>
                            </div>
                            
                            <div class="form_radio_btn">
                                <input id="radio-4" type="radio" name="radio" value="4">
                                <label for="radio-4">Упаковка</label>
                            </div>
                            <div class="form_radio_btn">
                                <input id="radio-5" type="radio" name="radio" value="5">
                                <label for="radio-5">Оформление соц.сети</label>
                            </div>
                            <div class="form_radio_btn">
                                <input id="radio-6" type="radio" name="radio" value="6">
                                <label for="radio-6">Другое</label>
                            </div>
                        </div>
                    </div>
                    <input type="text" class="form__pole" placeholder="Название компании">
                    <input type="text" class="form__pole" placeholder="Описание">
                    <label class="input-file">
                        <input type="file" name="file">		
                        <span>Загрузить файл</span>
                    </label>
                </form>
            </div>
        </div>
    </div>
    <!-- header -->
    <header>
        <div class="header__inner">
            <div class="logo">
                <img src="../img/logo.png" alt="">
            </div>
            <nuv class="menu-header">
                <ul>
                    <li><a href="#">Проекты</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Хочу дизайн</a></li>
                </ul>
            </nuv>
        </div>
    </header>
    <!-- главная -->
    <div class="section">
        <div class="section__column">
            <h1 class="section__title">
                Выбери нужный для себя дизайн
            </h1>
            <p class="section__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum rutrum etiam tempor vel, tortor. Pharetra in nunc, in neque commodo convallis. Pellentesque nunc sed orci nullam pharetra magna. Nisi mattis id ut aenean velit est. Neque nulla ut turpis augue ac nulla.
            </p>
            <a href="#modal">
                Оставить заявку
            </a>
        </div>
        <div class="section__column2">
        </div>
    </div>
    <!-- ПРОЕКТЫ -->
    <div class="section2">
        <div class="section-item">
            <div class="section-item-photo">
                <img src="../img/foto.jpg" alt="">
            </div>
            <div class="section-item-hover">
                <div class="section-item-subtitle">
                    Название классификации проекта
                </div>
                <div class="section-item-title">
                    Название выполненного проекта
                </div>
                <div class="section-item-row">
                    <a href="#" class="item-but">Хочу также!</a>
                    <a href="#" class="item-but2"><img src="img/arrow-right1.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="section-item">
            <div class="section-item-photo">
                <img src="../img/foto2.jpg" alt="">
            </div>
            <div class="section-item-hover">
                <div class="section-item-subtitle">
                    Название классификации проекта
                </div>
                <div class="section-item-title">
                    Название выполненного проекта
                </div>
                <div class="section-item-row">
                    <a href="#" class="item-but">Хочу также!</a>
                    <a href="#" class="item-but2"><img src="img/arrow-right1.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="section-item">
            <div class="section-item-photo">
                <img src="../img/foto3.jpg" alt="">
            </div>
            <div class="section-item-hover">
                <div class="section-item-subtitle">
                    Название классификации проекта
                </div>
                <div class="section-item-title">
                    Название выполненного проекта
                </div>
                <div class="section-item-row">
                    <a href="#" class="item-but">Хочу также!</a>
                    <a href="#" class="item-but2"><img src="img/arrow-right1.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="section-item">
            <div class="section-item-photo">
                <img src="../img/foto4.jpg" alt="">
            </div>
            <div class="section-item-hover">
                <div class="section-item-subtitle">
                    Название классификации проекта
                </div>
                <div class="section-item-title">
                    Название выполненного проекта
                </div>
                <div class="section-item-row">
                    <a href="#" class="item-but">Хочу также!</a>
                    <a href="#" class="item-but2"><img src="img/arrow-right1.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="section-item">
            <div class="section-item-photo">
                <img src="../img/foto5.jpg" alt="">
            </div>
            <div class="section-item-hover">
                <div class="section-item-subtitle">
                    Название классификации проекта
                </div>
                <div class="section-item-title">
                    Название выполненного проекта
                </div>
                <div class="section-item-row">
                    <a href="#" class="item-but">Хочу также!</a>
                    <a href="#" class="item-but2"><img src="img/arrow-right1.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="section-item">
            <div class="section-item-photo">
                <img src="../img/foto.jpg" alt="">
            </div>
            <div class="section-item-hover">
                <div class="section-item-subtitle">
                    Название классификации проекта
                </div>
                <div class="section-item-title">
                    Название выполненного проекта
                </div>
                <div class="section-item-row">
                    <a href="#" class="item-but">Хочу также!</a>
                    <a href="#" class="item-but2"><img src="img/arrow-right1.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="logo">
            <img src="../img/logo.png" alt="">
        </div>
        <nuv class="menu-footer">
            <ul>
                <li><a href="https://vk.com/away.php?to=https%3A%2F%2Fwww.behance.net%2Felovdesign%2Fprojects">Behance</a></li>
                <li><a href="https://vk.com/elovdesign">ВКонтакте</a></li>
                <li><a href="https://vk.com/away.php?to=https%3A%2F%2Fwww.behance.net%2Felovdesign%2Fprojects">Youtube</a></li>
            </ul>
        </nuv>
    </footer>
</body>
</html>