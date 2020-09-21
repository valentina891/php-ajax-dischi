<?php include 'db.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi</title>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>

        <header>
            <div class="container">
                <img src="logo.png" alt="logo">
            </div>
        </header>

        <main class="cds-container container">
            <?php foreach ($database as $cd) { ?>
                <div class="cd">
                    <img src= " <?= $cd['poster'];?> " alt="">
                    <h3> <?= $cd['title']; ?> </h3>
                    <span class="author"> <?= $cd['author']; ?> </span>
                    <span class="year"> <?= $cd['year']; ?> </span>
                </div>
            <?php } ?>
        </main>


        <!-- <script src="js/myscript.js" charset="utf-8"></script> -->
    </body>
</html>
