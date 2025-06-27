<?php

foreach (scandir(__DIR__) as $dir) {
    if (in_array($dir, ['.', '..'])) {
        continue;
    }
    $dir = __DIR__.'/'.$dir;
    if (!is_dir($dir)) {
        continue;
    }
    
    $i = 0;
    foreach (scandir($dir) as $file) {
        if (in_array($file, ['.', '..'])) {
            continue;
        }
        $end = explode('.', $file)[1];
        rename($dir.'/'.$file, $dir.'/'.$i.'.'.$end);
        $i++;
    }

    rename($dir, str_replace(' ', '_', $dir.'.'.$i));
}
