<?php
function getRedirects()
{
  return [
    'lil' => 'https://www.linkedin.com',
    'learning' => 'https://www.linkedin.com/learning',
  ];
}

function getRequestedUrl()
{
  return $_SERVER['REQUEST_URI'];
}

function redirectToUrl($url)
{
  header("Location: $url");
  die;
}

function redirect()
{
  $redirects = getRedirects();
  $url = getRequestedUrl();

  // Check if the url ends with the redirect key
  foreach ($redirects as $key => $value) {
    if (str_ends_with($url, $key)) {
      redirectToUrl($value);
    }
  }
}

function complicated_conditional( $url ) {
  if (str_ends_with($url, 'lil')) {
    return 'https://www.linkedin.com';
  } elseif (str_ends_with($url, 'learning')) {
    return 'https://www.linkedin.com/learning';
  } else {
    return null;
  }
}
