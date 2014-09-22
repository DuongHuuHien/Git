<div id="result"></div>
<?php 				$gvdhp = "select * ";
					$gvdhp .= "from giangvien_day_hocphan";
					$kq_gvdhp = mysql_query ($gvdhp, $connect );
					
					
					if($kq_gvdhp)
					{ 
						$num = mysql_num_rows ( $kq_gvdhp );
						?>
					
				<form name="form" method="post" action="xoagvdhp.php">
					<h3><a><a href='del_table_gvdhp.php' onclick='return del();'>
					<img src='../images/delete.png' /></a>GVDHP
					<input style='margin-left: 830px;' id='delete' type='submit' value='XÓA'/></a></h3>
					<table><tr><th>ID Học phần</th>
					<th>ID giảng viên</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr>
				<?php	while ( $row = mysql_fetch_array ( $kq_gvdhp) ) {
						echo "<tr><td>$row[0]</td><td><input type='text' name='idgiangvien' value='$row[1]' /></td>";
						echo "<td><a href='".$page."suagvdhp&&idhocphan=$row[idhocphan]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idhocphan]' /></td></tr>";		
					}
					echo "</table></form>";
				}else echo "<img src=='".$images."del.png'>Bảng GVDHP chưa có dữ liệu...";
				?>
				<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableGVDHP(this.value)"  /> 
</form>