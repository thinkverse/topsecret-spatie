<?php

echo join(array_map("\x63\x68\x72", array_map(fn ($num) => $num - 100, explode("\x20", openssl_decrypt(str_rot13($argv[1]), "\141\145\x73\x31\62\70", "\156\157\164\164\150\x65\163\x6f\154\x75\x74\x69\157\x6e")))));
