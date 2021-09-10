<?php
  // What is a variable - Variable is container to store value
  // Variable types - String, Integer, Float/Double, Boolean, Null, Array, Object, Resource
  // Declaration variables -
  $name = 'Md. Samiur Rahman Mukul'; // String
  $age = 22; // Integer
  $height = 1.85; // Float
  $isMale = true;
  $salary = null;

  // Print the variable. Explain what is -
  echo $name.'<br />';
  echo $age.'<br />';
  echo $height.'<br />';
  echo $isMale.'<br />';
  echo $salary.'<br />';

  // Print types of the variable -
  echo gettype($name).'<br />';
  echo gettype($age).'<br />';
  echo gettype($height).'<br />';
  echo gettype($isMale).'<br />';
  echo gettype($salary).'<br />';

  // Print the whole variable
  var_dump($name, $age, $height, $isMale, $salary);

  // Change the value of variable
  $name = false;

  // Variable checking function -
  is_string($name); // false
  is_int($age); // true
  is_double($height); // true
  is_bool($isMale); // true

  // Check if variable is defined
  isset($name); // true
  isset($address); // false

  // Constants
  define('PI', 3.1416);
  echo '<br />';
  echo PI.'<br />';

  // Using PHP built-in constant
  echo SORT_ASC.'<br />';
  echo PHP_INT_MAX.'<br />';
