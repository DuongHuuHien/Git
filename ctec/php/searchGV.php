<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select * ";
							$select .= "from giangvien ";
							$select .= "where 
					(idgiangvien like '%$key%' or magv like '%$key%' or hodem like '%$key%' or ten like '%$key%' or email  like '%$key%' or 
					SĐT like '%$key%' or 
					idkhoa like '%$key%')";
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<center><center> Có  <?=$num; ?> giảng viên cho từ khóa: <b><?=$key;?></center><br />
								<form name="form1" method="post" action="xoagv.php">
								<input  type='submit' value='XÓA' name='delete' id='delete'/>
								<table style='border-collapse: collapse;' border='0' cellpadding='5'>
								<tr><th>Mã GV</th><th>Họ Đệm</th><th>Tên</th>
								<th>Email</th><th>SĐT</th><th>IDkhoa</th><th>Sửa</th><th>XÓA</th></tr>
								
								<?php while ( $row = mysql_fetch_array ( $kq ) ) {
									echo "<tr>";
									echo "<td>$row[0]</td>";
									echo "<td>$row[1]</td>";
									echo "<td>$row[2]</td>";
									echo "<td>$row[3]</td>";
									echo "<td>0$row[4]</td>";
									echo "<td>$row[5]</td>";
									echo "<td><a href='".$page."suagiangvien&&idgiangvien=$row[idgiangvien]'><img src='".$images."edit.png' /></td>";
									echo "<td><input  class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idgiangvien]' /></td></tr>";
								}
								echo "</table></form><hr/><br />";
							} else {
								echo "<br /><h1 style='text-align: center;'>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1>";
							}
						
					
					?>
			