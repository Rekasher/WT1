<?php
extract($_GET);
$max = 0;
$word = '';
$counter = 0;
foreach($_GET as $Str) {
    if(strlen($Str) > $max){
        $max = strlen($Str);
    }
}
foreach($_GET as $Str) {
    if(strlen($Str) == $max){
        echo 'one of the biggest word: ', $Str, '<br>';
    }
}
