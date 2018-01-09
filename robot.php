<?php

$x = $argv[1];
$y =$argv[2];
$dir = $argv[3];
$walk = $argv[4];
$dir_arr = ["NORTH","EAST","SOUTH","WEST"];

$ws = strtoupper(str_replace("W", "", $walk));
$index = array_search($dir,$dir_arr);

for ($i = 0; $i < strlen($ws); $i++) {
    $temp = $ws[$i];
    $num = 0;
    if ($temp == "R") {
        $index = takeRight($index);
    } else if ($temp == "L") {
        $index = takeLeft($index);
    } else {
        $num = $temp;
    if ($index == 0) {
        $y += $num;
    } else if ($index == 1) {
        $x += $num;
    } else if ($index == 2) {
        $y -= $num;
    } else if ($index == 3)
        $x -= $num;
    }

}

echo ("X: " . $x . " Y: " . $y . " Current Facing Direction: " . $dir_arr[$index]);

function takeRight($index){
    if ($index == 3) {
            return $index - 3;
        } else {
            return $index + 1;
        }
}
function takeLeft($index){
    if ($index == 0) {
            return $index + 3;
        } else {
            return $index - 1;
        }
    }

?>