<?php
$conn = mysqli_connect("localhost", "root", "", "clothing_store");

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
$name = $_POST['name'];       
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "UPDATE products SET name = '$name', description ='$description', price='$price' WHERE id = '$id'";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('Record updated successfully');</script>";
    header("Location: product.php");
}
else{
    echo "Error updating record: " . mysqli_error($conn);
}



?>