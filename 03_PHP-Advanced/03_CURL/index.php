<?php
  $url = 'https://jsonplaceholder.typicode.com/users';

  // ? 1.Sample example to get data.
  $resource = curl_init($url);
  curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($resource);
  echo $result;

  // ? 2.Get response status code
  // cURL info function
  $code = curl_getinfo($resource,CURLINFO_HTTP_CODE);
  echo "<pre>";
  var_dump($code);
  echo "</pre>";

  // ? 3.set_opt_array

  // ? 4.Post request
  $resource = curl_init();

  // Create User
  $user = [
      'name' => 'John Doe',
      'username' => 'john',
      'email' => 'john@example.com'
  ];

  $ch = curl_init($url);
  curl_setopt_array($ch, [
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => json_encode($user),
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
      CURLOPT_POSTFIELDS => json_encode($user)
  ]);

  $result = curl_exec($ch);
  curl_close($ch);
  var_dump ($result);
