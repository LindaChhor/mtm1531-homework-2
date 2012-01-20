<?php

//this will make error messages visible on Edumedia
//It's temporary and should be deleted when you've fixed your errors
/*error_reporting(-1);
ini_set('display_errors', 'on');*/

//var_dump($_POST);

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Forms</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>

<form action="forms.php" method="post">
	<p><strong><h1>Supa Calculatar</strong></h1></p>
	<div class ="num1">
        <label for="firstnum" >Number 1</label>
        <input id="firstnum" name="firstnum">
    </div><p>
    <div class ="num2">
        <label for="secondnum">Number 2</label>
        <input type="numbers" id="secondnum" name="secondnum">
    </div>
    
    <p><label for="symbols">select</label>
    	<select id="symbols" name="symbols">
        <option value="x">x</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
    </select>
   
   <p> <button type="submit">calculate</button>
</form>


<?php if (!empty($_POST['firstnum']) && !empty($_POST['secondnum'])) : ?>

	<?php
	$firstnum = $_POST['firstnum'];
    $secondnum = $_POST['secondnum'];
    $symbols = $_POST['symbols']; ?>

    <?php if ($_POST['symbols'] == 'x') : ?> 
    <?php $sum_total = $firstnum * $secondnum; ?>
    <p id="results">The numbers <?php echo $_POST['firstnum']; ?> x <? echo $_POST['secondnum'];?> = <?php print ($sum_total); ?></p>
    <span id="results">The 13 Percent Tax = <?php print number_format ($sum_total * 0.13); ?>  </span>
    
	<?php elseif ($_POST['symbols'] == '+') : ?>
    <?php $sum_total = $firstnum + $secondnum; ?>
    <p id="results">The numbers <?php echo $_POST['firstnum']; ?> + <? echo $_POST['secondnum'];?> = <?php print ($sum_total); ?></p>
	<span id="results">The Percent Tax = <?php print number_format ($sum_total * 0.13); ?> </span>
    
    <?php elseif ($_POST['symbols'] == '-') : ?>
    <?php $sum_total = $firstnum - $secondnum; ?>
    <p id="results">The numbers <?php echo $_POST['firstnum']; ?> - <? echo $_POST['secondnum'];?> = <?php print ($sum_total); ?></p>
	<span id="results">The 13 Percent Tax = <?php print number_format ($sum_total * 0.13); ?> </span>
    
    <?php elseif ($_POST['symbols'] == '/') : ?>
    <?php $sum_total = $firstnum / $secondnum; ?>
    <p id="results">The numbers <?php echo $_POST['firstnum']; ?> / <? echo $_POST['secondnum'];?> = <?php print ($sum_total); ?></p>
	<span id="results">The 13 Percent Tax = <?php print number_format ($sum_total * 0.13); ?> </span>
  
    <?php else : ?>
        
       
        
<?php endif; ?>
 
<?php endif; ?>
    
    


</body>
</html>