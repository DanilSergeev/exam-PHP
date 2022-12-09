<?php
require 'block/header.php';
?>

<section class="wrapper authDiv">
    <div class="auth">
        <h3>Авторизация</h3>
        <form action="db/authAndReg.php?case=2" method="POST">
            <input name="mail" type="text" placeholder="Введите E-mail">
            <input name="password" type="password" placeholder="Введите пароль">
            <button type="submit">Войти</button>
        </form>
    </div>
    <div class="l">
        <div class="rightFAQ">
            <h5>Я – новый клиент</h5>
            <p>Регистрация на сайте позволит быстро оформлять заказы,
                управлять заказами через личный кабинет,
                в полном объеме использовать возможности нашего интернет магазина.</p>
            <a href="/register.php">Зарегистрироваться</a>
        </div>
    </div>
</section>

<?php
require 'block/footer.php';
?>