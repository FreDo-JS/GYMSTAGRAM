<?php

session_start();

// Dodaj konfigurację połączenia z bazą danych
require_once "db_connect.php";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['id'])) {
    die("Użytkownik nie jest zalogowany.");
}

// Pobranie identyfikatora użytkownika z sesji
$user_id = $_SESSION['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_content = $_POST['post_content'];

    // Dodaj kod zabezpieczający przed SQL Injection
    $post_content = $conn->real_escape_string($post_content);

    $sql = "INSERT INTO posty (UżytkownikID, Treść, DataDodania) VALUES ('$user_id', '$post_content', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "New post created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Przekierowanie po dodaniu postu
    header("Location: glowna.php");
    exit();
}

$conn->close();
?>
