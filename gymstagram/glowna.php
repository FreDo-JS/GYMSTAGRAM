<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GYMstagram</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav>
      <span>GYMstagram</span>
      <form class="search-box">
        <input type="text" placeholder="Szukaj..." />
        <button type="submit" class="btn">
          <svg class="search-svg" xmlns="http://www.w3.org/2000/svg" width="13" height="14" fill="#000000" viewBox="0 0 256 256">
            <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
          </svg>
        </button>
      </form>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
          <path d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H48V120l80-80,80,80Z"></path>
        </svg>
      </a>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
          <path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path>
        </svg>    
      </a>
      <div class="dropdown">
        <button class="dropbtn">&#9776;</button>
            <div class="dropdown-content">
                <a href="#">Opcja 1</a>
                <a href="#">Opcja 2</a>
                <a href="startowa.html">Wyloguj</a>
            </div>
        </div>
    </nav>
    <div class="main-content">
      <div class="post-section">
        <textarea placeholder="Nowy post..."></textarea>
        <button type="button" class="btn-post">Dodaj</button>
        <div class="post-list">
          <?php include 'display_posts.php'; ?>
        </div>
      </div>
    </div>
</body>
</html>

