<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa Tài Khoản</a></h1>
</header>
		<?php
			$tendangnhap = $_GET ['tendangnhap'];
				$select = "select * ";
				$select .= "from taikhoan ";
				$select .= "where tendangnhap='$tendangnhap'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			<form action='#' method='post' name='taikhoan'>
			<?php
						if (isset ( $_POST ['submit'] )) {
					
					$tendangnhap = $_POST ['tendangnhap'];
					$matkhau = $_POST ['matkhau'];
					$quyen=$_POST ['quyen'];
					
					
					$update = "update taikhoan set ";
					$update .= "matkhau='$matkhau',";
					$update .= "quyen='$quyen' ";		
					$update .= "where tendangnhap='$tendangnhap'";
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
							<td>Mật khẩu</td><td><input  type="text" name="matkhau"
								value="<?=$row[1];?>" /></td>
						</tr>
						<tr>
							<td>Quyền</td><td><input type="text" name="quyen"
								value="<?=$row[2];?>" /></td>
						</tr>
						
						
						</table>
						<input type="hidden" name="tendangnhap" value="<?=$tendangnhap?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
