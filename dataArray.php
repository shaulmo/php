<?php
/* From time to time I like to do some exercies to practice PHP more. This following Example
Shows working with arrays, using a foreach loop, typecasting values in PHP and displaying
Data values in structured manner.
*/

$data = "32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6";

$dataArray = explode(", ", $data);

$total = 0;
foreach($dataArray as $data){
    (float)$total += (float)$data;
}

$result = $total / count($dataArray);
echo "<pre>";
echo "The Average Value Count is: " . "<strong>" . round($result, 1) . "</strong>";
echo "</pre>";

sort($dataArray);

$low5 = array_slice($dataArray, 0, 5);
echo "<pre>";
echo "Lowest Values in the Array:";
echo "<ul>";
foreach($low5 as $low){
    echo "<li>$low</li>";
}
echo "</ul>";

$high5 = array_slice($dataArray, -5);
echo "<pre>";
echo "Highest Values in the Array:";
echo "<ul>";
foreach($high5 as $high){
    echo "<li>$high</li>";
}
echo "</ul>";
echo "</pre>";
