<?php
$maintenance = false;
try{
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=poll;charset=utf8',
    'root',
    'roo'
);
}
catch (Exception $e)
{
    die();
    $maintenance = true;
}
?>