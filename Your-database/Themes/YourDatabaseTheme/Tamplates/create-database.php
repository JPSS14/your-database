<?php
include("Classes/Connection.php");
$c = new Classes\Connection();
$c->connect();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Your Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Styles/boot.css">
    <link rel="stylesheet" href="Themes/YourDatabaseTheme/style.css">
</head>

<body>
    <!-- MAIN HEADER -->
    <?php
    include("Themes/YourDatabaseTheme/header.php");
    ?>
    <!-- /MAIN HEADER -->
    <main class="main">
        <div class="container">
            <a class="btn" href="select-database.php">Select Database</a>
            <a class="btn" href="create-database.php">Create Database</a>
        </div>
    </main>
</body>

</html>