<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/CS334/images/HeaderIcon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="LabSix.css">
<title>Tyler Duddy Lab 6</title>
<!--Tyler Duddy
	CS 0334
	Prof. DeNardis -->

<p>Tyler Duddy: FizzBuzz --> GoPitt, <a href="/CS334/txt_files/LabSix.txt" target="_blank">source code</a></p>
<p>---------------------------------------------------------------------</p>
</head>
<body>
<?php
for($i=1; $i<=100; $i++){
	if(($i % 3 == 0) && ($i % 15 != 0)){
		print "<b>Go</b><br>";
	} else if(($i % 5 == 0) && ($i % 15 != 0)){
		print "<b>Pitt</b><br>";
	} else if($i % 15 == 0){
		print "<b>Go Pitt</b><br>";
	} else {
		print "$i<br>";
	} // end for
}
?>
</body>
</html>