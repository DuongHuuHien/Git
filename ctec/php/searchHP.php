<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select * ";
							$select .= "from hocphan ";
							$select .= "where 
					(idhocphan like '%$key%' or mahocphan like '%$key%' or tenhocphan like '%$key%' 
						or sotinchi  like '%$key%' or tenhocky like '%$key%' or loai like '%$key%')";
					
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<center> Có  <?=$num; ?> kết quả cho từ khóa: <b><?=$key;?></b></center>
								<form name="myform" method="post" action="xoahp.php">
					<input  id='delete' type='submit' value='XÓA'/></a></h3>
					<table>
					<thead><tr><th>ID HP</th><th>Mã HP</th><th>Tên Học Phần</th><th>Số Tín Chỉ</th>
					<th>Tên Học Kỳ</th><th>Loại</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
						echo "<td><a href='".$page."suahocphan&&idhocphan=$row[idhocphan]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' value='$row[idhocphan]' /></td></tr>";
					}
					echo "</tbody></table></form><hr/><br />";
							} else {
								echo "<br /><h1 style='text-align: center;'>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1><br/>";
							}
						
					
					?>
			