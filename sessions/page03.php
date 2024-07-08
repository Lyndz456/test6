<?php
session_start();

if (isset ($_SESSION["fname"])){
    print 'Yes the session is alive';
    print '<br> <a href="page04.php">Destroy the session</a>';

}

else {print 'No the session was destroyed';

print
' <a href="page01.php">Create a new session</a>'; //you say age 1 cause thats where a session was initially made
}
