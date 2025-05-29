<?php

function visualizeGrid($grid) {
    foreach ($grid as $x) {
        echo '[' . implode(',', $x) . '],';
        echo '   "';
        foreach ($x as $y) {
            echo $y == 1 ? 'X' : '~';
        }
        echo "\"\n";
    }
}
$grid = [
    [0,0,0,0,0,0,0,1],
    [0,0,0,0,0,0,1,0],
    [0,0,0,0,0,1,0,0],
    [0,0,0,0,1,0,0,0],
    [0,0,0,1,0,0,0,0],
    [0,0,1,0,0,0,0,0],
    [0,1,0,0,0,0,0,0],
    [1,0,0,0,0,0,0,0],
];

visualizeGrid($grid);

?>
