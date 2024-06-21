<?php

require_once "db_connect.php";

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['id'])) {
    die("Użytkownik nie jest zalogowany.");
}

// Pobranie identyfikatora użytkownika z sesji
$userId = $_SESSION['id'];

// Utworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pobranie postów znajomych użytkownika oraz postów samego użytkownika
$postsSql = "SELECT p.PostID, p.Treść as PostTreść, u.Imię, u.Nazwisko, p.DataDodania
             FROM posty p
             JOIN użytkownicy u ON p.UżytkownikID = u.UżytkownikID
             LEFT JOIN znajomi z ON (z.UżytkownikID1 = ? AND z.UżytkownikID2 = p.UżytkownikID AND z.Status = 'zaakceptowane')
                OR (z.UżytkownikID2 = ? AND z.UżytkownikID1 = p.UżytkownikID AND z.Status = 'zaakceptowane')
             WHERE p.UżytkownikID = ? OR z.Status = 'zaakceptowane'
             ORDER BY p.DataDodania DESC";
$stmt = $conn->prepare($postsSql);
$stmt->bind_param("iii", $userId, $userId, $userId);
$stmt->execute();
$postsResult = $stmt->get_result();

if ($postsResult === false) {
    die("Error: " . $conn->error);
}

if ($postsResult->num_rows > 0) {
    // Wyświetlenie danych każdego wiersza
    while ($row = $postsResult->fetch_assoc()) {
        echo "<div class='post-item'>";
        echo "<h3>" . htmlspecialchars($row["Imię"]) . " " . htmlspecialchars($row["Nazwisko"]) . "</h3>";
        echo "<p>" . htmlspecialchars($row["PostTreść"]) . "</p>";

        // Pobranie komentarzy do każdego posta
        $postId = $row["PostID"];
        $commentSql = "SELECT c.Treść as KomentarzTreść, cu.Imię, cu.Nazwisko
                       FROM komentarze c
                       JOIN użytkownicy cu ON c.UżytkownikID = cu.UżytkownikID
                       WHERE c.PostID = ?
                       ORDER BY c.DataDodania ASC";
        $commentStmt = $conn->prepare($commentSql);
        $commentStmt->bind_param("i", $postId);
        $commentStmt->execute();
        $commentResult = $commentStmt->get_result();

        if ($commentResult === false) {
            die("Error: " . $conn->error);
        }

        if ($commentResult->num_rows > 0) {
            echo "<div class='comment-list'>";
            while ($commentRow = $commentResult->fetch_assoc()) {
                echo "<div class='comment-item'>";
                echo "<strong>" . htmlspecialchars($commentRow["Imię"]) . " " . htmlspecialchars($commentRow["Nazwisko"]) . ":</strong> ";
                echo "<span>" . htmlspecialchars($commentRow["KomentarzTreść"]) . "</span>";
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
