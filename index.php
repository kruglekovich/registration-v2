<?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    //проверяем, авторизован ли пользователь 
    if (!isset($_SESSION['authorized'])){
    	// перекидываем на форму авторизации
    	header('Location:login.php');
    }

    require_once 'user.php';
    //создаем пользователя
    $user = new User();
    //загружаем его данные из сессии 
    $user = new User();
    // выводим инофрмацию на экран 
    $user->show();

    ?> 

