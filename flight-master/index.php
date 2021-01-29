<?php
require 'flight/Flight.php';

Flight::route('/', function(){
    echo 'hello world!';
});
Flight::route('/test', function(){
    echo 'hello michel   !';
});
Flight::route('/test/@name/@id', function($name, $id){
    echo "hello, $name ($id)!";
});

Flight::start();
