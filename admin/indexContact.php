<?php 
	require_once $_SERVER['DOCUMENT_ROOT'] .'/banhoa/templates/admin/inc/header.php';
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/define.php";
	$querytsd="SELECT COUNT(id_lienhe) AS tongsodong FROM lienhe";
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
	$query="SELECT * FROM lienhe LIMIT {$off_set},{$row_count}";
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
<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		<h2><span>Danh sách liên hệ</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:6%; text-align: center;">ID</th>
						<th>Fullname</th>
						<th style="width:30%">Số điện thoai</th>
						<th style="width:30%">Gmail</th>
						<th style="width:23%; text-align: center;">Nội dung</th>
						<th style="width: 10%; text-align: center;">Chức năng</th>						
					</tr>
				</thead>
				<tbody>
				<?php 
					while($rowUser=mysqli_fetch_assoc($result)){
						$id_lienhe=$rowUser["id_lienhe"];
						$Hoten=$rowUser["Hoten"];
						$Sodienthoai=$rowUser["Sodienthoai"];
						$Gmail=$rowUser["Gmail"];
						$Noidung=$rowUser["Noidung"];
				?>
					<tr>
						<td class="align-center"><?php echo $id_lienhe;?></td>
						<td><a href=""><?php echo $Hoten;?></a></td>
						<td><?php echo $Sodienthoai;?></td>
						<td><?php echo $Gmail;?></td>
						<td align="center"><?php echo $Noidung;?></td>
						<td align="center">
							<a href="delContact.php?delete=<?php echo $id_lienhe;?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa <img src="/banhoa/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
						
					</tr>
					<?php
					}
					?>
					
					
				   
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
							<a href="indexContact.php?current_page=<?php echo $i?>"><?php echo $i?></a> 
							<span>|</span> 
								<?php }?>
						</div> 
						<div style="clear: both;"></div> 
					 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/banhoa/templates/admin/inc/footer.php';?>