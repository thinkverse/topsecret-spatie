<?php

echo trim(join(array_map(fn ($word) => ctype_digit($pos = substr($word, 0, 1)) ? substr($word, $pos + 1, 1) : $word . " ", explode(" ", $argv[1]))));
