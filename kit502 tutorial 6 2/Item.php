<!DOCTYPE html>
<html lang="en">
<head>
     <title>Wines List</title>
      <!-- meta tag -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootsrap CSS-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!--External CSS file -->
	<link rel="stylesheet" href="style.css">
 <?php
// include thedatabase file
include('db_conn.php');?>
</head>

<body>
       
<nav class="navbar navbar-expand-sm navbar-dark bg-black fixed-top">
    <a class="navbar-brand" href="#">AusWine</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>                       
      </button>
  
  <div class="collapse navbar-collapse" id="myNavbar">
    <div class="navbar-nav"s>
    	<a  href="index.html" class="nav-item nav-link">Home</a>
        <a  class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#myModal">registartion</a>
      <a  href="Wines.php" class="nav-item nav-link">Wines</a>
    <a  href="Detail.html" class="nav-item nav-link">Detail</a>
    
  </div>
  </div>
</nav>
<br>
<br>
<br>
<div class ="container">
<h1>Wine List</h1>
</div>

<div clas="container p-2">
<a href="ss6_createItem.php" class="btn btn-success" data-bs-toggle="model" data-bs-target="#myModel1">Add a new wine </a>
 <table class="table">
<tr>
 <td><h4> wine_id</h4></td>
 <td><h4> Name</h4></td>
 <td><h4> Type</h4></td>
 <td> <h4>Quantity</h4></td>
 <td> <h4>Price</h4></td>
 <td> <h4>Region</h4></td>
 <td> <h4>Action</h4></td>
</tr> 
<tr>
   <td>1</td>
   <td> Allegiane Wines</td>
   <td>Red Wine </td>
   <td>10</td>
   <td>40</td>
   <td>South Australia</td>
   <td>
 <a href="delete_Item.php" Class="btn btn-danger" name="delete">Delete</a>
 </td>
 <td>
 <a href="update_Item.php"  Class="btn btn-primary" id="edit" name="edit">Edit</a>
 </td>
</tr>
 
 <tr>
   <td>2</td>
   <td> valley Pinot noir 2020</td>
   <td>Red Wine </td>
   <td>5</td>
   <td>28</td>
   <td>Tasmania</td>
    <td>
 <a href="delete_Item.php" Class="btn btn-danger" name="delete">Delete</a>
 </td>
 <td>
 <a href="update_Item.php"  Class="btn btn-primary" name="edit">Edit</a>
 </td>

</tr>
 
 
 <tr>
     <td>3</td>
   <td> White Duck</td>
   <td>White Wine</td>
   <td>9</td>
   <td>18</td>
   <td>NSW</td>
 <td>
 <a href="delete_Item.php" Class="btn btn-danger" name="delete">Delete</a>
 </td>
 <td>
 <a href="update_Item.php"  Class="btn btn-primary" name="edit">Edit</a>
 </td>

</tr>
 
 <tr>
<td>4</td>
   <td> Andrew Garret</td>
   <td>Sparkling</td>
   <td>8</td>
   <td>27</td>
   <td>SA</td>
   
 <td>
 <a href="delete_Item.php" Class="btn btn-danger" name="delete">Delete</a>
 </td>
 <td>
 <a href="update_Item.php"  Class="btn btn-primary" name="edit">Edit</a>
 </td>

</tr>
 


 

<?php
// query for selecting /retrieving every row from the table wine
$query= "SELECT * FROM wine";
// run the SQL
//query ()<-function to execute the query in database
$stmt=$db->query($query);
//call a method Fetch
//while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
<tr>
<td> <?php echo $row['wine_id'];?></td>
<td> <?php echo $row['Name'];?></td>
<td> <?php echo $row['Type'];?></td>
<td> <?php echo $row['Quantity'];?></td>
<td> <?php echo $row['Price'];?></td>
<td> <?php echo $row['Region'];?></td>
</tr>
<?php} ?>
 
</table>
</div>

</body>
</html>