<div id="result"></div>
<?php 				
					$sv = "select * ";
					$sv .= "from sinhvien";
					$kq_sv = mysql_query ( $sv, $connect );
					
					if($kq_sv)
					{ $num = mysql_num_rows ( $kq_sv );
					 ?>
					<form name="form" method="post" action="xoasv.php">
					<h3><a><a href='del_table_sv.php' onclick='return del();'>
					<img src='../images/delete.png'/></a>Sinh Viên
					<input style='margin-left: 830px;' id="delete" type='submit' value='delete'/></a></h3>
					<table>
					<thead><tr><th>ID SV</th><th>Mã SV</th><th>Họ Đệm</th><th>Tên</th>
					<th>ID Khoa</th><th>Lớp</th><th>Sửa</th><th>
						<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq_sv ) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td>
						<td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>
						<td>$row[5]</td>";
						echo "<td><a href='suasinhvien.php?idsinhvien=$row[idsinhvien]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idsinhvien]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				}
				else echo "<img src='".$images."del.png'>Bảng Sinh viên chưa có dữ liệu...";
				?>
				<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableSV(this.value)"  /> 
</form>