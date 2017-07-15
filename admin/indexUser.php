<?php 
	require_once $_SERVER['DOCUMENT_ROOT'] .'/banhoa/templates/admin/inc/header.php';
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/define.php";
	$querytsd="SELECT COUNT(id) AS tongsodong FROM login";
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
	$query="SELECT * FROM login";
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
                      <a href="addUser.php" class="button">
                      	<span>Thêm người dùng <img src="/banhoa/templates/admin/images/plus-small.gif" alt="Thêm tin mới"></span>
                      </a>
                  </div>
                  <div class="clear"></div>
            </div>
            
            <div class="grid_12">
                <!-- Example table -->
                <div class="module">
                	<h2><span>Danh sách người dùng</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="" method = "post" enctype="multipart/form-data" id="form">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:8%; text-align: center;">ID</th>
                                    <th>Tên tài khoản</th>
									<th>Họ và tên</th>
                                    <th style="width:20%; text-align: center;">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php 
									while($rowUser=mysqli_fetch_assoc($result)){
										$id_user=$rowUser["id"];
										$username=$rowUser["Tendangnhap"];
										$fullname=$rowUser["Fullname"];
								?>
                                <tr>
                                    <td class="align-center"><?php echo $id_user;?></td>
                                    <td><?php echo $username?></td>
									<td><?php echo $fullname?></td>
                                    <td align="center">
                                        <a href="editUser.php?edit=<?php echo $id_user;?>">Sửa <img src="/banhoa/templates/admin/images/pencil.gif" alt="edit" /></a>
                                        <a href="delUser.php?delete=<?php echo $id_user;?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa <img src="/banhoa/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
								<?php } ?>
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
							<a href="indexUser.php?current_page=<?php echo $i?>"><?php echo $i?></a> 
							<span>|</span> 
								<?php }?>
						</div> 
						<div style="clear: both;"></div> 
					 </div>
                
			</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/banhoa/templates/admin/inc/footer.php';?>