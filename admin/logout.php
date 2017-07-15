<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/templates/admin/inc/header.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>
<?php
	if(isset($_SESSION["id"])){
		unset($_SESSION["id"]);
		unset($_SESSION["Tendangnhap"]);
		unset($_SESSION["Matkhau"]);
		header("location:/banhoa/index.php");
	}
?>
<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/templates/admin/inc/footer.php";
?>