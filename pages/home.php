<?php

$pdo = new PDO('mysql:dbname=blog;host=localhost','root','');

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$res$pdo->query()