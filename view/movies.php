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
    <title>Document</title>
    <style type="text/css">
        div.container-fluid {
            width: 70%;
            margin: auto;

            background-color: darkgrey;
        }
    </style>

</head>
<body>
<p align="center" style="font-size: 40pt;background-color: black;">NOW SHOWING</p>
<div class="container-fluid">
    <div class="row" >
        <?php
        $filmDao = new FilmDao();
        $films = $filmDao->getAllFilm();
        /* @var $film film */
        foreach ($films as $film){
            ?>
            <div style="padding-top: 10px;" align="center" class="col-md-<?php echo $bootstrapColWidth; ?>">
                <div class="thumbnail">
                    <?php echo "<img src='".$film->getFilmPoster()."' height='350' width='235'' />";?>
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
