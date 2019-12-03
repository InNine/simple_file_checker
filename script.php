<?php

include 'helpers\ArrayHelper.php';
include 'helpers\StringHelper.php';
include 'helpers\FileHelper.php';

use helpers\{ArrayHelper, StringHelper, FileHelper};

//Простая обработка исключений
if (!key_exists('f', getopt("f:"))) {
    echo 'Нет исполнительного файла!';
    exit;
}
$fileName = getopt("f:")['f'];

$content = FileHelper::getFileContent($fileName);
$array = StringHelper::getArrayFromString($content);
$array = ArrayHelper::countWords($array);
//TODO Можно сделать и более красиый вывод :)
var_dump($array);
