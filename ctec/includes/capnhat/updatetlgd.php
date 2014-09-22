<?php
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['tentailieu'] == NULL or $_POST ['tacgia'] == NULL or $_POST ['namxuatban'] == NULL) {
						echo "Phải điền đầy đủ các trường...";
					} else {
						$sql = mysql_query ( 'SELECT * FROM tailieugiangday
					WHERE tentailieu="' . $_POST ['tentailieu'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							echo "Dữ liệu đã tồn tại...";
						} else {
							$sql = mysql_query ( "INSERT INTO tailieugiangday
							VALUE(NULL,
							'" . $_POST ['tentailieu'] . "', '" . $_POST ['tacgia'] . "',
							'" . $_POST ['namxuatban'] . "')" );
							
							if (! $sql) {
								echo "Thêm không thành công...";
							} else {
								echo "Thêm dữ liệu thành công...";
							}
						}
					}
				}
				?>
		<h1 class="post-title"><a href="#">TÀI LIỆU GIẢNG DẠY</a></h1>
                <hr color="#2D7B78" />
					<form action='#' method='post' name='giangvien'>
						<table id="table"><tr>
							<td>Tên tài liệu</td><td><input type="text" name="tentailieu"
								value="" /></td>
						</tr>
						<tr>
							<td>Tác giả</td><td><input type="text" name="tacgia"
								value="" /></td>
						</tr>
						<tr>
							<td>Năm xuất bản</td><td><input type="text" name="namxuatban"
								value="" /></td>
						</tr>
						
						</table>


						<input type="submit" value="THÊM" name="submit" />


					</form>

			