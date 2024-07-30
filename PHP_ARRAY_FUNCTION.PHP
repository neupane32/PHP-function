<?php

//array_range(): Creates an array containing a range of elements.
$letter = range('a', 'z');
print_r($letter);
echo "<br>";

//extract(): Imports variables from an array into the current symbol table.
$array = array("name" => "Aashish", "age" => 21);
extract($array);
echo $name; // Outputs: Aashish
echo $age;  // Outputs: 21
echo "<br>";

//compact(): Creates an array from variables and their values.
$name = "Aashish";
$age = 21;
$array = compact("name", "age");
print_r($array);
echo "<br>";

//list: Assigns variables as if they were an array.
$array = ["Aashish","prinsa","bijay"];
list($a,$b,$c) = $array;
echo $a;
echo $b;
echo $c . "<br>";

//next: Advances the internal pointer of an array.
$array = array("a","b","c");
echo next($array); // O: b
echo next($array); // O: c
echo "<br>";

//prev(): Rewinds the internal pointer of an array.
$array = array("a", "b", "c" , "d");
next($array); // Pointer to 'b'
next($array); // Pointer to 'c'
next($array); // Pointer to 'd'
echo prev($array); // Outputs: c

//end(): Sets the internal pointer of an array to its last element.
$array = array("a", "b", "c");
echo end($array); // Outputs: c


//each(): Returns the current key and value pair from an array and advances the array cursor.
// $array = ["name" => "Aashish", "age" => 21];
// $pair = each($array);
// print_r($pair);

//pos() and current() : Returns the current element in an array.
$array = array("a", "b", "c");
echo current($array); // Outputs: a
// `pos` is an alias of `current`
echo pos($array); // Outputs: a
echo "<br>";


//key(): Returns the index element of the current array position.
$array = ["x"=>1, "y"=>2, "z"=>3];
echo key($array); //output:x
next($array);
echo key($array) . "<br>"; //output:y

// reset():  Sets the internal pointer of an array to its first element.
$array = array("a", "b", "c");
end($array); // Pointer to 'c'
echo reset($array). "<br>"; // Outputs: a
















?>