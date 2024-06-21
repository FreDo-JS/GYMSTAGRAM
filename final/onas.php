<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/clipboard.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/phone.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/eye.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/toggle-on.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-left-o.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-left.css' rel='stylesheet'>
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100%;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
        .logoNav{
            margin-left: 0;
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

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            padding: 20px;
        }

        .grid {
            padding: 80px;
        }

        .grid.image {
            opacity: 0;
            transform: translateY(100px);
            transition: opacity 0.9s ease-out, transform 2s ease-out;
        }

        .grid.image.visible {
            opacity: 1;
            transform: translateY(0);
            margin-top: 0;
            padding-top: 10px;
        }

        .text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: justify;
            font-size: 25px;
            align-items: center;
            margin-top: 0;
           
        }
        .text h2 {
            font-size: 40px;
            padding-bottom: 30px;
            background-color: red;
            border: 5px solid black;
            border-radius: 10px;
            color: white;
        }
        .text p {
            padding: 50px;
            margin: 0;
            background-color: rgb(255, 255, 255);
            border: 5px solid black;
            border-radius: 10px;
            box-shadow: 10px 10px 5px #888888;
            background: #8f8e8e;
            color: white;
        }
      
        .image img {
            width: 100%;
            height: 100%;
            border-radius: 20px;
        }
        .image img:hover{
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
        }

        .form {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            gap: 20px;
        }

        .form .contact {
            flex: 1;
        }

        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
        }

        textarea {
            resize: none;
        }

        .left {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
        }

        .button {
            width: 150px;
            height: 30px;
            border-radius: 15px;
            text-align: center;
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
        .navbarLow h3 {
            color: #9a9d9a;
            font-size: 12px;
        }
        #gymwordNav:hover{
            cursor: pointer;
        }
       
    </style>
</head>
<body>
    <div class="navbar">
       <h1 id="gymwordNav"><span class="gymword">GYM</span>stagram <img src="gyms.png"  class="logoNav" alt="logo" width="50px "></h1>
        
        
        <nav class="icons">
            <a href="startowa.php"><i class="gg-arrow-left" id="BackToHomePage"></i></a>
            <a href="#" id="RegisterBtn"><i class="gg-clipboard" ></i> REJESTRACJA</a> 
            <a href="#" id="ContactBtn"><i class="gg-phone"  ></i> KONTAKT</a>
        </nav>
    </div>

    <main>
        <div class="container">
            <div class="text grid">
                <h2>Kim Jesteśmy?</h2>
                <p>
                    Gymstagram to innowacyjna platforma społecznościowa stworzona z
                    myślą o miłośnikach fitnessu i aktywnego trybu życia. Naszym celem
                    jest zapewnienie użytkownikom przestrzeni, gdzie mogą dzielić się
                    swoimi osiągnięciami, zdobywać inspiracje oraz wspierać się nawzajem
                    w dążeniu do lepszej formy i zdrowia. Wierzymy, że wspólnie możemy
                    zmieniać życie na lepsze, motywując się nawzajem każdego dnia.
                </p>
            </div>
            <div class="image grid">
                <img src="gyms.png" class="photo1" alt="logo">
            </div>
            <div class="image grid">
                <img src="photo2.webp" class="photo2" alt="">
            </div>
            <div class="text grid second">
                <h2>Funkcje Społecznościowe</h2>
                <p>
                    Gymstagram oferuje szerokie możliwości interakcji społecznej.
                    Użytkownicy mogą tworzyć i udostępniać posty, które dokumentują ich
                    postępy, ulubione ćwiczenia czy zdrowe przepisy. Platforma umożliwia
                    także komentowanie i polubienia postów, co sprzyja budowaniu
                    społeczności i wzajemnym relacjom. Dzięki naszym funkcjom
                    społecznościowym każdy użytkownik może czuć się częścią motywującej
                    i inspirującej społeczności.
                </p>
            </div>
            <div class="text grid">
                <h2>Komunikacja i wsparcie</h2>
                <p>
                    Nasz chat umożliwia użytkownikom bezpośrednią komunikację z innymi
                    entuzjastami fitnessu. Dzięki niemu możesz szybko wymieniać się
                    doświadczeniami, radami oraz ustalać wspólne treningi. Chat w
                    Gymstagram pozwala na tworzenie grup tematycznych, co sprawia, że
                    łatwiej jest znaleźć osoby o podobnych zainteresowaniach i celach
                    treningowych. To doskonałe miejsce do dzielenia się wiedzą i
                    motywacją.
                </p>
            </div>
            <div class="image grid">
                <img src="photo3.webp" class="photo3" alt="">
            </div>
            <div class="image grid">
                <img src="photo4.webp" class="photo4" alt="">
            </div>
            <div class="text grid second">
                <h2>Oceny i Recenzje Siłowni</h2>
                <p>
                    Jedną z unikalnych funkcji Gymstagram jest możliwość oceniania i
                    recenzowania siłowni. Użytkownicy mogą dzielić się swoimi opiniami
                    na temat różnych obiektów fitness, co pomaga innym w wyborze
                    najlepszego miejsca do treningów. Dzięki tej funkcji, nasza
                    aplikacja staje się nie tylko platformą społecznościową, ale również
                    cennym źródłem informacji o jakości usług fitness oferowanych w
                    różnych lokalizacjach.
                </p>
            </div>
        </div>


        <div class="navbarLow">
            <h3>ALL RIGHTS RESERVED © GYMSTAGRAM 2024</h3>
        </div>
    </main>

    <script>
      




        document.addEventListener('DOMContentLoaded', function() {
            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            const elements = document.querySelectorAll('.image.grid');
            elements.forEach(element => {
                observer.observe(element);
            });
        });


          //ODNOSNIKI
          const gymwordNav=document.getElementById('gymwordNav');
            gymwordNav.addEventListener('click', () => {
            window.location.href = 'startowa.php';
        });

        const RegisterBtn=document.getElementById('RegisterBtn');
        RegisterBtn.addEventListener("click", ()=>{
            window.location.href="rejestracja.php"
        
        });

        const ContactBtn=document.getElementById('ContactBtn');
        ContactBtn.addEventListener('click', () => {
            window.location.href = 'kontakt.php';
        });
    </script>
</body>
</html>
