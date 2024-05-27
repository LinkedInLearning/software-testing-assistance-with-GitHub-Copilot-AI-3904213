<?php

declare(strict_types=1);

use PhpParser\Node\Expr\FuncCall;

$example_link_array_1 = [
  'id' => 1,
  'url' => 'https://www.linkedin.com',
];

$example_link_array_2 = [
  'id' => false,
  'url' => 'learning',
];

$example_link_array_3 = [
  'id' => false,
  'url' => 'https://www.linkedin.com',
];

function generate_link_from_array(array $link_array): string {
  if (is_int($link_array['id'])) {
    return get_url_for_link($link_array['id']);
  }

  return create_url( $link_array['url'], $link_array['id'] 
}

function get_url_for_link(int $id) {
  return 'https://www.linkedin.com';
}

function create_url( $url, $maybe_id ) {
	if( filter_var( $url, FILTER_VALIDATE_URL ) ) {
    	return $url;
	}
    
	return build_url( $url );
}

 function build_url( $url ) {
	return 'https://www.linkedin.com/' . $url;
}


