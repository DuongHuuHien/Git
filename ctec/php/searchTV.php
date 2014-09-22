<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select * ";
							$select .= "from registered_members ";
							$select .= "where 
					(id_mem like '%$key%' or tendangnhap like '%$key%' or hodem like '%$key%' or ten like '%$key%' or email like '%$key%' or password like '%$key%' )";
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<center><center> Có  <?=$num; ?> kết quả cho từ khóa: <b><?=$key;?></center><br />
								<form name="form1" method="post" action="xoatv.php">
								<input  type='submit' value='XÓA' name='delete' id='delete'/>
								<table>
					<thead><tr><th>ID tv</th><th>Tên đăng nhập</th><th>Họ đệm</th><th>Tên</th>
					<th>Email</th><th>mật khẩu</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
						echo "<td><a href='".$page."suatv&&id_mem=$row[id_mem]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' value='$row[id_mem]' /></td></tr>";
					}
					echo "</tbody></table></form>";
						} else {
								echo "<br /><h1 style='text-align: center;'>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1>";
							}
						
					
					?>
			