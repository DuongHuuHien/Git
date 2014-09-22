<?php
				include "ketnoi.php";
				session_start();
					$key = $_GET ['q'];
							
						$select = "select hocphan.idhocphan, mahocphan, tenhocphan, sotinchi, tenhocky ";
						$select .= "from giangvien_day_hocphan, hocphan, giangvien ";
						$select .= "where hocphan.idhocphan=giangvien_day_hocphan.idhocphan and ";
						$select .= "giangvien.idgiangvien=giangvien_day_hocphan.idgiangvien 
						and (mahocphan like '%$key%' or tenhocphan like '%$key%' or
							tenhocky like '%$key%' or sotinchi like '%$key%' ) and ";
						$select .= "magv= " . "'" . $_SESSION ["tendangnhap"] . "'";
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<br /> Có  <?=$num; ?> học phần cho từ khóa: <b><?=$key;?></b><br />
								<form name="form1" method="post" action="checkGV.php">
							<input type='submit' value='XÓA' name='XÓA' id='delete'/>
								<br /><br /><table><thead><tr><th>Mã Học Phần</th>
					<th>Tên Học Phần</th><th>Số tín chỉ</th><th>Học Kỳ</th><th>
					Tài Liệu</th><th>Sửa</th><th><input type='checkbox' id='selectall' />
					</th></tr></thead> <tbody>
								<?php while ( $row = mysql_fetch_array ( $kq ) ) {
										echo "<td>$row[1]</td>";
								echo "<td>$row[2]</td>";
								echo "<td>$row[3]</td>";
								echo "<td>$row[4]</td>";
								echo "<td><a href='thongtintailieu.php?idhocphan=$row[0]&tenhocphan=$row[2]'><img src='".$images."document.png'></td>";
								echo "<td><a href='".$host."index.php?page=suahocphan&&idhocphan=$row[idhocphan]'><img src='".$images."edit.png' /></td>";
								echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
						value='$row[idhocphan]' /></td></tr>";
								}
								echo "</tbody></table>";
							} else {
								echo "<img src='".$images."del.png' /><center>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</center>";
							}
						
					
					?>
			