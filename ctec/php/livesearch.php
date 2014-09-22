<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select magv, hodem, ten, email, SĐT, tenkhoa, idgiangvien ";
							$select .= "from giangvien, khoa ";
							$select .= "where giangvien.idkhoa=khoa.idkhoa  and 
					(giangvien.magv like '%$key%' or hodem like '%$key%' or ten like '%$key%' or email  like '%$key%' or 
					SĐT like '%$key%' or 
					khoa.tenkhoa like '%$key%')";
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<br /> Có  <?=$num; ?> giảng viên cho từ khóa: <b><?=$key;?></b><br />
								<form name="form1" method="post" action="#">
								<input  type='submit' value='XÓA' name='delete' id='delete'/>
								<table>
								<tr class='tr'><th>Mã GV</th><th>Họ Đệm</th><th>Tên</th>
								<th>Email</th><th>SĐT</th><th>Tên Khoa</th><th>Sửa</th><th>XÓA</th></tr>
								
								<?php while ( $row = mysql_fetch_array ( $kq ) ) {
									echo "<tr>";
									echo "<td>$row[0]</td>";
									echo "<td>$row[1]</td>";
									echo "<td>$row[2]</td>";
									echo "<td>$row[3]</td>";
									echo "<td>0$row[4]</td>";
									echo "<td>$row[5]</td>";
									echo "<td><a href='".$page."suagiangvien&&idgiangvien=$row[idgiangvien]'><img src='".$images."edit.png' /></td>";
									echo "<td><a href=\"#\" onclick=\"delgv_notpaging('1', '$row[idgiangvien]');\"><img src='".$images."xoa.png' /></a></td></tr>";
								}
								echo "</table></form>";
							} else {
								echo "<br /><h1 style='text-align: center;'><img src='".$images."del.png' />Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1>";
							}

						
					
					?>

			
			