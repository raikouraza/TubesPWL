<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <style type="text/css">
        div.container-fluid {
            width: 70%;
            margin: auto;

            background-color: darkgrey;
        }
        body {
            background:#000;
        }

        h1 {
            text-align: center;
            margin-top: 5%;
            font-family: Georgia;
            font-style:italic;
            font-weight: normal;
            font-size: 72px;
            color: #fff;
        }

        p {
            text-align:center;
            color: #fdec6e;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
            color: #fff;
        }

        a {
            color:#45a29e;
            -moz-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
        }

        a:hover {
            color: #66fcf1;
            text-shadow:0px 0px 30px #66fcf1;
            -moz-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
        }
    </style>
</head>
<body>
<h1><a><p align="center" style="font-size: 50pt">NOW SHOWING</p></a></h1>
<div class="container-fluid">
    <div class="row" >
        <?php
        $filmDao = new FilmDao();
        $films = $filmDao->getAllFilm();
        /* @var $film Film */
        foreach ($films as $film){
            ?>
            <div style="padding-top: 10px;" align="center" class="col-md-<?php echo $bootstrapColWidth; ?>">
                <div class="thumbnail">
                    <?php echo '<a onclick="movieDetails(\'' . $film->getFilmId() . '\')">';?>
                    <?php echo "<img src='".$film->getFilmPoster()."' height='350' width='235'' />";?>
                    <?php echo '</a>';?>
                </div>
            </div>
            <?php
            $rowCount++;
            if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
        }
        ?>
    </div>
</div>
</body>
</html>
