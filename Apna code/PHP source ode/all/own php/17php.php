<!DOCTYPE html>
<html>
<head>
	<title>Multi Dimensional Array in PHP  </title>
</head>
<body>
<h1><mark>Multi Dimensional Array in PHP</mark></h1>
<?php 
		$site =["fname"=> "amanpreet",
		"type"=>array("first"=>"educational"),  // 2nd array atart here 
"social"=> ["google"=>"gmail.com",
		"youtube"=>"youtube.com",
		"fb"=>"facebook.com"
	]
];

?>
<pre>
<?php
print_r($site);
 ?>
</pre>
<h2>using echo  print site </h2>
<?php
echo $site["social"]["google"];
  ?>
</body>
</html>