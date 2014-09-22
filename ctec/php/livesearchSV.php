<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select masv, hodem, ten, lop, tenkhoa, idsinhvien ";
							$select .= "from sinhvien, khoa ";
							$select .= "where  sinhvien.idkhoa=khoa.idkhoa and (
					sinhvien.masv like '%$key%' or hodem like '%$key%' or ten like '%$key%' 
					or lop like '%$key%' or tenkhoa like '%$key%')";
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<br /> Có  <?=$num; ?> sinh viên cho từ khóa: <b><?=$key;?></b><br />
								<form name="form1" method="post" action="#">
								<input  type='submit' value='XÓA' name='delete' id='delete'/>
								<table><tr class='tr'><th>Mã SV</th><th>Họ Đệm<th>Tên</th><th>LỚP</th><th>Tên Khoa</th><th>Sửa</th><th>Xóa</th></tr>
								
							<?php	while ( $row = mysql_fetch_array ( $kq ) ) {
									echo "<tr>";
									echo "<td>$row[0]</td>";
									echo "<td>$row[1]</td>";
									echo "<td>$row[2]</td>";
									echo "<td>$row[3]</td>";
									echo "<td>$row[4]</td>";
									echo "<td><a href='suasinhvien.php?idsinhvien=$row[5]'><img src='".$images."edit.png' /></td>";
									echo "<td><a href=\"#\" onclick=\"goixoa('$row[5]');\"><img src='".$images."xoa.png' /></a></td></tr>";
								}
								echo "</table></form>"; 

							} else {
								echo "<br /><h1 style='text-align: center;'><img src='".$images."del.png' />Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1>";
							}
					
					?>
			