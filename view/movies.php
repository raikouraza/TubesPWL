<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<div class="row">
    <?php
    $filmDao = new FilmDao();
    $films = $filmDao->getAllFilm();
    /* @var $film film */
    foreach ($films as $film){
        ?>
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">
            <div class="thumbnail">
                <?php echo $film->getFilmJudul(); ?>">
            </div>
        </div>
        <?php
        $rowCount++;
        if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
    }
    ?>
</div>