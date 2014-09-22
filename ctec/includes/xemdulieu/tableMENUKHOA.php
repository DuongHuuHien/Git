<div id="result"></div>
<?php 				$khoa = "select * ";
					$khoa .= "from menu_khoa";
					$kq_menu = mysql_query ($khoa, $connect );
					
					if($kq_menu)
					{ $num = mysql_num_rows ( $kq_menu );
						?>
					
					<form name="form" method="post" action="xoamenukhoa.php">
					<h3><a><a href='del_table_menukhoa.php' onclick='return del();'>
					<img src='../images/delete.png' /></a>MENU KHOA
					<input style='margin-left: 830px;' id='delete' type='submit' value='XÓA'/></a></h3>
					<table><thead><tr><th>ID Khoa</th><th>Mã Khoa</th>
					<th>Tên Khoa</th><th>Link</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
				<?php	while ( $row = mysql_fetch_array ( $kq_menu) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
						echo "<td><a href='".$page."suamenukhoa&&idkhoa=$row[idkhoa]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idkhoa]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				}else echo "<img src=='".$images."del.png'>Bảng Menu Khoa chưa có dữ liệu...";
				?>
				<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableMENUKHOA(this.value)"  /> 
</form>