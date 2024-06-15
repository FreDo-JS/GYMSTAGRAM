<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GYMstagram</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <style>
        body {
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .main-content {
            display: flex;
            width: 90%;
            max-width: 1200px;
            margin-top: 80px;
            gap: 20px;
        }
        nav {
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
        nav span.logo {
            font-weight: bold;
        }
        .search-box {
            display: flex;
            align-items: center;
        }
        .search-box input[type="text"] {
            padding: 5px;
            border-radius: 20px 0 0 20px;
            border: none;
            background-color: #f0f2f5;
        }
        .search-box .btn {
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 0 20px 20px 0;
            cursor: pointer;
        }
        .dropbtn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: #fff;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            top: 50px;
            right: 0;
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
        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            border-color: #333;
        }
        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }
        .friends-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .friend {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .friend img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        .friend span {
            font-weight: 500;
            color: #333;
        }
        .post-section {
            background-color: #fff;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            flex-grow: 1;
        }
        .post-section textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .post-section .btn-post {
            background-color: #666;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .post-list {
            margin-top: 20px;
        }
        .post-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }
        .post-item h3 {
            margin: 0;
            font-size: 14px;
        }
        .post-item p {
            margin-top: 10px;
            font-size: 12px;
        }
        .comment-list {
            margin-top: 10px;
            padding-left: 20px;
        }
        .comment-item {
            border-bottom: 1px solid #eee;
            padding: 5px 0;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <nav>
        <span class="logo">GYMstagram</span>
        <div class="nav-icons">
            <button class="search-btn">
                <svg class="search-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                    <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                </svg>
            </button>
            <button class="dropbtn">&#9776;</button>
        </div>
        <form class="search-box">
            <input type="text" placeholder="Szukaj..." />
            <button type="submit" class="btn">
                <svg class="search-svg" xmlns="http://www.w3.org/2000/svg" width="13" height="14" fill="#000000" viewBox="0 0 256 256">
                    <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                </svg>
            </button>
        </form>
        <div class="dropdown">
            <div class="dropdown-content">
                <a href="#">Opcja 1</a>
                <a href="#">Opcja 2</a>
                <a href="login_page.php">Wyloguj</a>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <div class="sidebar">
            <h2>Znajomi</h2>
            <div class="friends-list">
                <div class="friend">
                    <img src="friend1.jpg" alt="Friend 1">
                    <span>Friend 1</span>
                </div>
                <div class="friend">
                    <img src="friend2.jpg" alt="Friend 2">
                    <span>Friend 2</span>
                </div>
            </div>
        </div>
        <div class="post-section">
            <textarea placeholder="Nowy post..."></textarea>
            <button type="button" class="btn-post">Dodaj</button>
            <div class="post-list">
                <?php include 'display_posts.php'; ?>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.dropbtn').addEventListener('click', function() {
            document.querySelector('.dropdown-content').classList.toggle('show');
        });

        document.querySelector('.search-btn').addEventListener('click', function() {
            document.querySelector('.search-box').classList.toggle('show');
        });
    </script>
</body>
</html>
