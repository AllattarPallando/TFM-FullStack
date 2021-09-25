<!DOCTYPE html>
<html lang="es">

<head>
    <!------------------------------
               METADATOS 
    -------------------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="Viajes">
    <meta name="keywords" content="viajes, organización, rutas, viaje en coche, España, norte, Asturias, Galicia, País Vasco, Cantabria">

    <!------------------------------
            TÍTULO Y FAVICON 
    -------------------------------->
    <title>Mis viajes</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <!------------------------------
        PLUGINS Y ENLACES EXTERNOS
    -------------------------------->
    <link href="http://fonts.cdnfonts.com/css/norwester" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/kollektif?styles=28735,28734,28732,28733" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/montserrat?styles=17402,17397,17405,17406,17395,17396,17398,17399,17400,17401,17403,17404,17391,17392,17393,17394,17389,17390" rel="stylesheet">
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/81bf84ccb5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/travels.css">

</head>

<body>
    <?php
        include "modules/mainHeader.php";
    ?>

    <h1 id="travelsTitle">Viajes</h1>
    <hr id="hrH1">

    <?php
        include "modules/travelInfo.php";
    ?>

    <div class="newTravelLink">
        <a href="newTravel.php">+</a>
    </div>

    <?php
        include "modules/mainFooter.php";
    ?>


    <script src="js/plugins/jquery.min.js"></script>
    <script src="js/header.js"></script>
</body>

</html>