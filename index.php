<?php
    $connect=mysqli_connect("localhost", "ssar", "ssar", "library");
    function getsql($connect) {
        $sql = "SELECT * FROM Book";
        $res = mysqli_query($connect, $sql);
        $cat = mysqli_fetch_all($res, MYSQLI_ASSOC);
                return $cat;
        }
    $book = getsql($connect);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Библиотека </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
</head>
<header>
    <h1 class="tit">Дом книг</h1>
</header>
<body>
<main>
  <div class="left">
        <button id="myBtn">Войти</button>
        <!-- Модальном окно -->
        <div id="myModal" class="modal">
            <!-- Модальное содержание -->
            <div class="modal-content">
              <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Войти</h2>
              </div>
              <div class="modal-body">
                <p>Логин</p>
                <input type="text">
                <p>Пароль</p>
                <input type="text">
                <button>Войти</button>
              </div>
              <div class="modal-footer">
                    <h3><a>Забыл(а) пароль</a></h3>
              </div>
            </div>
        </div>
        <script src="../script/script.js"></script>
        <button><a href="новости.html">Новости</a></button>
        <button><a href="о нас.html">О нас</a></button>
  </div>


  <div>
      <div class="search">
        <form action="#">
            <input type="text" placeholder="Введите название книги" >
            <input type="submit" value="Поиск">
        </form>
      </div>
      <div class="mid">
        <div class="con">
            <?php foreach ($book as $name) { ?>
            <div class="pict">
                <picture><?php echo $name["img"] ?></picture>
            </div>
            <div class="des"><b><?php echo $name["NameBook"] ?></b>
                <BR><?php echo $name["Disc"] ?>
                <p class="state"><?php
                if ($name["State"] > 0){
                echo "Книга есть в наличии"; }
                else {echo "Книги нет в наличии";}?><p>
            </div>
            <?php } ?>
        </div>
      </div>
  </div>

  <div class="right">
          <picture class="advert">
            <source srcset="../picture/adtest1.jpg" media="(max-width: 768px)">
            <source srcset="../picture/adtest2.jpg">
            <img src="picture/adtest1.jpg">
        </picture>
        <picture class="advert">
            <source srcset="picture/adtest2.jpg" media="(max-width: 768px)">
            <source srcset="picture/adtest1.jpg">
            <img src="picture/adtest2.jpg">
        </picture>
  </div>
</main>


</body>
</html>
