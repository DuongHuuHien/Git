<?php
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['tenphong'] == NULL or $_POST ['link'] == NULL or $_POST ['maphong'] == NULL) {
						echo "Phải điền đầy đủ các trường...";
					} else {
						$sql = mysql_query ( 'SELECT * FROM menu_phong
					WHERE maphong="' . $_POST ['maphong'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							echo "Phòng đã tồn tại...";
						} else {
							
							$insert = "INSERT INTO menu_phong VALUE";
							$insert .= "(NULL,'" . $_POST ['maphong'] . "',
							'" . $_POST ['tenphong'] . "', '" . $_POST ['link'] . "')";
							$kq = mysql_query ( $insert, $connect );
							
							if (! $sql) {
								echo "Thêm không thành công...";
							} else {
								echo "Thêm Phòng thành công...";
							}
						}
					}
				}
				?>
	<h1 class="post-title"><a href="#">MENU PHÒNG</a></h1>
                <hr color="#2D7B78" />
					<form action='#' method='post' name='khoa'>
						<table id="table"><tr>
							<td>Mã phòng</td><td><input type="text" name="maphong"
								value="" /></td>
						</tr>
						<tr>
							<td>Tên phong</td><td><input type="text" name="tenphong"
								value="" /></td>
						</tr>
						<tr>
							<td>Link</td><td><input type="text" name="link"
								value="" /></td>
						</tr>
						
						
						</table>
						<input type="submit" value="THÊM" name="submit" />
					</form>

				