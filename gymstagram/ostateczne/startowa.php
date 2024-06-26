<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/clipboard.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/phone.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/eye.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/toggle-on.css' rel='stylesheet'>
    <title>Welcome to GYMstagram</title>

    <style>
        *{
            margin:0;
            padding:0;
        }
        body, html {
            height: 100%;
            margin: 0;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #cbc8c8;
            /*background-color: #f0f0f0; */
        }
       
        .navbar {
            
            display: flex;
            align-items: center;
            position: fixed;
            height: 7%;
            top: 0;
            width: 100%;
            background: #333;
            color: white;
            justify-content: space-between;
            padding: 0 40px;
            margin: 0 150px;
            z-index: 1000;
            
        }
        .navbar h1 {
            font-size: 34px;
            letter-spacing: 2px;
            margin-left: 3%;
            display: flex;
            align-items: center;
        }
        .navbar nav {
            display: flex;
            align-items: center;
            margin-right: 3%;
            padding-left:50px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding-left: 30px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }
        .navbar a i {
            margin-right: 4px;
        }
        .navbar a:hover {
            color: red;
            font-weight: 500;
            transform: scale(1.15);

        }
        .gymword {
            color: red;
            letter-spacing: 1.5px;
        }
        .logoNav{
            padding: 0px;
            width: 250px;
            
        }
        .logoNavBar{
            width: 50px;
        }
        .container {
            background:#333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin:20px;
            /* max-height:500px; */
            /* width: 100%; */
            height: 70%;
            max-width: 400px;
            text-align: center;
            border: 3px solid black;
            box-shadow: 10px 10px 5px #888888;
            /* max-height: 650px; */

            
        }
        .container h1 {
            margin-bottom: 24px;
            font-size: 24px;
            color: white;
        }
        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            font-size: 15px;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 5px solid #000000;
            border-radius: 14px;
            box-sizing: border-box;
            text-align: center;
            
        }
        .container button {
            width: 100%;
            background-color: #218838;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .container button:hover {
            background-color: red;
            transform: scale(1.1);
        }
        .container .error-message {
            color: red;
            margin-top: 10px;
        }
        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 0 50px;
        }
        .container .social-login {
            margin-top: 20px;
        }
        .container .social-login button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            transition: transform 0.3s ease;
        }
        .container .social-login button:hover {
            transform: scale(1.3);
        }
        .container .social-login img {
            width: 40px;
            height: 40px;
        }
        .container a {
            color: red;
            text-decoration: none;
        }
        .container a:hover {
            text-decoration: none;
            color: green;
        }
        .navbarLow {
            margin: 0px 150px;
            position: fixed;
            height: 7%;
            bottom: 0;
            width: 100%;
            background: #333;
            color: white;
            /* padding: 7px 0; */
            display: flex;
            justify-content: center;
            text-align: center;
            /* height: 40px; */
            display: flex;
            align-items: center;
        }
        .navbarLow h3 {
            color: #9a9d9a;
            font-size: 12px;
        }
        .forgotPWD a {
            margin-bottom:2px;
            float:right;
            /* font-size:24px; */
        }
        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .navbar h1 {
                font-size: 28px;
            }
            .navbar a {
                font-size: 14px;
                padding-left: 15px;
            }
            .container {
                width: 100%;
                padding: 20px;
            }
            .container h1 {
                font-size: 20px;
            }
            .container input[type="text"],
            .container input[type="password"] {
                font-size: 14px;
                padding: 10px;
            }
            .container button {
                padding: 12px;
                font-size: 14px;
            }
            .container .social-login img {
                width: 30px;
                height: 30px;
            }
        }
        @media (max-width: 480px) {
            .navbar h1 {
                font-size: 24px;
            }
            .navbar a {
                font-size: 8px;
                padding-left: 0px;
            }
            .container {
                width: 95%;
                padding: 15px;
            }
            .container h1 {
                font-size: 18px;
            }
            .container input[type="text"],
            .container input[type="password"] {
                font-size: 12px;
                padding: 8px;
            }
            .container button {
                padding: 10px;
                font-size: 12px;
            }
            .container .social-login img {
                width: 25px;
                height: 25px;
            }
            .icons {
                display:none;
            }
        }
        @media (max-width: 400px) {
            .navbar h1 {
                font-size: 20px;
            }
            .navbar a {
                display: none;
                font-size: 5px;
                padding-left: 0px;
            }
            .container {
                width: 100%;
                padding: 15px;
            }
            .container h1 {
                font-size: 15px;
            }
            .container input[type="text"],
            .container input[type="password"] {
                font-size: 8px;
                padding: 5px;
            }
            .container button {
                padding: 6px;
                font-size: 6px;
            }
            .container .social-login img {
                width: 25px;
                height: 25px;
            }
            .icons {
                display:none;
            }
        }
        @media (max-width: 345px) {
            .navbar h1 {
                font-size: 17px;
            }
            .navbar a {
                display: none;
                font-size: 5px;
                padding-left: 0px;
            }
            .container {
                width: 100%;
                padding: 15px;
            }
            .container h1 {
                font-size: 12px;
            }
            .container input[type="text"],
            .container input[type="password"] {
                font-size: 8px;
                padding: 3px;
            }
            .container button {
                padding: 3px;
                font-size: 6px;
            }
            .container .social-login img {
                width: 25px;
                height: 25px;
            }
            .icons {
                display:none;
            }
        }

        
    </style>
</head>
<body>
    
    <div class="navbar">
        <h1><span class="gymword">GYM</span>stagram <img src="gyms.png"  class="logoNavBar" alt="logo" width="50px "></h1>
        <nav class="icons" id='loginForm'>
            <a href="#"id="RegisterBtn"><i class="gg-clipboard"></i> REJESTRACJA</a> 
            <a href="#" id="aboutUsBtn"><i class="gg-eye"></i> O NAS</a>
            <a href="#" id="ContactBtn"><i class="gg-phone"></i> KONTAKT</a>
        </nav>
    </div>
    <div class="container">
        <img src="gyms.png"  class="logoNav" alt="logo">
        <h1>Zaloguj się do aplikacji <span class="gymword">GYM</span>stagram</h1>
        <form action="logIn.php" method='post' >
            <input type="text" id="username" name="login" placeholder="email lub login" required>
            <p class='loginInput'></p>
            <input type="password" id="password" name="password" placeholder="hasło" required>
            <button type="submit" name='logButton'>ZALOGUJ SIE</button>
            
            <div class="error-message" id="error-message"></div>
            <div class="social-login">
                <button><img src="https://img.icons8.com/color/48/000000/facebook.png" alt="Facebook"></button>
                <button><img src="https://img.icons8.com/color/48/000000/google-logo.png" alt="Google"></button>
                <button><img src="https://img.icons8.com/color/48/000000/twitter.png" alt="Twitter"></button>
            </div>
            <div class="forgotPWD">
                <a href="#">Zapomniałeś hasła?</a>
            </div>
        </form>
    </div>
    <div class="navbarLow">
        <h3>ALL RIGHTS RESERVED © GYMSTAGRAM 2024</h3>
    </div>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorMessage = document.getElementById('error-message');

            errorMessage.textContent = '';

            if (username === '' || password === '') {
                errorMessage.textContent = 'Wypełnij oba pola';
                return;
            }

            if (!isValidUsername(username)) {
                errorMessage.textContent = 'Niepoprawny login';
                return;
            }

            if (!isValidPassword(password)) {
                errorMessage.textContent = 'Hasło musi mieć przynajmniej 6 znaków';
                return;
            }

        });

        function isValidUsername(username) {
            const usernameRegex = /^[a-zA-Z0-9_-]{3,16}$/;
            return usernameRegex.test(username);
        }

        function isValidPassword(password) {
            return password.length >= 6;
        }






        //ODNOŚNIKI


        const aboutUsPage = document.getElementById('aboutUsBtn');
        aboutUsPage.addEventListener('click', () => {
            window.location.href = 'onas.php';
        })

        const RegisterBtn=document.getElementById('RegisterBtn');
        RegisterBtn.addEventListener("click", ()=>{
            window.location.href="rejestracja.php"
        
        });
        const ContactBtn=document.getElementById('ContactBtn');
        ContactBtn.addEventListener("click",()=>{
            window.location.href="kontakt.php"
        })
    </script>

    
</body>
</html>
