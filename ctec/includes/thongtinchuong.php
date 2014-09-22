<?php
		if (isset ( $_POST ["upload"] )) {
			?>
					<table id="table">

					<form action='#' method='post' name='upload'
						enctype='multipart/form-data'>

						<tr>
							<td>Tên Chương</td>
							<td><input id="tentailieu" type="text" name="tenchuong" /></td>
						</tr>
						<tr>
							<td>Tóm tắt</td>
							<td><input type="text" name="tacgia" /></td>
						</tr>
						<tr>
							<td>ID Học phần</td>
							<td><input type="text" name="idhocphan" /></td>
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
			if (isset($_GET['idhocphan'])){
			$idhocphan = $_GET ['idhocphan'];
			$tenhocphan = $_GET ['tenhocphan'];
			$select = "select chuong.idhocphan,tenchuong, tomtat, linkdown, tenhocphan ";
			$select .= "from chuong,hocphan";
			$select .= " where hocphan.idhocphan=chuong.idhocphan and chuong.idhocphan='$idhocphan'";
			$kq = mysql_query ( $select, $connect );
			$num = mysql_num_rows ( $kq );
			if ($num > 0) { ?>
				<article class="post clearfix">
				
				<header>
                <h1 class="post-title"><a href="#"> <?php if(isset($tenhocphan))echo $tenhocphan; ?></a></h1>
				</header>
				<table id='table'>
				<tr><th>Tên Chương</th><th>Tóm tắt</th><th>Download</th></tr>
			<?php	while ( $row = mysql_fetch_array ( $kq ) ) {
					echo "<tr >";
					echo "<td>$row[1]</td>";
					echo "<td>$row[2]</td>";
					echo "<td><a href='download.php?filename=$row[3].doc'>Download</a></td></tr>";
				}
				echo "</table><br />";
				?><form action="#" method="post" >
					<input type="submit" name="upload" value="Upload Chương" />
					</form>
					<?php
			} else {
				echo "<h2>Chưa có tài liệu! upload tài liệu mới cho học này!</h2>"; ?>
				<table id="table">

					<form action='includes/upload_chuong.php' method='post' name='upload'
						enctype='multipart/form-data'>

						<tr>
							<td>Tên chương</td>
							<td><input id="tentailieu" type="text" name="tenchuong" /></td>
						</tr>
						<tr>
							<td>Tóm tắt</td>
							<td><input type="text" name="tomtat" /></td>
						</tr>
						<tr>
							<td>ID học phần</td>
							<td><input type="text" name="idhocphan" /></td>
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

					<form action='includes/upload_chuong.php' method='post' name='upload'
						enctype='multipart/form-data'>

						<tr>
							<td>Tên chương</td>
							<td><input type="text" name="tenchuong" /></td>
						</tr>
						<tr>
							<td>Tóm tắt</td>
							<td><input type="text" name="tomtat" /></td>
						</tr>
						<tr>
							<td>ID học phần</td>
							<td><input type="text" name="idhocphan" /></td>
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
