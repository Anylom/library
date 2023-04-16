<?php
    session_start();
    if (!$_SESSION['user']) {
        header ('Location: index.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="signin.php" method="post">
        <h2><?php print_r ($_SESSION['user']['name']); ?></h2>
        <a href="logout.php">Выход</a>
    </form>
</body>
</html>