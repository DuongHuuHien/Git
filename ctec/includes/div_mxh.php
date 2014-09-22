<div id="mxh">
	<ul class="social" id="css3">
			<?php if(isset($_SESSION['tendangnhap'])){ ?>
			<li class="index"><a href="<?=$host;?>"><strong>Trang chủ</strong></a></li>
						
						<li class="dmk"><a href='<?=$page.'doimatkhau';?>'><strong>Mật Khẩu</strong></a></li>
						<li class="dangxuat"><a href="<?=$php.'dangxuat.php';?>" onclick="return confirmLogout();"><strong>THOÁT</strong></a></li>
						<li class="back"><a href='javascript:history.go(-1)'><strong>Trở về</strong></a></li>
						
			<?php } ?>
			<?php 
			if(isset($_SESSION['tendangnhap']) && $_SESSION['quyen']=='QT'){ ?>
					<li class="tonghop"><a href='<?=$php.'QT.php';?>'><strong>Giảng Viên</strong></a></li>
						<li class="DSSV"><a href='<?=$php.'QLSV.php';?>'><strong>Sinh Viên</strong></a></li>
						<li class="update"><a href='<?=$page.'capnhat'; ?>'><strong>Cập Nhật</strong></a></li>
						<li class="xem"><a href='<?=$php.'xemdulieu.php'; ?>'><strong>Dữ Liệu</strong></a></li>
			<?php } ?>

			<?php 
			if(isset($_SESSION['tendangnhap']) && $_SESSION['quyen']=='GV'){ ?>
					<li class="hocphan"><a href='<?=$php.'GV.php';?>'><strong>Học Phần</strong></a></li>
			<?php } ?>
			<?php 
			if(isset($_SESSION['tendangnhap']) && $_SESSION['quyen']=='SV'){ ?>
					<li class="sinhvien"><a href='<?=$php.'SV.php';?>'><strong>Học Phần</strong></a></li>
			<?php } ?>

			
		</ul>
		<!-- /Social Media Buttons - CSS3 -->
	
		


</div>