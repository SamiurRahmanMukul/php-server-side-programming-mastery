<?php
// Function which prints "Hello I am Mukul"
function hello()
{
    echo 'Hello I am Mukul<br>';
}

hello();
hello();
hello();

// Function with argument
function hello_name($name)
{
   echo "Hello I am $name" . '<br />';
}

hello_name('Samiur Rahman Mukul');

// Create sum of two functions
function sum($a, $b)
{
    return $a + $b;
}

echo sum(4,5) . '<br />';
echo sum(9,10) . '<br />';

// Create function to sum all numbers using ...$nums
/* function sum(...$nums)
{
   $sum = 0;
   foreach ($nums as $num) $sum += $num;
   return $sum;
}
echo sum(1, 2, 3, 4, 6); */

// Arrow functions
/* function sum(...$nums)
{
   return array_reduce($nums, fn($carry, $n) => carry + $n);
}
echo sum(1, 2, 3, 4, 6); */
