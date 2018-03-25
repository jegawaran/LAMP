
<html>
<head>
    <title>Jegathees lava</title>
</head>
<body>
<h1> Welcome to Jega Bank</h1>
<form id="atm" name="atm" method="post" action="deno.php">
Balance : <input type="text" name="balance" id="balance"> <br><br>
Amount Need : <input type="text" name="needamount" id="needamount"> <br><br>
<input type="submit"> <br><br>
</form>

</body>

</html>

<?php

//print_r($_POST['balance']);exit;


function getChanges($amt,$deno,$balance) { //print_r($amt);exit;
    $countdeno = sizeof($deno); //print_r($countdeno);exit;

    if($amt > 0) {
        $count =0;

        for($i=0;$i< $countdeno;$i++) {
            $count= $amt/$deno[$i];
            $amt = $amt % $deno[$i];
            if($count !=0) {
                echo $deno[$i].' X '.floor($count).' = '.$deno[$i] * floor($count);echo '<br>';
            }
        }

        echo 'Total Available balance'.$balance - $needAmount.' ooooo-----------';
    }
}

$balance = isset($_POST['balance'])?$_POST['balance']:'';
$needAmount = isset($_POST['needamount'])?$_POST['needamount']:'';

$denoValue= array(2000,1000,500,100,50,10);
getChanges($needAmount,$denoValue,$balance);