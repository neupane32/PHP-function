<?php

// Getting the current Date and Time

//date(): Formats the current date and time based on a specified format.
echo date('Y-m-d H:i:s') . "<br>"; //output: 2024-07-30 09:09:56


//time(): Returns the current Unix timestamp.
echo time(). "<br>"; //output:1722323473

$now = new DateTime();
echo $now->format('Y-m-d H:i:s'). "<br>"; // Outputs current date and time


//formatting Dates
// date(): Formats a date or time according to the format string

echo date('l, F j, Y'). "<br>"; // Outputs  Tuesday, July 30, 2024


//parsing and creating dates

//strtotime(): Converts a date/time string into a Unix timestamp.
$timestamp = strtotime('2024-07-30 14:45:00');
echo date('Y-m-d H:i:s', $timestamp). "<br>"; // Outputs "2024-07-30 14:45:00"

#DateTime
//getdate()
print_r(getdate());

//date_create()
$date = date_create('2024-07-29 14:30:00');
echo date_format($date, 'Y-m-d H:i:s'); // Output: 2024-07-29 14:30:00

//date_format()
$date = date_create('2024-07-29 14:30:00');
echo date_format($date, 'l, F j, Y H:i:s'); // Output: Monday, July 29, 2024 14:30:00

//date_add()
$date = date_create('2024-07-29 14:30:00');
date_add($date, date_interval_create_from_date_string('1 month'));
echo date_format($date, 'Y-m-d H:i:s'); // Output: 2024-08-29 14:30:00

//date_sub()
$date = date_create('2024-07-29 14:30:00');
date_sub($date, date_interval_create_from_date_string('1 month'));
echo date_format($date, 'Y-m-d H:i:s'); 
// Output: 2024-06-29 14:30:00

//date_diff()
$date1 = date_create('2024-07-29');
$date2 = date_create('2024-08-29');
$diff = date_diff($date1, $date2);
echo $diff->format('%a days'); 
// Output: 31 days


?>