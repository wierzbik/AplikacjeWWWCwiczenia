<?php

$db_user = 's145653';
$db_password = 'NoIDNFDAbqvH';
$db_name = 's145653';
try{
    $pdo = new PDO( 'mysql:host=localhost;dbname='.$db_name,$db_user,$db_password );
}
catch(PDOException $exception){
}
?>
