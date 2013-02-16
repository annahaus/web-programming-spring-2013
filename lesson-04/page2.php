<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="anna hausfeld, portfolio, responsive design, dynamic web pages, php">
<meta name="description" content="Anna Hausfeld is developing skills designing responsive web pages that are dynamic and interactive.">
<title>PHP Examples</title>
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/fluid.css" rel="stylesheet" type="text/css">
<script src="css/respond.min.js"></script>
</head>

<body>
<?php
if ($_SERVER['REQUEST_METHOD' ] === 'POST' ){ 
?>

<div class="gridContainer clearfix">

<div id="header" class="gradient">
  <h1>Anna Hausfeld</h1>
  <h4>CS 53.11B Advanced Web programming with PHP/MySQL</h4>
</div><!--end of header div-->
  
<div id="navigation">
  <ul>
	  <li><a href="index.html">home</a></li>
      <li><a href="page2.php">php</a></li>
      <li><a href="page3.php">more php</a></li>
      <li><a href="contact.php">contact</a></li>
  </ul>
</div><!--end of navigation div-->

<div id="content1">

<h3>Simple PHP Examples</h3>

<?php
$txt1='<p>Hello all.';
$txt2=' This is my first PHP script!</p>';
echo $txt1 . ' ' . $txt2;
?>

<p>Today is</p>

<?php
echo ( date("<p>l, F dS Y.") );
?>


<?php
$t=date('H');
if ($t<'10')
{
	echo " Have a good morning.</p>";
}
else if ($t<'20')
{
	echo " Have a good day.</p>";
}
else
{
	echo " Have a good night.</p>";
}
?>

<h3>Are you of drinking age?</h3>

<?php
function age($birthdate) {
	return (strtotime('now') - strtotime($birthdate))/(60*60*24*365);
}
$age=age($_POST['birthdate']);
if ($age>21) {
	?>
    <h3 style="color:#69C;">According to the birthdate your entered, you are <?php echo intval($age) ?>. Have fun! Please drink responsibly.</h3>
<?php
	}
else {
	?>
    <h3 style="color:red;">Sorry, according to the birthdate you entered, you are <?php echo intval($age) ?> and not yet of age. How about a soda?</h3>
    <img src="">
<?php
    }
}

else {
?>

<form action="#" method="post">
<h2>Please enter your birthdate:</h2>
<input name="birthdate" type="date">
<input class="radius" name="submit" type="submit">
</form>

<?php  } ?>

</div><!--end of content1 div-->

<div id="footer">
  <p  id="copyright">&copy; 2013 Anna Hausfeld. Developed with valid <a href="http://validator.w3.org/check?uri=referer" title="HTML checker">HTML</a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" title="CSS checker">CSS</a>.</p>
</div><!--end of footer div-->

</div><!--end of gridContainer div-->

</body>
</html>