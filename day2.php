<?php

$mappings = [
    1 => 'q',
    2 => 'w',
    3 => 'e',
    4 => 'r',
    5 => 't',
    6 => 'y',
    7 => 'u',
    8 => 'i',
    9 => 'o',
    10 => 'p',
    11 => 'a',
    12 => 's',
    13 => 'd',
    14 => 'f',
    15 => 'g',
    16 => 'h',
    17 => 'j',
    18 => 'k',
    19 => 'l',
    20 => 'z',
    21 => 'x',
    22 => 'c',
    23 => 'v',
    24 => 'b',
    25 => 'n',
    26 => 'm',
];

echo trim(preg_replace('/ {2,}/', ' ', join(array_map(fn ($chr) => $mappings[$chr] ?? $chr . " ", explode(" ", $argv[1])))));
