<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $errors = [];

    // Walidacja danych
    if (strlen($username) < 3 || strlen($username) > 16) {
        $errors['username'] = 'Nazwa użytkownika musi mieć od 3 do 16 znaków.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Podaj poprawny adres email.';
    }

    if (strlen($password) < 6) {
        $errors['password'] = 'Hasło musi mieć co najmniej 6 znaków.';
    }

    if ($password !== $confirm_password) {
        $errors['confirm_password'] = 'Podane hasła nie zgadzają się.';
    }

    // Jeśli są błędy, zapisz je w sesji i przekieruj z powrotem do formularza
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: registration_form.php');
        exit();
    }

    // Hashowanie hasła
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Przykładowe zapytanie SQL do dodania użytkownika do bazy danych
    // @TODO: Zastąp poniższe dane swoimi ustawieniami bazy danych
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'gymstagram';

    // Połączenie z bazą danych
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die('Błąd połączenia z bazą danych: ' . $conn->connect_error);
    }

    // Sprawdzenie, czy użytkownik już istnieje
    $stmt = $conn->prepare('SELECT UżytkownikID FROM użytkownicy WHERE Login = ? OR Email = ?');
    $stmt->bind_param('ss', $username, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['errors']['username'] = 'Użytkownik o tej nazwie lub adresie email już istnieje.';
        header('Location: registration_form.php');
        exit();
    }

    // Wstawienie nowego użytkownika do bazy danych
    $stmt = $conn->prepare('INSERT INTO użytkownicy (Login, Email, Hasło) VALUES (?, ?, ?)');
    $stmt->bind_param('sss', $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo 'Rejestracja zakończona sukcesem. Możesz się teraz zalogować.';
        header('Location: startowa.html');
    } else {
        echo 'Błąd rejestracji: ' . $conn->error;
        
    }

    $stmt->close();
    $conn->close();
}
?>
