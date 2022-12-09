<?php

$new = array_fill("0","4","test");

echo"<pre>";
print_r($new);

$arr = ["tops","tec"];

print_r($arr);

$newarr = array_pad($arr,"5","add");

print_r($newarr);
?>