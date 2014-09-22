<div id="result"></div>

<?php						
					$gv = "select * ";
					$gv .= "from giangvien";
					$kq_gv = mysql_query ( $gv, $connect );
					
					if($kq_gv)
					{ 
						$num = mysql_num_rows ( $kq_gv ); ?>
					<form name="form" method="post" action="xoagv.php">
					<h3><a><a href='del_table_gv.php' onclick='return del();'>
					<img src='../images/delete.png'/></a>Giảng Viên
					<input  style='margin-left: 830px;' type='submit' value='XÓA' id='delete' /></a></h3>
					<table>
					<thead><tr><th>ID GV</th><th>Mã GV</th><th>Họ Đệm</th><th>Tên</th>
					<th>Email</th><th>SĐT</th><th>ID Khoa</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq_gv ) ) {
						echo "<tbody<tr><td>$row[0]</td><td>$row[1]</td>
						<td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>
						<td>$row[5]</td><td>$row[6]</td>";
						echo "<td><a href='".$page."suagiangvien&&idgiangvien=$row[idgiangvien]'><img src='".$images."edit.png' /></td>";
						echo "<td><input  class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idgiangvien]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				} else echo "<img src='".$images."del.png'>Chưa có dữ liệu cho bảng Giảng Viên... <br />";
				
?>
<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableGV(this.value)"  /> 
</form>