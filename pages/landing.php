<body>
    <!-- burger -->
    <div id="burger">
      <div class="burger__inner">
        <a href="#" class="burger__header">
          <img src="img/carbon_close.png" alt="">
        </a>
        <ul>
            <li><a href="?p=projects">Проекты</a></li>
            <li><a href="?p=about">О нас</a></li>
            <li><a href="#">Хочу дизайн</a></li>
        </ul>
      </div>
    </div>
    <!-- modal -->
    <div id="modal">
        <div class="modal__okno">
            <a href="#" class="modal__header">
                <img src="img/carbon_close.png" alt="">
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
                    <input type="text" class="form__pole" id="phone-mask" placeholder="Телефон/Мессенджер">
                    <input type="text" class="form__pole" placeholder="Имя">
                    <div class="button__form__pole">
                        <button type="submit" class="form__btn">
                            Отправить заявку
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- header -->
        <?php 
            require 'components/header.php';
        ?>
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
            <div class="swiper-pagination">01</div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide swiper-slide2">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                </div>
                <div class="slider-info">
                    <div class="slider-info__number">03</div>
                    <div class="slider-info__line"></div>
                    <p class="slider-info__p">
                        Аудит бизнес‑процессов и UX-аналитика
                    </p>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>  
            </div>
        </div>
    </div>
    <!-- ПРОЕКТЫ -->
    <div class="section2">
        <div class="section-item">
            <div class="section-item-photo">
                <img src="img/foto.jpg" alt="">
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
                    <a href="?p=project" class="item-but2"><img src="img/arrow-right1.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="section-item">
            <div class="section-item-photo">
                <img src="img/foto2.jpg" alt="">
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
                <img src="img/foto3.jpg" alt="">
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
                <img src="img/foto4.jpg" alt="">
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
                <img src="img/foto5.jpg" alt="">
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
                <img src="img/foto.jpg" alt="">
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
    <?php
        require 'components/footer.php';
    ?>
</body>
</html>