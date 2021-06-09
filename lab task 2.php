<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dobErr = "";
$name = $email = $gender = $comment = $dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name = "";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email = "";
    }
  }
    
  if (empty($_POST["dob"])) {
    $dob = "*Date of birth is required";
  } else {
    
    }
  

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>  
<legend> Name</legend>
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
 </FiElDsEt>
  <br><br>
  <fieldset>  
<legend> Email</legend>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  </FiElDsEt>
  <br><br>
  <fieldset>  
<legend> Date of birth</legend>
  Date of Birth: <input type="date" name="dob" value="<?php echo $dob;?>">
  <span class="error"><?php echo $dob;?></span>
  </FiElDsEt>
  <br><br>
  <fieldset>  
<legend> Blood Group</legend>
  <select name="bg" id="bg">
    <option value="A+">A+</option>
    <option value="A+">A-</option>
    <option value="B+">B+</option>
    <option value="B+">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB+">AB-</option>
    <option value="O+">O+</option>
    <option value="O+">O-</option>
  </select>
  </FiElDsEt>
  <br><br>
   <fieldset>  
	<legend> Degree</legend>
	<input type="checkbox" id="SSC" name="SSC" value="SSC">
  <label for="ssc"> SSC</label>
  <input type="checkbox" id="HSC" name="HSC" value="HSC">
  <label for="hsc"> HSC</label>
  <input type="checkbox" id="BsC" name="BsC" value="BsC">
  <label for="bsc"> BSc</label>
  <input type="checkbox" id="MsC" name="MsC" value="MsC">
  <label for="msc"> MSc</label>
  </FiElDsEt>
  <br><br>
  
  <fieldset>  
<legend> Gender</legend>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
  </FiElDsEt>
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>









