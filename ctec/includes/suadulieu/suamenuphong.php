<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa Menu phong</a></h1>
</header>
		<?php
			$idphong = $_GET ['idphong'];
				$select = "select * ";
				$select .= "from menu_phong ";
				$select .= "where idphong='$idphong'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			<form action='#' method='post' name='menuphong'>
			<?php
						if (isset ( $_POST ['submit'] )) {
					
					$idphong = $_POST ['idphong'];
					$tenphong = $_POST ['tenphong'];
					$maphong=$_POST ['maphong'];
					$link = $_POST ['link'];

					
					$update = "update menu_phong set ";
					$update .= "maphong='$maphong',";
					$update .= "tenphong='$tenphong',";
					$update .= "link='$link' ";			
					$update .= "where idphong='$idphong'";
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
							<td>Mã phong</td><td><input  type="text" name="maphong"
								value="<?=$row[1];?>" /></td>
						</tr>
						<tr>
							<td>Tên phong</td><td><input type="text" name="tenphong"
								value="<?=$row[2];?>" /></td>
						</tr>
						<tr>
							<td>Link</td><td><input type="text" name="link"
								value="<?=$row[3];?>" /></td>
						</tr>
						</table>
						<input type="hidden" name="idphong" value="<?=$idphong;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
