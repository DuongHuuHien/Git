<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select * ";
							$select .= "from tailieugiangday ";
							$select .= "where 
					(idtailieugiangday like '%$key%' or tentailieu like '%$key%' or tacgia like '%$key%' or namxuatban  like '%$key%')";
					
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<center> Có  <?=$num; ?> kết quả cho từ khóa: <b><?=$key;?></b></center>
								<form name="myform" method="post" action="xoatlgd.php">
					<input  id='delete' type='submit' value='delete'/></a></h3>
					<table id='table'><thead><tr>
					<th>ID Tài liệu</th>
					<th>tên Tài Liệu</th><th>tác giả</th><th>năm xuất bản</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
				<?php	while ( $row = mysql_fetch_array ( $kq ) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
						echo "<td><a href='".$page."suatlgd&&idtailieugiangday=$row[idtailieugiangday]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idtailieugiangday]' /></td></tr>";
								
					}
					echo "</tbody></table></form><hr/><br />";
							} else {
								echo "<br /><h1 style='text-align: center;'>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1><br/>";
							}
						
					
					?>
			