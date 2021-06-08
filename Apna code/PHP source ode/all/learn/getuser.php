<?php 
include ('Ajax.php');
$q=intval($_GET['q']);

$sel= "select * from tbl_oop_test where Id='$q'";
$result=$con->query($sel);

echo "<table border='1'> 
<tr>
<th>Id </th>
<th> Name</th>
</tr>";
while ( $row =$result->fetch_object()) {

echo "<tr>";
echo "<td>" .$row->Id."</td>";
echo "<td>" .$row->Name."</td>";
echo "</tr>";

echo "</table >";

	# code...
}

 ?>