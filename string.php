<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach(str_split($str) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}

function processStrings($strings)
{
    foreach ($strings as $string) {
        $vowelCount = countVowels($string);
        $reversedString = strrev($string);
        echo "Original string: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
    }
}
processStrings($strings);