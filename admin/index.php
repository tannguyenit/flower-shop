<?php 
	require_once $_SERVER['DOCUMENT_ROOT']. '/banhoa/templates/admin/inc/header.php';
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>
            
<!-- Dashboard icons -->
<div class="grid_main_l">
	<a href="addIntroduct.php" class="dashboard-module">
		<img src="/banhoa/templates/admin/images/Crystal_Clear_write.gif" width="64" height="64" alt="edit" />
		<span>Thêm hoa</span>
	</a>
	
	<a href="addCat.php" class="dashboard-module">
		<img src="/banhoa/templates/admin/images/Crystal_Clear_files.gif" width="64" height="64" alt="edit" />
		<span>Thêm danh mục hoa</span>
	</a>
	<a href="addColor.php" class="dashboard-module">
		<img src="/banhoa/templates/admin/images/Crystal_Clear_files.gif" width="64" height="64" alt="edit" />
		<span>Thêm danh mục màu</span>
	</a>
	<div style="clear: both"></div>
</div> <!-- End .grid_7 -->

<!-- Account overview -->
<div class="grid_main_r">
	<div class="module">
			<h2><span>Quản trị hệ thống</span></h2>
			
			<div class="module-body">
				<p class="p">
					<strong>Phần mềm</strong> được viết trên nền tảng PHP&MySQL <br />
					<strong>Học viên thực hiện: </strong>Văn Quyền - Thanh Tùng<br />
					<strong>Email: </strong>vanquyen.dt13ctt02@gmail.com<br /> 
					<strong>Phone: </strong>0963.027.193<br />
				</p>
			</div>
	</div>
	<div style="clear:both;"></div>
	<div class="padding-bottom"></div>
</div> <!-- End .grid_5 -->
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/banhoa/templates/admin/inc/footer.php';?>            