<?php

$a = $_POST['A'];
$b = $_POST['B'];
$c = $_POST['C'];

if($a > $b){
    if($a > $c){
        if($b > $c){
            echo "$a >> $b >> $c";
        } else {
            echo "$a >> $c >> $b";
        }
    } else {
        echo "$c >> $a >> $b";
    }
} else {
    if($b > $c){
        if($a > $c){
            echo "$b >> $a >> $c";
        } else {
            echo "$b >> $c >> $a";
        }
    } else {
        echo "$c >> $b >> $a";
    }
}

echo "<br/><br/><br/><a href='prog02.html'>VOLVER</a>"

?>