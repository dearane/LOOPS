<?php

// Exercise 1
for($number = 0; $number <= 20; $number++) 
{
    if($number % 2 == 0) 
    {
        echo "Numbers: " . $number . '<br>';
    }
}

// Exercise 2
$groceryItems = ["Garlic", "Onion", "Cheese", "Tomatoes", "Pasta"];

echo "<br>";
echo "Grocery List:" . '<br><br>';

foreach($groceryItems as $product) {
    echo $product . '<br>';
}

echo '<br><br>';

// Exercise 3
$counter = 10;

while($counter >= 0) 
{
    echo $counter . "..." . '<br>';
    $counter--;

    if($counter == 0) 
    {
        echo "BLAST OFF!";
        break;
    }
}

?>
