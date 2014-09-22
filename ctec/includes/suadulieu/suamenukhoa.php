<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa Menu Khoa</a></h1>
</header>
		<?php
			$idkhoa = $_GET ['idkhoa'];
				$select = "select * ";
				$select .= "from menu_khoa ";
				$select .= "where idkhoa='$idkhoa'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			
			<?php
						if (isset ( $_POST ['submit'] )) {
					
					$idkhoa = $_POST ['idkhoa'];
					$tenkhoa = $_POST ['tenkhoa'];
					$makhoa=$_POST ['makhoa'];
					$link = $_POST ['link'];

					
					$update = "update menu_khoa set ";
					$update .= "makhoa='$makhoa',";
					$update .= "tenkhoa='$tenkhoa',";
					$update .= "link='$link' ";			
					$update .= "where idkhoa='$idkhoa'";
					$result = mysql_query ( $update, $connect );
					if($result){
	 				
						echo "<center>Sửa  thành công!</center>";
					}
					else{
						echo "<center>Không  thành công!</center>";	
					}
				}			
					?>
					<form action='#' method='post' name='menukhoa'>
						<table id="table"><tr>
							<td>Mã khoa</td><td><input  type="text" name="makhoa"
								value="<?=$row[1];?>" /></td>
						</tr>
						<tr>
							<td>Tên Khoa</td><td><input type="text" name="tenkhoa"
								value="<?=$row[2];?>" /></td>
						</tr>
						<tr>
							<td>Link</td><td><input type="text" name="link"
								value="<?=$row[3];?>" /></td>
						</tr>
						</table>
						<input type="hidden" name="idkhoa" value="<?=$idkhoa;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
