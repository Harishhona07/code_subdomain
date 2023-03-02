<?php

$username=$_POST['username'];
$newpass=$_POST['newpass'];

$conn = new mysqli("localhost","root","","login");
if($conn->connect_errno) {
    die("Unable to connect Database");
}
else {
    $stmt = $conn->prepare("select * from login_details where Username = ?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    $rows=$stmt_result->num_rows;
    if($rows>0) {
        $data=$stmt_result->fetch_assoc();
        if($data['Username']==$username) {
               $stmt = $conn->prepare(
                "update login_details
                set `password`=?
                where username=?"
    );
    $stmt->bind_param("ss",$newpass,$username);
    $stmt->execute();
    session_start();
    $_SESSION['redirect']="changepass";
    header('Location: home.php'); 
}
    
}
else {
    echo "
    <center>
     <h1>Username: $username does not exist</h1>
     </center>
   ";
}
}

?>