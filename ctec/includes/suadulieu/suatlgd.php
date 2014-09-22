<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa Tài liệu giảng dạy</a></h1>
</header>
		<?php
			$idtailieugiangday = $_GET ['idtailieugiangday'];
				$select = "select * ";
				$select .= "from tailieugiangday ";
				$select .= "where idtailieugiangday='$idtailieugiangday'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			<form action='#' method='post' name='tlgd'>
			<?php
						if (isset ( $_POST ['submit'] )) {
					
					$idtailieugiangday = $_POST ['idtailieugiangday'];
					$tentailieu = $_POST ['tentailieu'];
					$tacgia = $_POST ['tacgia'];
					$namxuatban = $_POST ['namxuatban'];
					
					$update = "update tailieugiangday set ";
					$update .= "tentailieu='$tentailieu',";
					$update .= "tacgia='$tacgia',";
					$update .= "namxuatban='$namxuatban' ";			
					$update .= "where idtailieugiangday='$idtailieugiangday'";
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
							<td>Tên tài liệu</td><td><input  type="text" name="tentailieu"
								value="<?=$row[1];?>" /></td>
						</tr>
						<tr>
							<td>Tác giả</td><td><input type="text" name="tacgia"
								value="<?=$row[2];?>" /></td>
						</tr>
						<tr>
							<td>Năm xuất bản</td><td><input type="text" name="namxuatban"
								value="<?=$row[3];?>" /></td>
						</tr>
						</table>
						<input type="hidden" name="idtailieugiangday" value="<?=$idtailieugiangday;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
