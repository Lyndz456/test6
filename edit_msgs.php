<link rel="stylesheet" href="css/styles.css">

<?php require_once ("includes/dp_connect.php"); ?>
<br>

<?php require_once("templates/nav.php")?>

<?php

$userid=$_GET["userid"] ;//setting the userid  dynamically

$spot_msg = "SELECT * FROM `users` WHERE userid= '$userid' LIMIT 1" ;


$spot_msg_result = $conn->query($spot_msg);

$spot_msg_row = $spot_msg_result->fetch_assoc();

if(isset($_POST["update"])){

$fn = mysqli_real_escape_string($conn, $_POST["fn"]);
$email = mysqli_real_escape_string($conn, $_POST["em"]);
$pass = mysqli_real_escape_string($conn, $_POST["pass"]);
$userid = mysqli_real_escape_string($conn, $_POST["userid"]);

//die($userid);


$update_message = "UPDATE users SET fullname='$fn', email='$email', password='$pass' WHERE userid='$userid' LIMIT 1";//update statment

if ($conn->query($update_message) === TRUE) {
  //echo "New record created successfully";
  header("Location:view_messages.php");//when  the info is submitted the page reloads and seems quick
  exit();

} else {
  echo "Error: " . $update_message . "<br>" . $conn->error;
}
}

$conn->close();
?>

<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

<br><label for="fullname">Fullname</label><br>
<input type="text" placeholder="Fullname" name="fn" required value="<?php print $spot_msg_row["fullname"]; ?> ">  <br>

<br><label for="email">Email</label><br>
<input type="email" placeholder="Email Address" name="em" required value="<?php print $spot_msg_row["email"]; ?>" > <br>

<br><label for="password">Password</label><br>
<input type="text" placeholder= "Password" name="pass" required value="<?php print $spot_msg_row["password"]; ?>"> <br>
<br>

<input type ="submit" name="update" value="Update message" >
<input type ="hidden" name="userid" value="<?php print $spot_msg_row["userid"]; ?>" > <!--hides the data specified which is user id-->
</form>

<?php require_once("templates/footer.php")?>