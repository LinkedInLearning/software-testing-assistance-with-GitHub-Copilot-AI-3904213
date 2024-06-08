<?php

function redirect()
{

  $redirects = [
    'lil' => 'https://www.linkedin.com',
    'learning' => 'https://www.linkedin.com/learning',
  ];

  // Check if the url ends with the redirect key
  $url = $_SERVER['REQUEST_URI'];
  foreach ($redirects as $key => $value) {
    if (str_ends_with($url, $key)) {
      header("Location: $value");
      die;
    }
  }
}
