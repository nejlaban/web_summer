<?php
require 'vendor7autoload.php'; //run autolooader

Flight::route('/', function() { //define route & define function to handle the request
  echo 'Hello Nejla!';
});

Flight::start(); //start FlightPHP
 ?>
