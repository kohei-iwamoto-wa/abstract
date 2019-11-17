<?php
$calculate = (int)$_POST['calculate'];

function tax_excluded ( $calculate ) {
    $calculate = $calculate * 100 / 110;
    return $calculate;

}

function tax ( $calculate ) {
    $calculate = $calculate - tax_excluded($calculate);
    return $calculate;

}

?>
<!DOCTYPE html>
<html>
    <head>
    <head>
    <body>
        <form action = "cal.php" method = "POST">
            <h2>税計算</h2>
            <input type = "text" name = "calculate">
            <input type = "submit" value = "計算">
            <p><?php 
                $tax = tax ($calculate);
                $tax_excluded = tax_excluded ( $calculate );
                echo '合計：' . $calculate . '円<br>';
                echo '税抜き：' . floor($tax_excluded) . '円<br>';
                echo '税額：' .  floor($tax) . '円<br>';
            ?></p>
        </form>
    </body>
</html>