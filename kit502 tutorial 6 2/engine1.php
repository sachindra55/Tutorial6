<?php
$servername = "ictteach-www.its.utas.edu.au";
$username = "kkkk42";
$password = "password";
$dbname = "kanwal";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE wine SET Name=?, Region=? WHERE id=?";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo "<script>
      window.loction.href='ss6_Item.php';
      alert('Item has been updated');
      </script>"
} 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>