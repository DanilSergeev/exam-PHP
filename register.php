<?php
require 'block/header.php';
?>

<section class="wrapper authDiv">
    <div class="auth">
        <h3>Регистрация</h3>
        <form action="db/authAndReg.php?case=1" method="POST">
            <input name="mail" type="email" placeholder="Введите E-mail">
            <input name="password" minlength="3" type="password" placeholder="Введите пароль">
            <input name="passwordAgain" minlength="3" type="password" placeholder="Повторите пароль">
            <button type="submit">Зарегистрироватся</button>
        </form>
    </div>
    <div class="l">
        <div class="rightFAQ">
        <h5>Зачем нужна регистрация?</h5>
            <p>Зарегистрировавшись на сайте, Вы сможете получить личный кабинет, что позволит Вам отслеживать историю заказов, быстрее оформлять заказы в нашем Интернет магазине.
                 Вся информация о Вас будет доступна в любое время
                 , и ее не нужно будет вводить повторно.</p>
            <a href="/auth.php">Авторизоватся</a>
        </div>
    </div>
</section>

<?php
require 'block/footer.php';
?>