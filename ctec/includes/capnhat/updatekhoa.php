<?php
			
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['tenkhoa'] == NULL) {
						
						echo "Phải điền đầy đủ các trường...";
					} else {
						$sql = mysql_query ( 'SELECT * FROM khoa
					WHERE tenkhoa="' . $_POST ['tenkhoa'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							
							echo "Khoa đã tồn tại! Nhập lại khoa khác...";
						} else {
							
							$insert = "INSERT INTO khoa VALUE";
							$insert .= "(NULL,
							'" . $_POST ['tenkhoa'] . "')";
							$kq = mysql_query ( $insert, $connect );
							
							if (! $sql) {
								
								echo "Thêm vào không thành công...";
							} else {
								
								echo "Thêm Khoa thành công...";
							}
						}
					}
				}
				?>
				<h1 class="post-title"><a href="#">KHOA</a></h1>
                <hr color="#2D7B78" />
		<div id="form">
					<form action='#' method='post' name='khoa'>
						<table id="table"><tr>
							<td>Tên Khoa</td><td><input type="text" name="tenkhoa"
								value="" /></td>
						</tr>
						</table>
						<input type="submit" value="THÊM" name="submit" />


					</form>

			