<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GYMstagram</title>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/clipboard.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/phone.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/eye.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/toggle-on.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-left-o.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-left.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    
    <style>
        body {
            background-color: #cbc8c8;            
            padding: 0;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .main-content {
            display: flex;
            width: 85%;
           
            margin-top: 80px;
            gap: 20px;
         
        }
        nav {
            
            height: 70px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            border-bottom:5px solid black;
        }
        .nav-left{
            margin-left:150px;
        }
        nav svg {
            fill: #fff;
        }
        .search-svg {
            fill: #fff;
        }
        nav a {
           
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }
        nav h1 {
            
            font-weight: bold;
            font-size: 34px;
            letter-spacing: 2px;
            margin-left: 3%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .GymWord{
             
            color: red;
            letter-spacing: 1.5px;
        
        }
        .search-box {
           
            display: flex;
            align-items: center;
        }
        .search-box input[type="text"] {
            width:200px;
            padding: 5px;
            border-radius: 20px 0 0 20px;
            border: 5px solid black;
            background-color: #f0f2f5;
        }
        .search-box .btn {
            
            background-color: #333;
            border:5px solid black;
            color: #fff;
            padding: 5px 10px;
            border: 5px solid black;
            border-radius: 0 20px 20px 0;
            cursor: pointer;
        }
        .search-box .btn:hover {
            background-color: green;
        }
        .dropbtn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: #fff;
            margin-right:170px;
        }
        .dropbtn:hover {
            color:red;
            transform:scale(1,1.5);
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            margin-right:40px;
            right: 0;
            border:5px solid black;
            border-radius:10px;
        }
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .show {
            display: block;
        }
        .nav-icons {
            display: none;
        }
        @media (max-width: 768px) {
            .search-box {
                display: none;
            }
            .nav-icons {
                display: flex;
                gap: 10px;
            }
            .search-box.show {
                display: flex;
                width: 100%;
                justify-content: center;
                margin-top: 10px;
            }
        }
        .sidebar, .rating-panel {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            border-color: #333;
            border:5px solid black;
            background-color: #333;
        }
        .rating-panel{
            width: 350px;
            background-color: #333;
        }
        .sidebar h2, .rating-panel h2{
            font-size: 28px;
            text-align:center;
            color:red;
            margin-bottom: 20px;
            
        }
        .friends-list, .gym-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
           
            
        }
       
        .friend, .gym-item {
            margin-top:15px;
            align-items: center;
            gap: 10px;

            
        }
        
        .friend img, .gym-item img { 
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        .friend span, .gym-item span {
            font-weight: 500;
            color: #333;

            
            
        }
        .friend span{
           
            margin:20px;
            color: white;
            font-size:21px;
           
            
        }
        .post-section {
            text-align:center;
            background-color: #fff;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            flex-grow: 1;
            margin:0 50px;
            border-left:5px solid black;
            border-right:5px solid black;
            background-color: #333;
           
        }
        .post-section h2{
            color:red;
            text-align:center;
        }
        .post-section form textarea {
           
            width: 90%;
            height: 200px;
            padding: 10px;
            margin: 10px 0;
            border: 4px solid black;
            border-radius: 15px;
           
        }
        .post-section .btn-post {
            background-color:green;
            color: black;
            float:right;
            margin-right:21px;
            border: none;
            padding: 13px 30px;
            border-radius: 5px;
            cursor: pointer;
            
        }
        .post-section .btn-post:hover {
            background-color:green;
            border:4px solid black;
            
        }
        .post-section h3{
            
            margin-top:90px;
            font-size:30px;
            color:red;
        }
        .post-item {
          
           
            background-color: #f0f2f5;
            border-radius: 5px;
            border: 4px solid black;
            border-radius: 15px;
            padding: 10px;
            margin-top:30px;
           
        }
        .post-item h3 {

            text-align:center;
            margin: 0 0 10px;
            font-size: 18px;
            
        }
        .post-item p {
            margin: 0 0 5px;
        }
        
        

/* Style dla siłowni */
.gym-item {
        border: 4px solid black;
        border-radius: 15px;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #fff;
        
        margin-top:10px;
    }

    .gym-item:last-child {
        margin-bottom: 0; /* Usunięcie marginesu na ostatnim elemencie */
    }

    .gym-item span {
        display: block;
        margin-bottom: 5px;
    }

    .gym-item form {
        margin-top: 10px;
    }

    .gym-item form label {
        margin-right: 10px;
    }

    .gym-item form select {
        padding: 5px;
    }

    .gym-item form button {
        background-color: #666;
        margin-left:10px;
        background-color:green;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
    }
    .gym-item form button:hover {
      border:3px solid black;
    }
    
    </style>
</head>
<body>
    <nav>
        <div class="nav-left">
            <h1><span class="GymWord">GYM</span>stagram<img src="gyms.png"  class="logoNavBar" alt="logo" width="50px "></h1>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Wyszukaj post lub uzytkownika...">
            <button class="btn">Wyszukaj</button>
        </div>
        <div class="nav-right">
            <button class="dropbtn" onclick="toggleDropdown()">☰</button>
            <div id="dropdown-content" class="dropdown-content">
                <a href="#">Profil</a>
                <a href="#">Ustwienia konta</a>
                <a href="wyloguj.php">Wyloguj</a>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <?php include 'znajomi.php'; ?>
        <div class="post-section">
            <form action="add_post.php" method="POST">
                <h2 class="new-posts">
                <?php
                echo "Witaj ".$_SESSION['user']."!";
                ?>
                </h2>
                <textarea name="post_content" placeholder="Dodaj post..." required>
                </textarea>
                <button type="submit" class="btn-post">DODAJ</button>
            </form>
            <h3 clas="nowe">Najnowsze posty</h3>
            <?php include 'display_posts.php'; ?>
        </div>
        <aside class="rating-panel">
        <h2>Oceń siłownie</h2>
        <div class="gym-list">
            <?php
            // Połączenie z bazą danych
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gymstagram";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Pobranie danych o siłowniach z bazy danych
            $sql = "SELECT id, nazwa, lokalizacja, ocena FROM siłownie";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='gym-item'>";
                    echo "<span><strong>Nazwa:</strong> " . $row["nazwa"] . "</span>";
                    echo "<span><strong>Lokalizacja:</strong> " . $row["lokalizacja"] . "</span>";
                    
                    // Dodanie sekcji oceny pod nazwą siłowni
                    echo "<div class='rating-section'>";
                    echo "<span><strong>Ocena:</strong> " . $row["ocena"] . "</span>";
                    echo "<form action='rate_gyms.php' method='POST'>";
                    echo "<input type='hidden' name='gym_id' value='" . $row["id"] . "'>";
                    echo "<label for='rating'>Oceń:</label>";
                    echo "<select name='rating' id='rating'>";
                    echo "<option value='1'>1</option>";
                    echo "<option value='2'>2</option>";
                    echo "<option value='3'>3</option>";
                    echo "<option value='4'>4</option>";
                    echo "<option value='5'>5</option>";
                    echo "</select>";
                    echo "<button type='submit'>Oceń</button>";
                    echo "</form>";
                    echo "</div>"; // Koniec rating-section
                    echo "</div>"; // Koniec gym-item
                }
            } else {
                echo "Brak wyników";
            }
            $conn->close();
            ?>
        </div>
    </aside>
</div>
    </div>
    </div>
    <script>
        function toggleDropdown() {
            document.getElementById("dropdown-content").classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        function submitRating(gymId, rating) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "rate_gyms.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            xhr.send("gym_id=" + gymId + "&rating=" + rating);
        }

        document.querySelectorAll('.gym-item form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const gymId = this.querySelector('input[name="gym_id"]').value;
                const rating = this.querySelector('select[name="rating"]').value;
                submitRating(gymId, rating);
            });
        });
    </script>

</body>
</html>
