<?php
			
				
				if (isset ( $_POST ['submit'] )) {
					if ($_POST ['tenchuong'] == NULL or $_POST ['tomtat'] == NULL or $_POST ['link'] == NULL) {
						echo "Phải điền đầy đủ các trường...";
					} else {
						$sql = mysql_query ( 'SELECT * FROM chuong
					WHERE tenchuong="' . $_POST ['tenchuong'] . '" 
					and idhocphan="' . $_POST ['idhocphan'] . '"' );
						$row = mysql_num_rows ( $sql );
						if ($row > 0) {
							echo "Chương đã tồn tại...";
						} else {
							$sql = mysql_query ( "INSERT INTO chuong
							VALUE(NULL, '" . $_POST ['tenchuong'] . "', '" . $_POST ['tomtat'] . "',
							'" . $_POST ['idhocphan'] . "','" . $_POST ['link'] . "')" );
							
							if (! $sql) {
								echo "Thêm không thành công...";
							} else {
								echo "Thêm chương thành công...";
							}
						}
					}
				}
				?>
		<h1 class="post-title"><a href="#">CHƯƠNG</a></h1>
                <hr color="#2D7B78" />
					<form action='#' method='post' name='chuong'>
						<table id="table"><tr>
							<td>Tên chương</td><td><input type="text" name="tenchuong"
								value="" /></td>
						</tr>
						<tr>
							<td>Tóm tắt</td><td><input type="text" name="tomtat"
								value="" /></td>
						</tr>
						<tr>
							<td>ID học phần</td><td><input type="text" name="idhocphan"
								value="" /></td>
						</tr>
						<tr>
							<td>Link download</td><td><input type="text" name="link"
								value="" /></td>
						</tr>
						
						</table>
						<input type="submit" value="THÊM" name="submit" />

					</form>

			