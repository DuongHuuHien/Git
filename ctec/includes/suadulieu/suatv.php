<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa Thành Viên</a></h1>
</header>
		<?php
			$id_mem = $_GET ['id_mem'];
				$select = "select * ";
				$select .= "from registered_members ";
				$select .= "where id_mem='$id_mem'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			<form action='#' method='post' name='registered_members'>
			<?php
						if (isset ( $_POST ['submit'] )) {
					
					$id_mem = $_POST ['id_mem'];
					$tendangnhap = $_POST ['tendangnhap'];
					$hodem=$_POST ['hodem'];
					$ten = $_POST ['ten'];
					$email = $_POST ['email'];
					$password = $_POST ['password'];

					
					$update = "update registered_members set ";
					$update .= "tendangnhap='$tendangnhap',";
					$update .= "hodem='$hodem',";
					$update .= "ten='$ten',email='$email', password='$password' ";			
					$update .= "where id_mem='$id_mem'";
					$result = mysql_query ( $update, $connect );
					if($result){
	 				
						echo "<center>Sửa  thành công!</center>";
					}
					else{
						echo "<center>Không  thành công!</center>";	
					}
				}			
					?>
						<table id="table"><tr>
							<td>Tên đăng nhập</td><td><input  type="text" name="tendangnhap"
								value="<?=$row[1];?>" /></td>
						</tr>
						<tr>
							<td>Họ đệm</td><td><input type="text" name="hodem"
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
							<td>Mật kHẩu</td><td><input type="text" name="password"
								value="<?=$row[5];?>" /></td>
						</tr>
						</table>
						<input type="hidden" name="id_mem" value="<?=$id_mem;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
