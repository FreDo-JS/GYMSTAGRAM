<?php
// Dodaj konfigurację połączenia z bazą danych
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymstagram";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = 1; // Przykładowy user_id, zastąp go odpowiednią wartością
    $post_content = $_POST['post_content'];

    // Dodaj kod zabezpieczający przed SQL Injection
    $post_content = $conn->real_escape_string($post_content);

    $sql = "INSERT INTO posty (UżytkownikID, Treść) VALUES ('$user_id', '$post_content')";

    if ($conn->query($sql) === TRUE) {
        echo "New post created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
header("Location: glowna.php");
exit();
?>
