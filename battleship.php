<?php

$ruledGrid = [
        'A' => [0, 0, 0, 0, 0], 
        'B' => [0, 1, 0, 1, 0],
        'C' => [0, 1, 0, 0, 0],
        'D' => [0, 1, 0, 0, 1],
        'E' => [0, 0, 0, 0, 1],
];

echo ($ruledGrid[$argv[1]][$argv[2]-1]?'Hit':'Mishit').' for area '.$argv[1].$argv[2];

