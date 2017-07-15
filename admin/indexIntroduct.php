<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/templates/admin/inc/header.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>	
<?php 
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/define.php";
	$querytsd="SELECT COUNT(id_hoa) AS tongsodong FROM hoa";
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
	
	
	if(isset($_GET["true"])){
		echo "<p style='color:red;'>{$_GET['true']}<p>";
	}
	if(isset($_GET["del"])){
		echo "<p style='color:red;'>{$_GET['del']}<p>";
	}
?>
<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="addIntroduct.php" class="button">
			<span>Thêm sản phẩm <img src="/banhoa/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
		  </a>
		  
		  <div class="clear"></div>
					<div>
						<br/>
						
						<form id="frmTimKiem" action="" method="POST">
						<?php
							if(isset($_POST['hienthi'])){
									header("location:indexIntroduct.php");
								}
							if(isset($_POST['timkiem'])){
								$tim = $_POST['tukhoa'];
							}else{
								$tim = '';
							} 
							
						?>
							
							Tìm kiếm: 	
							<input type="search"  name="tukhoa" value="<?php echo $tim?>" placeholder="Từ khóa sản phẩm"> 
							<input type="submit"  name="timkiem" value="Tìm kiếm"> 
							<input type="submit"  name="hienthi" value="Hiển thị tất cả">
							<br/>
						</form>
<script type="text/javascript">
			var menu=document.getElementById("selectDM");
				menu.onchange=function() 
				{
				var chosenoption=this.options[this.selectedIndex];
				if (chosenoption.value!=0) 
				{
				var val = chosenoption.value;
				document.location.href=val;
				}
				else
				{
					document.location.href="indexNews.php?cid=";
				}
			}
</script>
		
					</div>
	  </div>
	  <div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		<h2><span>Danh sách tin</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:6%; text-align: center;">ID</th>
						<th>Tên hoa</th>
						<th style="width:21%; text-align: center;">Hình ảnh</th>
						<th style="width:20%">Mô tả</th>
						<th style="width:15%; text-align: center;">Giá bán</th>
						<th style="width: 15%; text-align: center;">Chức năng</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 
					$query="SELECT * FROM hoa WHERE Tenhoa LIKE '%{$tim}%' ORDER BY id_hoa DESC LIMIT {$off_set},{$row_count}
					";
					$result=$mysqli->query($query);
						while ($rowtt=mysqli_fetch_assoc($result)){
							$id_hoa=$rowtt["id_hoa"];
							$tenhoa=$rowtt["Tenhoa"];
							$giaban=$rowtt["Giaban"];
							$anh=$rowtt["Hinhanh"];
							$mota=$rowtt["Mota"];
					?>
					<tr>
						<td class="align-center"><?php echo $id_hoa;?></td>
						<td><a href=""><?php echo $tenhoa;?></a></td>
						<td align="center"><img src="/banhoa/file/images/<?php echo $anh;?>" class="hoa" /></td>
						<td><?php echo $mota;?></td>
						<td><?php echo $giaban;?></td>
						<td align="center">
							<a href="editIntroduct.php?edit=<?php echo $id_hoa;?>">Sửa <img src="/banhoa/templates/admin/images/pencil.gif" alt="edit"/></a>
							<a href="delIntroduct.php?delete=<?php echo $id_hoa;?>">Xóa <img src="/banhoa/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
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
				<a href="indexIntroduct.php?current_page=<?php echo $i?>"><?php echo $i?></a> 
				<span>|</span> 
					<?php }?>
			</div> 
			<div style="clear: both;"></div> 
		 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/banhoa/templates/admin/inc/footer.php';?>