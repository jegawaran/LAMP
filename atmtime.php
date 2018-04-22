<html>
<body>
<form id="atm" name="atm" method="post" action="atmtime.php">
Amount : <input type="text" name="amount" id="amount"><br><br>
Divide : <input type="text" name="divide" id="divide"><br><br>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php 

//print_r($_POST);EXIT;
$amount = isset($_POST['amount'])?$_POST['amount']:''; //9000;
$divide = isset($_POST['divide'])?$_POST['divide']:'';

$times = floor($amount/$divide);
$remind = $amount%$divide;

echo $amount.'  is  '.$times.' times divided and remaining money is  '.$remind;



?>