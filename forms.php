<?php

//this will make error messages visible on Edumedia
//It's temporary and should be deleted when you've fixed your errors
/*error_reporting(-1);
ini_set('display_errors', 'on');*/

var_dump($_POST);

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Forms</title>
</head>

<body>

<form action="forms.php" method="post">

	<label for="firstnum">Number 1</label>
    <input id="firstnum" name="firstnum">
    
    <label for="secondnum">Number 2</label>
    <input type="numbers" id="secondnum" name="secondnum">
     
    <label for="symbol">select</label>
    <select id="symbol" name="secondnum">
        <option value="t">x</option>
        <option value="a">+</option>
        <option value="s">-</option>
        <option value="d">/</option>
    </select>
    
    <button type="submit">calculate</button>
</form>

<?php if (!empty($_POST['firstnum']) && !empty($_POST['secondnum'])) : ?>

<?php

$firstnum = 10;
$secondnum = 20;
$sum_total = $firstnum * $secondnum;

print ($sum_total);

?>
    
    <p><strong>do the numbers <?php echo $_POST['firstnum']; ?> and <? echo $_POST['secondnum'];?> equals that? </strong></p>
   
    <?php if ($_POST['t'] == '*') : ?>
    	<p>even number</p>
        
    <?php elseif ($_POST['a'] == '+') : ?>
    	<p>What an odd number</p>
        
   <?php else : ?>
   	<p>I might be wrong</p>
    
   <?php endif; ?>
    
    
 	<?php
		$moon_diff = $_POST['secondnum'] * firstnum;
	?>
    
 	<p><?php echo $_POST['firstnum']; ?> has <?php echo $moon_diff; ?> the this </p> 
    
 <?php endif; ?>    


if symbol == t
  total = firstnum * secondnum
elseif symbol = a
  total = 

</body>
</html>