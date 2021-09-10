<?php
  // Magic constants
  echo __DIR__ . "<br />";
  echo __FILE__ . "<br />";
  echo __LINE__ . "<br />";

  // Create directory
  // mkdir("test_dir");

  // Rename directory
  // rename("test_dir", "text_dir2");

  // Delete directory
  // rmdir("text_dir2");

  // Read files and folders inside directory
  $files = scandir('./');

  echo '<pre>';
  var_dump($files);
  echo '</pre>';

  // file_get_contents, file_put_contents
  echo file_get_contents("lorem-text.txt") . '<br />';
  file_put_contents('sample.txt', 'Some Content');

  // file_get_contents from URL
  // * fetch data in API - using file_get_contents() function
  $json_users = file_get_contents('https://jsonplaceholder.typicode.com/users');
  echo $json_users . '<br />';

  // * convert data in array
  $users = json_decode($json_users);
  // $users = json_decode($json_users, true); // ? associative array

  echo '<pre>';
  var_dump($users) . '<br />';
  echo '</pre>';

  // https://www.php.net/manual/en/book.filesystem.php
  // file_exists
  echo file_exists('sample.txt'); // true

  // is_dir
  echo is_dir('test'); // false

  // filemtime
  // filesize
  // disk_free_space
  // file
