<html>
<head>
<?php
//include a database file
include('db_conn.php');
</head>
<body>
//query for selecting/ retriving every row from the table customer
$query = "SELECT * FROM wine";

//run the SQL
//This query() function exeutes the query in the database
$stmt = $db->query($query);

//call a method "fetch"
//PDO::FETCH_ASSO: returns an array indexed by
while($row = $stmt-> fetch(PDO::FETCH_ASSOC)){
echo $row['Name'];
echo $row['Type'];
echo $row['Quantity'];
echo $row['Price'];
echo $row['Region'];
echo $row['Name'];
echo "<br>";
}
//close the database connection
$db=null;
?>
</body>
</html>