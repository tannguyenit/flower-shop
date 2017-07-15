<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/templates/admin/inc/header.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>	
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
	if(isset($_POST["submit"])){
		$ten=$_POST["ten"];
		$query="INSERT INTO nhom(Tennhom) VALUES('{$ten}')";
		$result=$mysqli->query($query);
		if($result){
			header("location:addColor.php?true=tin đã được thêm vào danh sách");
		}
		else{
			header("location:addColor.php?true=có lỗi xảy ra trong quá trình thêm tin");
		}
	}
?>
<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm danh mục màu</span></h2>
			
		 <div class="module-body">
			<form action="" method = "post" enctype="multipart/form-data" id="form">
				<p>
					<label>Tên danh mục màu (*)</label>
					<input type="text"  name ="ten" value="" class="input-medium" />
				</p>
			 
				<fieldset>
					<input class="submit-green" type="submit" name ="submit" value="Thêm" /> 
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
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
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/templates/admin/inc/footer.php";
?>	