<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select * ";
							$select .= "from taikhoan ";
							$select .= "where 
					(tendangnhap like '%$key%' or matkhau like '%$key%' or quyen like '%$key%' 
					)";
					
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<center> Có  <?=$num; ?> kết quả cho từ khóa: <b><?=$key;?></b></center>
								<form name="myform" method="post" action="xoatk.php">
					<input  id='delete' type='submit' value='XÓA'/></a></h3>
					<table>
					<thead><tr><th>tên đăng nhâp</th><th>mật khẩu</th><th>quyền</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
						echo "<td><a href='".$page."suataikhoan&&tendangnhap=$row[tendangnhap]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' value='$row[tendangnhap]' /></td></tr>";
					}
					echo "</tbody></table></form><hr/><br />";
							} else {
								echo "<br /><h1 style='text-align: center;'>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1><br/>";
							}
						
					
					?>
			