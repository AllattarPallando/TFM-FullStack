<?php 
    /*********************************
              DB CONNECTION
    **********************************/
    $DBServer = "localhost"; 
    $DBName = "frontend";
    $DBUser = "root"; 
    $DBPass = "";
    $DBTable = "users";
    $DBConnect = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName); 

    /******************* CHECK CONNECTION *******************/
    if ($DBConnect->connect_error) {
        die("Connection failed: " . $DBConnect->connect_error);
    }

    /*********************************
                DB CONSULT    
    **********************************/
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userEmailR = $_POST['userEmailR'];
    $userPassword = $_POST['userPassword'];
    $userPasswordR = $_POST['userPasswordR'];    

    if($userName == '' or $userEmail == '' or $userEmailR == '' or $userPassword == '' or $userPasswordR == ''){
        echo 'Por favor rellene todos los campos';
    } else{
        if (filter_has_var(INPUT_POST,'dataProtectionCheckbox')){
            if($userEmail == $userEmailR){
                if ($userPassword == $userPasswordR){
                    $DBConsult = "SELECT user_email FROM $DBTable";
                    $DBUsers = mysqli_fetch_all(mysqli_query($DBConnect, $DBConsult));
                    if($DBUsers){
                        for($i = 0; $i < count($DBUsers[0]); $i++){
                            if($userEmail == $DBUsers[0][$i]){
                                echo 'Ese correo electrónico ya existe en la base de datos';                            
                            } else{
                                $passHash = password_hash($userPassword, PASSWORD_BCRYPT);
                                $DBInsert = "INSERT INTO $DBTable (user_name, user_email, user_password) VALUES ('$userName', '$userEmail', '$passHash')";
                                $DBQuery = mysqli_query($DBConnect, $DBInsert);
                                header("Status: 301 Moved Permanently");
                                header("Location: http://localhost/TFM-FullStack-2/frontend/views/profile.php");                                
                            }                            
                        } 
                    } else {
                        $passHash = password_hash($userPassword, PASSWORD_BCRYPT);
                        $DBInsert = "INSERT INTO $DBTable (user_name, user_email, user_password) VALUES ('$userName', '$userEmail', '$passHash')";
                        $DBQuery = mysqli_query($DBConnect, $DBInsert);
                        header("Status: 301 Moved Permanently");
                        header("Location: http://localhost/TFM-FullStack-2/frontend/views/profile.php"); 
                    }

                } else{
                    echo 'Las contraseñas no coinciden';
                }
            } else{
                echo 'Los correos no coinciden';
            }
        } 
        else{
            echo 'Debes aceptar las condiciones de uso';
        }        
    }
    