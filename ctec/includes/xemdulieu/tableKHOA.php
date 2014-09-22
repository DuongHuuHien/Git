<div id="result"></div>
<?php 				$khoa = "select * ";
					$khoa .= "from khoa";
					$kq_khoa = mysql_query ($khoa, $connect );
					
					if($kq_khoa)
					{ $num = mysql_num_rows ( $kq_khoa );
						?>
					
					<form name="form" method="post" action="xoakhoa.php">
					<h3><a><a href='del_table_khoa.php' onclick='return del();'><img src='../images/delete.png' /></a>KHOA
					<input style='margin-left: 830px;' id='delete' type='submit' value='XÓA'/></a></h3>
					<table><thead><tr><th>ID Khoa</th>
					<th>Tên Khoa</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
				<?php	while ( $row = mysql_fetch_array ( $kq_khoa) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td>";
						echo "<td><a href='".$page."suakhoa&&idkhoa=$row[idkhoa]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idkhoa]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				}else echo "<img src=='".$images."del.png'>Bảng Khoa chưa có dữ liệu...";
				?>
				<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableKHOA(this.value)"  /> 
</form>