<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My Music</title>
</head>

<body>
<h1>Music Artists</h1>

<?php
require('connection.php');
$music = $dataconnection->query("select artist from artists");
while ($row = $music->fetch_object()) {
	echo '<p>'.$row->artist.'</p>';
}
$dataconnection->close();

?>

</body>
</html>