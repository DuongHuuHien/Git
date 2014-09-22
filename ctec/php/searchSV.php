<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select * ";
							$select .= "from sinhvien ";
							$select .= "where 
					(
					idsinhvien like '%$key%' or masv like '%$key%' or hodem like '%$key%' or ten like '%$key%' 
					or idkhoa like '%$key%' or lop like '%$key%')";
					
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<center> Có  <?=$num; ?> kết quả cho từ khóa: <b><?=$key;?></b></center>
								<form name="myform" method="post" action="xoasv.php">
					<input  id='delete' type='submit' value='delete'/></a></h3>
					<table>
					<thead><tr><th>ID SV</th><th>Mã SV</th><th>Họ Đệm</th><th>Tên</th>
					<th>ID Khoa</th><th>Lớp</th><th>Sửa</th><th>
						<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td>
						<td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>
						<td>$row[5]</td>";
						echo "<td><a href='suasinhvien.php?idsinhvien=$row[idsinhvien]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idsinhvien]' /></td></tr>";
					}
					echo "</tbody></table></form><hr/><br />";
							} else {
								echo "<br /><h1 style='text-align: center;'>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1><br/>";
							}
						
					
					?>
			