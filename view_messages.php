<?php include_once ("templates/nav.php")?>

<br><br>
<table  border="1px " cellpadding="5px" style="border: 1px solid ; width: 50%; border-collapse: collapse;">
    <tr>
        <th colspan="2" >Fullname</td>
            <th>email</td>
            <th>password</td>
        </tr>
<?php


$select_msg = "SELECT * FROM users";
$select_msg_result = $conn->query($sql);

if ($select_msg_result->num_rows > 0) {
  // output data of each row
  while($select_msg_row = $select_msg_result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>    
<tr> </tr><!--To merge the forst two columns so that when you number , it appears under one line with item name-->
    <tr><!--To edit ,modify rows. If you want more rows type " tr"-->
        <th></th>
        <td>Book</td>
        <td>2</td>
        <td>300</td>
        <td>800</td>
    </tr>
    <tr>
    <th>2</th>
        <td>Pen</td>
        <td>7</td>
        <td>Ksh10</td>
        <td>Ksh70</td>
    </tr>
    <tr><!--th is basically for making somrthing apper in bold letters like that of a heading -->
        <th colspan="4">Total</td>
        <th>870</td>
    </tr>
</table>