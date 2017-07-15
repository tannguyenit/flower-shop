<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/templates/admin/inc/header.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/define.php";
	$querytsd="SELECT COUNT(id_theloai) AS tongsodong FROM theloai";
	$resulttsd=$mysqli->query($querytsd);
	$arrtsd=mysqli_fetch_assoc($resulttsd);
	$tongsodong=$arrtsd["tongsodong"];
	$row_count=ROW_COUNT;
	$sotrang=ceil($tongsodong/$row_count);
	$current_page=1;
	if(isset($_GET["current_page"])){
	$current_page=$_GET["current_page"];
	}
	$off_set=($current_page-1)*$row_count;
	$query="SELECT * FROM theloai LIMIT {$off_set},{$row_count}";
	$result=$mysqli->query($query);
	if(isset($_GET["true"])){
		$tt=$_GET["true"];
		echo "<p style='color:red;'>$tt</p>";
	}
	if(isset($_GET["delete"])){
		echo "<p style='color:red'>{$_GET['delete']}</p>";
	}
	if(isset($_GET["edit"])){
		echo "<p style='color:red'>{$_GET['edit']}</p>";
	}
?>
<div class="bottom-spacing">
	  <!-- Button -->
	<div class="float-left">
		<a href="addCat.php" class="button">
			<span>Thêm danh mục<img src="/banhoa/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
		</a>
	</div>
	<div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		<h2><span>Danh sách danh mục</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:15%; text-align: center;">ID</th>
						<th>Danh mục</th>
						<th style="width:27%; text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while($rowdm=mysqli_fetch_assoc($result)){
							$id=$rowdm["id_theloai"];
							$ten=$rowdm["Tentheloai"];
					?>
					<tr>
						<td class="align-center"><?php echo $id?></td>
						<td><a href=""><?php echo $ten?></a></td>
						<td align="center">
							<a href="editCat.php?edit=<?php echo $id?>">Sửa <img src="/banhoa/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="delCat.php?delete=<?php echo $id?>">Xóa <img src="/banhoa/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
			</form>
		 </div> <!-- End .module-table-body -->
	</div> <!-- End .module -->
		 <div class="pagination">           
					<div class="numbers">
						<span>Page:</span> 
						<?php
							for($i=1;$i<=$sotrang;$i++){
						?>
						<a href="indexCat.php?current_page=<?php echo $i?>"><?php echo $i?></a> 
						<span>|</span> 
						<?php
							}
						?>
					</div> 
					<div style="clear: both;"></div> 
				 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/banhoa/templates/admin/inc/footer.php';?>