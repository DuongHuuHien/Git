<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select * ";
							$select .= "from hocphan_tailieugiangday ";
							$select .= "where 
					(idhocphan like '%$key%' or idtailieugiangday like '%$key%' or linkdown like '%$key%')";
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<center><center> Có  <?=$num; ?> kết quả cho từ khóa: <b><?=$key;?></center><br />
								<form name="form1" method="post" action="xoahptlgd.php">
								<input type='submit' value='XÓA' name='delete' id='delete'/>
								<table>
								<tr><th>ID HỌC PHẦN</th><th>ID Tài liệu</th><th>LINK</th><th>Sửa</th><th>XÓA</th></tr>
								
								<?php while ( $row = mysql_fetch_array ( $kq ) ) {
									echo "<tr>";
									echo "<td>$row[0]</td>";
									echo "<td>$row[1]</td>";
									echo "<td>$row[2]</td>";
									echo "<td><a href='".$page."suahptlgd&&idhocphan=$row[idhocphan]&&id'
									=$row[idtailieugiangday]'><img src='".$images."edit.png' /></td>";
									echo "<td><input  class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idhocphan]' /></td></tr>";
								echo "<input type='hidden' name='idtailieugiangday' value='$row[1]' />";
								} ?>
							
							</table></form><hr/><br />
							<?php } else {
								echo "<br /><h1 style='text-align: center;'>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1>";
							}
						
					
					?>
			