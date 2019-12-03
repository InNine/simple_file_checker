<?php

namespace helpers;

class ArrayHelper
{
    /**
     * Принцип прост - создаем массив с ключами из слов и значением - количества.
     * Потом через сортировку подгоняем под нужный формат
     * @param array $array
     * @return array
     */
    public static function countWords(array $array): array
    {
        $wordCount = [];
        foreach ($array as $word) {
            key_exists($word, $wordCount) ? $wordCount[$word]++ : $wordCount[$word] = 1;
        }
        array_multisort(array_values($wordCount), SORT_DESC, array_keys($wordCount), SORT_ASC, $wordCount);
        return $wordCount;
    }
}