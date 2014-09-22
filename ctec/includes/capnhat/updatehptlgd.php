<?php
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['idhocphan'] == NULL or $_POST ['idtailieugiangday'] == NULL or $_POST ['link'] == NULL) {
						echo "Phải điền đầy đủ các trường...";
					} else {
						$sql = mysql_query ( 'SELECT * FROM hocphan_tailieugiangday
					WHERE idhocphan="' . $_POST ['idhocphan'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							echo "Tài liệu này đã tồn tại...";
						} else {
							$sql = mysql_query ( "INSERT INTO hocphan_tailieugiangday
							VALUE('" . $_POST ['idhocphan'] . "',
							'" . $_POST ['idtailieugiangday'] . "','" . $_POST ['link'] . "')" );
						
	
							if (! $sql) {
								echo "Thêm không thành công...";
							} else {
								echo "Thêm tài liệu thành công...";
							}
						}
					}
				}
				?>
		<h1 class="post-title"><a href="#">HỌC PHẦN TÀI LIỆU</a></h1>
                <hr color="#2D7B78" />
					<form action='#' method='post' name='giangvien'>
						
						<table id="table"><tr>
							<td>ID học phần</td><td><input type="text" name="idhocphan"
								value="" /></td>
						</tr>
						<tr>
							<td>ID tài liệu</td><td><input type="text" name="idtailieugiangday"
								value="" /></td>
						</tr>
						<tr>
							<td>Link download</td><td><input type="text" name="link"
								value="" /></td>
						</tr>
					
						</table>

						<input type="submit" value="THÊM" name="submit" />


					</form>

				