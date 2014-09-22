<?php
	
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['idhocphan'] == NULL or $_POST ['idgiangvien'] == NULL) {
						
						echo "Phải điền đầy đủ các trường...";
					} else {
						$sql = mysql_query ( 'SELECT * FROM giangvien_day_hocphan
					WHERE idhocphan="' . $_POST ['idhocphan'] . '"
					and idgiangvien="' . $_POST ['idgiangvien'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							
							echo "alert('Dữ liệu đã tồn tại...');";
						} else {
							$sql = mysql_query ( "INSERT INTO giangvien_day_hocphan
							VALUE('" . $_POST ['idhocphan'] . "',
							'" . $_POST ['idgiangvien'] . "')" );
							
							if (! $sql) {
								echo "Thêm không thành công...";
							} else {
								echo "Thêm dữ liệu thành công...";
							}
						}
					}
				}
				?>
		<h1 class="post-title"><a href="#">DẠY HỌC PHẦN</a></h1>
                <hr color="#2D7B78" />
					<form action='#' method='post' name='giangvien'>
						
						<table id="table"><tr>
							<td>ID học phần</td><td><input type="text" name="idhocphan"
								value="" /></td>
						</tr>
						<tr>
							<td>ID giảng viên</td><td><input type="text" name="idgiangvien"
								value="" /></td>
						</tr>
						
						</table>
						<input type="submit" value="THÊM" name="submit" />


					</form>

				