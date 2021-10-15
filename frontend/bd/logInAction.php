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
$password = $_POST['password'];

if ($user == '' or $password == '') {
    echo 'Por favor rellene todos los campos';
} else {
    $DBConsult = "SELECT user_email FROM $DBTable";
    $DBUsers = mysqli_fetch_row(mysqli_query($DBConnect, $DBConsult));
    for ($i = 0; $i < count($DBUsers); $i++) {
        $DBUserData = $DBUsers[$i];
        if ($user == $DBUserData) {
            
            $DBPassConsult = "SELECT user_password FROM $DBTable WHERE user_email='$DBUserData'";
            $DBPassUser = mysqli_fetch_row(mysqli_query($DBConnect, $DBPassConsult))[0];
            
            if(password_verify($password, $DBPassUser)){

                header("Status: 301 Moved Permanently");
                header("Location: http://localhost/TFM-FullStack-2/frontend/views/profile.php");

            } else {
                echo 'ERROR: La contraseña es incorrecta';
            }

        } else {
            echo 'ERROR: Este correo no existe en nuestra base de datos';
        }
    }
}
