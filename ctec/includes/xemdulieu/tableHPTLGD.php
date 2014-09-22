<div id="result"></div>
<?php 				$hptlgd = "select * ";
					$hptlgd .= "from hocphan_tailieugiangday";
					$kq_hptlgd = mysql_query ($hptlgd, $connect );
					
					if($k1_hptlgd)
					{ $num = mysql_num_rows ( $kq_hptlgd );
						?>
					
					<form name="form" method="post" action="xoahptlgd.php">
					<h3><a><a href='del_table_hptlgd.php' onclick='return del();'>
					<img src='../images/delete.png' /></a>HỌC PHẦN TÀI LIỆU GIẢNG DẠY
					<input style='margin-left: 830px;' id='delete' type='submit' value='XÓA'/></a></h3>
					<table><thead><tr><th>ID Học phần</th>
					<th>ID tài liệu</th><th>link download</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
				<?php	while ( $row = mysql_fetch_array ( $kq_hptlgd) ) {
					echo "<input type='hidden' name='idtailieugiangday' value='$row[0]' />";
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
						echo "<td><a href='".$page."suahptlgd&&idhocphan=$row[idhocphan]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idhocphan]' /></td></tr>";
								
					}
					echo "</tbody></table></form>";
				}else echo "<img src=='".$images."del.png'>Bảng  chưa HPTLGDcó dữ liệu...";
				?>
				<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableHPTLGD(this.value)"  /> 
</form>