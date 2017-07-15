<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/templates/admin/inc/header.php";
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/checkuser.php";
?>	
<?php 
	include_once $_SERVER["DOCUMENT_ROOT"]."/banhoa/function/dbconnection.php";
?>
<!-- Form elements -->    
<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm sản phẩm</span></h2>
			
		 <div class="module-body">
			<?php
					if(isset($_POST['submit'])){
						$tenhoa = $mysqli->real_escape_string($_POST['tenhoa']);
						$sql = "SELECT * FROM hoa WHERE Tenhoa LIKE '{$tenhoa}'";
						$result = $mysqli->query($sql);
						$arTT = mysqli_fetch_assoc($result);
						$dem = count($arTT);
						if($dem>0){
							echo "<p class='error'>Danh mục tin đã tồn tại</p>";
						}else{
							$tenhoa = $mysqli->real_escape_string($_POST['tenhoa']);
							$giaban = $mysqli->real_escape_string($_POST['dongia']);
							$mota = $mysqli->real_escape_string($_POST['mota']);
							$dmtheloai = $mysqli->real_escape_string($_POST['danhmuchoa']);
							$dmnhom = $mysqli->real_escape_string($_POST['danhmucmau']);
							$tenhinh = $_FILES['hinhanh']['name'];
							if($tenhinh == NULL){
								$query = "INSERT INTO hoa(Tenhoa, Giaban, Hinhanh, Mota, id_theloai, id_nhom)
										VALUES ('$tenhoa', '$giaban', '', '$mota', '$dmtheloai', '$dmnhom')
								";
								if($result_query){
										header("location:index.php?msg=Bạn đã thêm thành công!");
										exit();
									}else{
										echo '<p class="error">Có lỗi trong quá trình thêm</p>';
									}
							}else{
								$tach_file=explode('.',$tenhinh);
								//đếm số phần tử của mảng
								$count=count($tach_file);
								$duoi_file=$tach_file[$count-1];
								//echo "Đuôi file là: $duoi_file";
								//loại đuôi file ra khỏi mảng
								unset($tach_file[$count-1]);
								//dùng forech để nối chuỗi lại
								$tenfile_moi ="";
								foreach($tach_file as $key=>$value){
									if($key==0){
										$tenfile_moi=$value;
									} else{
										$tenfile_moi=$tenfile_moi.'_'.$value;
									}
								}
								$time = time();
								$tenhinh=$tenfile_moi."_".$time.'.'.$duoi_file;
								$tmp_name = $_FILES['hinhanh']['tmp_name'];
								$path = $_SERVER['DOCUMENT_ROOT'];
								$path_upload = $path.'/banhoa/file/images/'.$tenhinh;
								$ketqua = move_uploaded_file($tmp_name, $path_upload);
								if($ketqua){
									$query = "INSERT INTO hoa(Tenhoa, Giaban, Hinhanh, Mota, id_theloai, id_nhom)
										VALUES ('$tenhoa', '$giaban', '$tenhinh', '$mota', '$dmtheloai', '$dmnhom')
									";
									$result_query = $mysqli->query($query);
									
									if($result_query){
											header("location:index.php?msg=Bạn đã thêm thành công!");
											exit();
										}else{
											echo '<p class="error">Có lỗi trong quá trình thêm</p>';
										}
								}else{
									echo '<p class="error">Có lỗi trong quá trình upload hình ảnh</p>';
								}
							}
						}
					}
				?>
			<form action="" enctype="multipart/form-data" method="post">
				<p>
					<label>Tên hoa</label>
					<input type="text" name="tenhoa" value="" class="input-medium" />
				</p>
				<p>
					<label>Danh mục hoa</label>
					<select  name="danhmuchoa" class="input-short">
						<option selected>--chọn thể loại--</option>
						<?php 
							$sql="SELECT * FROM theloai";
							$result=$mysqli->query($sql);
							while ($arrnew=mysqli_fetch_assoc($result)){
								$id_theloai=$arrnew["id_theloai"];
								$ten_theloai=$arrnew["Tentheloai"];
						?>
						<option value="<?php echo $id_theloai;?>"><?php echo $ten_theloai;?></option>
						<?php }?>
					</select>
				</p>
				<p>
					<label>Danh mục màu hoa</label>
					<select  name="danhmucmau" class="input-short">
						<option selected>--chọn màu hoa--</option>
						<?php 
							$sql="SELECT * FROM nhom";
							$result=$mysqli->query($sql);
							while ($arrnew=mysqli_fetch_assoc($result)){
								$id_nhom=$arrnew["id_nhom"];
								$ten_nhom=$arrnew["Tennhom"];
						?>
						<option value="<?php echo $id_nhom;?>"><?php echo $ten_nhom;?></option>
						<?php }?>
					</select>
				</p>
				<p>
					<label>Hình ảnh</label>
					<input type="file"  name="hinhanh" value="" />
				</p>
				<p>
					<label>Đơn giá</label>
					<input type="text" name="dongia" value="" class="input-medium dongia" />
				</p>
				<p>
					<label>Mô tả</label>
					<input type="text" name="mota" value="" class="input-medium dongia" />
				</p>
				<fieldset>
					<input class="submit-green" name="submit" type="submit" value="Thêm" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/banhoa/templates/admin/inc/footer.php';?>  