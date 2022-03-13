<?php
//OPTIONS
$db_host = "localhost";
$db_name = "poll";
$db_username = "root";
$db_password = "roo";
$errorPage = "google.com";


$maintenance = false;
try{
$mysqlConnection = new PDO(
    'mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8',
    $db_username,
    $db_password
);
}
catch (Exception $e)
{
    $maintenance = true;
    die();
}
if($maintenance == true) {
    ?>
        <!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Shineonpoll</title>
    </head>
    <body>
        <h1>swag</h1>
    </body>
</html>
    <?php
}else{
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Shineonpoll</title>
    </head>
    <body>
        <h1>swag</h1>
    </body>
</html>
<?php
}
?>