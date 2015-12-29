<?php

include 'vendor/autoload.php';

use Sohib\Crawler;



$urls = [
    "http://thatsthefinger.com/",
    "http://just-shower-thoughts.tumblr.com/",
    "http://ducksarethebest.com/",
];
$crowler  = new Crawler\Scanner($urls);
var_dump($crowler->scan()->toArray()) ;