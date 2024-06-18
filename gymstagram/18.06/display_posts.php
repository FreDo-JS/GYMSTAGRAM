<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "wiktor";
$password = "root";
$dbname = "gymstagram";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected successfully<br>";
}

// Fetch posts and comments
$sql = "SELECT p.PostID, p.Treść as PostTreść, u.Imię, u.Nazwisko
        FROM Posty p
        JOIN Użytkownicy u ON p.UżytkownikID = u.UżytkownikID
        ORDER BY p.DataDodania DESC";
$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='post-item'>";
        echo "<h3>" . $row["Imię"] . " " . $row["Nazwisko"] . "</h3>";
        echo "<p>" . $row["PostTreść"] . "</p>";

        // Fetch comments for each post
        $postId = $row["PostID"];
        $commentSql = "SELECT c.Treść as KomentarzTreść, cu.Imię, cu.Nazwisko
                       FROM Komentarze c
                       JOIN Użytkownicy cu ON c.UżytkownikID = cu.UżytkownikID
                       WHERE c.PostID = $postId
                       ORDER BY c.DataDodania ASC";
        $commentResult = $conn->query($commentSql);

        if ($commentResult === false) {
            die("Error: " . $conn->error);
        }

        if ($commentResult->num_rows > 0) {
            echo "<div class='comment-list'>";
            while($commentRow = $commentResult->fetch_assoc()) {
                echo "<div class='comment-item'>";
                echo "<strong>" . $commentRow["Imię"] . " " . $commentRow["Nazwisko"] . ":</strong> ";
                echo "<span>" . $commentRow["KomentarzTreść"] . "</span>";
                echo "</div>";
            }
            echo "</div>";
        }

        echo "</div>";
    }
} else {
    echo "No posts found";
}
$conn->close();
?>
