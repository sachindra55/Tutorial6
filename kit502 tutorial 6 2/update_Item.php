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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
    
<!--External CSS file -->
	<link rel="stylesheet" href="style.css">
 <?php
// include thedatabase file
include('db_conn.php');?>
</head>
<body>
 <div class="container">
  <h1>update Item</h1>
</div>
<?php

if(isset($_GET['edit'])){
$id=$_GET['wine_id'];
$stmt=$db->prrepare("SELECT * FROM wine WHERE wine_id = ?");
$stmt->execute([$id]);
$item = $stmt->feth(PDO::FETEH_ASSOC);
};
?>

<div class = "container p-2">
 <form method = "post" action= "ss6_engine1.php">
<div class="mb-3">
    <label for =" wine_id" class ="form-label">Wine id </label>
    <input type ="number" class="form-control" id="wine_id" name="wine_id" value= "<?php echo $item['wine_id'];?>" required>
    </div>
    
    <div class="mb-3">
    <label for =" Name" class ="form-label">Wine Name  </label>
    <input type ="text" class="form-control" id="Name" name="Wine Name" value= "<?php echo $item['Name']; ?>" required
    </div>
    
    <div class="mb-3">
    <label for ="twine" class ="form-label">Type ofWine</label>
    <input type ="text" class="form-control" id="twine" name="Type of Wine" value= "<?php echo $item['twine']; ?>" required>
    </div>
    
    <div class="mb-3">
    <label for ="Quantity" class ="form-label">Quantity</label>
    <input type ="number" class="form-control" id="Quantity" name="Quantity" value= "<?php echo $item['Quantity']; ?>" required>
    </div>
    
    <div class="mb-3">
    <label for ="price" class ="form-label">Price</label>
    <input type ="number" class="form-control" id="Price" name="Price" value= "<?php echo $item['Price']; ?>" required>
    </div>
    <div class="mb-3">
    <label for ="Region" class ="form-label">Region</label>
    <input type ="text" class="form-control" id="Region" name="Region" value= "<?php echo $item['Region']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary" name="Add">update</button>
</form>
 </div>


</body>
</html>
