<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
</head>

<body>

<?php

//conditional//	

$age = ('1994-12-01');

if ($age > 21) {
	?>
    <h2 style="color:green">You are of age! Have fun, but drink responsibly.</h2>
    <?php
} 

else {
	?>
    <h2 style="color:red">You are too young. How about a root beer?</h2>
    <?php
}

?>

</body>
</html>