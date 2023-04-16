<?php
    session_start();
    if ($_SESSION['user']) {
        header ('Location: profie.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container-fluid">
  <div class="row"><?php include 'components/header.html'; ?></div>
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
        <div class="enter"><button><a href="news.php">Новости</a></button></div>
        <div class="enter"><button><a href="">О нас</a></button></div>
    </div>
    <div class="col-6">
    <div>
        <form class="fom" method="post">
            <h1>Новости</h1>
        </form>
    </div>
    <div class="poisk">
        <form action="signin.php" method="post">
            <p>ФИО</p>
            <input type="text" name="full_name" placeholder="Введите своё полное имя">
            <p>Пароль</p>
            <input type="password" name="password" placeholder="Введите пароль">
            <p>Подтверждение пароля</p>
            <input type="password" name="password_confirm" placeholder="Повторите пароль">
            <button>Войти</button>
                <?php
                    if ($_SESSION['message']){
                        echo '<p class="msg">'.$_SESSION['message'].'<p>';
                    }
                    unset ($_SESSION['message']);
                    ?>
        </form>
    </div>
    </div>
    <div class="col">
        <picture class="advert">
            <img src="assets/picture/adtest2.jpg">
        </picture>
        <picture class="advert">
            <img src="assets/picture/adt2.jpg">
        </picture>
    </div>
 </div>



</div>
<div class="fixed-bottom">© 2023 Все права защищены</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>