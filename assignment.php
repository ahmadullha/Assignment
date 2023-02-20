<?php
//Write a PHP function to sort an array of strings by their length, in ascending order. 
function sort_strings_by_length($arr) {
    usort($arr, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $arr;
}
$strings = array("banana", "apple", "cherry", "date");
$sorted_strings = sort_strings_by_length($strings);
print_r($sorted_strings);

//Write a PHP function to concatenate two strings,but with the second string starting from the end of the first string.

function concatenateFromEnd($string1, $string2) {
    $length1 = strlen($string1);
    $length2 = strlen($string2);
    $result = '';

    for ($i = 0; $i < $length1; $i++) {
        $result .= $string1[$i];
        if ($i == $length1 - 1) {
            for ($j = $length2 - 1; $j >= 0; $j--) {
                $result .= $string2[$j];
            }
        }
    }

    return $result;
}


$string1 = "Hello,";
$string2 = "world!";
$result = concatenateFromEnd($string1, $string2);
echo $result;



//Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function removeFirstAndLast($array) {
    array_shift($array);
    array_pop($array);
    return $array;
  }
  $array = array(1, 2, 3, 4, 5);
  $newArray = removeFirstAndLast($array);
  print_r($newArray); // prints [2, 3, 4]
    
//Write a PHP function to check if a string contains only letters and whitespace.

function contains_only_letters_and_whitespace($str) {
    return preg_match("[abc]", $str);
}

$str1 = "Hello World";
$str2 = "Hello123";
if (contains_only_letters_and_whitespace($str1)) {
    echo "String 1 contains only letters and whitespace";
} else {
    echo "String 1 contains other characters";
}
if (contains_only_letters_and_whitespace($str2)) {
    echo "String 2 contains only letters and whitespace";
} else {
    echo "String 2 contains other characters";
}

//Write a PHP function to find the second largest number in an array of numbers.

function find_second_largest($arr) {
    $largest = $arr[0];
    $second_largest = $arr[0];
    
    foreach($arr as $num) {
        if($num > $largest) {
            $second_largest = $largest;
            $largest = $num;
        } else if ($num > $second_largest && $num < $largest) {
            $second_largest = $num;
        }
    }
    
    return $second_largest;
}
$arr = array(5, 10, 3, 8, 4);
$second_largest = find_second_largest($arr);
echo "The second largest number in the array is: " . $second_largest;