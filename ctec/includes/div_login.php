<section class="widget clearfix">
			<br />
			<?php
					if (isset ( $_SESSION ["tendangnhap"] )){
						echo '<h1><a href="';
							if ($_SESSION ['quyen'] =='QT')
								echo 'php/QT.php">';
							else if ($_SESSION ['quyen'] =='GV')
								echo 'php/GV.php">';
							else
								echo 'php/SV.php">';
							echo '<img src="images/admin.png"> &nbsp;Xin chào '. $_SESSION ['tendangnhap'].'!</a></h1>';
							?>
							<hr />
		 <div id="search-box">
           <input type="text" value="" placeholder="Tìm trong trang" id="search_term"/> 
            
        </div>
						<?php }
					else{


					?>
		<h4 class="widgettitle">ĐĂNG NHẬP</h4>
		<br />
		<form action="php/kt_dangnhap.php" method="post" name="dangnhap"
			id="dangnhap" onsubmit="return test();">
			<input type="text" name="user" id="user" value=""
				placeholder="Tên Đăng Nhập" /> <br /> <input 
				type="password" name="password" id="pass" value=""
				placeholder="Mật Khẩu" /> <br /> <br /><a href="dangky.php">Đăng Ký</a> &nbsp;&nbsp;&nbsp;&nbsp;<a
				href="quenmatkhau.php">Quên mật khẩu?</a><br /> <br />  
				<input type="submit" value="Login"
				name="submit" id="submit" /> 
			
		</form>
		<hr />
		 <div id="search-box">
           <input type="text" value="" placeholder="Tìm trong trang" id="search_term"/> 
            
        </div>
        <?php } ?>
        <!-- End #search-box-->	
        
</section>
<!-- End .widget clearfix-->