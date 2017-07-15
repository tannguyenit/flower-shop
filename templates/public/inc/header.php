<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/banhoa/function/dbconnection.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/banhoa/function/define.php";
?>
<html>
	<head>
		<title>BÁN HOA</title>
		<meta charset="utf-8"/>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
		<link rel="stylesheet" href="templates/public/css/style.css" type="text/css"/>
		<script type="text/javascript" src="js/jssor.slider.min.js"></script>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="wrapper">
			<div class="header">
				<div class="top_header">
					<div class="search">
						<div class="logo">
							<a href="/banhoa/index.php" title="Logo">
								<img src="../banhoa/templates/public/images/logo-hoa-yeu-thuong.png"/>
							</a>
						</div>
						<form class="timkiem" action="/banhoa/search.php" method="post">
							<input type="text" name="txt_search" placeholder="Tìm sản phẩm" id="txt_search"/>
							<input type="Submit" name="btn_search" id="btn_search" value="Tìm kiếm"/>
							<div class="clr"></div>
						</form>
					</div>
					<div class="menu">
						<ul class="menu_item">
							<li><a href="/banhoa/index.php" title="">TRANG CHỦ</a></li>
							<?php
								$selectdmh="select * from theloai LIMIT 4";
								$resultdmh=$mysqli->query($selectdmh);
								while($arrdmh=mysqli_fetch_assoc($resultdmh)){
							?>
							<li><a href="item.php?idtl=<?php echo $arrdmh["id_theloai"]?>" title=""><?php echo $arrdmh["Tentheloai"]?></a></li>
							<?php }?>
						</ul>
					</div>
					<div class="clr"></div>
				</div>