<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="anna hausfeld, portfolio, responsive design, dynamic web pages, php">
<meta name="description" content="Anna Hausfeld is developing skills designing responsive web pages that are dynamic and interactive.">
<title>Home</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">

<header>
<img src="images/anna_2012.jpg" width="125" height="115" alt="Anna Hausfeld" title="Anna Hausfeld" class="fltlft">
<h1>anna hausfeld</h1>
</header>
  
<div id="container">  

<div class="nav">
	<ul class="nav">
      <li><a href="../index.php">intro</a></li>
      <li><a href="../page2.php">page 2</a></li>
      <li><a href="../page3.php">page 3</a></li>
      <li><a href="../contact.php">contact</a></li>
    </ul>
</div><!--end of nav div-->  

<div id="sidebar1" class="fltrt">
<ul>
<li>Call US</li>
<li>707-762-8721</li>
</ul>
</div><!--end of sidebar1 div-->

<div id="content1">

<h1>Introduction</h1>
<p>I am taking Advanced Dreamweaver to learn how to create interaction web pages for business. Even if I don't do all the development I need to appreciate what is involved. Flexible, responsive, interactive, and dynamic. I am looking forward to learning more.
</p>

<h3>Simple PHP Examples</h3>

<?php
$txt1='Hello all.';
$txt2='This is my first PHP script!';
echo $txt1 . ' ' . $txt2;
?>

<p>Today is</p>

<?php
echo ( date('l, F dS Y.') );
?>


<?php
$t=date('H');
if ($t<'10')
{
	echo "Have a good morning.";
}
else if ($t<'20')
{
	echo "Have a good day.";
}
else
{
	echo "Have a good night.";
}
?>

<p>I am</p>
<?php
$decades=50;
$years=7;
$age=$decades+$years;
echo $age;
?>

<h4>Can I offer you a drink?</h4>

<?php
$age2=('1995-03-09');
if ($age2>21) {
	?>
    <h2>Congratulations! You are of age. Please drink responsibly.</h2>
    <?php
	}
else {
	?>
    <h2 style="color:red">You are not yet of age. How about a coke?</h2>;
    <?php
    }
?>

</div><!--end of content1 div-->
</div><!--end of container div--> 

<footer>
  <p  id="copyright">&copy; 2013 Anna Hausfeld. Developed with valid <a href="http://validator.w3.org/check?uri=referer" title="HTML checker">HTML</a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" title="CSS checker">CSS</a>.</p>
</footer>

</div><!--end of wrapper div-->

</body>
</html>