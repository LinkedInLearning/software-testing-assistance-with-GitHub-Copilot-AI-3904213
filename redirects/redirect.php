<?php
function get_redirects()
{
  return [
    'lil' => 'https://www.linkedin.com',
    'learning' => 'https://www.linkedin.com/learning',
  ];
}

function get_requested_url()
{
  return $_SERVER['REQUEST_URI'];
}

function redirect_to_url($url)
{
  header("Location: $url");
  die;
}

function should_redirect( $url, $redirects = [] ) {
  // strip the trailing slash if it exists
  $url = rtrim($url, '/');

  if (empty($redirects)) {
    $redirects = get_redirects();
  }
  return array_key_exists($url, $redirects);
}

function redirect_value( $url, $redirects =[] )
{

  $url = rtrim($url, '/');

  if (empty($redirects)) {
    $redirects = get_redirects();
  }

  // Check if the url ends with the redirect key
  foreach ($redirects as $key => $value) {
    if (str_ends_with($url, $key)) {
      return $value;
    }
  }
}
