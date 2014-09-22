<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Sửa KHOA</a></h1>
</header>
		<?php
			$idkhoa = $_GET ['idkhoa'];
				$select = "select * ";
				$select .= "from  khoa ";
				$select .= "where idkhoa='$idkhoa'";
				$kq = mysql_query ( $select, $connect );
				$row = mysql_fetch_array ( $kq );
				
				?>
			<form action='#' method='post' name='khoa'>
			<?php
						if (isset ( $_POST ['submit'] )) {
					
					$idkhoa = $_POST ['idkhoa'];
					$tenkhoa = $_POST ['tenkhoa'];
					
					
					$update = "update khoa set ";
					$update .= "tenkhoa='$tenkhoa' ";	
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
						<table id="table">
						<tr>
							<td>Tên Khoa</td><td><input  type="text" name="tenkhoa"
								value="<?=$row[1];?>" /></td>
						</tr>
						
						
						</table>
						<input type="hidden" name="idkhoa" value="<?=$idkhoa;?>" />
						<input type="submit" value="Sửa" name="submit" />
					</form>
					
			
			</article>
		
