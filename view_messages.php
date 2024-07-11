<?php require_once("includes/dp_connect.php") ?>
<link rel="stylesheet" href="css/footernav.css">

<?php include_once ("templates/nav.php")?>

<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/background.css">

<?php
if(isset($_GET ["Delid"])){
$Delid=$_GET["Delid"];

// sql to delete a record
$del_msg = "DELETE FROM users WHERE userid= '$Delid'LIMIT 1 ";

if ($conn->query($del_msg) === TRUE) {
  header("Location:view_messages.php");
  exit;

} else {
  echo "Error deleting record: " . $conn->error;
}
}
?>

<br><br>
<table  border="1px " cellpadding="5px" style="border: 1px ; width: 50%; border-collapse: collapse;">
    <tr>
        <thead>
            <th  >ID</td>
                <th>Fullname</th>
                <th>email</td>
                <th>password</th>
                <th>action</th>
            </tr>
        </thead>
    <tbody>
</div>
</div>
<?php


$selec_msg = "SELECT * FROM `users`";
$selec_msg_result = $conn->query($selec_msg);
$en =0;

if ($selec_msg_result->num_rows > 0) {
   
  // output data of each row
  while($selec_msg_row = $selec_msg_result->fetch_assoc()) {
    
    $en++;

    ?>
    <tr><!--To edit ,modify rows. If you want more rows type " tr"-->
        <td><?php print $en; ?>.</td>
       
        <td> <?php print  $selec_msg_row["fullname"]; ?> </td>
        <td> <?php print  $selec_msg_row["email"]; ?> </td> <!--To make the message show just a preview of your message you add
        .' ' .substr($select_msg_row) ["text_message"], 0 ,12) . '...' ;-->
        <td> <?php print  $selec_msg_row["password"]; ?> </td>
        <td> [<a href="edit_msgs.php?userid=<?php print  $selec_msg_row["userid"]; ?> ">Edit</a> ] [<a href="?Delid=<?php print $selec_msg_row["userid"]; ?>"> Del</a> ] </td>
    
    </tr>

    <?php
    }
    } else {
    echo "0 results";
    }
    $conn->close();
 ?>    
   </tbody>
   <thead>
            <th>Userid</td>
                <th>Fullname</th>
                <th>email</td>
                <th>password</th>
                <th>action</th>
            </tr>
        </thead>

</table>
