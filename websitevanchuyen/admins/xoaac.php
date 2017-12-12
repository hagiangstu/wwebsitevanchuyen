<?php
print_r($_GET);
$account=$_GET["ten"];
?>
 <?php 
	try{
	$pdh=new PDO("mysql:host=localhost;dbname=webchuyenhang","root","");
	$pdh->query("set name 'utf8'");
	}
	catch(Exception $e){
		echo $e->getMessage(); exit;
	}
		
		
			$stmt=$pdh->prepare("DELETE FROM `webchuyenhang`.`account` WHERE `account`.`Username` =".$account);
			$stmt->execute();
			$n = $stmt->rowCount();
	if($n>=1)
		{
				echo"xóa thành công";
				}
			else
				echo"xóa thất bại";
		
	
		
?>