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
           
            <li> <?php 
			 session_start();

             if (isset($_SESSION['un'])) {
             	echo "<a href='Dashboard.php'>Login in as ".$_SESSION['un']."</a>" ;
	          
	          

             }
            ?>
        </li>

        </ul>
    
 <table border="1"  width="100%">
 	<tr height="300px">
 		<td colspan="2" style="width: 30%" >
				<fieldset>
 				<table border="0">
 					<td height="300px" width="450px">
 						<b>Account</b>
 						<hr>
							  <ul>
            
            <li><a class="active" href="Dashboard.php">Dashboard</a></li><br>
            <li><a class="active" href="view_Profile.php">View profile</a></li><br>
            <li><a class="active" href="logout.php">logout</a></li>
                         
            
        </ul>
 				</table>
 			</fieldset>
		</td>
		<td align="center">
			 <?php 
			 //session_start();

             if (isset($_SESSION['un'])) {
             	
	           echo "<h1> Welcome ".$_SESSION['un']."</h1>";
	          

             }
            ?>

		</td>
 		
 	</tr>

 	<tr>
 		<td colspan="3" align="center" height ="50px">Copyright @ 2021</td>
 		
 	</tr>
 </table>
 
</body>
</html>