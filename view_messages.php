<?php include_once ("templates/nav.php")?>
<?php require_once("includes/dp_connect.php") ?>

<br><br>
<table  border="1px " cellpadding="5px" style="border: 1px solid ; width: 50%; border-collapse: collapse;">
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
        <td> [<a href="edit_msgs.php?userid=<?php print  $selec_msg_row["userid"]; ?> ">Edit</a> ] [Del] </td>
    
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
            <th colspan="2" >Userid</td>
                <th>Fullname</th>
                <th>email</td>
                <th>password</th>
            </tr>
        </thead>

</table>
