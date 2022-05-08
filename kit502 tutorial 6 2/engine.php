<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('db_conn.php');?>
</head>
<body>
<?php
include('db_conn.php');

if(isset($_POST['Add'])){
$name=$_POST['Name'];
$type=$_POST['twine'];
$quan=$_POST['Quantity'];
$price=$_POST['Price'];
$reg=$_POST['Region'];
$sql = "INSERT INTO wine (Name, twine,Quantity, Price, Region) VALUES(?,?,?,?,?)";
$stmt=$pdo->prepare($sql);
$stmt->execute([$name, $type,$quan,$price,$reg,]);

echo "<script>
      window.loction.href='ss6_Item.php';
      alert('Item has been updated');
      </script>"
}
?>
</body>
</html>