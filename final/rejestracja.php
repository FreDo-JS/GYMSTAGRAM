<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja - GYMSTAGRAM</title>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/clipboard.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/phone.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/eye.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/toggle-on.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-left.css' rel='stylesheet'>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            align-items: center;
            display: flex;
            justify-content: center;
            position: relative;
            background-color: #cbc8c8;
        }
        .main-container {
            border: 5px solid black;
            position: relative;
            z-index: 1;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            background-color: #333;
            margin-top: 50px;
            box-shadow: 10px 10px 5px #888888;

        }
    
        .submit:hover {
          
            transform: scale(1.1);
        }
        .background-image {
            position: absolute;
            top: -205px; /* Adjust the position as needed */
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: auto;
            opacity: 1;
            z-index: -1; /* Ensure the image is behind the container */
        }
        .registration-form {
            margin-top: 100px; /* Adjust the top margin as needed */
            display: grid;
            justify-content: center;
            text-align: center;
           
        }
        .registration-form input[type="text"],
        .registration-form input[type="email"],
        .registration-form input[type="password"] {
            width: 300px;
            padding: 10px;
            margin: 10px;
            border-radius: 14px;
            border: 1px solid #ccc;
            font-size: 16px;
            text-align: center;
            border: 5px solid black;
        }
        .registration-form input[type="submit"] {
            width: 200px;
            padding: 10px;
            margin: 20px;
            border-radius: 5px;
            border: none;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: -10px;
        }
        .navbar {
            display: flex;
            align-items: center;
            position: fixed;
            height: 70px;
            top: 0;
            width: 100%;
            background: #333;
            color: white;
            justify-content: space-between;
            padding: 0 40px;
            z-index: 1000;
            border-bottom:5px solid black;
        }
        .gymword {
            color: red;
            letter-spacing: 1.5px;
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
            padding-left: 50px;
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
        .navbarLow {
            position: fixed;
            height: 70px;
            bottom: 0;
            width: 100%;
            background: #333;
            color: white;
            padding: 15px 0;
            display: flex;
            justify-content: center;
            text-align: center;
            height: 40px;
            display: flex;
            border-top:5px solid black;
            align-items: center;
        }
        .navbarLow h3 {
            color: #9a9d9a;
            font-size: 12px;
        }
        #gymwordNav:hover{
            cursor: pointer;
        }
        #BackToHomePage:hover{
            cursor: pointer;
        }



        @media (max-width: 768px) {
            .navbar h1 {
                font-size: 28px;
            }
            .navbar a {
                font-size: 14px;
                padding-left: 15px;
            }
            .main-container {
                width: 100%;
                padding: 20px;
            }
            .main-container h1 {
                font-size: 20px;
            }
            .registration-form input[type="text"],
            .registration-form input[type="password"],
            .registration-form input[type="email"],

            .registration-form input[type="submit"]{
                font-size: 14px;
                padding: 10px;
            }
            .registration-form button {
                padding: 12px;
                font-size: 14px;
            }
            .registration-form .social-login img {
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
            .main-container {
                width: 95%;
                padding: 15px;
            }
            .registration-form h1 {
                font-size: 18px;
            }
            .registration-form input[type="text"],
            .registration-form input[type="password"],
            .registration-form input[type="email"],

            .registration-form input[type="submit"] {
                font-size: 12px;
                padding: 8px;
            }
            .registration-form button {
                padding: 10px;
                font-size: 12px;
            }
            .registration-form .social-login img {
                width: 25px;
                height: 25px;
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
            .main-container {
                width: 100%;
                padding: 15px;
            }
            .registration-form h1 {
                font-size: 15px;
            }
            .registration-form input[type="text"],
            .registration-form input[type="password"],
            .registration-form input[type="email"],
            .registration-form input[type="submit"]{
                font-size: 8px;
                padding: 5px;
            }
            .registration-form button {
                padding: 6px;
                font-size: 6px;
            }
            .registration-form .social-login img {
                width: 25px;
                height: 25px;
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
            .main-container {
                width: 75%;
                padding: 15px;
            }
            .registration-form h1 {
                font-size: 12px;
            }
            .registration-form input[type="text"],
            .registration-form input[type="password"],
            .registration-form input[type="email"],
            .registration-form input[type="submit"] {
                width: 75%;
                font-size: 8px;
                padding: 3px;
            }
            .registration-form button {
                padding: 3px;
                font-size: 6px;
            }
            .main-container .social-login img {
                width: 15px;
                height: 15px;
            }
        
        }

        .error{
            color:red;

        }

    </style>
</head>
<body>
    <div class="navbar">
        <h1 id="gymwordNav"><span class="gymword">GYM</span>stagram <img src="gyms.png"  class="logoNav" alt="logo" width="50px"></h1>
        <nav class="icons">
            <a href="startowa.php"><i class="gg-arrow-left" id="BackToHomePage"></i></a>
            <a href="#" id="aboutUsBtn"><i class="gg-eye"></i> O NAS</a>
            <a href="#" id="ContactBtn"><i class="gg-phone"></i> KONTAKT</a>
        </nav>
    </div>
    
    <div class="main-container">
        <img src="gyms.png" class="background-image" alt="background logo">
        <div class="registration-form">
            
            <form action="process_registration.php" method="POST" id="registration-form">
                <input type="text" name="username" placeholder="Nazwa użytkownika" id="username" required>
                <br>
                <p class='error'></p>
             
                
                <input type="email" name="email" placeholder="Adres email" id="email" required>
                <br>
                <input type="password" name="password" placeholder="Hasło" id="password" required>
                <br>
                <input type="password" name="confirm_password" placeholder="Potwierdź hasło" id="confirm_password" required>
                <br>
                <input type="submit" value="Zarejestruj się" class="submit">
            </form>
            <div class="error-message" id="error-message"></div>
        </div>
    </div>
    
    <div class="navbarLow">
        <h3>ALL RIGHTS RESERVED © GYMSTAGRAM 2024</h3>
    </div>

    <script>
        const form = document.getElementById('registration-form');
        const usernameInput = document.getElementById('username');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirm_password');
        const errorMessage = document.getElementById('error-message');
    
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
    
        function isValidPassword(password) {
            return password.length >= 6; 
        }
        
        function isValidUsername(username) {
            return username.length >= 3 && username.length < 16;
        }
    
        form.addEventListener('submit', function(event) {
            event.preventDefault();
    
            errorMessage.textContent = '';
    
            const usernameValue = usernameInput.value.trim();
            const emailValue = emailInput.value.trim();
            const passwordValue = passwordInput.value.trim();
            const confirmPasswordValue = confirmPasswordInput.value.trim();
    
            if (usernameValue === '' || emailValue === '' || passwordValue === '' || confirmPasswordValue === '') {
                errorMessage.textContent = 'Wypełnij wszystkie pola.';
                return;
            }
            if (!isValidUsername(usernameValue)) {
                errorMessage.textContent = 'Podaj nazwę użytkownika od 3 do 16 znaków.';
                return;
            }
            if (!isValidEmail(emailValue)) {
                errorMessage.textContent = 'Podaj poprawny adres email.';
                return;
            }
            if (!isValidPassword(passwordValue)) {
                errorMessage.textContent = 'Hasło musi mieć co najmniej 6 znaków.';
                return;
            }
            if (passwordValue !== confirmPasswordValue) {
                errorMessage.textContent = 'Podane hasła nie zgadzają się.';
                return;
            }

            // Submit the form if validation passes
            form.submit();
        });


        //ODNOSNIKI
    
        const aboutUsPage = document.getElementById('aboutUsBtn');
        aboutUsPage.addEventListener('click', () => {
            window.location.href = 'onas.php';
        });
        const gymwordNav=document.getElementById('gymwordNav');
            gymwordNav.addEventListener('click', () => {
            window.location.href = 'startowa.php';
        });

        const ContactBtn=document.getElementById('ContactBtn');
        ContactBtn.addEventListener("click",()=>{
            window.location.href="kontakt.php"
        });

    </script>
</body>
</html>
