<?php
	if(isset($_POST['btn_search'])){
		$name=$_POST['txt_search'];
		$query="SELECT * FROM hoa WHERE Tenhoa like '%{$name}%'";
		$result=$mysqli->query($query);
	}
?>
</div>	
			<div class="content">		
				<div class="left_content1">
					<div class="item_KM1">
						<h3>HOA MỚI</h3>
						<ul>
						<?php 
							$query = "SELECT * FROM hoa ORDER BY id_hoa DESC LIMIT 4";
							$result_query = $mysqli->query($query);
							while($arrHM = mysqli_fetch_assoc($result_query)){
								$id_hoa = $arrHM['id_hoa'];
								$Hinhanh = $arrHM['Hinhanh'];
								$Tenhoa = $arrHM['Tenhoa'];
								$Giaban = $arrHM['Giaban'];
								$url = "file/images/".$Hinhanh;
						?>
							<li>
								<a href="cat.php?idh=<?php echo $id_hoa; ?>" title="">
									<div class="hinhanh1">
										<img src="<?php echo $url;?>"/>
									</div>
									<p><?php echo $Tenhoa;?></br>
										<span><?php echo $Giaban;?>đ</span>
									</p>
								</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<div class="item_new1">
					<?php
						while($arr=mysqli_fetch_assoc($result)){
						$id_Hoa = $arr['id_hoa'];
						$Hinhanh = $arr['Hinhanh'];
						$Tenhoa = $arr['Tenhoa'];
						$Giaban = $arr['Giaban'];
						$idtl=$arr["id_theloai"];
					?>
						<ul>
								
							<li>
								<a href="cat.php?idh=<?php echo $id_Hoa;?>" title="">
									<div class="hinhanh1">
										<img src="file/images/<?php echo $Hinhanh;?>"/>
									</div>
									<p><?php echo $Tenhoa;?></br>
										<span><?php echo $Giaban;?>đ</span>
									</p>
								</a>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
				<div class="right_content1">
					<div class="gioithieu1">
						<img src="/banhoa/templates/public/images/dat-hoa-so-luong-lon.png"/>
						<p>Nhằm khuyến khích mọi người quen sử dụng website trong việc
						giao dịch thương mại điện tử, Chúng tôi tặng cho mỗi đơn hàng 20.000đ
						nếu bạn mua hoa trực tiếp từ webiste.</p>
					</div>
				</div>
				<div class="clr"></div>
			</div>