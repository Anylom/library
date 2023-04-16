<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $password = md5($password);
        $sql = "INSERT INTO `User` (`idU`, `username`, `idB`, `DateS`, `DateE`, `Password`) VALUES (NULL, '$full_name', NULL, NULL, NULL, '$password');";
        mysqli_query($connect->query($sql));

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: index.php');
    }
    else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: register.php');
    }
?>

