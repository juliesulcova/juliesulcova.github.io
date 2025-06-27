<?php

foreach (scandir(__DIR__) as $dir) {
    if (in_array($dir, ['.', '..'])) {
        continue;
    }
    if (!is_dir(__DIR__.'/'.$dir)) {
        continue;
    }

    echo '        <Project thumbnail="'.$dir.'/0.jpg" name="">
            <Folder folder="'.$dir.'"></Folder>
        </Project>
';
}
