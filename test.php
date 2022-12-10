<?php

print_r($argv);

echo PHP_EOL;

foreach ($argv as $key => $value) {
    if ($key === 0) {
        continue;
    }

    $args = explode('=', $value);
    $param[$args[0]] = $args[1];
    print_r($param);
}