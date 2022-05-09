<?php
//Define varible to where the database file is
$dbFile='/var/www/html/kkkk42/phpliteadmin/db/sc110.db';
try{
//define PDO
$db= new PDO("sqlite:$dbFile");
//set the PDO error mode to exception
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
echo "connected successfully";
}catch(PDOException $e){
//send error message when connection failed
echo "connection failed: " . $e->getMessage();
}
?>
