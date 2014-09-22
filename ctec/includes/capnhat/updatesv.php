<?php		
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['masv'] == NULL or $_POST ['hodem'] == NULL or $_POST ['ten'] == NULL or $_POST ['lop'] == NULL or $_POST ['idkhoa'] == NULL) {
						echo "<h2>Phải điền đầy đủ các trường..</h2>";
					} else {
						$sql = mysql_query ( 'SELECT * FROM sinhvien
					WHERE masv="' . $_POST ['masv'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							echo "<h2>Sinh viên đã tồn tại...</h2>";
						} else {
							$sql = mysql_query ( "INSERT INTO sinhvien VALUE(NULL,
							'" . $_POST ['masv'] . "', '" . $_POST ['hodem'] . "',
							'" . $_POST ['ten'] . "','" . $_POST ['lop'] . "',
							'" . $_POST ['idkhoa'] . "')" );
							
							if (! $sql) {
								echo "<h2>Thêm không thành công! thử lại....</h2>";
							} else {
								echo "<h2>Thêm sinh viên thành công...</h2>";
							}
						}
					}
				}
				?>
<h1 class="post-title"><a href="#">SINH VIÊN</a></h1>
                <hr color="#2D7B78" />
					<form action='#' method='post' name='sinhvien'>
						
						<table id="table"><tr>
							<td>Mã sinh Viên</td><td><input id="masv" type="text" name="masv"
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
							<td>Lớp</td><td><input type="text" name="lop"
								value="" /></td>
						</tr>
						<tr>
							<td>ID Khoa</td><td><input type="text" name="idkhoa"
								value="" /></td>
						</tr></table>
						
						<input type="submit" value="Thêm" name="submit" />


					</form>
