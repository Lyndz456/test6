<?php require_once ("includes/dp_connect.php"); ?>
<br>

<?php require_once("templates/nav.php")?>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/footernav.css">
<?php


if(isset($_POST["register"])){

$fn = $_POST["fn"];
$email = $_POST["em"];
$pass = $_POST["pass"];



$insert_message = "INSERT INTO users (fullname, email, password) VALUES ('$fn', '$email', '$pass')";

if ($conn->query($insert_message) === TRUE) {
  //echo "New record created successfully";
  header("Location:view_messages.php");//when  the info is submitted the page reloads and seems quick
  exit();

} else {
  echo "Error: " . $insert_message . "<br>" . $conn->error;
}
}

$conn->close();
?>

<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

<br><label for="fullname">Fullname</label><br>
<input type="text" placeholder="Fullname" name="fn"> <br>

<br><label for="email">Email</label><br>
<input type="email" placeholder="Email Address" name="em"> <br>

<br><label for="password">Password</label><br>
<input type="password" placeholder= "Password" name="pass"><br>
<br>

<input type ="submit" name="register" value="Register" >
</form>




<?php
require_once("templates/footer.php")?>