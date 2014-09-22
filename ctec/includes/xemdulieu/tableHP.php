<div id="result"></div>
<?php
					$hp = "select * ";
					$hp .= "from hocphan";
					$kq_hp = mysql_query ( $hp, $connect );
					
					if($kq_hp)
					{ $num = mysql_num_rows ( $kq_hp );
						?>
					<form name="form" method="post" action="xoahp.php">
					<h3><a><a href='del_table_hp.php' onclick='return del();'>
					<img src='../images/delete.png'/>
					</a>Học Phần
					<input style='margin-left: 830px;' type='submit' value='XÓA' id='delete'/></a></h3>
					<table>
					<thead><tr><th>ID HP</th><th>Mã HP</th><th>Tên Học Phần</th><th>Số Tín Chỉ</th>
					<th>Tên Học Kỳ</th><th>Loại</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq_hp ) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
						echo "<td><a href='".$page."suahocphan&&idhocphan=$row[idhocphan]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' value='$row[idhocphan]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				}else echo "<img src='".$images."del.png'>Bảng học phần chưa có dữ liệu...";
				?>
<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableHP(this.value)"  /> 
</form>