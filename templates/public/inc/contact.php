</div>
	<div class="content">
	<?php
		$kt=0;
		if(isset($_POST["submit"])){
			$hoten=$_POST["hoten"];
			$sdt=$_POST["sdt"];
			$gmail=$_POST["gmail"];
			$noidung=$_POST["noidung"];
			$insert="insert into lienhe values('','{hoten}','{$sdt}','{$gmail}','{$noidung}')";
			$resultin=$mysqli->query($insert);
			
			if($resultin){
				$kt=1;
			}
			else{
				$kt=2;
			}
		}
	?>
		<h2>Liên Hệ</h2>
		<?php
			if($kt==1){
				echo "ok";
			}elseif($kt==2){
				echo "error";
			}else{
				
			}
		?>
		<form action="" method="post">
			<p>
				<label>Họ Tên</label></br>
				<input type="text" name="hoten"/>
			</p>
			<p>
				<label>Số Điện thoại</label></br>
				<input type="text" name="sdt"/>
			</p>
			<p>
				<label>Gmail</label></br>
				<input type="text" name="gmail"/>
			</p>
			<p>
				<label>Nội Dung Liên Hệ</label></br>
				<textarea name="noidung"></textarea>
			</p>
			<p>
				<input type="submit" name="submit" value="Gửi" id="gui"/>
			</p>
		</form>
		<div class="clr"></div>
	</div>