<?php
    session_start();
    if ($_SESSION['user']) {
        header ('Location: profie.php');
    }
?>
<?php
$con = mysqli_connect('localhost', 'ssar', 'ssar', 'library');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Библиотека</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>
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

      <div class="poisk">
        <form class="fom" method="post">
            <input type="search" name="search" placeholder="Введите название книги" required="">
            <input type="submit" name="search_btn" value="Поиск">
        </form>
      </div>

      <div class="mid">

        <div class="cont">
            <?php
            if(isset($_POST['search_btn'])){
    $search = $_POST['search'];
    $q = mysqli_query($con, "SELECT img, NameBook, Disc, State, FIO FROM `Book` INNER JOIN `Autor` ON Book.idA = Autor.idA WHERE `NameBook` LIKE '%$search%';");

            foreach ($q as $row) { ?>
            <div class="pict">
                <picture><?php echo $row["img"] ?></picture>
            </div>
            <div class="des"><b><?php echo $row["NameBook"] ?></b>
                <BR><?php echo $row["Disc"] ?>
                <BR><b>Автор: </b><?php echo $row["FIO"] ?>
                <p class="state"><?php
                if ($row["State"] > 0){
                echo "<p style='background-color:#A3E2AD;'>Книга есть в наличии </p>"; }
                else {echo "<p style='background-color:#FAA0A0;'> Книги нет в наличии </p>";}?><p>

            </div>

            <?php }
            } ?>
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
<div class="fixed-bottom">© 2023 Все права защищены</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>