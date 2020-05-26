<?php

require 'environment.php';

$config = array();

if(ENVIROMENT === 'development'){
    define('BASE_URL', 'http://localhost/');
    $config['dbname'] = 'projeto-uni9';
    $config['host'] = 'database';
    $config['dbuser'] = 'docker';
    $config['dbpass'] = 'docker123';
}

global $db;

try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}