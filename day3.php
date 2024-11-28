<?php

$matrix = <<<TXT
D M C Z V H X U T Y L J A
C L Q F R R P K G A W S W
H L D D L S R A Y P Z I D
B Q X I T S N W K R P C R
W Q X E C B F T G J H E W
Q A K L H T R G Y X Q C X
D Q R M S B   O Y A Q W T
J H C V Q Z L V R C N B P
X D F O K Y X M G L V Q D
C M O S Q P L C P F W C J
J L Y Z A E Q Z Q A H Y G
F Y M Y D D K A M X U A G
A V S V H E W F S W A X J
TXT;

$mappings = array_map(fn ($row) => array_combine(array_merge(range('A', 'M')), array_map(rtrim(...), str_split($row, 2))), array_combine(array_merge(range('A', 'M')), explode("\n", $matrix)));

echo trim(preg_replace('/ {2,}/', ' ', join(array_map(fn ($chrs) => strlen($chrs) === 2 ? $mappings[$chrs[1]][$chrs[0]] : $chrs . " ", explode(" ", $argv[1])))));
