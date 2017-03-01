<?php 
//generate banners 
$jmlbanner = $_POST['jmlbanner'];
$b = 1;
	while ($b <= $jmlbanner ){	
		newpilihbanner($_POST["bnr".($b)]);
		$b++;
	}
?>
