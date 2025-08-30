<?php
$conn = mysqli_connect("localhost", "root", "", "clothing_store");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$image= $_POST['img'];
$alt_text = $_POST['alt_text'];

$sql = "UPDATE carousel SET img = '$image', alt_text='$alt_text' WHERE id = '$id'";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Record updated successfully');</script>";
    header("Location: adminpage.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>