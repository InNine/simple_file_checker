<?php


namespace helpers;


class FileHelper
{
    /**
     * Простой обработчик для файла
     * @param string $fileName
     * @return string
     */
    public static function getFileContent(string $fileName):string
    {
        if (!file_exists($fileName)) {
            echo 'Файл не найден!';
            exit;
        }
        return file_get_contents($fileName);
    }
}