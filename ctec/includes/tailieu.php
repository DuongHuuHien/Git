<?php
		if (isset ( $_POST ["upload"] )) {
			?>
					<table id="table">

					<form action='#' method='post' name='upload'
						enctype='multipart/form-data'>

						<tr>
							<td>Tên Tài Liệu</td>
							<td><input id="tentailieu" type="text" name="tentailieu" /></td>
						</tr>
						<tr>
							<td>Tác giả</td>
							<td><input type="text" name="tacgia" /></td>
						</tr>
						<tr>
							<td>Năm XB</td>
							<td><input type="text" name="nxb" /></td>
						</tr>

						<tr>
						<td><input type="file" name='file' /></td>
						<td><input type="submit" value="Upload" name="up" /></td>
						</tr>

</form>
					</table>
					
				<?php
		} ?>

		

<?php
		if (isset ( $_SESSION ["tendangnhap"] )) {
			if (isset($_GET['idhocphan'])&& isset($_GET ['tenhocphan'])){
			$idhocphan = $_GET ['idhocphan'];
			$tenhocphan = $_GET ['tenhocphan'];
			$select = "select tentailieu, tacgia, namxuatban, linkdown ";
			$select .= "from tailieugiangday, hocphan_tailieugiangday ";
			$select .= " where hocphan_tailieugiangday.idtailieugiangday
					=tailieugiangday.idtailieugiangday";
			$select .= " and idhocphan='$idhocphan'";
			$kq = mysql_query ( $select, $connect );
			$num = mysql_num_rows ( $kq );
			if ($num > 0) { ?>
				<article class="post clearfix">
				
				<header>
                <h1 class="post-title"><a href="#">Tài liệu <?php if(isset($tenhocphan))echo $tenhocphan; ?></a></h1>
				</header>
				<table id='table'>
				<tr><th>Tên Tài Liệu</th><th>Tác Giả</th><th>NXB</th><th>Download</th></tr>
			<?php	while ( $row = mysql_fetch_array ( $kq ) ) {
					echo "<tr >";
					echo "<td>$row[0]</td>";
					echo "<td>$row[1]</td>";
					echo "<td>$row[2]</td>";
					echo "<td><a href='download.php?filename=$row[3].doc'>Download</a></td></tr>";
				}
				echo "</table><br />";
				?><form action="#" method="post" >
					<input type="submit" name="upload" value="Upload Tài Liệu" />
					</form>
					<?php
			} else {
				echo "<h2>Chưa có tài liệu! upload tài liệu mới cho học phần này!</h2>"; ?>
				<table id="table">

					<form action='includes/upload_tailieu.php' method='post' name='upload'
						enctype='multipart/form-data'>

						<tr>
							<td>Tên Tài Liệu</td>
							<td><input id="tentailieu" type="text" name="tentailieu" /></td>
						</tr>
						<tr>
							<td>Tác giả</td>
							<td><input type="text" name="tacgia" /></td>
						</tr>
						<tr>
							<td>Năm XB</td>
							<td><input type="text" name="nxb" /></td>
						</tr>

						<tr>
						<td><input type="file" name='file' /></td>
						<td><input type="submit" value="Upload" name="up" /></td>
						</tr>
</form>

					</table>
		<?php	}
	}else{ ?>
		<table id="table">

					<form action='includes/upload_tailieu.php' method='post' name='upload'
						enctype='multipart/form-data'>

						<tr>
							<td>Tên Tài Liệu</td>
							<td><input id="tentailieu" type="text" name="tentailieu" /></td>
						</tr>
						<tr>
							<td>Tác giả</td>
							<td><input type="text" name="tacgia" /></td>
						</tr>
						<tr>
							<td>Năm XB</td>
							<td><input type="text" name="nxb" /></td>
						</tr>

						<tr>
						<td><input type="file" name='file' /></td>
						<td><input type="submit" value="Upload" name="up" /></td>
						</tr>

</form>
					</table>

<?php	}
		} else {
			header ( "location: ../dangnhap.php" );
		}
		?>
		</article>
