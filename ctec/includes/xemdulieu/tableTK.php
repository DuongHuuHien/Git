<div id="result"></div>
<?php
					$tk = "select * ";
					$tk .= "from taikhoan";
					$kq_tk = mysql_query ( $tk, $connect );
					
					if($kq_tk)
					{ 
						$num = mysql_num_rows ( $kq_tk ); ?>
					<form name="form" method="post" action="xoatk.php">
					<h3><a><a href='del_table_tk.php' onclick='return del();'>
					<img src='../images/delete.png'/>
					</a>Tài Khoản
					<input style='margin-left: 830px;' type='submit' value='XÓA' id='delete'/></a></h3>
					<table>
					<thead><tr><th>Tên tài khoản</th><th>Mật khẩu</th><th>Quyền</th><th>Sửa</th><th>
					<input type="checkbox" id="selectall" /></th></tr></thead>
					<?php while ( $row = mysql_fetch_array ( $kq_tk ) ) {
						echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
						echo "<td><a href='".$page."suataikhoan&&tendangnhap=$row[tendangnhap]'><img src='".$images."edit.png' /></td>";
						echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' value='$row[tendangnhap]' /></td></tr>";
					}
					echo "</tbody></table></form>";
				}else echo "<img src='".$images."del.png'>Bảng Tài khoản chưa có dữ liệu...";
				?>
<form id="search" >
				Tìm kiếm <input type="text" onkeyup="tableTAIKHOAN(this.value)"  /> 
</form>