<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;

AppAsset::register($this);

$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head> 

<body>
    <?php $this->beginBody() ?>
    <!-- <header> -->
    <header>
        <div class="main-screen__bgs">

            <!-- logo -->
            <div class="logo">
                <img class="vector__1" src="img/Vector.svg" alt="">
                <img class="vector__2" src="img/Vector_1.svg" alt="">
            </div>
            <!-- nav -->
            <nav>
                <ul>
                    <li><a href="#s-1">Главная</a></li>
                    <li><a href="#s-2">Курсы</a></li>
                    <li><a href="#s-3">Расписание</a></li>
                    <li><a href="#s-4">Преподаватели</a></li>
                    <li><a href="#s-5">Рассылка</a></li>
                    <li><a href="#s-6">Контакты</a></li>
                </ul>
            </nav>
            <!-- button -->
            <div class="main-screen__button h"><a href="#">Личный каб</a></a></div>
            <!-- h1 -->
            <div class="first">
                <h1><br>Первый курс</br><span> по компьютерной сборке</span></h1>
            </div>
            <!-- time -->
            <div class="time">
                <div class="day">
                    <h1>18</h1>
                    <p>Дней</p>
                </div>
                <div class="hour">
                    <h1>18</h1>
                    <p>Часов</p>
                </div>
                <div class="minute">
                    <h1>18</h1>
                    <p>Минут</p>
                </div>
                <div class="second">
                    <h1>18</h1>
                    <p>Секунд</p>
                </div>
            </div>
            <!-- last-line -->
            <div class="main-screen-last-line-bgs">
                <div class="sub">
                    <div class="main-screen__button--active h" onclick="q()">Заказать курс</div>

                    <div class="main-screen__people">
                        <p class="op">Учеников всего:</p>
                        <p>200</p>
                        <p class="op">Успешно закончили курс:</p>
                        <p>190</p>
                    </div>

                    <div class="main-screen__money">
                        <p class="op">Заработано учениками:</p>
                        <p>400 000₽</p>
                        <div class="restangle-5">
                            <div class="restangle-6"></div>
                        </div>
                        <p class="op ">0</p>
                        <p class="op s-1">1 000 000₽</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    </header>
    <!-- main -->
    <main class="body">
        <!-- about -->
        <section>
            <div class="about" id="s-1">
                <div class="restangle-25">
                    <div class="pc-sub"></div>
                    <div class="about-sub">
                        <p class="font-48">Чем мы занимаемся?</p>
                        <p class="font-16">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia autem
                            dolores cupiditate,
                            iusto
                            vel illo! Quos ducimus repudiandae eligendi consequuntur magnam maxime ipsam rem totam
                            non,
                            nobis, unde pariatur quibusdam!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, sed est neque
                            inventore
                            culpa nam quaerat deleniti ipsa a commodi, error sapiente tempore sequi, voluptate
                            aliquam
                            vero quibusdam recusandae molestiae!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- start -->
        <section>
            <div class="start" id="s-2">
                <div class="Vector_3"><img src="img/Vector_3.svg" alt=""></div>
                <p class="p-11">Быстрый старт</p>
                <p class="p-10">Больше 90% учеников прошли полный курс и смогли собрать свой первый компьютер
                </p>
                <p class="p-5">100%</p>
                <p class="p-6">75%</p>
                <p class="p-7">50%</p>
                <p class="p-8">Итог</p>
                <div class="restangle-7"></div>
                <div class="restangle-8"></div>
                <div class="restangle-9"></div>
                <div class="restangle-10"></div>
                <p class="p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ut, voluptates odio
                    atque
                    adipisci exercitationem culpa impedit et quae, blanditiis quia quisquam necessitatibus ipsam
                    nulla
                    aperiam vel. Maiores, mollitia deleniti!</p>
                <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum perspiciatis, soluta
                    laborum incidunt eligendi vero! Officia iure magni reiciendis earum quam, similique illo veniam
                    dolores porro inventore laudantium cum eum!</p>
                <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tenetur reprehenderit
                    architecto consequatur accusantium nemo enim laborum dolor, officiis, facere sunt facilis nulla
                    maxime placeat tempore reiciendis rem atque nostrum?</p>
                <p class="p-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae earum doloribus
                    aperiam
                    ab ex voluptas? Fugit quia, voluptatem consequuntur saepe ullam consectetur perspiciatis.
                    Repellendus pariatur id maxime doloremque quibusdam iste?</p>
            </div>
        </section>
        <!-- advantages -->
        <section>
            <div class="advantages">
                <p class="getting">Получите профессию прямо сейчас</p>
                <div>
                    <div class="icon-1"></div>
                    <p class="icon-txt__1">Только практические навыки в работе</p>
                    <p class="icon-txt__2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi ipsam eum
                        illo animi architecto
                        debitis maxime fugit enim fugiat impedit, laudantium alias, delectus ratione modi.</p>
                </div>
                <div>
                    <div class="icon-2"></div>
                    <p class="icon-txt__1">Работа на самом современно оборудовании</p>
                    <p class="icon-txt__2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque corporis
                        esse necessitatibus
                        saepe, excepturi neque vel dolorem praesentium quaerat magnam itaque debitis corrupti porro
                        incidunt.</p>
                </div>
                <div>
                    <div class="icon-3"></div>
                    <p class="icon-txt__1">Сертификация по окончании обучения</p>
                    <p class="icon-txt__2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil
                        laudantium
                        sapiente amet deleniti
                        provident cumque, ullam iusto esse magnam nostrum natus laboriosam repudiandae! Placeat,
                        ipsa?
                    </p>
                </div>
            </div>
        </section>
        <!-- partners -->
        <section>
            <div class="partners">
                <div class="ellipse-1"><img src="img/Ellipse_1_Stroke__1.svg" alt=""></div>
                <h5>Партнеры - топовые бренды</h5>
                <div class="logo-1"></div>
                <img class="part-1" src="img/logo.svg" alt=""></img>>
                <div class="logo-2"></div>
                <img class="part-2" src="img/logo.svg" alt="">
                <div class="logo-3"></div>
                <img class="part-3" src="img/logo.svg" alt="">
                <div class="logo-4"></div>
                <img class="part-4" src="img/logo.svg" alt="">
                <div class="logo-5"></div>
                <img class="part-5" src="img/logo.svg" alt="">
                <div class="logo-6"></div>
                <img class="part-6" src="img/logo.svg" alt="">
                <div class="logo-7"></div>
                <img class="part-7" src="img/logo.svg" alt="">
                <div class="logo-8"></div>
                <img class="part-8" src="img/logo.svg" alt="">

            </div>
        </section>
        <!-- program -->
        <section>
            <div class="program" id="s-3">
                <img src="img/Ellipse 1 (Stroke).svg" alt="">
                <h1>Программа обучения</h1>
                <p>Больше 90% учеников прошли полный курс и смогли собрать свой первый компьютер</p>
                <div>
                    <div>
                        <p class="program-item__1">Неделя №1</p>
                        <p class="program-item__2">Красивая часть курса, которая помогает в успехе</p>
                        <p class="program-item__3">Неделя №3</p>
                        <p class="program-item__4">Красивая часть курса, которая помогает в успехе</p>
                        <p class="program-item__5">Неделя №5</p>
                        <p class="program-item__6">Красивая часть курса, которая помогает в успехе</p>
                        <p class="program-item__7">Неделя №7</p>
                        <p class="program-item__8">Красивая часть курса, которая помогает в успехе</p>
                    </div>
                    <div class="timeline-sub">
                        <div
                            style="width: 40px;height: 182px ;border-top: 1px solid white ; opacity: 0.3; border-bottom: 1px solid white; position: relative; top: 60px; left: 21px;">
                        </div>
                        <div
                            style="width: 40px;height: 182px ;border-top: 1px solid white ; opacity: 0.3; border-bottom: 1px solid white; position: relative; top: 424px; ">
                        </div>
                        <div class="timeline"></div>
                        <div
                            style="width: 40px;height: 182px ;border-top: 1px solid white ; opacity: 0.3; border-bottom: 1px solid white; margin-top: 147px;">
                        </div>
                        <div
                            style="width: 40px;height: 182px ; opacity: 0.3; border-bottom: 1px solid white; position: relative; top: 333px; right: 21px; ">

                        </div>
                    </div>
                    <div>
                        <p class="program-item__9">Неделя №2</p>
                        <p class="program-item__10">Красивая часть курса, которая помогает в успехе</p>
                        <p class="program-item__11">Неделя №4</p>
                        <p class="program-item__12">Красивая часть курса, которая помогает в успехе</p>
                        <p class="program-item__13">Неделя №6</p>
                        <p class="program-item__14">Красивая часть курса, которая помогает в успехе</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- teachers -->
        <section>
            <div class="teachers" id="s-4">
                <div class="teachers-sub__1">
                    <img src="img/Ellipse 2 (Stroke).svg" alt="">
                    <h1>Ваши преподаватели</h1>
                </div>
                <div class="teachers-sub__2">
                    <div class="teachers-sub__item-1">
                        <img src="img/Ellipse 2.svg" alt="">
                        <h2>Дмитрий Иванов</h2>
                        <p>Специалист по видеокартам</p>
                        <div class="teachers-button h" onclick="q()">Биография</div>
                    </div>
                    <div class="teachers-sub__item-2">
                        <img src="img/Ellipse 3.svg" alt="">
                        <h3>Дмитрий Иванов</h3>
                        <p>Специалист по видеокартам</p>
                        <div class="teachers-button h" onclick="q()">Биография</div>
                    </div>
                    <div class="teachers-sub__item-3">
                        <img src="img/Ellipse 4.svg" alt="">
                        <h4>Дмитрий Иванов</h4>
                        <p>Специалист по видеокартам</p>
                        <div class="teachers-button h" onclick="q()">Биография</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->
        <footer id="s-5">
            <h1>Статьи каждую неделю</h1>
            <p>Более 90% учеников прошли полный курс и смогли собрать свой компьютер</p>
            <form action="">
                <input type="text" placeholder="E-mail">
                <button>Подписаться</button>
            </form>
            <div id="s-6">
                <a href="#"><img src="img/Vector-f-1.svg" alt=""></a>
                <a href="#"><img src="img/Vector-f-2.svg" alt=""></a>
                <a href="#"><img src="img/Vector-f-3.svg" alt=""></a>
                <a href="#"><img src="img/instagram.svg" alt=""></a>
            </div>
        </footer>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>