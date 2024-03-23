<!-- Author: W3layouts
     Author URL: http://w3layouts.com
     License: Creative Commons Attribution 3.0 Unported
     License URL: http://creativecommons.org/licenses/by/3.0/ -->
<?php
// Начало сессии для работы с переменными сессии
session_start();

// Подключение файла с настройками соединения с базой данных
require_once("../../config/connection.php");

// Обработка формы регистрации
if (isset($_POST['logIn']) && !empty($_POST['logIn'])) {
    header("Location: ../../Login/web/index.php");
}
// Обработка формы входа
else  if (isset($_POST['signUp']) && !empty($_POST['signUp'])){
    // Перенаправление на страницу входа
    if (
        isset($_POST['Name'], $_POST['Password'], $_POST['Email'], $_POST['Phone']) &&
        !empty($_POST['Name']) && !empty($_POST['Password']) &&
        !empty($_POST['Email']) && !empty($_POST['Phone'])
    ) {
        // Получение значений из формы
        $name = $_POST['Name'];
        $pass = $_POST['Password'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];

        // Подготовка SQL-запроса для вставки данных в базу данных
        $query = "INSERT INTO users (`username`, `password`, `email`, `phone`) 
					  VALUES ('$name', '$pass', '$email', '$phone')";

        // Выполнение запроса
        mysqli_query($conn, $query);

        // Установка сессии для обозначения успешного входа
        $_SESSION["logIn"] = "1";

        // Перенаправление на главную страницу
        header("Location: ../../index.php");
    }

}
?>
	 <!DOCTYPE HTML>
<html lang="zxx">

<head>
        <title>Music Login Form Responsive Widget Template :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="keywords" content="Music Login Form Responsive Widget,Login form widgets, Sign up Web forms, Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <!-- CSS files -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Web Fonts -->
    <!-- <link href="//fonts.googleapis.com/css?family=Reem+Kufi&amp;subset=arabic" rel="stylesheet">
         <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> -->
    <!-- //Web Fonts -->
</head>

<body>
    <!-- Title -->
    <h1><span>M</span>usic <span>L</span>ogin <span>F</span>orm</h1>
    <!-- //Title -->

    <!-- Content -->
    <div class="sub-main-w3">
        <form action="" method="post">
            <div class="form-style-agile">
                <label for="Name">Username <i class="fas fa-user"></i></label>
                <input placeholder="Username" name="Name" type="text" id="Name" pattern="[a-zA-Z0-9_]{3,}" title="Логин должен содержать только буквы, цифры и подчеркивания (минимум 3 символа)">
            </div>
            <div class="form-style-agile">
                <label for="Password">Password <i class="fas fa-unlock-alt"></i></label>
                <input placeholder="Password" name="Password" type="password" id="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$" title="Пароль должен содержать как минимум одну букву верхнего и нижнего регистра, одну цифру и один специальный символ (минимум 8 символов)">
            </div>
            <div class="form-style-agile">
                <label for="Email">Email <i class="fas fa-envelope"></i></label>
                <input placeholder="Email" name="Email" type="text" id="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Введите корректный адрес электронной почты">
            </div>
            <div class="form-style-agile">
                <label for="Phone">Phone <i class="fas fa-phone"></i></label>
                <input placeholder="Phone" name="Phone" type="text" id="Phone">
            </div>
            <!-- Checkbox -->
            <div class="wthree-text">
                <ul>
                    <li>
                        <label class="anim">
                            <input type="checkbox" class="checkbox">
                            <span>Remember me</span>
                        </label>
                    </li>
                    <li>
                        <a href="../../index.php">Home</a>
                    </li>
                </ul>
            </div>
            <!-- //Checkbox -->
            <input type="submit" value="Sign UP" name="signUp">
            <input type="submit" value="Log In" name="logIn">
            <!-- Social Icons -->
            <div class="footer-social">
                <h2>Or</h2>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f icon_facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter icon_twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-dribbble icon_dribbble"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-google-plus-g icon_g_plus"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //Social Icons -->
        </form>
    </div>
    <!-- //Content -->

    <!-- Copyright -->
    <div class="footer">
        <p>&copy; 2018 Music Login Form. All rights reserved | Design by
            <a href="http://w3layouts.com">W3layouts</a>
        </p>
    </div>
    <!-- //Copyright -->
</body>

</html>



<!-- HTML-код остается без изменений -->

