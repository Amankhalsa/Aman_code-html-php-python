<?php 

include('Ajax.php');

$q = intval($_GET['q']);

$sel = "SELECT * FROM `tbl_oop_test` WHERE 'Id' ='$q'";

$result = $con->query($sel);

echo "<table border='1' > 
<tr>
<th> Name</th>
<th> Company</th>
<th> income</th>

</tr>";
while ($row = $result->fetch_object())
 {
echo "<tr>";
echo "<td>" .$row->Name."</td>";
echo "<td>" .$row->company."</td>";
echo "<td>" .$row->Income."</td>";
echo "</tr>";
echo "</table >";


}

 ?>