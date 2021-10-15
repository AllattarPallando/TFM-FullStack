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
$user = $_POST['email'];
$password = $_POST['newPassword'];
$passwordR = $_POST['newPasswordR'];

if ($user == '' or $password == '' or $passwordR == '') {
    echo 'Por favor rellene todos los campos';
} else {
    $DBConsult = "SELECT user_email FROM $DBTable";
    $DBUsers = mysqli_fetch_row(mysqli_query($DBConnect, $DBConsult));
    for ($i = 0; $i < count($DBUsers); $i++) {
        $DBUserData = $DBUsers[$i];
        if ($user == $DBUserData) {
                        
            if($password == $passwordR){
                $passHash = password_hash($password, PASSWORD_BCRYPT);
                $DBUpdate = "UPDATE $DBTable SET user_password='$passHash' WHERE user_email='$user'";
                if (mysqli_query($DBConnect, $DBUpdate)){
                    header("Status: 301 Moved Permanently");
                    header("Location: http://localhost/TFM-FullStack-2/frontend/views/login.php");
                } else{
                    echo 'ERROR: No se pudo cambiar la contraseña';
                }                

            } else {
                echo 'ERROR: Las contraseñas no coinciden';
            }

        } else {
            echo 'ERROR: Este correo no existe en nuestra base de datos';
        }
    }    
}

