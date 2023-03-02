<html>
    <head>  
   
        <?php
        session_start();
        if(!isset($_SESSION['logged'])) {
            echo "
            <script>
            alert('Please Login First');
            window.location.href='login.html'
            </script>       
            ";

        }
        session_abort();
        session_start();
        if(isset($_SESSION['redirect'])) {
            echo "
            <script>
            alert('Password Changed');
            </script>";
            session_destroy();
        }
        
        ?> 
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>Login Success</title>
        <style>
            .form-background {
                background-color:#0024a574;
                padding: 20px;
                padding-top: 30px;
                width: 50%;
                border-radius: 10px;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: bold;

            }
           
            #changePass {
                display:none;
            }
            img {
                height: 150px;
                width:25%;
            }
            #add {
                background-color:violet;
                width:50%;
                padding-bottom:10px;
                border-radius:4px;
            }
            input {
                width: 30%;
                text-align: center;
                height: 40px;
                border-radius: 5px;
                font-family: 'Segoe UI';
                font-weight: bold;
            }
            button {
                width:10%;
                height: 40px;
                background-color:greenyellow;
                border-radius: 5px;
                font-weight: bold;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            @media(max-width:700px) {
                #add {
                    padding: 2px;
                    width: 90%;
            }
            button {
                width:25%;
                height:50px;
            }
            .form-background {
                padding: 20px;
                width: 80%;
                }
                input {
                width: 50%;
                height: 45px;
                }
        }
        </style>

    </head>
    <body>
        
        <center>
            <h2>Login Successful!</h2>
            <h2>You can modify the contents</h2>
            <div id="add">
            <br><br>
            <form action="addimage.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image">
                <button name="upload" type="submit">Add</button>
            </form>
            </div>
            <br><br>
              <br><br>
        <a href="logout.php">
            <button>Log Out</button>
        </a>  <pre></pre>

        <button onclick="changePass()">Change Password</button>
        <br><br>
        <form id="changePass" method="post" action="changepass.php">
        <div class="form-background">
         <input type="text" name="username" placeholder="Username" required> <br><br>
         <input type="text" name="newpass" placeholder="New Password" required><br><br>
         <button id="changebtn" type="submit">Change</button>
    
        </div>
        </form>
     
        </center>
     <script>
        function changePass() {
            document.getElementById("changePass").style.display="block";
            document.getElementById("changebtn").style.width="20%";
        }
     </script> 
    </body>
</html>