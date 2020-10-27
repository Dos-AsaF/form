<?php
    // получим данные с элементов

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    // обработаем полученные данные

    $login = htmlspecialchars($login); // преоборазование символов в сущности (мнемоники)
    $pass = htmlspecialchars($pass);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);

    $login = urldecode($login); // декодирование URL
    $pass = urldecode($pass);
    $email = urldecode($email);
    $tel = urldecode($tel);

    $login = trim($login); // удаление пробельных символов с обоих сторон
    $pass = trim($pass);
    $email = trim($email);
    $tel = trim($tel);

    file_put_contents(form.txt, string, FILE_APPEND | LOCK_EX);
?>