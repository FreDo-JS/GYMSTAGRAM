<?php
    

    if($_SERVER["REQUEST_METHOD"] == 'POST')
            {
                $login = $_POST['login'];
                $password = $_POST['password'];
            }


    $logInput = 'Proszę podać login';
    $logInputPass = 'Proszę podać hasło';

    $conn = mysqli_connect("localhost", "root", "","gymstagram");

    if(isset($_POST['logButton']))
    {
        if(empty($login))
        {
            echo "$logInput";

        }elseif(empty($password))
        {
            echo "$logInputPass";

        }else
        {
            

            $sql = "SELECT * FROM użytkownicy WHERE login = ? ";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $login);
            $stmt->execute();
            $result = $stmt->get_result();
        
            
        

            // if(mysqli_num_rows($result) > 0)
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $db_password = $row['Hasło'];
        
                if (password_verify($password,$db_password) || ($password == $db_password)) {
                   
                    header('Location: glowna.php');
                } else {
                    
                    echo "Błędne hasło";
                    header('Location: startowa.php');

                }
            } else {
               
                echo "Użytkownik nie istnieje";
                header('Location: startowa.php');

            }
        }
  
    }
mysqli_close($conn);

      ?>

 