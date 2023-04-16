<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $result = mysqli_query($connect, "SELECT * FROM User WHERE username = '$login' AND Password = '$password'");
    if (mysqli_num_rows($result)>0){
        $user = mysqli_fetch_assoc($result);

        $_SESSION['user'] = [
            "id" => $user['idU'],
            "name" => $user['username']
        ];
        header('Location: profie.php');
    }
    else {
        $_SESSION['message'] = 'Неверный логин или пароль';

    }
?>

