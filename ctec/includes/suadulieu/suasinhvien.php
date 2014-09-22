<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa sinh viên</a></h1>
</header>
			<?php
				$idsinhvien = $_GET ['idsinhvien'];
				$select = "select idsinhvien, masv, hodem, ten, lop, tenkhoa, sinhvien.idkhoa ";
				$select .= "from sinhvien, khoa ";
				$select .= "where sinhvien.idkhoa=khoa.idkhoa and idsinhvien='$idsinhvien'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				?>
		<form action='#' method='post' name='sinhvien'>
			<?php
				if (isset ( $_POST ['submit'] )) {
					$idsinhvien = $_POST ['idsinhvien'];
					$masv = $_POST ['masv'];
					$hodem = $_POST ['hodem'];
					$ten = $_POST ['ten'];
					$lop = $_POST ['lop'];
					$idkhoa = $_POST ['idkhoa'];
					
					
					$update = "update sinhvien set ";
					$update .= "masv='$masv',";
					$update .= "hodem='$hodem',";
					$update .= "ten='$ten',";
					$update .= "lop='$lop',";
					$update .= "idkhoa='$idkhoa' ";
					$update .= "where idsinhvien='$idsinhvien'";
					$kq = mysql_query ( $update, $connect );
					if (! $kq) {
						echo "<center>Cập nhật không thành công!</center>";
					} else
						echo "<center>Cập nhật thành công!</center>";
				}
				?>
				<table id="table"><tr>
							<td>Mã Sinh Viên</td><td><input id="masv" type="text" name="masv"
								value="<?=$row[1];?>" /></td>
						</tr>
						<tr>
							<td>Họ Đệm</td><td><input type="text" name="hodem"
								value="<?=$row[2];?>" /></td>
						</tr>
						<tr>
							<td>Tên</td><td><input type="text" name="ten"
								value="<?=$row[3];?>" /></td>
						</tr>
						<tr>
							<td>Lớp</td><td><input type="text" name="lop"
								value="<?=$row[4];?>" /></td>
						</tr>
						
						<tr>
							<td>ID Khoa</td><td><input type="text" name="idkhoa"
								value="<?=$row[6];?>" /></td>
						</tr></table>
						<input type="hidden" name="idsinhvien" value="<?=$idsinhvien;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		

			
						