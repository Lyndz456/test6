
<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

<br><label for="fullname">Fullname</label><br>
<input type="text" placeholder="Fullname" name="fn"> <br>

<br><label for="email">Email</label><br>
<input type="email" placeholder="Email Address" name="em"> <br>

<br><label for="gen">Gender</label><br>
<select name="genderId" id="gen"></select>
<option value=""></option>

<input type="" placeholder= "gender" name="gen"><br>
<br>

<input type ="submit" name="register" value="Register" >
</form>

<?php



require_once("include/dp_connect,php");

