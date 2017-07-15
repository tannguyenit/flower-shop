<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/templates/admin/inc/header.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
?>
    
		<div class="container_12">
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>Đăng nhập </span></h2>
                        
                     <div class="module-body">
					
						<?php
							if(isset($_POST["submit"])){
								$username=$mysqli->real_escape_string($_POST["username"]);
								$password=$mysqli->real_escape_string($_POST["password"]);
								$sql="SELECT * FROM login WHERE Tendangnhap='{$username}'&& Matkhau='{$password}' LIMIT 1";
								$result=$mysqli->query($sql);
								$arr=mysqli_fetch_assoc($result);
								if(count($arr)>0){
									$_SESSION["Tendangnhap"]=$arr["Tendangnhap"];
									$_SESSION["Matkhau"]=$arr["Matkhau"];
									$_SESSION["id"]=$arr["id"];
									header("location:index.php");
								}else{
									echo "vui lòng kiểm tra lại username hoặc password";
								}
							}
						?>
                        <form action="" method="post" enctype="multipart/form-data">
                       
                            
                            <p>
                                <label>Tên đăng nhập</label>
                                <input type="text" class="input-medium" name="username" value=""/>
								<label>Mật khẩu</label>
                                <input type="password" class="input-medium" name="password" value=""/>
							</p>
                                
                            <fieldset>
                                <input class="submit-green" type="submit" value="Đăng nhập" name="submit"/> 
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
                
            <div style="clear:both;"></div>
           
        <!-- Footer -->
<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/banhoa/templates/admin/inc/footer.php';?>
       