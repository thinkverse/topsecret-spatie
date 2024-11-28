<?php

echo join(array_map(chr(...), str_getcsv(base64_decode($argv[1]))));
