<?php
$conn = mysqli_connect("localhost", "root", "", "clothing_store");

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
$id = $_POST['id'];

$email = $_POST['email'];
$whatsappno = $_POST['whatsappno'];

$sql = "UPDATE newsletter SET  email='$email', whatsappno='$whatsappno' WHERE id = '$id'";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('Record updated successfully');</script>";
    header("Location: fetchnewsletter.php");
}
else{
    echo "Error updating record: " . mysqli_error($conn);
}



?>