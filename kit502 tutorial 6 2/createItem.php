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
  <h1>Add Wine</h1>
</div>

<div class = "container p-2">
 <form method = "post" action= "ss6_engine.php">
<div class="mb-3">
    <label for =" wine_id" class ="form-label">Wine id</label>
    <input type ="number" class="form-control" id="wine_id" name="wine_id">
    </div>
    
    <div class="mb-3">
    <label for =" Name" class ="form-label">Wine Name</label>
    <input type ="text" class="form-control" id="Name" name="Wine Name">
    </div>
    
    <div class="mb-3">
    <label for ="twine" class ="form-label">Type ofWine</label>
    <input type ="text" class="form-control" id="twine" name="Type of Wine">
    </div>
    
    <div class="mb-3">
    <label for ="Quantity" class ="form-label">Quantity</label>
    <input type ="number" class="form-control" id="Quantity" name="Quantity">
    </div>
    
    <div class="mb-3">
    <label for ="price" class ="form-label">Price</label>
    <input type ="number" class="form-control" id="Price" name="Price">
    </div>
    <div class="mb-3">
    <label for ="Region" class ="form-label">Region</label>
    <input type ="text" class="form-control" id="Region" name="Region">
    </div>
    <button type ="submit" class="btn btn-dismiss" name="close">Close</button>
    <a href="ss6_Item.php" class="btn btn-primary" name="Add">Add</button>
</form>
 </div>
    </body>
    </html>
    