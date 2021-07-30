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

   if ($row["e-mail"]=$_POST['email']) {
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

		<br />  
           <div class="container" style="width:500px;">  
                                
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br /> 
                      <fieldset> 
                     <legend>FORGET PASSWORD</legend> 
                     
                     <label>Enter Email</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     

 


                   <hr>
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /> 
                                        
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  


		</td>
 		
 	</tr>

 	<tr>
 		<td colspan="2" align="center" height ="50px">Copyright @ 2021</td>
 		
 	</tr>
 </table>
</body>
</html>

      