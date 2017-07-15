
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/templates/admin/inc/header.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
	if(isset($_SESSION["id"])){
		$_SESSION["id"]=$_SESSION["id"];
	}
	$erro=0;
	$kt1=0;
	if(isset($_GET["edit"])){
		$id=$_GET["edit"];
		$query="SELECT * FROM login WHERE id={$id} LIMIT 1";
		$result=$mysqli->query($query);
		$arr=mysqli_fetch_assoc($result);
		$usernameS=$arr["Tendangnhap"];
		$fullnameS=$arr["Fullname"];
		if(isset($_POST["sua"])){
			$username=$_POST["username"];
			$fullname=$_POST["fullname"];
			$password=$_POST["password"];
			$queryu="SELECT Tendangnhap FROM login WHERE id!={$id}";
			$resultu=$mysqli->query($queryu);
			$kt=2;
			WHILE($arru=mysqli_fetch_assoc($resultu)){
				if($arru["Tendangnhap"]!=$username){
					$kt=0;
				}else{
					$kt=1;
					break;
				}
			}
			if($password!=null){
				if($_SESSION["Tendangnhap"]=="admin"){
					if($usernameS=="admin"){
						$update="UPDATE login set Tendangnhap='admin',Matkhau='{$password}',Fullname='{$fullname}' WHERE id={$id} LIMIT 1";
						$reupdate=$mysqli->query($update);
						if($reupdate){
							header("location:indexUser.php?edit=tin đã được sửa");
						}
						else{
							header("location:indexUser.php?edit=có lỗi xảy ra trong quá trình sửa tin");
						}
					}
					else{
						$update="UPDATE login set Tendangnhap='{$username}',Matkhau='{$password}',Fullname='{$fullname}' WHERE id={$id} LIMIT 1";
						$reupdate=$mysqli->query($update);
						if($reupdate){
							header("location:indexUser.php?edit=tin đã được sửa");
						}
						else{
							header("location:indexUser.php?edit=có lỗi xảy ra trong quá trình sửa tin");
						}
					}
				}else if($usernameS!="admin"&&$kt==0){
					if($usernameS==$_SESSION["Tendangnhap"]){
						$update="UPDATE login set Tendangnhap='{$username}',Matkhau='{$password}',Fullname='{$fullname}' WHERE id={$id} LIMIT 1";
						$reupdate=$mysqli->query($update);
						if($reupdate){
							header("location:indexUser.php?edit=tin đã được sửa");
						}
						else{
							header("location:indexUser.php?edit=có lỗi xảy ra trong quá trình sửa tin");
						}
					}else{
						$kt1=1;
					}
				}else if($usernameS!="admin"&&$kt==1){
					$erro=1;
				}
			}else{
				if($usernameS=="admin"){
					$update="UPDATE login set Tendangnhap='admin',Fullname='{$fullname}' WHERE id={$id} LIMIT 1";
					$reupdate=$mysqli->query($update);
				if($reupdate){
					header("location:indexUser.php?edit=tin đã được sửa");
				}
				else{
					header("location:indexUser.php?edit=có lỗi xảy ra trong quá trình sửa tin");
				}
				}else if($usernameS!="admin"&&$kt==0){
					if($usernameS==$_SESSION["Tendangnhap"]){
						$update="UPDATE login set Tendangnhap='{$username}',Fullname='{$fullname}' WHERE id={$id} LIMIT 1";
							$reupdate=$mysqli->query($update);
						if($reupdate){
							header("location:indexUser.php?edit=tin đã được sửa");
						}
						else{
							header("location:indexUser.php?edit=có lỗi xảy ra trong quá trình sửa tin");
						}
					}else{
						$kt1=1;
					}
				}else if($usernameS!="admin"&&$kt==1){
					$erro=1;
				}
			}
			
		}
	}
?>
<div class="grid_12">

	<div class="module">
		 <h2><span>sửa người dùng</span></h2>
		 <div class="module-body">
			<form action="" method="post" id="sForm">
				<?php
					if($usernameS=="admin"){
				?>
					<p>
					<label>Họ tên người dùng</label>
					<input type="text" class="input-medium" name="fullname"  value="<?php echo $usernameS;?>"/>
				</p>
				<p>
					<label>Mật khẩu</label>
					<input type="password" class="input-medium" name="password" id="password"/>
				</p>
				<p>
					<label>Xác nhận mật khẩu</label>
					<input type="password" class="input-medium" name="repassword" />
				</p>
				<fieldset>
					<input class="submit-green" type="submit" value="sửa" name="sua" /> 
					<input class="submit-gray" type="submit" value="Nhập lại" />
				</fieldset>
					
				<?php }else{?>
				<p>
					<?php if($erro==1){
						echo "<div style='color:red'>Tên người dùng này đã tồn tại</div>";
					}else if($erro=0){
						echo "";
					}
					if($kt1==1){
						echo "<div style='color:red'>bạn không phải là admin nên không có quyền sửa người dùng khác</div>";
					}else if($kt1==0){
						echo "";
					}
					?>
					<label>Tên tài khoản</label>
					<input type="text" class="input-medium" name="username" value="<?php echo $usernameS; ?>"/>
				</p>
				<p>
					<label>Họ tên người dùng</label>
					<input type="text" class="input-medium" name="fullname"  value="<?php echo $fullnameS;?>"/>
				</p>
				<p>
					<label>Mật khẩu</label>
					<input type="password" class="input-medium" name="password" id="password" />
				</p>
				<p>
					<label>Xác nhận mật khẩu</label>
					<input type="password" class="input-medium" name="repassword" />
				</p>
				<fieldset>
					<input class="submit-green" type="submit" value="sửa" name="sua" /> 
					<input class="submit-gray" type="submit" value="Nhập lại" />
				</fieldset>
				<?php }?>
			</form>
		 </div> <!-- End .module-body -->
<script type="text/javascript">	
	$(document).ready(function() {
		$("#sForm").validate({
			rules: {
				username: {
					required: true
				},
				fullname: {
					required: true
				},
				repassword: {
					equalTo:"#password"
				}
			},
			messages: {
				username: {
					required: "vui lòng nhập username"
				},
				fullname: {
					required:"vui lòng nhập fullname"
				},
				repassword: {
					equalTo:"vui lòng nhập mật khẩu trùng với mật khẩu trên"
				}
			}
		});
});
</script>
	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?
	include_once $_SERVER["DOCUMENT_ROOT"]."/teamplates/admin/inc/footer.php";
?>