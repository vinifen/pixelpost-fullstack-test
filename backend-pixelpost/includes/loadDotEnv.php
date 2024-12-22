<?php

function loadDotEnv(){
  $path = dirname(__FILE__, 2);
  
  $dotenv = Dotenv\Dotenv::createImmutable($path);
  $dotenv->load();
}