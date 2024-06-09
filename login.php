//<?php
// session_start();

// include"db_conn.php";

// if(isset($_POST['user']) && isset($_POST['password'])){

// function validate($data)
// {
//     $data = trim($data);
//     $data = stripcslashes($data);
//     $data = htmlspecialchars($data);
//     return data;

// }
// }

// $uname = validate($_POST['user']);
// $pass = validate($_POST['password']);

// if(empty($uname))
// {
//     header("Location: index.php")
//     exit;
// }else if(empty($pass))
// {
//     header("Location: index.php")
//     exit;
// }

// $sql = "SELECT * FROM użytkownicy WHERE Login = '$uname' AND Hasło = $pass;  ";

// $result = pg_query($conn, $sql)

// if(pg_num_rows($result) === 1)
// {
//     $row = pg_fetch_assoc($result);
//     if($row['Login'] === $uname && $row['Hasło' === '$pass']){
//     echo "Logged in!";
//     $_SESSION['Login'] = $row['Login'];
//     $_SESSION['name'] = $row['name'];
//     $_SESSION['id'] = $row['id'];
//     header("Location: index.php")
//     exit();

//     }
//     else{
//         header('Incorecct password or username');
//         exit();
//     }
//     else
//     {
//         header("Location: index.php");
//         exit();

//     }

// }




session_start();

include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=emptyusername");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=emptypassword");
        exit();
    }

    // Zapytanie SQL w celu uniknięcia SQL Injection
    $sql = "SELECT * FROM użytkownicy WHERE Login = ? AND Hasło = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if ($row['Login'] === $uname && $row['Hasło'] === $pass) {
            $_SESSION['Login'] = $row['Login'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: glowna.php");
            exit();
        } else {
            header("Location: index.php?error=invalidcredentials");
            exit();
        }
    } else {
        header("Location: index.php?error=invalidcredentials");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>


