<?php 
include ('Ajax.php');

$sel= "select * from tbl_oops";
$ex=$con->query($sel);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Ajax 
	</title>
	<script type="text/javascript">
		
function showUser(str){

	if (str=="") {
		document.getElementById('texthint').innerHTML="";
		return ;


	}else {

		if(window.XMLHttpRequest){

			xmlhttp= new XMLHttpRequest();

		}else {
			xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");


		}
		xmlhttp.onreadystatechange=function(){

			if (xmlhttp.readystate=== 4 && xmlhttp.status ===200 ) {
				document.getElementById("texthint").innerHTML=xmlhtp.responseText;
			}
		};
		xmlhttp.open("GET"."getuser.php?q="+str,true)
		xmlhttp.send();

	}
}

	</script>
</head>
<body>
<form>
	<select name="users" onchange="showUser(this.value)">
		<option value="">select a person<?php  while ($f = $ex->fetch_object()) { };?>
		</option>
		<option value="<?= $fu->Id;?>"><?= $fu->Name;?></option>
	</select>

</form>
<div id="texthint"> <b>Person data--</b></div>
</body>
</html>