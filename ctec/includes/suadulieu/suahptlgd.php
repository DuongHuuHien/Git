<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa Học phần tài liệu giảng dạy</a></h1>
</header>
		<?php
			$idhocphan = $_GET ['idhocphan'];
			$idtailieugiangday = $_GET ['idtailieugiangday'];
				$select = "select * ";
				$select .= "from  hocphan_tailieugiangday ";
				$select .= "where idhocphan='$idhocphan'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			<form action='#' method='post' name='gvdhp'>
			<?php
						if (isset ( $_POST ['submit'] )) {
					
					$idhocphan = $_POST ['idhocphan'];
					$idgiangvien = $_POST ['idgiangvien'];
					
					
					$update = "update giangvien_day_hocphan set ";
					$update .= "idgiangvien='$idgiangvien' ";	
					$update .= "where idhocphan='$idhocphan' and idgiangvien='$idgiangvien'";
					
					$result = mysql_query ( $update, $connect );
					if($result){
	 				
						echo "<center>Sửa  thành công!</center>";
					}
					else{
						echo "<center>Không  thành công!</center>";	
					}
				}			
					?>
						<table id="table">
						<tr>
							<td>ID giảng viên</td><td><input  type="text" name="idgiangvien"
								value="<?=$row[1];?>" /></td>
						</tr>
						
						
						</table>
						<input type="hidden" name="idhocphan" value="<?=$idhocphan;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
