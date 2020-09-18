<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP,
che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi -->


<?php

    $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
        ]
    ];

// var_dump($database);

// foreach ($database as $cd) {
//     echo $cd['poster'];
//     echo $cd['title'];
//     echo $cd['author'];
//     echo $cd['year'];
// }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi</title>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <header>
            <div class="container">
                <img src="logo.png" alt="logo">
            </div>
        </header>

        <div class="cds-container container">
            <?php foreach ($database as $cd) { ?>
                <div class="cd">
                    <img src= " <?php echo $cd['poster'];?> " alt="">
                    <h3> <?php echo $cd['title']; ?> </h3>
                    <span class="author"> <?php echo $cd['author']; ?> </span>
                    <span class="year"> <?php echo $cd['year']; ?> </span>
                </div>
            <?php } ?>


            <!-- <script id="entry-template" type="text/x-handlebars-template">
                <div class="cd {{genre}}">
                    <img src="{{poster}}" alt="">
                    <h3>{{title}}</h3>
                    <span>{{author}}</span>
                    <span>{{year}}</span>
                </div>
            </script> -->

        </div>


        <!-- <script src="js/myscript.js" charset="utf-8"></script> -->
    </body>
</html>
