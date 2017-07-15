<?php
	ob_start();
?>
<?php 
	include_once $_SERVER["DOCUMENT_ROOT"].'/banhoa/function/dbconnection.php';
	if(isset($_GET["delete"])){
		$id=$_GET["delete"];
		$query="DELETE FROM login where id='{$id}'";
		$result=$mysqli->query($query);
		if($result){
			header("location:indexUser.php?delete=tin đã được xóa");
		}
		else {
			header("location:indexUser.php?delete=có lỗi xãy ra khi xóa tin");
		}
	}
?>

<?php ob_end_flush()?>