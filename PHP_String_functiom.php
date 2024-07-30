<?php

//trim() function removes the whitespace and other predefined characters from both
// side of the string.
//syntax = trim(string, character)

$var = "  Hello, World  ";
$trim = trim($var);
echo $trim . "<br>";

$str = "--Aashish Neupane++";
$characters = "-+";
$trim = trim($str, $characters);
echo $trim . "<br>";


//  Itrim(): remove whitespaces from the begining of a string
//  rtrim(): remove whitespaces from the end of the string.


//chop(): remove character from the right end of a string

$str = "Aashish Neupane";
echo $str . "<br>";
echo chop($str, "Neupane");
echo "<br>";


//padding and repating function

//str_pad(): function pads a string to a certain length with another string (default is a space).

$value   = "Aashish";
$padded = str_pad($value, 15, "-", STR_PAD_BOTH);
echo $padded . "<br>";

//str_repeat(): function repeats a string a specified number of times.

$input = "Hello";
$repeated = str_repeat($input, 3); // "HelloHelloHello"

echo $repeated . "<br>";

//string length and count function

//strlen() : return the length of the string
$input = "Aashish Neupane";
$length = strlen($input);
echo $length . "<br>";

//str_word_count() : counts the number of words in the string
$value = "Hello, Aashish: How are you!";
$word_count = str_word_count($value);
echo $word_count . "<br>";


//substr_count(): Counts the number of occurrences of a substring in a string.
$value = "Hey bijay! Hey Aashish, Hey Prinsa";
$substr_count = substr_count($value, "Hey");
echo $substr_count . "<br>";

//strpos(): Finds the position of the first occurrence of a substring in a string (case-sensitive).
$word = "Hello, Aashish! I am here!!";
$strpos = strpos($word, "I");
echo $strpos . "<br>";

//stripos():Finds the position of the first occurrence of a substring in a string (case-insensitive).
$input = "Hello, World!";
$position = stripos($input, "world"); // 7
echo $position . "<br>";

//strripos(): Finds the position of the last occurrence of a substring in a string (case-insensitive).
$input = "Hello, World! Hello, PHP!";
$position = strripos($input, "Hello"); // 14
echo $position . "<br>";

//strstr(): Finds the first occurrence of a substring in a string (case-sensitive) and returns the rest of the string from that point.
$input = "Hello, World!";
$result = strstr($input, "World"); // "World!"
echo $result . "<br>";

//stristr(): Finds the first occurrence of a substring in a string (case-insensitive) and returns the rest of the string from that point.
$input = "Hello, World!";
$result = stristr($input, "world"); // "World!"
echo $result . "<br>";

//strrchr(): Finds the last occurrence of a character in a string and returns the rest of the string from that point.
$input = "Hello, World!";
$result = strrchr($input, 'o'); // "orld!"
echo $result . "<br>";

//strpbrk(): Searches a string for any of a set of characters and returns the rest of the string from the first occurrence of any of those characters.
$input = "Hello, World!";
$result = strpbrk($input, 'ao'); // "o, World!"
echo $result . "<br>";

//string to array and array to string functions

//explode: splits a string into an array by a specified delimiter.
$input = "Aashish, bijay, prinsa, sipora, Raju";
$array = explode(",", $input);
print_r($array);
echo "<br>";

//implode: joins array elements into a single string using a specified delimiter.
$array = ["Aashish", "bijay","prinsa","sipora", "Raju"];
$string = implode(",", $array);
print_r($string);
echo "<br>";
