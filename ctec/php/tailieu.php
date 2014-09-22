<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Thông tin tài liệu</a></h1>
</header>
<?php
		if (isset ( $_SESSION ["tendangnhap"] )) {
			$idhocphan = $_GET ['idhocphan'];
			$tenhocphan = $_GET ['tenhocphan'];
			$select = "select tentailieu, tacgia, namxuatban, linkdown ";
			$select .= "from tailieugiangday, hocphan_tailieugiangday ";
			$select .= " where hocphan_tailieugiangday.idtailieugiangday
					=tailieugiangday.idtailieugiangday";
			$select .= " and idhocphan='$idhocphan'";
			$kq = mysql_query ( $select, $connect );
			$num = mysql_num_rows ( $kq );
			if ($num > 0) {
				
				echo "<h5>" . $tenhocphan . "</h5>";
				echo "<br /><table id='table'>";
				echo "<tr><th>Tên Tài Liệu</th><th>Tác Giả</th><th>NXB</th><th>Download</th></tr>";
				while ( $row = mysql_fetch_array ( $kq ) ) {
					echo "<tr >";
					echo "<td>$row[0]</td>";
					echo "<td>$row[1]</td>";
					echo "<td>$row[2]</td>";
					echo "<td><a href='download.php?filename=$row[3].doc'>Download</a></td></tr>";
				}
				echo "</table><br />";
				?>
					<input type="submit" style='margin-left: 450px;'
					value="Upload Tài Liệu"
					onclick="window.location='uploadtailieu.php'" />
					<?php
			} else {
				echo "Chưa cập nhật tài liệu cho học phần này!";
			}
		} else {
			header ( "location: ../dangnhap.php" );
		}
		?>