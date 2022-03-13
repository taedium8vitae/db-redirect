<?php
try
{
	$mysqlClient = new PDO('mysql:host=localhost;dbname=poll;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$sqlQuery = 'SELECT entries FROM entries_nb';
$entriesStatement = $mysqlClient->prepare($sqlQuery);
$entriesStatement->execute();
$entries = $entriesStatement->fetchAll();
foreach ($entries[0] as $entry) {
    $v1_entries = $entry;
}
foreach ($entries[1] as $entry) {
    $v2_entries = $entry;
}
if($v1_entries > $v2_entries) {
    //header("Location: link to v2");
    //die();
    echo "v2";
    $sqlQuery = 'UPDATE entries_nb SET entries = entries + 1 WHERE id = 2';
        $insertEntry = $mysqlClient->prepare($sqlQuery);
        $insertEntry->execute();
}elseif($v2_entries > $v1_entries) {
    $sqlQuery = 'UPDATE entries_nb SET entries = entries + 1 WHERE id = 1';
        $insertEntry = $mysqlClient->prepare($sqlQuery);
        $insertEntry->execute();
    //header("Location: link to v1");
    //die();
    echo "v1";
}else{
    $rand_v = rand(1, 2);
    echo "v".$rand_v." (random)";
    if($rand_v == 1) {
        $sqlQuery = 'UPDATE entries_nb SET entries = entries + 1 WHERE id = 1';
        $insertEntry = $mysqlClient->prepare($sqlQuery);
        $insertEntry->execute();
        //header("Location: link to v1");
        //die();
    }else{
        $sqlQuery = 'UPDATE entries_nb SET entries = entries + 1 WHERE id = 2';
        $insertEntry = $mysqlClient->prepare($sqlQuery);
        $insertEntry->execute();
        //header("Location: link to v2");
        //die();
    }
}