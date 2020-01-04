<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<div class="row">
    <?php
    foreach ($rows as $row){
        ?>
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">
            <div class="thumbnail">
                <?php echo $row->film_poster; ?>">
            </div>
        </div>
        <?php
        $rowCount++;
        if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
    }
    ?>
</div>