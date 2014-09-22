<div id="result"></div>
<?php 				$chuong = "select * ";
					$chuong .= "from chuong";
					$kq_chuong = mysql_query ( $chuong, $connect );
					
					if($k1_chuong)
					{ 
						$num = mysql_num_rows ( $kq_chuong ); ?>
					
					<form name="form" method="post" action="xoachuong.php">
					<h3><a><a href='del_table_chuong.php' onclick='return del();'>
					<img src='../images/delete.png' /></a>CHƯƠNG
					<input style='margin-left: 830px;' id='delete' type='submit' value='XÓA'/></a></h3>
					<table><thead><tr><th>ID Chương</th>
					<th>Tên Chương</th><th>tóm tắt</th><th>id học phần</th><th>link download</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
				<?php	while ( $row = mysql_fetch_array ( $kq_chuong ) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>";
						echo "<td><a href='".$page."suachuong&&idchuong=$row[idchuong]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idchuong]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				}else echo "<img src=='".$images."del.png'>Bảng chương chưa có dữ liệu...";
				?>
				<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableCHUONG(this.value)"  /> 
</form>