<?php
			
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['mahocphan'] == NULL or $_POST ['loai'] == NULL or $_POST ['tenhocphan'] == NULL or $_POST ['sotinchi'] == NULL or $_POST ['hocky'] == NULL) {
						echo "<h2>Phải điền đầy đủ các trường..</h2>";
					} else {
						$sql = mysql_query ( 'SELECT * FROM hocphan
					WHERE mahocphan="' . $_POST ['mahocphan'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							echo "Học phần đã tồn tại...";
						} else {
							$sql = mysql_query ("INSERT INTO hocphan VALUE(NULL,
							'" . $_POST ['mahocphan'] . "', '" . $_POST ['tenhocphan'] . "',
							'" . $_POST ['sotinchi'] . "','" . $_POST ['hocky'] . "','" . $_POST ['loai'] . "')" );
						
	
							if (! $sql) {
								echo "Thêm không thành công...";
							} else {
								echo "Thêm học phần thành công...";
							}
						}
					}
				}
				?>
		<h1 class="post-title"><a href="#">HỌC PHẦN</a></h1>
                <hr color="#2D7B78" />
					<form action='#' method='post' name='hocphan'>
						
						<table id="table"><tr>
							<td>Mã học phần</td><td><input type="text" name="mahocphan"
								value="" /></td>
						</tr>
						<tr>
							<td>Tên học phần</td><td><input type="text" name="tenhocphan"
								value="" /></td>
						</tr>
						<tr>
							<td>Số tín chỉ</td><td><input type="text" name="sotinchi"
								value="" /></td>
						</tr>
						<tr>
							<td>Học kỳ</td><td><input type="text" name="hocky"
								value="" /></td>
						</tr>
						<tr>
							<td>Loại</td><td><input type="text" name="loai"
								value="" /></td>
						</tr>
						</table>
						
						<input type="submit" value="Thêm" name="submit" />
					</form>


			