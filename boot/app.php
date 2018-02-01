<?php


$app = new Martians\Mars\Application;

$app->get('/', function () {
   echo 'home';
});

return $app;