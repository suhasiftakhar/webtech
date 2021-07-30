<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tutor Finder</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div class="header">
        <h1 >Online Tutor Finder</h1>
        <h4>Learn Teach Earn</h4>
    </div>
    
    <nav>        
        <ul>
            <li><a href="public_home.php"><img align="center" src="image/home.png"></a></li>            
        </ul>

        <ul class="r">
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
<table border="1" width="100%">
		<tr height="300px">
 		<td colspan="2" align="center">
		
 <?php 

session_start();

 $data=file_get_contents("data.json");
 $data=json_decode($data,true);

if (isset($_POST['submit'])) {
  foreach ($data as $row) {

   if ($row["username"]==$_POST['un'] && $row["password"]=$_POST['pass']) {
     $_SESSION['name'] =$row["name"];
     $_SESSION['email'] =$row["e-mail"];
     $_SESSION['un'] =$row["username"];
     $_SESSION['pass'] =$row["password"];
     $_SESSION['gender'] =$row["gender"];
     $_SESSION['dob'] =$row["dob"];


     header("location:Dashboard.php");
     }
    else{
    $msg="username or password invalid";
    // echo "<script>alert('uname or pass incorrect!')</script>";
     }
 }

}

 ?>

  
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <table align="center">
    
    <tr>
      <th colspan="2"><h2>Login</h2></th>
    </tr>
    <?php if(isset($msg)){?>
        <tr>
          <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
        </tr>
      <?php } ?>
    <tr>
      <td>username</td>
      <td><input type="text" name="un"></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="password" name="pass"></td>
    </tr>
    <tr>
      <td align="right" colspan="2">
         <hr>
         <input type="checkbox" name="checkbox" value="Remember Me">Remember Me <br>
        <input type="submit" name="submit" value="login">
         <a href="forgotPassword.php"> Forget Password?   

                      
         <?php  
          if(isset($message))  
           {  
             echo $message;  
            }  
          ?>  
  


      </td>
    </tr>
  </table>
  
</form>


		</td>
 		
 	</tr>
 	<tr>
 		<td colspan="3" align="center" height ="50px">Copyright @ 2021</td>
 		
 	</tr>
 </table>
</body>
</html>