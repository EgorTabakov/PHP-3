<?php

/**
 * @param string $directory
 * @param string $spaces
 *
 * @return string
 */
function scandirectory($directory, $spaces=''){

    $iterator = new DirectoryIterator($directory);

    $listing = '';

    foreach($iterator as $element){
        if($element->isDot())

            continue;

        # Добавляем путь к элементу в список
          $file = $element->getBasename();
        echo "<a href='$directory/$file'>" .$spaces.$file. "</a></br>";



          if ($element->isDir()) {

            $dir = scandirectory($element->getBasename(), "{$spaces}_____|");
        }
    }

    return $listing;
}

$list = scandirectory('.');
