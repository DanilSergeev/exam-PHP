<?php
require "db/db.php";



if (!is_null($_SESSION['err'])) {
?>
<script>alert("<? echo $_SESSION['err']; unset($_SESSION['err']);?>");</script>
<?php
}

if (!is_null($_SESSION['mess'])) {
?>
<script>alert("<? echo $_SESSION['mess']; unset($_SESSION['mess']);?>");</script>
<?php
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exam</title>
    <link rel="shortcut icon" href="/img/ico.ico" type="image/x-icon">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>

<body>
    <header>
        <nav class="wrapper">
            <a href="/">
                <iconify-icon class="ico" icon="logos:atom"></iconify-icon>
            </a>
            <div>
                <a href="/">Главная</a>
                <a href="aboutUS.php">О нас</a>

                <?php
                if ($_SESSION['user']) { ?>
                <a href="db/authAndReg.php?case=3">Выйти с (<?php echo $_SESSION['user']['login'];?>)</a>
                <?php } else { ?>
                <a href="register.php">Авторизация</a>
                <?php } ?>
            </div>
        </nav>
    </header>
    <main>