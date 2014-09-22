<?php
				
				if (isset ( $_POST ['submit'] )) {
					if(isset($_POST ['matkhau'])){ $matkhau= md5 ( $_POST ['matkhau'] );
				}
				
					if ($_POST ['tendangnhap'] == NULL or $_POST['matkhau'] == NULL or $_POST ['quyen'] == NULL) {
						
						echo "Phải nhập đầy đủ các trường!";
					} else {
						$sql = mysql_query ( 'SELECT * FROM taikhoan
					WHERE tendangnhap="' . $_POST ['tendangnhap'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							
							echo "Tài Khoản đã tồn tại!";
						} 

						else {
							$sql = mysql_query ( "INSERT INTO taikhoan
							VALUE('" . $_POST ['tendangnhap'] . "',
							'$matkhau',
							'" . $_POST ['quyen'] . "')" );
							
							if (! $sql) {
								
								echo "Câu lệnh bị lỗi!";
							} else {
								
								echo "Thêm Tài khoản thành công!";
							}
						}
					}
				}
				?>
	<h1 class="post-title"><a href="#">TÀI KHOẢN</a></h1>
                <hr color="#2D7B78" />
					<form action='#' method='post' name='taikhoan'>
					<table id="table"><tr>
							<td>Tên đăng nhập</td><td><input type="text" name="tendangnhap"
								value="" /></td>
						</tr>
						<tr>
							<td>Mật Khẩu</td><td><input type="text" name="matkhau"
								value="" /></td>
						</tr>
						<tr>
							<td>Quyền</td><td><input type="text" name="quyen"
								value="" /></td>
						</tr>
						
						</table>
						

						<input type="submit" value="THÊM" name="submit" />

					</form>
