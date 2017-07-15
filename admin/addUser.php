<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/banhoa/templates/admin/inc/header.php';?>
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
	$erro=0;
	$kt2=0;
	if(isset($_POST["them"])){
		$Tendangnhap=$_POST["Tendangnhap"];
		$fullname=$_POST["fullname"];
		$password=$_POST["password"];
		$gmail=$_POST["gmail"];
		$queryu="SELECT Tendangnhap FROM login";
		$resultu=$mysqli->query($queryu);
		$kt=2;
		WHILE($arru=mysqli_fetch_assoc($resultu)){
			if($arru["Tendangnhap"]!=$Tendangnhap){
				$kt=0;
			}else{
				$kt=1;
				break;
			}
		}
		if($kt==0){
			if($_SESSION["Tendangnhap"]=="admin"){
				$query="INSERT INTO login(Tendangnhap,Matkhau,Fullname,Gmail) VALUES('{$Tendangnhap}','{$password}','{$fullname}','{$gmail}')";
				$result=$mysqli->query($query);
				if($result){
				header("location:indexUser.php?true=tin đã được thêm vào danh sách");
				}
				else{
					header("location:indexUser.php?true=có lỗi xảy ra trong quá trình thêm tin");
				}
			}else{
				$kt2=1;
			}
			
		}else if($kt==1){
			$erro=1;
		}
	}
?>
<!-- Form elements -->   
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>Thêm người dùng</span></h2>
                        
                     <div class="module-body">
				
                        <form action="" method = "post" enctype="multipart/form-data" id="form">
                            
                            <p>
							<?php if($erro==1){
								echo "<div style='color:red'>Tên người dùng này đã tồn tại</div>";
								}else if($erro=0){
									echo "";
								}
								if($kt2==1){
									echo "<div style='color:red'>bạn không phải là admin nên không có quyền thêm người dùng mới</div>";
								}else if($kt2==0){
									echo "";
								}
							?>
                                <label>Tên tài khoản</label>
                                <input type="text"  name="Tendangnhap" id ="Tendangnhap" class="input-medium" value="<?php if(isset($_POST['Tendangnhap'])){echo $Tendangnhap;}?>" />
                            </p>
							<p>
                                <label>Mật khẩu</label>
                                <input type="password"  name="matkhau" id ="password" class="input-medium" />
                            </p>
							<p>
                                <label>Họ tên người dùng (*)</label>
                                <input type="text" name="fullname" value="" class="input-medium" value="<?php if(isset($_POST['fullname'])){echo $fullname;}?>"/>
                            </p>
							<p>
                                <label>Gmail</label>
                                <input type="text"  name="gmail" id ="gmail" class="input-medium" />
                            </p>
                            <fieldset>
                                <input class="submit-green" type="submit" name ="them" value="Thêm" /> 
                                
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->
<script type="text/javascript">	
	$(document).ready(function() {
		$("#form").validate({
			rules: {
				username: {
					required: true
				},
				fullname: {
					required: true
				},
				password: {
					required: true,
					minlength: 6
				}
			},
			messages: {
				username: {
					required: "vui lòng nhập tên tài khoản của bạn"
				},
				fullname: {
					required:"vui lòng nhập họ tên người dùng"
				},
				password: {
					required:"vui lòng nhập mật khẩu",
					minlength: "mật khẩu phải ít nhất 6 kí tự"
				}
			}
		});
});
</script>
                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/banhoa/templates/admin/inc/footer.php';?>