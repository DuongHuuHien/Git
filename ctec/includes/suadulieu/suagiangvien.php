<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa giảng viên</a></h1>
</header>
		<?php
			$idgiangvien = $_GET ['idgiangvien'];
				$select = "select * ";
				$select .= "from giangvien ";
				$select .= "where idgiangvien='$idgiangvien'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			<form action='#' method='post' name='sinhvien'>
			<?php
						if (isset ( $_POST ['submit'] )) {
					
					$idgiangvien = $_POST ['idgiangvien'];
					$magv = $_POST ['magv'];
					$hodem = $_POST ['hodem'];
					$ten = $_POST ['ten'];
					$email = $_POST ['email'];
					$sdt = $_POST ['sdt'];
					$idkhoa = $_POST ['idkhoa'];
					$update = "update giangvien set ";
					$update .= "magv='$magv',";
					$update .= "hodem='$hodem',";
					$update .= "ten='$ten',";
					$update .= "email='$email',";
					$update .= "SĐT='$sdt',";
					$update .= "idkhoa='$idkhoa' ";
					
					$update .= "where idgiangvien='$idgiangvien'";
					$result = mysql_query ( $update, $connect );
					if($result){
	 				
						echo "<center>Sửa giảng viên thành công!</center>";
					}
					else{
						echo "<center>không  thành công!</center>";
					}
				}			
					?>
						<table id="table"><tr>
							<td>Mã Giảng Viên</td><td><input id="masv" type="text" name="magv"
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
							<td>Email</td><td><input type="text" name="email"
								value="<?=$row[4];?>" /></td>
						</tr>
						<tr>
							<td>Số Điện Thoại</td><td><input type="text" name="sdt"
								value="<?='0'.$row[5];?>" /></td>
						</tr>
						<tr>
							<td>ID Khoa</td><td><input type="text" name="idkhoa"
								value="<?=$row[6];?>" /></td>
						</tr></table>
						<input type="hidden" name="idgiangvien" value="<?=$idgiangvien;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
