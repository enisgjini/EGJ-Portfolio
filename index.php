<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Here are meta tag's -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fav Icon of webpage -->
    <link rel="icon" type="image/png" href="assets/favicon.ico">

    <!-- Title of webpage -->
    <title>Home</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- External Javascript -->
    <script src="app.js"></script>
</head>

<body>

    <?php include("partials/navbar.php"); ?>

    <br>

    <div class="container">
        <div class="col">
            <h1 class="personal-info-title">I’m Arnau Ros, a graphic designer & content creator based in Barcelona.
                Available for freelance & collaborations. </h1>
        </div>
        <div class="col">
            <img src="assets/profile.jpg" alt="" width="100%" height="75%">
        </div>
    </div>

    <!-- Section of Project's -->
    <?php include ("partials/project.php") ?>

    <!-- Section of Content Creation -->
    <?php include ("partials/content-creation.php") ?>

    <!-- Section of About Me -->
    <?php include ("partials/about-me.php") ?>

    <br>
    <!-- Section of Infinite autoplay carousel -->
    <?php include ("partials/infinite-autoplay-carousel.php") ?>



</body>

</html>