<?php 
	require_once $_SERVER['DOCUMENT_ROOT']. '/banhoa/templates/admin/inc/header.php';
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
	if(isset($_GET["edit"])){
		$id=$_GET["edit"];
		if(isset($_POST["sua"])){
			$ten=$_POST["ten"];
			$query="UPDATE nhom set Tennhom='{$ten}' WHERE id_nhom='{$id}'";
			$result=$mysqli->query($query);
			if($result){
				header("location:indexColor.php?edit=tin đã được sửa ");
			}
			else{
				header("location:indexColor.php?edit=có lỗi xảy ra trong quá trình sửa tin");
			}
		}
	}
?>
<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		 <h2><span>Sửa danh mục màu</span></h2>
			
		 <div class="module-body">
			<form action="" method = "post" enctype="multipart/form-data" id="form">
				<p>
					<label>Tên danh mục màu (*)</label>
					<input type="text"  name ="ten" value="" class="input-medium" />
				</p>
			 
				<fieldset>
					<input class="submit-green" type="submit" name ="sua" value="Sửa" /> 
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->
<script type="text/javascript">	
	$(document).ready(function() {
		$("#form").validate({
			rules: {
				ten: {
					required: true
				}
			},
			messages: {
				ten: {
					required: "vui lòng nhập tin vào"
				}
			}
		});
});
</script>
	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/banhoa/templates/admin/inc/footer.php';?>  