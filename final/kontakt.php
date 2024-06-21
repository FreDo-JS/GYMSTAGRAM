<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/clipboard.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/phone.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-left-o.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/eye.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/toggle-on.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-left.css' rel='stylesheet'>
    <title>Contact - GYMSTAGRAM</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #cbc8c8;
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
        .container {
            display: flex;
            width: 100%;
            height: 70%;
            border: 5px solid black;
            
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 10px 10px 5px #888888;
        }
        .contact-section {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }
        .contact-section h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            padding-top: 50px;
        }
        .contact-section form {
            display: flex;
            flex-direction: column;
        }
        .contact-section form input, 
        .contact-section form textarea {
            margin-bottom: 10px;
            padding: 10px;
            border: 2px solid #000000;
            border-radius: 14px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
           

        }
        .contact-section form textarea {
            height: 100px;
            resize: none;
            text-align: center;

        }
        .contact-section form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;

        }
        .contact-section form input[type="submit"]:hover {
            background-color: #45a049;
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
            align-items: center;
            border-top:5px solid black;
        }
        .contact{
            margin-right: 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .navbarLow h3 {
            color: #9a9d9a;
            font-size: 12px;
        }
        .h2user{
            color: red;
           padding-bottom: 28px;
        }
        .h2business{
            color: rgb(255, 255, 255);
        }
        .logo
        {
            width: 250px;
            position: absolute;
            top: 15px;
        }
        #gymwordNav:hover{
            cursor: pointer;
        }
       
    </style>
</head>
<body>
    <div class="navbar">
        <h1 id="gymwordNav"><span class="gymword">GYM</span>stagram <img src="gyms.png"  class="logoNav" alt="logo" width="50px"></h1>
        <nav class="icons">
            <a href="startowa.php"><i class="gg-arrow-left" id="BackToHomePage"></i></a>
            <a href="rejestracja.php" id="RegisterBtn"><i class="gg-clipboard" ></i> REJESTRACJA</a> 
            <a href="#" id="aboutUsBtn"><i class="gg-eye"></i> O NAS</a>
        </nav>
    </div>
    <img src="gyms.png" alt="GYMstagram Logo" class="logo">

    <div class="container">

        <div class="contact-section" style="background-color: #333;">
            <h2 class="h2user">Kontakt dla użytkowników</h2>
            <form action="user_contact_process.php" method="POST">
                <input type="text" name="username" placeholder="Nazwa użytkownika" required>
                <input type="email" name="email" placeholder="Adres email" required>
                <input type="text" name="subject" placeholder="Tytuł pytania" required>
                <textarea name="question" placeholder="Treść pytania" required></textarea>
                <input type="submit" value="Wyślij">
            </form>
        </div>
        <div class="contact-section" style="background-color:#433e3e;">
            <h2 class="h2business">Kontakt biznesowy dla partnerów</h2>
            <form action="business_contact_process.php" method="POST">
                <input type="text" name="first_name" placeholder="Imię" required>
                <input type="text" name="last_name" placeholder="Nazwisko" required>
                <input type="text" name="company" placeholder="Firma(opcjonalnie)" >
                <input type="text" name="address" placeholder="Adres(opcjonalnie)">
                <input type="email" name="email" placeholder="Adres email" required>
                <input type="text" name="subject" placeholder="Tytuł pytania" required>
                <textarea name="message" placeholder="Treść wiadomości" required></textarea>
                <input type="submit" value="Wyślij" >
            </form>
        </div>
    </div>
        <div class="contact">
            
        </div>
    <div class="navbarLow">
        <h3>ALL RIGHTS RESERVED © GYMSTAGRAM 2024</h3>
    </div>
</body>
</html>

<script>
    //ODNOSNIKI
     const aboutUsPage = document.getElementById('aboutUsBtn');
        aboutUsPage.addEventListener('click', () => {
            window.location.href = 'onas.php';
        });
        const gymwordNav=document.getElementById('gymwordNav');
            gymwordNav.addEventListener('click', () => {
            window.location.href = 'startowa.php';
        });
</script>
