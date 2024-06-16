<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witamy na GYMstagramie!</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
            font-family:'Courier New', Courier, monospace;
        }
        body {
            display: flex;
            flex-direction: column;
          
            background-image: linear-gradient(to right, #dfd8d8, #5f5654);
            position: relative; /* relatywne do całej strony */
            
            
            
        }
        .margin-left,
        .margin-right {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 15%; /* Szerokość marginesu */
            background-color: rgb(32, 30, 30); 
            
        }
        .margin-left {
            left: 0; 
        }
        .margin-right {
            right: 0; 
        }
        
        .top-bar {
            height: 55px;
            background-color: rgb(0, 0, 0);
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 1px;
            padding-left: 25%; 
            padding-right: 25%; 
        }
       
        .button {
            height: 25px;
            line-height: 0;
            margin: 5px;
            padding: 8px 16px;
            background-color: #ff0000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover{
            color: black;
        }
        .register-div{
            display: flex;
            align-items: center;
            
        }
        .plog{
            padding: 10px;
        }
        .register-button {
            background-color: #ff0000;
            margin-left: 15px;
            height: 25px;
            padding: 8px 16px;
            line-height: 0;
        }

        .sidepages{
            padding: 10px;
        }

        .main-container {
            margin-top: 30px;
            flex: 1; /* Wypełnienie pozostałej przestrzeni */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 50px; /* Dodatkowy odstęp na dole */
        }
        .sign{
            text-align: center;
        }

        .mainWord {
            margin-bottom: 40px;
            letter-spacing: 6px;
            font-size: 90px;
            text-shadow: 1px 1px 3px rgba(1, 1, 1, 2);
            /*transform: perspective(100px) rotateX(10deg); */
            position: relative;
            perspective: 500px; /* Ustawienie perspektywy */
        }
        .gymWord {
            font-size: 100px;
            color: red;
            letter-spacing: 7px;
            display: inline-block;
            transform-origin: center bottom;
            
        }
        .biceps-gif {
            width: 250px;
            height: auto; 
        }
        .login-div{
            margin-top: 35px;
            display: grid;
        }
        .user, .password{
            margin: 7px;
            text-align: center;
            width: 450px;
            height: 40px;
            border: 5px solid black;
            border-radius: 20px;
            font-weight: bolder;
            font-size: 20px;
        }
        .Log-button{
            height: 40px;
            line-height: 0;
            margin-top: 85px;
            padding: 8px 16px;
            background-color: #ff0000;
            
            color: white;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
        }
        .Log-button:hover{
            border:5px solid black;
            cursor: pointer;
            color: black;
            font-weight: 700;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }
        .error-message{
            margin-bottom: 10px;
            margin-top: 15px;
            text-transform:uppercase;
            color:#ff0000;
            font-weight: 700;
        }
        .video{
           /* display: none; */
        }
        .animatedText{
            color: rgb(92, 84, 84);
            font-size: 22px;
            width: 500px;
            text-align: center;
        }
     

.letter {
    opacity: 0;
    animation: fadeIn 0.5s forwards;
}
    </style>
</head>
<div id="loadingScreen" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: black; z-index: 100;">
        <video autoplay muted loop id="loadingVideo" class="video" style="width: 100%; height: 100%; object-fit: cover;">
            <source src="logovideo.mp4" type="video/mp4">
        </video>
    </div>
    <div class="margin-left"></div>
    <div class="margin-right"></div>
    <div class="top-bar">
        <div class="register-div">
            <p class="plog">NIE MASZ JESZCZE KONTA?</p>
            <button class="button register-button" id="register-button">REJESTRACJA</button>
        </div>
        <div class="sidepages">
            <button class="button" id="aboutUsBtn">O NAS</button>
            <button class="button">KONTAKT</button>
        </div>
    </div>
    <div class="main-container">
        <h1 class="mainWord">
            <span class="gymWord">GYM</span>STAGRAM
        </h1>
        <h1 id="animatedText" class="animatedText"></h1>
        <form action="login.php" method="post">
            <div class="login-div">
                <input type="text" name="username" placeholder="login" class="user" id="username">
                <input type="password" name="password" placeholder="hasło" class="password" id="password">
                <button type="submit" class="Log-button" id="LogIn">ZALOGUJ</button>
            </div>
            <div class="error-message" id="error-message">
                <?php
                if (isset($_GET['error'])) {
                    echo htmlspecialchars($_GET['error']);
                }
                ?>
            </div>
        </form>
        </div>
    </div>  
    <div class="top-bar" id="low-bar"> ALL RIGHTS RESERVED © GYMSTAGRAM 2024</div>
    
</body>


<script>
    //////////////////////////////////////////////////////////////////////
    const usernameInput = document.getElementById('username'); //dane pod walidacje
    const passwordInput = document.getElementById('password');
    const errorMessage = document.getElementById('error-message'); 


    function isValidUsername(username){
        const usernameRegex = /^[a-zA-Z0-9_-]{3,16}$/;
        return usernameRegex.test(username);
    }
    function isValidPassword(password){
        return password.length>=6;
    }
        const LogIn=document.getElementById('LogIn');
    LogIn.addEventListener("click",()=>{

        errorMessage.textContent=' ';

        const usernameValue=usernameInput.value.trim();
        const passwrodValue=passwordInput.value.trim();

        if(usernameValue==='' || passwrodValue==='')
        {
            errorMessage.textContent="Wypełnij wszystkie pola"
            return;
        }

        if(!isValidUsername(usernameValue)){
            errorMessage.textContent="Nazwa uzytkownika powinna zawierać od 3 do 16 znaków"
            return;
        }
        if(!isValidPassword(passwrodValue)){
            errorMessage.textContent="Hasło musi zawierać minimum 6 znaków"
            return;
        }
    });


    ////////////////////////////////////////////////////////////////////////
    const aboutUsPage=document.getElementById('aboutUsBtn'); //odnosniki do podstron
    
    aboutUsPage.addEventListener('click',()=>{
        window.location.href = 'onas.html';
    })
    const RegistationButton=document.getElementById('register-button');
    RegistationButton.addEventListener('click',()=>{
        window.location.href='rejestracja.html'
    })
    ////////////////////////////////////////////////////////////////////

    //ekran ladowania skrypt 
    document.addEventListener("DOMContentLoaded", function() {
    var loadingScreen = document.getElementById('loadingScreen');
    var loadingVideo = document.getElementById('loadingVideo');

    loadingScreen.style.display = 'block'; 

    loadingVideo.addEventListener('ended', function() {
        loadingScreen.style.display = 'none'; 
    });

    setTimeout(function() { 
        loadingScreen.style.display = 'none';
    }, 2700);  //wartosc domyslna 2700
});

///////////////////////////////////////////////////////////////////////////////

const text = ' Kształtuj siłę, dziel się pasją!';
    const container = document.getElementById('animatedText'); 

    let index = 0;
    function addLetter() {
        if (index < text.length) {
            const letter = document.createElement('span'); 
            letter.textContent = text[index++]; 
            container.appendChild(letter); // Dodaj span do kontenera
        } else {
            clearInterval(timer); // Zatrzymaj timer, gdy cały tekst zostanie wyświetlony
        }
    }
    
    setTimeout(function() {
        timer = setInterval(addLetter, 200); 
    }, 3500); // Opóźnienie 5 sekund

</script>

</html>
