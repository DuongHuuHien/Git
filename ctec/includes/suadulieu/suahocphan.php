<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa học phần</a></h1>
</header>
		<?php
			$idhocphan = $_GET ['idhocphan'];
				$select = "select * ";
				$select .= "from hocphan ";
				$select .= "where idhocphan='$idhocphan'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			<form action='#' method='post' name='hocphan'>
			<?php
						
					
					if (isset ( $_POST ['submit'] )) {
					
					$idhocphan = $_POST ['idhocphan'];
					$mahocphan = $_POST ['mahocphan'];
					$tenhocphan = $_POST ['tenhocphan'];
					$sotinchi = $_POST ['sotinchi'];
					$hocky = $_POST ['hocky'];
					
					$update = "update hocphan set ";
					$update .= "mahocphan='$mahocphan',";
					$update .= "tenhocphan='$tenhocphan',";
					$update .= "sotinchi='$sotinchi',";
					$update .= "tenhocky='$hocky' ";
					
					$update .= "where idhocphan='$idhocphan'";
					
					$result = mysql_query ( $update, $connect );
					if($result){
	 				
						echo "<center>Sửa học phần thành công!</center>";
					}
					else{
						echo "<center>Không thành công!</center>";
					}
				}			
					?>
						<table id="table"><tr>
							<td>Mã Học Phần</td><td><input id="mahocphan" type="text"
								name="mahocphan" value="<?=$row[1];?>" /></td>
						</tr>
						<tr>
							<td>Tên Học Phần</td><td><input type="text" name="tenhocphan"
								value="<?=$row[2];?>" /></td>
						</tr>
						<tr>
							<td>Số Tín Chỉ</td><td><input type="text" name="sotinchi"
								value="<?=$row[3];?>" /></td>
						</tr>
						<tr>
							<td>Học Kỳ</td><td><input type="text" name="hocky"
								value="<?=$row[4];?>" /></td>
						</tr>
						</table>
						<input type="hidden" name="idhocphan" value="<?=$idhocphan;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
