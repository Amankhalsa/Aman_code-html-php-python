<?php 
include ('Ajax.php');

$sel = "SELECT * FROM tbl_oop_test";

$ex = $con->query($sel);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		Ajax 
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<script type="text/javascript">		
function showUser(str){
	if (str == "") {
		document.getElementById('txtHint').innerHTML ="";		 
		 return;
	}else 
	{
		if(window.XMLHttpRequest)
		{
//var  xmlhttp = new XMLHttpRequest();
var  xhttp = new XMLHttpRequest();
		}
	// 	else 
	// 	{
	// xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
	// 	}
		xhttp.onreadystatechange = function()
		{

			//if(xmlhttp.readyState == 4 && xmlhttp.status == 200 )
			if(this.readyState == 4 && this.status == 200 ) 
			{
				document.getElementById("txtHint").innerHTML = this.responseText;
			}
		};

		xhttp.open("GET","getuser.php?q="+str, true);
		xhttp.send();

	}
}

	</script>
</head>
<body>
<form enctype="multipart/form-data">
	<select name="users" onchange="showUser(this.value)">
<option value="">select a person</option>
	<?php  
		while($fu = $ex->fetch_object()) { 
				?>
		<option value="<?php echo $fu->Id;?>"><?php echo $fu->Name;?></option>
		<?php 
		}
		?>

	</select>

</form>
<br>
<div id="txtHint"> <b>Person data</b></div>
</body>
</html>
