<div id="result"></div>
<?php 				$menu_phong = "select * ";
					$menu_phong .= "from menu_phong";
					$kq_menu = mysql_query ($menu_phong, $connect );
					
					if($kq_menu)
					{ $num = mysql_num_rows ( $kq_menu );
						?>
					
					<form name="form" method="post" action="xoamenuphong.php">
					<h3><a><a href='del_table_menuphong.php' onclick='return del();'>
					<img src='../images/delete.png' /></a>MENU PHÒNG
					<input style='margin-left: 830px;' id='delete' type='submit' value='XÓA'/></a></h3>
					<table><thead><tr><th>ID phòng</th><th>Mã phòng</th>
					<th>Tên phòng</th><th>Link</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
				<?php	while ( $row = mysql_fetch_array ( $kq_menu) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
						echo "<td><a href='".$page."suamenuphong&&idphong=$row[idphong]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idphong]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				}else echo "<img src=='".$images."del.png'>Bảng Menu phong chưa có dữ liệu...";
				?>
				<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableMENUPHONG(this.value)"  /> 
</form>