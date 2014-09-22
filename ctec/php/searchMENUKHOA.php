<?php
				include "ketnoi.php";
					$key = $_GET ['q'];
							
							$select = "select * ";
							$select .= "from menu_khoa ";
							$select .= "where 
					(idkhoa like '%$key%' or makhoa like '%$key%' or tenkhoa like '%$key%' or link like '%$key%')";
					
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<center> Có  <?=$num; ?> kết quả cho từ khóa: <b><?=$key;?></b></center>
								<form name="myform" method="post" action="xoamenukhoa.php">
					<input  id='delete' type='submit' value='XÓA'/>
					<table>
					<thead><tr><th>ID KHOA</th><th>MÃ KHOA</th><th>TÊN KHOA</th><th>LINK</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
						echo "<td><a href='".$page."suamenukhoa&&idkhoa=$row[idkhoa]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' value='$row[idkhoa]' /></td></tr>";
					}
					echo "</tbody></table></form><hr/><br />";
							} else {
								echo "<br /><h1 style='text-align: center;'>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</h1><br/>";
							}
						
					
					?>
			