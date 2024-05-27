<?php

function slugify(string $string): string
{
  return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
}

echo slugify('An example article name');
