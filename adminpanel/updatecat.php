<?php
$conn = mysqli_connect("localhost", "root", "", "clothing_store");

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['img'];

$sql = "UPDATE nav_categories SET name = '$name', img='$image' WHERE id = '$id'";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('Record updated successfully');</script>";
    header("Location: category.php");
}
else{
    echo "Error updating record: " . mysqli_error($conn);
}



?>