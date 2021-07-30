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
    <td>
      <form >
        <fieldset style="  width: 50% ;max-width: 50%;height:100%">
          <legend>PROFILE</legend>
            <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
            <table  class="table table-bordered">
            <tr>  
                              <th>Name</th>
                               <th>E-mail</th>  
                               <th>User name</th>
                               <th>Gender</th><br>   
                               <th>Date of birth</th>  
                                
                                 
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  

                          $data = json_decode($data, true);  
                
                          foreach($data as $row)  
                          {  
                             echo '<tr>
                              
                               <td>'.$row["name"].'</td>
                               <td>'.$row["e-mail"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               </tr>';  
                          }  
                            
                            
                          ?>  
                          <td><img src="user.png" height="150" width="150"><br></td>
                
              </tr>
              <tr>
                <td colspan="2"><li><a class="active" href="logout.php">Edit_Profile</a></li></td>
                
              </tr>
              
                
            </table>
             </div>
                 </div>
                
        </fieldset>
      </form>

    </td>
    
    
    
  </tr>

  <tr>
    <td colspan="3" align="center" height ="50px">Copyright @ 2021</td>
    
  </tr>
 </table>
 
</body>
</html>