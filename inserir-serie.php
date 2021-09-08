<?php 

$pdo = new \PDO('sqlite:/home/alexoliveira/Workspace/apiSeries/database/database.sqlite');
$pdo->query("insert into series (id, nome) values (1, 'Lost')");