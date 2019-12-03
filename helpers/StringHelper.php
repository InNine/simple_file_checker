<?php


namespace helpers;


class StringHelper
{
    /**
     * Форматируем строку для дальнейшей работы как с массивом
     * (к нижнему регистру, удаляем лишнее, делим по пробелу на массив и удаляем пустые элементы)
     * @param string $string
     * @return array
     */
    public static function getArrayFromString(string $string): array
    {
        $string = mb_strtolower($string);
        $string = strip_tags($string);
        // убираем точки и тд
        $string = preg_replace('/[^\p{L}\p{N}\s]/u', '', $string);
        //убираем цифры
        $string = preg_replace('/[0-9]+/', '', $string);
        $array = explode(' ', $string);
        return array_filter($array);
    }

}