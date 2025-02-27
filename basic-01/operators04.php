<?php
// Types of Operators

// 1. Arithmetic Operators
// 2. Relational Operators
// 3. Assignment Operators
// 4. Increment/Decrement Operators
// 5. Logical Operators
// 6. String Operators
// 7. Array Operators
// 8. Conditionam assignment Operators

// 1. Arithmetic Operators
// +, -, *, /, %, **
// Example
echo 5 + 2; // 7
echo 5 - 2; // 3
echo 5 * 2; // 10
echo 5 / 2; // 2.5
echo 5 % 2; // 1
echo 5 ** 2; // 25

// 2. Relational Operators
// ==, ===, !=, !==, <, >, <=, >=, <>, <=>// spaceship operator
// Example
echo 5 == 2; // false
echo 5 === 2; // false
echo 5 != 2; // true
echo 5 !== 2; // true
echo 5 < 2; // false
echo 5 > 2; // true
echo 5 <= 2; // false
echo 5 >= 2; // true
echo 5 <> 2; // true
echo 5 <=> 2; // 1

// 3. Assignment Operators
// =, +=, -=, *=, /=, %=, **=
// Example
$x = 5;
echo $x; // 5
$x += 2;
echo $x; // 7
$x -= 2;
echo $x; // 5
$x *= 2;
echo $x; // 10
$x /= 2;
echo $x; // 5
$x %= 2;
echo $x; // 1
$x **= 2;
echo $x; // 1

// 4. Increment/Decrement Operators
// ++, --
// Example
$x = 5;
echo $x++; // 5 // post increment
echo $x; // 6
echo ++$x; // 7 // pre increment
echo $x; // 7
echo $x--; // 7 // post decrement
echo $x; // 6
echo --$x; // 5 // pre decrement
echo $x; // 5

// 5. Logical Operators
// and, or, xor, &&, ||, !
// Example
$x = 5;
$y = 2;
echo ($x == 5 and $y == 2); // true
echo ($x == 5 or $y == 3); // true
echo ($x == 5 xor $y == 3); // true
echo ($x == 5 && $y == 2); // true

// 6. String Operators
// ., .=
// Example
$x = "Hello";
$y = "World";
echo $x . $y; // HelloWorld
$x .= $y;
echo $x; // HelloWorld

// 7. Array Operators


// asignment 
$a=5; //6
$b=++$a; //6 //5 //5
$c=$b--;  //5
$a=++$b; //6 
$d=$a + ++$a + $a++; //6+7+8=21         
echo $a , "<br>";
echo $b , "<br>";
echo $c , "<br>";
echo $d , "<br>";
?>