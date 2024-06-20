<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymstagram";

// Utworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}

// Sprawdzenie czy to jest żądanie POST i sanitizacja danych
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gym_id = intval($_POST["gym_id"]); // Zakładając, że gym_id jest liczbą całkowitą
    $rating = floatval($_POST["rating"]); // Zakładając, że rating jest liczbą zmiennoprzecinkową

    // Aktualizacja oceny w bazie danych
    $sql = "UPDATE siłownie SET ocena = ((ocena * glosy) + $rating) / (glosy + 1), glosy = glosy + 1 WHERE id = $gym_id";

    if ($conn->query($sql) === TRUE) {
        $response = array('status' => 'success', 'message' => 'Ocena została zaktualizowana pomyślnie');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Błąd podczas aktualizacji oceny: ' . $conn->error);
        echo json_encode($response);
    }
}

$conn->close();
?>
