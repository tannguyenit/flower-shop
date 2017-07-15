		
		<div class="banner">
					<div class="left_banner">
						<div class="title_dv">
							<h3 class="dichvu">DỊCH VỤ BÁN HOA</h3>
							<h2>TRONG TỈNH THÀNH</h2>
							<p>Hoayeuthuong.com luôn cam kết đặt chất lượng hoa
							luôn tươi mới lên hàng đầu giao cho khách.
							Các mẫu hoa luôn được cắm đủ số lượng và giống kiểu
							dáng trên website nhất có thể</p>
						</div>
						<div class="menu_DM">
							<h3 class="dichvu">DANH MỤC HOA TƯƠI</h3>
							<ul class="list_DM">
							<?php
								$sql = "SELECT * FROM theloai";
								$result = $mysqli->query($sql);
								while($arrHoa = mysqli_fetch_assoc($result)){
									$id_tl = $arrHoa['id_theloai'];
									$name_tl = $arrHoa['Tentheloai'];
							?>
								<li><a href="item.php?idtl=<?php echo $id_tl;?>" title=""><?php echo $name_tl;?></a></li>
								<?php }?>
							</ul>
						</div>
						<div class="clr"></div>
					</div>
					<div class="right_banner">
						<div class="slider">
							<!-- use jssor.slider.debug.js instead for debug -->
							<script>
								jssor_1_slider_init = function() {
									
									var jssor_1_SlideshowTransitions = [
									  {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:1.3,$Top:2.5}},
									  {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
									  {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
									  {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
									  {$Duration:1800,x:1,y:0.2,$Delay:30,$Cols:10,$Rows:5,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Outside:true,$Round:{$Top:1.3}},
									  {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
									  {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
									  {$Duration:1000,y:-1,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12}},
									  {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
									  {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}
									];
									
									var jssor_1_options = {
									  $AutoPlay: true,
									  $SlideshowOptions: {
										$Class: $JssorSlideshowRunner$,
										$Transitions: jssor_1_SlideshowTransitions,
										$TransitionsOrder: 1
									  },
									  $ArrowNavigatorOptions: {
										$Class: $JssorArrowNavigator$
									  },
									  $BulletNavigatorOptions: {
										$Class: $JssorBulletNavigator$
									  }
									};
									
									var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
									
									//responsive code begin
									//you can remove responsive code if you don't want the slider scales while window resizing
									function ScaleSlider() {
										var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
										if (refSize) {
											refSize = Math.min(refSize, 757);
											jssor_1_slider.$ScaleWidth(refSize);
										}
										else {
											window.setTimeout(ScaleSlider, 30);
										}
									}
									ScaleSlider();
									$Jssor$.$AddEvent(window, "load", ScaleSlider);
									$Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
									$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
									//responsive code end
								};
							</script>

							<style>
								
								/* jssor slider bullet navigator skin 01 css */
								/*
								.jssorb01 div           (normal)
								.jssorb01 div:hover     (normal mouseover)
								.jssorb01 .av           (active)
								.jssorb01 .av:hover     (active mouseover)
								.jssorb01 .dn           (mousedown)
								*/
								.jssorb01 {
									position: absolute;
								}
								.jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
									position: absolute;
									/* size of bullet elment */
									width: 12px;
									height: 12px;
									filter: alpha(opacity=70);
									opacity: .7;
									overflow: hidden;
									cursor: pointer;
									border: #000 1px solid;
								}
								.jssorb01 div { background-color: gray; }
								.jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
								.jssorb01 .av { background-color: #fff; }
								.jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

								/* jssor slider arrow navigator skin 05 css */
								/*
								.jssora05l                  (normal)
								.jssora05r                  (normal)
								.jssora05l:hover            (normal mouseover)
								.jssora05r:hover            (normal mouseover)
								.jssora05l.jssora05ldn      (mousedown)
								.jssora05r.jssora05rdn      (mousedown)
								*/
								.jssora05l, .jssora05r {
									display: block;
									position: absolute;
									/* size of arrow element */
									width: 40px;
									height: 40px;
									cursor: pointer;
									background: url('templates/public/images/a17.png') no-repeat;
									overflow: hidden;
								}
								.jssora05l { background-position: -10px -40px; }
								.jssora05r { background-position: -70px -40px; }
								.jssora05l:hover { background-position: -130px -40px; }
								.jssora05r:hover { background-position: -190px -40px; }
								.jssora05l.jssora05ldn { background-position: -250px -40px; }
								.jssora05r.jssora05rdn { background-position: -310px -40px; }
							</style>
							
							<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 757px; height: 345px; overflow: hidden; visibility: hidden;">
								<!-- Loading Screen -->
								<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
									<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
									<div style="position:absolute;display:block;background:url('') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
								</div>
								<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 757px; height: 345px; overflow: hidden;">
									<div data-p="112.50" style="display: none;">
										<a href="#" title="">
											<img data-u="image" src="templates/public/images/01.jpg" />
										</a>
									</div>
									<div data-p="112.50" style="display: none;">
										<a href="#" title="">
											<img data-u="image" src="templates/public/images/02.jpg" />
										</a>
									</div>
									<div data-p="112.50" style="display: none;">
										<a href="#" title="">
											<img data-u="image" src="templates/public/images/03.jpg" />
										</a>
									</div>
									<div data-p="112.50" style="display: none;">
										<a href="#" title="">
											<img data-u="image" src="templates/public/images/04.jpg" />
										</a>
									</div>
								</div>
								<!-- Bullet Navigator -->
								<div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
									<div data-u="prototype" style="width:12px;height:12px;"></div>
								</div>
								<!-- Arrow Navigator -->
								<span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
								<span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
								<a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
							</div>
							<script>
								jssor_1_slider_init();
							</script>
						</div>
						<div class="clr"></div>
						<div class="lienket">
							<div class="lienhe">
								<h2>Liên Hệ Mua Hoa</h2>
								
								<div class="sky">
									<img src="/banhoa/templates/public/images/skypes.png"/>
									<p>Skype: <span>vanquyen.dt13ctt02@outlook.com.vn</span></p>
									<div class="clr"></div>
								</div>
								<div class="sky">
									<img src="/banhoa/templates/public/images/gmail.png"/>
									<p>Gmail: <span>vanquyen.dt13ctt02@gmail.com</span></p>
									<div class="clr"></div>
								</div>
								<div class="sky">
									<img src="/banhoa/templates/public/images/dienthoai.jpg"/>
									<p>SĐT: <span id="mau">0963.027.193</sapn></p>	
									<div class="clr"></div>
								</div>
							</div>
							<div class="fb-page">
								<div class="fb-page" data-href="https://www.facebook.com/Hoayeuthuong-1684771335068931/?fref=ts" data-tabs="timeline" data-width="465" data-height="150" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="clr"></div>
				</div>
				<div class="clr"></div>
			</div>
			<div class="content_item_hoa">
				<div class="wraper_title_new_hoa">
				<h3><span>MẨU HOA MỚI NHẤT</span></h3>
				</div>
				<div class="item_new_hoa">
					<ul>
					<?php
						$querydm="select * from theloai ORDER BY id_theloai DESC LIMIT 6";
						$resultdm=$mysqli->query($querydm);
						$i=1;
						while($arrdm=mysqli_fetch_assoc($resultdm)){
							
					?>
						<li>
							<a href="item.php?idtl=<?php echo $arrdm["id_theloai"]?>" title="">
								<div class="new_hoa">
									<img src="templates/public/images/<?php echo $i?>.png"/>
								</div>
								<h4><?php echo $arrdm["Tentheloai"]?></h4>
							</a>
						</li>
					<?php
						$i=$i+1;
						}
					?>	
						<div class="clr"></div>
					</ul>		
				</div>
			</div>
			<div class="content">		
				<div class="left_content">
					<div class="item_KM">
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
									<div class="hinhanh">
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
					
						<?php
							$sql1 = "SELECT * FROM theloai";
							$result1 = $mysqli->query($sql);
							while($arrHoa1 = mysqli_fetch_assoc($result1)){
								
								$id_tl1 = $arrHoa1['id_theloai'];
								$name_tl1 = $arrHoa1['Tentheloai'];
						?>
				
					<div class="item_new">
						<h3><?php echo $name_tl1?></h3>
						<ul>
						<?php 
							$sql2 = "SELECT * FROM hoa WHERE id_theloai = {$id_tl1} ORDER BY id_hoa DESC LIMIT 4";
							$result2 = $mysqli->query($sql2);
							while($arr = mysqli_fetch_assoc($result2)){
								$id_hoa2 = $arr['id_hoa'];
								$Hinhanh2 = $arr['Hinhanh'];
								$Tenhoa2 = $arr['Tenhoa'];
								$Giaban2 = $arr['Giaban'];
						?>
							<li>
								<a href="cat.php?idh=<?php echo $id_hoa2?>" title="">
									<div class="hinhanh">
										<img src="file/images/<?php echo $Hinhanh2;?>"/>
									</div>
									<p><?php echo $Tenhoa2;?></br>
										<span><?php echo $Giaban2;?> đ</span>
									</p>
								</a>
							</li>
							<?php }?>	
							
						</ul>
					</div>
					<?php }?>
			
					
				</div>
				<div class="right_content">
					<div class="gioithieu">
						<img src="/banhoa/templates/public/images/dat-hoa-so-luong-lon.png"/>
						<p>Nhằm khuyến khích mọi người quen sử dụng website trong việc
						giao dịch thương mại điện tử, Chúng tôi tặng cho mỗi đơn hàng 20.000đ
						nếu bạn mua hoa trực tiếp từ webiste.</p>
					</div>
				</div>
				<div class="clr"></div>
			</div>