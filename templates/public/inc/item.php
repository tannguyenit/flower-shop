<?php
	$idtl = $_REQUEST['idtl'];
	$sql = "SELECT * FROM theloai WHERE id_theloai = {$idtl}";
	$result = $mysqli->query($sql);
	$arrTL = mysqli_fetch_assoc($result);
	$ten_theloai = $arrTL['Tentheloai'];
	$id_theloai = $arrTL['id_theloai'];
	$querytsd="SELECT COUNT(id_hoa) AS tongsodong FROM hoa WHERE id_theloai = {$idtl}";
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
										<span><?php echo $Giaban;?> đ</span>
									</p>
								</a>
							</li>
							<?php }?>
						</ul>
					</div>
					<div class="item_new1">
						<h3><?php echo $ten_theloai;?></h3>
						<ul>
						<?php 
							$query = "SELECT * FROM hoa WHERE id_theloai = {$id_theloai} LIMIT {$off_set},{$row_count}";
							$result_query = $mysqli->query($query);
							while($arrHoa = mysqli_fetch_assoc($result_query)){
								
								$id_Hoa = $arrHoa['id_hoa'];
								$Hinhanh = $arrHoa['Hinhanh'];
								$Tenhoa = $arrHoa['Tenhoa'];
								$Giaban = $arrHoa['Giaban'];
								
								
						?>
							<li>
								<a href="cat.php?idh=<?php echo $id_Hoa;?>" title="">
									<div class="hinhanh1">
										<img src="file/images/<?php echo $Hinhanh;?>"/>
									</div>
									<p><?php echo $Tenhoa;?></br>
										<span><?php echo $Giaban;?> đ</span>
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
			<div class="pagination">           
			<div class="numbers">
				<span>Page:</span>
				<?php
					for($i=1;$i<=$sotrang;$i++){	
				?>
				<a href="item.php?idtl=<?php echo $idtl?>&current_page=<?php echo $i?>"><?php echo $i?></a> 
				<span>|</span> 
					<?php }?>
			</div> 
			<div style="clear: both;"></div> 
		 </div>