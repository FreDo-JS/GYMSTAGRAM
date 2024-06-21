<?php

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['id'])) {
    die("Użytkownik nie jest zalogowany.");
}

// Połączenie z bazą danych
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymstagram";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pobranie identyfikatora użytkownika z sesji
$user_id = $_SESSION['id'];

// Pobranie listy znajomych
$sql = "SELECT u.UżytkownikID, u.Imię, u.Nazwisko
        FROM użytkownicy u
        JOIN znajomi z ON (z.UżytkownikID1 = u.UżytkownikID OR z.UżytkownikID2 = u.UżytkownikID)
        WHERE (z.UżytkownikID1 = ? OR z.UżytkownikID2 = ?)
          AND z.Status = 'zaakceptowane'
          AND u.UżytkownikID != ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $user_id, $user_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result === false) {
    die("Error: " . $conn->error);
}

// Przygotowanie danych do wyświetlenia
$friends = [];
while ($row = $result->fetch_assoc()) {
    $friends[] = $row;
}

$conn->close();
?>

<!-- Wyświetlanie znajomych na stronie głównej -->

<aside class="sidebar">
    <h2>Znajomi</h2>
    <div class="friends-list">
        <?php foreach ($friends as $friend): ?>
            <div class="friend">
                <span><?php echo htmlspecialchars($friend['Imię'] . ' ' . $friend['Nazwisko']); ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</aside>
