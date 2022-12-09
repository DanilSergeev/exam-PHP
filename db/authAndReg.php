<?php
require "db.php";

$x = $_GET["case"]; // Выбор регистрации или регистрации

switch ($x) {
    case 1: // reg
        $login = (trim($_POST["mail"]));
        $passwrod = trim($_POST["password"]);
        $passwrodRe = trim($_POST["passwordAgain"]);
        $passwrod = md5($passwrod . "insanity");
        $passwrodRe = md5($passwrodRe . "insanity");

        if ($passwrod != $passwrodRe) { // Проверка совпадения пароля
            $_SESSION['err'] = "Введенные пароли не совпадают";
            header("Location: /");
            die();
        }

        $loginAlreadySet = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login` LIKE '$login'");
        $loginAlreadySetLogin = mysqli_fetch_assoc($loginAlreadySet);

        if ($login == $loginAlreadySetLogin['login']) { // Проверка на уже существующий логин
            $_SESSION['err'] = "Данный пользователь уже зарегистрирован";
            header("Location: /");
            die();
        }

        mysqli_query($mysqli, ("INSERT INTO `users` ( `login`, `password`) VALUES ('$login', '$passwrod');"));

        $_SESSION['mess'] = "Регистация прошла усешно";
        $login = trim($_POST["mail"]);
        $passwrod = trim($_POST["password"]);

        $passwrod = md5($passwrod . "insanity");
        $checkUser = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$passwrod'");

        if (mysqli_num_rows($checkUser) > 0) {
            $user = mysqli_fetch_assoc($checkUser);
            $_SESSION['user'] = ["id" => $user['id'],  "login" => $user['login']];
            header("Location: /");
        } 
        break;
// 
    case 2: // auto
        $login = trim($_POST["mail"]);
        $passwrod = trim($_POST["password"]);

        $passwrod = md5($passwrod . "insanity");
        $checkUser = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$passwrod'");

        if (mysqli_num_rows($checkUser) > 0) {
            $user = mysqli_fetch_assoc($checkUser);
            $_SESSION['user'] = ["id" => $user['id'],  "login" => $user['login']];
            header("Location: /");
        } else {
            $_SESSION['err'] = "Неверно наброны данные";
            header("Location: /");
            die();
        }
        break;
// 
    case 3: // logout
        unset($_SESSION['user']);
        header("Location: /");
        die();
// 
    default:
        echo "Пожалуйста не ломайте сайт!!!";
        break;
}
?>