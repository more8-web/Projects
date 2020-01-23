<?php

$string = 'Apples and oranges 22';
$pattern = '/[0-9]+/';

$result = preg_match($pattern, $string);

var_dump($result);