<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select * ";
							$select .= "from chuong ";
							$select .= "where 
					(idchuong like '%$key%' or tenchuong like '%$key%' or tomtat like '%$key%' or idhocphan like '%$key%' or linkdown like '%$key%')";
												$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<center> Có  <?=$num; ?> kết quả cho từ khóa: <b><?=$key;?></b></center>
								<form name="form" method="post" action="xoachuong.php">
					<input id='delete' type='submit' value='XÓA'/></a>
					<table><thead><tr><th>ID Chương</th>
					<th>Tên Chương</th><th>tóm tắt</th><th>id học phần</th><th>link download</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
				<?php	while ( $row = mysql_fetch_array ( $kq) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>";
						echo "<td><a href='".$page."suachuong&&idchuong=$row[idchuong]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idchuong]' /></td></tr>";
					}
					echo "</tbody></table></form><hr/><br />";
							} else {
								echo "<br /><h1 style='text-align: center;'>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1><br/>";
							}
						
					
					?>
			