
<?php
print_r($_GET);
$ma=$_GET["manv"];
$madh=$_GET["madh"];
?>
<?php
function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return trim($_POST[$index]);
}
 $duyet=postIndex("duyet");
 $xoa=postIndex("xoa");
 ?>
 <?php
	try{
	$pdh=new PDO("mysql:host=localhost;dbname=webchuyenhang","root","");
	$pdh->query("set name 'utf8'");
	}
	catch(Exception $e){
		echo $e->getMessage(); exit;
	}
		//if (isset($_POST["duyet"]))
		
			$stmt=$pdh->prepare("UPDATE donhang set IDnvquanlydonhang=".$ma."where IDdonhang=".$madh);
			$stmt->execute();
			$n = $stmt->rowCount();
	if($n>=1)
		{
				echo"duyệt thành công";
				}
			else
				echo"duyệt thất bại";
		
	
		
?>
