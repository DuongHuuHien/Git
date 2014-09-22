<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa Chương</a></h1>
</header>
		<?php
			$idchuong = $_GET ['idchuong'];
				$select = "select * ";
				$select .= "from chuong ";
				$select .= "where idchuong='$idchuong'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			<form action='#' method='post' name='chuong'>
			<?php
						if (isset ( $_POST ['submit'] )) {
					
					$idchuong = $_POST ['idchuong'];
					$tenchuong = $_POST ['tenchuong'];
					$tomtat=$_POST ['tomtat'];
					$idhocphan = $_POST ['idhocphan'];
					$link = $_POST ['link'];

					
					$update = "update chuong set ";
					$update .= "tenchuong='$tenchuong',";
					$update .= "tomtat='$tomtat',";
					$update .= "idhocphan='$idhocphan' ";			
					$update .= "where idchuong='$idchuong'";
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
							<td>Tên chương</td><td><input  type="text" name="tenchuong"
								value="<?=$row[1];?>" /></td>
						</tr>
						<tr>
							<td>Tóm tắt</td><td><input type="text" name="tomtat"
								value="<?=$row[2];?>" /></td>
						</tr>
						<tr>
							<td>ID Học phần</td><td><input type="text" name="idhocphan"
								value="<?=$row[3];?>" /></td>
						</tr>
						<tr>
							<td>Link</td><td><input type="text" name="link"
								value="<?=$row[3];?>" /></td>
						</tr>
						</table>
						<input type="hidden" name="idchuong" value="<?=$idchuong;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
