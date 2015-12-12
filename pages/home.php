<?php

$pdo = new PDO('mysql:dbname=blog;host=localhost','root','');

$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$res = $pdo -> query('SELECT * FROM article');

//$count = $pdo->exec('INSERT INTO article SET titre="Mon titre",date="'.date('Y-m-d H:i:s').'"');

var_dump($count);

