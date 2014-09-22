<div id="result"></div>
<?php
					$tv = "select * ";
					$tv .= "from registered_members";
					$kq_tv = mysql_query ( $tv, $connect );
					
					if($kq_tv)

					{ 
						$num = mysql_num_rows ( $kq_tv ); ?>

					<form name="form" method="post" action="xoatv.php">
					<h3><a><a href='del_table_tv.php' onclick='return del();'>
					<img src='../images/delete.png'/>
					</a>Thành Viên
					<input style='margin-left: 830px;' type='submit' value='XÓA' id='delete'/></a></h3>
					<table>
					<thead><tr><th>ID tv</th><th>Tên đăng nhập</th><th>Họ đệm</th><th>Tên</th>
					<th>Email</th><th>mật khẩu</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq_tv ) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
						echo "<td><a href='".$page."suatv&&id_mem=$row[id_mem]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' value='$row[id_mem]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				}else echo "<img src='".$images."del.png'>Bảng Thành viên chưa có dữ liệu...";
				?>
<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableTHANHVIEN(this.value)"  /> 
</form>