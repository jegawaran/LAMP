<?php 

function getChanges($amount,$denomination) {
	
	if($amount> 0) {
	$val = array();
	$demCount = sizeof($denomination);
	$count=0;
	$totalNotes =0;
	
		for($i=0;$i<$demCount;$i++) {
			$count = $amount/$denomination[$i];
			if(floor($count) !=0){
				$calValue = $denomination[$i] * floor($count);
				if($calValue !=0) {
				echo $denomination[$i].' X '.floor($count).' = '.$calValue.'<br>';
				}
			}
			$totalNotes += $count;
			$amount = $amount % $denomination[$i];		
		}		
	}
	else {
		echo 'Enter the proper amount '.$amount.' is not valid';
	}
	
	//echo $totalNotes;
	
}

$de= array(2000,1000,500,100,10,5);
getChanges(2910,$de);

?>