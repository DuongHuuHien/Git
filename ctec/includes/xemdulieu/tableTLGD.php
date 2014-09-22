<div id="result"></div>
<?php
					$tlgd = "select * ";
					$tlgd .= "from tailieugiangday";
					$kq_tlgd = mysql_query ( $tlgd, $connect );
					
					if($kq_tlgd)
					{ 
						$num = mysql_num_rows ( $kq_tlgd ); ?> 
	
				<form name="myform" method="post" action="xoatlgd.php">
					<h3><a><a href='del_table_tlgd.php' onclick='return del();'>
					<img src='../images/delete.png' />
					</a>TÀI LIỆU GIẢNG DẠY
					<input style='margin-left: 830px;' id='delete' type='submit' value='XÓA'/></a></h3>
					<table><thead><tr>
					<th>ID Tài liệu</th>
					<th>tên Tài Liệu</th><th>tác giả</th><th>năm xuất bản</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
				<?php	while ( $row = mysql_fetch_array ( $kq_tlgd ) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
						echo "<td><a href='".$page."suatlgd&&idtailieugiangday=$row[idtailieugiangday]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idtailieugiangday]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				}else echo "<img src='".$images."del.png'>Bảng tài liệu giảng dạy chưa có dữ liệu.";
?>
<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableTLGD(this.value)"  /> 
</form>