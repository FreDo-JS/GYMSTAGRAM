<?php

    session_start();

    require_once "db_connect.php";

    $polaczenie = @new mysqli($servername, $username, $password, $dbname);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error".$polaczenie->connect_errno;
        exit();
    }
    else
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $sql="SELECT * FROM użytkownicy WHERE Login='$login' AND Hasło='$password'"; 

        if($rezultat = @$polaczenie->query($sql))
        {
            $no_user = $rezultat->num_rows;
            if($no_user>0){

                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['id'] = $wiersz['UżytkownikID'];
                $_SESSION['user'] = $wiersz['Imię'];

                unset($_SESSION['blad']);

                $rezultat->free_result();

                header('Location: glowna.php');
                
                exit();

            }else{
                $_SESSION['blad']='<span style ="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: startowa.php');
                }
        }

        $polaczenie->close();
    }



?>