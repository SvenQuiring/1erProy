<?php

if(isset ($_POST['reserv'])) {
    $reserv = $_POST['reserv'];
}

echo "<style>";

$max = count($reserv);

for($i=0;$i<$max;$i++) {
    if($i == $max-1) {
        echo "#" . $reserv[$i] . " ";
    } else {
        echo "#" . $reserv[$i] . ", ";
    }
}
echo "{background-color: #02ea99; border-radius: 10px;}";
echo "</style>";

?>
