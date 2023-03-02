<?php
session_start();
//Retrive Data from Form:
$username=$_POST['username'];
$password=$_POST['password'];

//Database Connection:
$conn =  new mysqli("localhost","root","","login");
if($conn->connect_errno) {
    die("Connection Unsuccessful");
}
else {
   $stmt = $conn->prepare("select * from login_details where Username = ?");
   $stmt->bind_param("s",$username);
   $stmt->execute();
   $stmt_result=$stmt->get_result();
   $rows=$stmt_result->num_rows;

if($rows>0) {
   $data=$stmt_result->fetch_assoc();
   if($data['Username']==$username && $data['Password']==$password) {
      $_SESSION['logged']='yes';
      header("Location: home.php"); //Login Success
      exit;
   }
   else {
    echo "
    <p>Invalid Username or Password</p>

    ";
   }
} 
else {
  echo "
  <p>Username ".$username." Does not exist</p>
  ";
}      
}
?>

<html>
   <head>
      
      <title>Login Result</title>
      <style>
 p{
   color:red;
   text-align: center;
   font-size: 30px;
}
</style>
<meta name="viewport" content="width=device-width, inital-scale=1.0">
</head>
<body>


</body>
</html>
