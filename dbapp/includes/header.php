<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/style.css">
        
        <!-- Bootstrap 4 CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fontawesome reference -->
        <script src="https://kit.fontawesome.com/00237198b9.js"></script>

        <title>
            <?php 
                echo "Facebook Lite | " . $title 
            ?>
        </title>
        <?php include('connection.php'); ?>
    </head>
    <header>
        <div id='header-logo'>
            <img src='media/lite-logo.png' alt='Lite logo' width=360 height=360/>
            <h1>Facebook Lite</h1>
        </div>
    </header>