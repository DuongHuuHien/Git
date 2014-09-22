<?php
			
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['magv'] == NULL or $_POST ['hodem'] == NULL or $_POST ['ten'] == NULL or $_POST ['email'] == NULL or $_POST ['sdt'] == NULL or $_POST ['idkhoa'] == NULL)
					{
						echo "<h2>Bạn phải điền đầy đủ các trường..</h2>";
					} else {
						$sql = mysql_query ( 'SELECT * FROM giangvien
					WHERE magv="' . $_POST ['magv'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							echo "<h2>Giảng viên đã tồn tại...</h2>";
						} else {
							$sql = mysql_query ( "INSERT INTO giangvien VALUE(NULL,
							'" . $_POST ['magv'] . "', '" . $_POST ['hodem'] . "',
							'" . $_POST ['ten'] . "','" . $_POST ['email'] . "','" . $_POST ['sdt'] . "',
							'" . $_POST ['idkhoa'] . "')" );
							
							if (! $sql) {
								echo "<h2>Thêm không thành công! thử lại....</h2>";
							} else {
								echo "<h2>Thêm giảng viên thành công...</h2>";
							}
						}
					}
				}
				
				?>
				<h1 class="post-title"><a href="#">GIẢNG VIÊN</a></h1>
                <hr color="#2D7B78" />
				<form action='#' method='post' name='gv'>
				<table id="table"><tr>
							<td>Mã Giảng Viên</td><td><input id="magv" type="text" name="magv"
								value="" /></td>
						</tr>
						<tr>
							<td>Họ Đệm</td><td><input type="text" name="hodem"
								value="" /></td>
						</tr>
						<tr>
							<td>Tên</td><td><input type="text" name="ten"
								value="" /></td>
						</tr>
						<tr>
							<td>Email</td><td><input type="text" name="email"
								value="" /></td>
						</tr>
						<tr>
							<td>Số Điện Thoại</td><td><input type="text" name="sdt"
								value="" /></td>
						</tr>
						<tr>
							<td>ID Khoa</td><td><input type="text" name="idkhoa"
								value="" /></td>
						</tr></table>
						
						<input type="submit" value="Thêm" name="submit" />
					</form>
			