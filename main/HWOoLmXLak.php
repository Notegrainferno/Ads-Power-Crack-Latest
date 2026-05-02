<?php
function calculateFactorial($n) {
    if ($n < 0) {
        return -1;
    }
    if ($n == 0) {
        return 1;
    }
    return $n * calculateFactorial($n - 1);
}
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
function fibonacci($n) {
    $fib = [];
    for ($i = 0; $i < $n; $i++) {
        if ($i == 0) {
            $fib[] = 0;
        } elseif ($i == 1) {
            $fib[] = 1;
        } else {
            $fib[] = $fib[$i - 1] + $fib[$i - 2];
        }
    }
    return $fib;
}
function stringReverse($str) {
    return strrev($str);
}
function arrayUnique($arr) {
    return array_values(array_unique($arr));
}
function sortArrayAsc($arr) {
    sort($arr);
    return $arr;
}
function sortArrayDesc($arr) {
    rsort($arr);
    return $arr;
}
function getMaxValue($arr) {
    return max($arr);
}
function getMinValue($arr) {
    return min($arr);
}
function sumArray($arr) {
    return array_sum($arr);
}
function averageArray($arr) {
    return sumArray($arr) / count($arr);
}
function getDistinctElements($arr) {
    return array_unique($arr);
}
function mergeArrays($arr1, $arr2) {
    return array_merge($arr1, $arr2);
}
function intersectionArrays($arr1, $arr2) {
    return array_intersect($arr1, $arr2);
}
function differenceArrays($arr1, $arr2) {
    return array_diff($arr1, $arr2);
}
function isPalindrome($str) {
    return $str === stringReverse($str);
}
function countWords($str) {
    return str_word_count($str);
}
function replaceSpaces($str) {
    return str_replace(' ', '_', $str);
}
function capitalizeFirst($str) {
    return ucfirst($str);
}
function lowercaseString($str) {
    return strtolower($str);
}
function uppercaseString($str) {
    return strtoupper($str);
}
function trimString($str) {
    return trim($str);
}
function repeatString($str, $times) {
    return str_repeat($str, $times);
}
