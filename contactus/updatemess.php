<?php
$conn = mysqli_connect("localhost", "root", "", "clothing_store");

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
$id = $_POST['id'];
$name = $_POST['name'];       
$email = $_POST['email'];
$messages = $_POST['message'];

$sql = "UPDATE contact_us SET name = '$name', email ='$email', message='$messages' WHERE id = '$id'";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('Record updated successfully');</script>";
    header("Location: fetchmessages.php");
}
else{
    echo "Error updating record: " . mysqli_error($conn);
}



?>