<?php
//Retrive Data from Form:
$username=$_POST['username'];
$password=$_POST['password'];
//Database Connection:
$conn =  new mysqli("sql12.freesqldatabase.com","sql12602327","Latn1xmUp8","sql12602327");

if($conn->connect_errno) {
    die("Connection Unsuccessful");
}
else {
    $stmt=$conn->prepare(
        "insert into login_details(Username,Password)
        values(?,?)");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        echo "
        <center>
        <h2>Sign Up Successful!</h2>
        <a href='login.html'>
        <button>Go to Login</button>
        </a>
        ";
    }
function addImage() {
    $image=$_POST['image'];
    echo $image;
}
?>
<html>
    <head>
        <title>Sign Up Successful</title>
        <style>
            button {
                width:30%;
                height: 50px;
                background-color:greenyellow;
                border-radius: 5px;
                font-weight: bold;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            </style>
    </head>
    </html>
