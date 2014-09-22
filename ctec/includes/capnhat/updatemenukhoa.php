<?php
				
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['tenkhoa'] == NULL or $_POST ['link'] == NULL or $_POST ['makhoa'] == NULL) {
						echo "Phải điền đầy đủ các trường...";
					} else {
						$sql = mysql_query ( 'SELECT * FROM menu_khoa
					WHERE makhoa="' . $_POST ['makhoa'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							echo "Khoa đã tồnt tại! nhập lại...";
						} else {
							
							$insert = "INSERT INTO menu_khoa VALUE";
							$insert .= "(NULL,'" . $_POST ['makhoa'] . "',
							'" . $_POST ['tenkhoa'] . "', '" . $_POST ['link'] . "')";
							$kq = mysql_query ( $insert, $connect );
							
							
							if (! $sql) {
								echo "Thêm không thành công...";
							} else {
								echo "Thêm Khoa không thành công...";
							}
						}
					}
				}
				?>
		
<h1 class="post-title"><a href="#">MENU KHOA</a></h1>
                <hr color="#2D7B78" />
					<form action='#' method='post' name='khoa'>

					<table id="table"><tr>
							<td>Mã khoa</td><td><input type="text" name="makhoa"
								value="" /></td>
						</tr>
						<tr>
							<td>Tên khoa</td><td><input type="text" name="tenkhoa"
								value="" /></td>
						</tr>
						<tr>
							<td>Link</td><td><input type="text" name="link"
								value="" /></td>
						</tr>
						
						</table>
						
						<input type="submit" value="THÊM" name="submit" />


					</form>
		