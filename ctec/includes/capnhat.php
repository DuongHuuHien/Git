<div class="insert">
					
		<?php 
			if(isset($_GET['table'])){
				$table=$_GET['table'];
			if($table=='gv') include $capnhat."updategv.php";
			if($table=='sv') include $capnhat."updatesv.php";
			if($table=='hp') include $capnhat."updatehp.php";
			if($table=='khoa') include $capnhat."updatekhoa.php";
			if($table=='chuong') include $capnhat."updatechuong.php";
			if($table=='gvdhp') include $capnhat."updatedhp.php";
			if($table=='hptlgd') include $capnhat."updatehptlgd.php";
			if($table=='tlgd') include $capnhat."updatetlgd.php";
			if($table=='menukhoa') include $capnhat."updatemenukhoa.php";
			if($table=='menuphong') include $capnhat."updatemenuphong.php";
			if($table=='taikhoan') include $capnhat."updatetaikhoan.php";
		}else { ?>
				
				<h4>Chọn Bảng để cập nhập:</h4>
					<ul>
						<li><a href="<?=$update_table.'gv'?>">Bảng Giảng Viên</a></li>
						<li><a href="<?=$update_table.'sv'?>">Bảng Sinh Viên</a></li>
						<li><a href="<?=$update_table.'hp'?>">Bảng Học Phần</a></li>
						<li><a href="<?=$update_table.'khoa'?>">Bảng Khoa</a></li>
						<li><a href="<?=$update_table.'chuong'?>">Bảng Chương</a></li>
						<li><a href="<?=$update_table.'gvdhp'?>">Bảng GV Dạy HP</a></li>
						<li><a href="<?=$update_table.'hptlgd'?>">Bảng HPTLGD</a></li>
						<li><a href="<?=$update_table.'tlgd'?>">Bảng TL Giảng Dạy</a></li>
						<li><a href="<?=$update_table.'menukhoa'?>">Bảng Menu Khoa</a></li>
						<li><a href="<?=$update_table.'menuphong'?>">Bảng Menu Phòng</a></li>
						<li><a href="<?=$update_table.'taikhoan'?>">Bảng Tài Khoản</a></li>
					</ul>
			
		

			
		<?php }
		?>
</div>




