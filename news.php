<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Библиотека</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<div class="container-fluid">
  <div class="row">
    <?php include 'components/header.html'; ?>
  </div>

  <div class="row justify-content-start">
    <div class="col">
        <div class="enter">
        <button id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Войти</button>
        <div id="myModal" class="ml">
            <!-- Модальное содержание -->
            <div class="mc">
              <div class="mh">
                <span class="close">&times;</span>
                <h2>Войти</h2>
              </div>
              <div class="mb">
              <div class="col"></div>
              <form action="signin.php" method="post">
                <p>Логин</p>
                <input type="text" name="login" placeholder="Введите свой логин">
                <p>Пароль</p>
                <input type="password" name="password" placeholder="Введите пароль">
                <button>Войти</button>
                <?php
                    if ($_SESSION['message']){
                        echo '<p class="msg">'.$_SESSION['message'].'<p>';
                    }
                    unset ($_SESSION['message']);
                    ?>
              </form>
              </div>
              <div class="mf">
                    <div class="tent">У вас не аккаунта? - <a href="register.php">Зарегистрируйтесь<a>!</div>
              </div>
            </div>
        </div>
        </div>

        <script src="assets/script/script.js"></script>
        <div class="enter"><button><a href="новости.html">Новости</a></button></div>
        <div class="enter"><button><a href="о нас.html">О нас</a></button></div>
    </div>
    <div class="col-6">

      <div class="poisk">
        <form class="fom" method="post">
            <h1>Новости</h1>
        </form>
      </div>

      <div class="mide">
        <div class="cont">
            <div class="pic">
                <picture>
                    <img src="assets/picture/8mar.jpg">
                </picture>
            </div>
            <div class="des"><h3> Творческий мастер-класс по созданию открытки на 8 марта </h3>
		 <p>27 февраля в библиотеки "Дом книг" прошел творческий мастер-класс по созданию
            открытки на 8 марта среди школьников 3 и 4 классов МБОУ СОШ№6.
            Международный женский день (8 Марта) — праздник, который отмечается
            ежегодно 8 марта в ряде государств и стран мира. Появился как день
            солидарности женщин в борьбе за женские права и эмансипацию. Ребята
            знают, что подарок, приготовленный своими руками, будет самым особенным
            для любой мамы, и поэтому очень старались.Вместе с воспитателем Лидии
            Ивановной ребята сделали красивые открытки для своих мам, бабушек или
             сестер. (28.02.2023)</p>
            <p>Автор: Кромина Анастасия Кирилловнa</p>
            </div>


        </div>

        <div class="cont">
            <div class="pic">
                <picture>
                    <img src="assets/picture/kvest.jpg">
                </picture>
            </div>
            <div class="des"><h3>Квест-игра «Экспресс-путешествие по городу Кумертау»</h3>
		 <p>4 марта в МБОУ «СОШ № 3 имени С.А.Погребача» состоялась
        квест-игра «Экспресс-путешествие по городу Кумертау».
        В рамках празднования юбилея города педагоги школы организовали
        для детей необыкновенное путешествие по родному городу.
        На станциях «Мой город», «Национальная мозаика», «Профессии
        рядом с нами», «Хранители природы», «36 изыскателей» ребят ждали игры,
        викторины. На станции  «Мой город» сотрудники библиотеки  «Дом книг»
        предложили детям принять участие в фотовикторине «Знай свой город».
        Участники игры выбирали фотографию и отвечали на вопросы «Где эта улица,
        где этот дом?» Юные путешественники показали, что хорошо знают свой
        родной Кумертау.(05.03.2023) </p><p>Автор: Туманов Олег Егорович</p></div>

        </div>

    </div>

    </div>
    <div class="col-3">
        <picture class="advert">
            <img src="assets/picture/adtest2.jpg">
        </picture>
        <picture class="advert">
            <img src="assets/picture/adt2.jpg">
        </picture>
    </div>
  </div>
</div>
<div class="row">© 2023 Все права защищены</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>