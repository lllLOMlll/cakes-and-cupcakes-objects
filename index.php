<?php
include 'Cupcake.php';

// CAKES
// Creating cakes
$cake1 = new Cake(30, 15, "White", "Vanilla");
$cake2 = new Cake(27, 22, "Brown", "Chocolate");
$cake3 = new Cake(15, 10, "Red", "Strawberries");

// Display cakes
echo "<strong>CAKES:</strong><br>";
echo "<strong>This is cake #1:</strong><br>";
echo ($cake1);	

echo "<strong>This is cake #2:</strong><br>";
echo ($cake2);

echo "<strong>This is cake #3:</strong><br>";
echo ($cake3);

// CUPCAKES
// Creating cupcakes
$cupcake1 = new Cupcake(10, 5, "White", "Vanilla", "Blueberries");
$cupcake2 = new Cupcake(5, 3, "Brown", "Chocolate", "Banana");
$cupcake3 = new Cupcake(7, 4, "White", "Vanilla", "Chocolate");

// Display cupcakes
echo "<strong>CUPCAKES:</strong><br>";
echo "<strong>This is cupcake #1:</strong><br>";
echo ($cupcake1);	

echo "<strong>This is cupcake #2:</strong><br>";
echo ($cupcake2);	

echo "<strong>This is cupcake #3:</strong><br>";
echo ($cupcake3);	

// Display the number of cakes created
echo "<strong>Number of cakes created:</strong> ";
echo Cake::getCount();
echo "<br>";
// Display the number of cupcakes created
echo "<strong>Number of cupcakes created:</strong> ";
echo Cupcake::getCountCupcake();
echo "<br>";




?>