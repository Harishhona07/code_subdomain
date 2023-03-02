<?php

//Database Connection:
$conn=new mysqli("localhost","root","","login");
if($conn->connect_errno) {
    die("Connection error");
}
else {
    $stmt = $conn->prepare("insert into image_uploads(name)
     values (?)");
// Bind the parameters
$stmt->bind_param("s", $name);
$name=$_FILES['image']['name'];
// Assign the file data to variables
$name = $_FILES['image']['name'];
$image = file_get_contents($_FILES['image']['tmp_name']);
// Execute the statement
$stmt->execute();
header("Location:success.php");
}

?>