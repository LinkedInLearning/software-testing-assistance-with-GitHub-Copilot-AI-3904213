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

function redirect_tor_url($url)
{
  header("Location: $url");
  die;
}

function should_redirect( $url ) {
  $redirects = get_redirects();
  return array_key_exists($url, $redirects);
}

function redirect_value( $url )
{
  $redirects = get_redirects();

  // Check if the url ends with the redirect key
  foreach ($redirects as $key => $value) {
    if (str_ends_with($url, $key)) {
      return $value;
    }
  }
}
