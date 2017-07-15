<?php
	$idh = $_REQUEST['idh'];
	$sql = "SELECT * FROM hoa WHERE id_hoa = {$idh}";
	$result = $mysqli->query($sql);
	$arrHoa = mysqli_fetch_assoc($result);
	$ten_hoa = $arrHoa['Tenhoa'];
	$img=$arrHoa["Hinhanh"];
	$money=$arrHoa["Giaban"];
	$detail=$arrHoa["Mota"];
	$id=$arrHoa["id_theloai"];
	
?>
			</div>	
			<div class="content">		
				<div class="left_content2">
					<div class="img_hoa2">
						<div class="img_hoa_item2">
							<img src="file/images/<?php echo $img?>" title=""/>
						</div>
						<div class="name_hoa2">
							<p><?php echo $ten_hoa?></p>
							<span>Giá bán: <strong><?php echo $money?> đ</strong></span>
							<p class="lienhe"><a href="contact.php">Liên hệ</a></p>
						</div>
					</div>
					<div class="cat_hoa2">
						<h3><?php echo $ten_hoa?></h3>
						<p><?php echo $detail?></p>
					</div>
					<div class="clr"></div>
					<div class="item_new2">
						<h3>NHỮNG MẪU HOA TƯƠI CÙNG LOẠI KHÁC</h3>
						<ul>
						<?php
							$selectc="select * from hoa where id_hoa!='{$idh}' and id_theloai='{$id}' ORDER BY id_hoa DESC";
							$resultc=$mysqli->query($selectc);
							while($arrc=mysqli_fetch_assoc($resultc)){
						?>
							<li>
								<a href="cat.php?idh=<?php echo $arrc["id_hoa"]?>" title="">
									<div class="hinhanh2">
										<img src="file/images/<?php echo $arrc["Hinhanh"]?>"/>
									</div>
									<p><?php echo $arrc["Tenhoa"]?></br>
										<span><?php echo $arrc["Giaban"]?> đ</span>
									</p>
									
								</a>
							</li>
							<?php }?>
						</ul>
						<div class="clr"></div>
					</div>
				</div>
				<div class="right_content2">
					<div class="gioithieu2">
						<img src="/banhoa/templates/public/images/dat-hoa-so-luong-lon.png"/>
						<p>Nhằm khuyến khích mọi người quen sử dụng website trong việc
						giao dịch thương mại điện tử, Chúng tôi tặng cho mỗi đơn hàng 20.000đ
						nếu bạn mua hoa trực tiếp từ webiste.</p>
					</div>
				</div>
				<div class="clr"></div>
			</div>