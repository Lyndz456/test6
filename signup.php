<body>
    

<?php include_once("templates/nav.php");?> <!-- to access similar content-->
<link rel="stylesheet" href="css/styles.css">  
<link rel="stylesheet" href="css/infopage.css">
<link rel="stylesheet" href="css/footernav.css">

<h2>Sign  Up</h1>

    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

    <br><label for="fullname">Fullname</label><br>
    <input type="text" placeholder="Fullname" name="fn" maxlength="" required> <br>

    <br><label for="email">Email</label><br>
    <input type="email" placeholder="Email Address" name="em"> <br>

    <br><label for="role">Role</label><br>
    <input type="role" placeholder="Role" name="rol"> <br>

<?php  require_once("includes/dp_connect.php");

    $sel_role = "SELECT *FROM roles ORDER BY roleid ASC";
    $sel_role_res = $conn->query($sel_role);
    while($sel_role_row = $sel_role_res->fetch_assoc()){
    }
    ?>
    <option value="<?php print $sel_role_row["roleid"];?>"> <?php print $sel_role_row["role"]; ?></option>

    <option value=""></option>


    <input type ="submit" name="register" value="Register" >
</form>


</body>