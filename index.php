<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>Home</title> 
<link rel="shortcut icon" href="sck96.ico">
<link rel="stylesheet"type="text/css"href="style.css">
</head> 
<body  bgcolor="#B4C9C1" text="black">
<div id="navbar"> 
  <ul> 
	<li><a href="home.php">Home</a></li> 
	<li><a href="about.php">About Us</a></li> 
	<li><a href="contact.php">Contact</a></li> 
  </ul> 
</div> 

<?php
    // Odczytaj treść z pliku
	$content = file_get_contents('content.txt');
    $contentArray = explode(PHP_EOL, $content);
	$content11 = isset($contentArray[10]) ? $contentArray[10] : '';
  ?>

<div class="content">
    <center><h1><?php echo $content11; ?></h1></center>
  </div>
  
<?php
    // Odczytaj treść z pliku
    $content = file_get_contents('content.txt');
    $contentArray = explode(PHP_EOL, $content);
    $content1 = isset($contentArray[0]) ? $contentArray[0] : '';
    $content2 = isset($contentArray[1]) ? $contentArray[1] : '';
    $content3 = isset($contentArray[2]) ? $contentArray[2] : '';
	$content4 = isset($contentArray[3]) ? $contentArray[3] : '';
    $content5 = isset($contentArray[4]) ? $contentArray[4] : '';
    $content6 = isset($contentArray[5]) ? $contentArray[5] : '';
	$content11 = isset($contentArray[10]) ? $contentArray[10] : '';
  ?>

  <div class="content">
    <center><h2><?php echo $content4; ?></h2></center>
    <center><p><?php echo $content1; ?></p></center>
  </div>
  
  <div class="content">
    <center><h2><?php echo $content5; ?></h2></center>
    <center><p><?php echo $content2; ?></p></center>
  </div>
  
  <div class="content">
    <center><h2><?php echo $content6; ?></h2></center>
    <center><p><?php echo $content3; ?></p></center>
  </div>

</body> 
</html>
