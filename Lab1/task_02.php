<?php

extract($_GET);
$number = $_GET['number'];
$number = (int)$number;
echo '<table border = 1>';


    for ($i=1; $i <= $number; $i++){
        echo '<tr>';
        echo "<td> $i </td>";

        echo '</tr>';
    }
echo '</table>';
