<?php

session_start();
if (isset($_SESSION["fname"])){

    print 'Hey' . $_SESSION ["fname"];

    print' <br>
    <a href="page03.php">Go tp page 3</a>';
}
else{
    header("Location: page_03.php");
    exit();
}


