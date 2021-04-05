<?php

if(isset($_POST['_month']) && isset($_POST['_year'])) {
    $month = $_POST['_month'] + 1;
    $year = $_POST['_year'];
    $mes = date('F', mktime(0, 0, 0, $month, 10));
    $cantdias = cal_days_in_month(CAL_GREGORIAN, $month, $year);
} else {
    $mes = date('F');
    $month = date('m');
    $year = date('Y');
    $cantdias = date('t');
}
echo "<p>" . $year . "</p> <p>" . $mes . "</p>";
echo "<table class='calentbl'> <tr>";
echo "<th> L </th> <th> M </th> <th> M </th> <th> J </th> <th> V </th> <th> S </th> <th> D </th> </tr>";
for ($h=1;$h<=7;$h++) {

    if ($h == 1) {
        echo "<tr>";
    }

    if (date("N", mktime(0,0,0,$month,1,$year)) == $h){
        for ($i=1;$i<=$cantdias;$i++) {
            echo "<td id='" . $mes . $i . $year . "' onclick='reserve(this.id)'>" . $i . "</td>";

            if ($h%7 == 0) {
                echo "</tr> <tr>";
            }
            $h = $h + 1;
        }

    } else {
        echo "<td> </td>";
    }

    if ($h == 7) {
        echo "</tr>";
    }
}

?>
