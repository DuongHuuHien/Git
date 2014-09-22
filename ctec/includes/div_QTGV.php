<article id="post clearfix" class="post clearfix">
	<h1 class="post-title"><a href="#">QUẢN LÝ GIẢNG VIÊN</a></h1>
    <hr color="gray" />
    <?php if (isset ( $_SESSION ["tendangnhap"] )){ //Nếu không tồn tại biến đăng nhập
    	 		if (! isset ( $_GET ['ok'] )) { //Chưa tồn tại biến lọc
    	 				if (! isset ( $_GET ['page'] )) {
								$_GET ['page'] = 1;
							} //không tồnt tại biến $page thì gán page==1
						$start = ($_GET ['page'] - 1) * 5; //tính vị trí bắt đầu của page
						$select = "select magv, hodem, ten, email, SĐT, tenkhoa, idgiangvien  ";
						$select .= "from giangvien, khoa ";
						$select .= "where giangvien.idkhoa=khoa.idkhoa limit $start, 5"; // Giới hạn số mẫu tin cho một trang
						$kq = mysql_query ( $select, $connect );
						if($kq){
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { //Nếu số mẫu tin lớn hơn 0 thì hiển thị ra
								echo '<form name="form1" method="post" action="checkGV.php">';
								echo "<input  type='submit' value='XÓA' name='delete' id='delete'/>";
								/* Phần Trang */
								$sel = "select magv, hodem, ten, email, SĐT, tenkhoa, idgiangvien  ";
								$sel .= "from giangvien, khoa ";
								$sel .= "where giangvien.idkhoa=khoa.idkhoa";
								$res = mysql_query ( $sel, $connect );
								$number = mysql_num_rows ( $res );
								$tst = floor ( $number / 5 )+1; // Tính tổng số trang
								?>
							<br /><br/>	<?php if($num>0){ ?> <table><thead><tr><th>Mã GV</th><th>Họ Đệm<th>Tên</th>
							<th>Email</th><th>SĐT</th><th>Tên Khoa</th><th>Sửa</th><th>Xóa</th><th>
							<input type='checkbox' id='selectall' /></th></tr></thead> <tbody> <?php } 
							else{
											echo "<br /><img src='".$images."del.png'><h2 style='margin-left: 150px;'>không có dữ liệu để hiện thị!</h2>";
											} ?>
								<?php while ( $row = mysql_fetch_array ( $kq ) ) {
									
									echo "<tr>";
									echo "<td>$row[0]</td>";
									echo "<td>$row[1]</td>";
									echo "<td>$row[2]</td>";
									echo "<td>$row[3]</td>";
									echo "<td>0$row[4]</td>";
									echo "<td>$row[5]</td>";
									echo "<td><a href='".$page."suagiangvien&&idgiangvien=$row[idgiangvien]'><img src='".$images."edit.png' /></td>";
									echo "<td><a href=\"#\" onclick=\"delgv_notpaging('$_GET[page]', '$row[idgiangvien]');\"><img src='".$images."xoa.png' /></a></td>";
									echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idgiangvien]' /></td></tr>";
								} // kết thúc vòng lặp while
								echo " </tbody></table></form><br />";
								if ($_GET ['page'] > 1) {
									echo '<a class="a" href="'.$_SERVER['PHP_SELF'].'?page=' . ($_GET ['page'] - 1) . '">Trước </a>';
								}
								echo " ";
								for($i = 1; $i <= $tst; $i ++) {
									if ($i == $_GET ['page']) {
										echo ' <a href="#" class="active">' . $i . '</a> ';
									} else {
										echo '<a class="a" href="'.$_SERVER['PHP_SELF'].'?page=' . $i . '">' . $i . ' </a>  ';
									}
								}
								if ($_GET ['page'] < $tst) {
									echo '<a class="a" href="'.$_SERVER['PHP_SELF'].'?page=' . ($_GET ['page'] + 1) . '"> Sau</a>';
								}
							}
							} else { // kết thúc if !kq
								echo "<br /><img src='".$images."del.png'><h2 style='margin-left: 150px;'>không có dữ liệu để hiện thị!</h2>";
							}

						} //Kết thúc hiện thị chưa nhấn nút lọc
						 else { // đã nhấn oke tồn tại biến idkhoa trong select
							if (! isset ( $_GET ['page'] )) {
								$_GET ['page'] = 1;
							}
							$start1 = ($_GET ['page'] - 1) * 5; // tính vị trí bắt đầu trang
							/* Phần Trang */
							$sel1 = "select magv, hodem, ten, email, SĐT, tenkhoa, idgiangvien  ";
							$sel1 .= "from giangvien, khoa ";
							$sel1 .= "where giangvien.idkhoa=khoa.idkhoa and khoa.idkhoa='$idkhoa' ";
							$res1 = mysql_query ( $sel1, $connect );
							$number1 = mysql_num_rows ( $res1 );
							$tst1 = floor ( $number1 / 5 )+1; // Tính tổng số trang
							
							/* Kết Thúc phân trang */
							
							
							
							$select = "select magv, hodem, ten, email, SĐT, tenkhoa, idgiangvien ";
							$select .= "from giangvien, khoa ";
							$select .= "where giangvien.idkhoa=khoa.idkhoa and khoa.idkhoa='$idkhoa' limit $start1, 5 ";
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<form name="form1" method="post" action="checkGV.php">
							<input  type='submit' value='XÓA' name='XÓA' id='delete'/>
								<br /><br /><table>
							<thead><tr><th>Mã GV</th><th>Họ Đệm<th>Tên</th>
							<th>Email</th><th>SĐT</th><th>Tên Khoa</th><th>Sửa</th><th>Xóa</th><th>
							<input type='checkbox' id='selectall' /></th></tr></thead> <tbody>
							<?php	while ( $row = mysql_fetch_array ( $kq ) ) {
									echo "<tr>";
									echo "<td>$row[0]</td>";
									echo "<td>$row[1]</td>";
									echo "<td>$row[2]</td>";
									echo "<td>$row[3]</td>";
									echo "<td>0$row[4]</td>";
									echo "<td>$row[5]</td>";
									echo "<td><a href='".$page."suagiangvien&&idgiangvien=$row[idgiangvien]'><img src='".$images."edit.png' /></td>";
									echo "<td><a href=\"#\" onclick=\"delgv_paging('$_GET[selkhoa]','$_GET[page]', '$row[idgiangvien]');\"><img src='".$images."xoa.png' /></a></td>";
									echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idgiangvien]' /></td></tr>";
								}
								echo "</tbody></table></form>";
								if ($_GET ['page'] > 1) {
								echo '<a class="a" href="'.$_SERVER['PHP_SELF'].'?page=' . ($_GET ['page'] - 1) . '&&ok=Lọc&&selkhoa=' . $idkhoa . '">Trang trước </a>';
							}
							echo " ";
							for($i = 1; $i <= $tst1; $i ++) {
								if ($i == $_GET ['page']) {
									echo ' <a href="#" class="active">Trang ' . $i . '</a> ';
								} else {
									echo '<a class="a" href="'.$_SERVER['PHP_SELF'].'?page=' . $i . '&&ok=Lọc&&selkhoa=' . $idkhoa . '">Trang ' . $i . ' </a>  ';
								}
							}
							if ($_GET ['page'] < $tst1) {
								echo '<a class="a" href="'.$_SERVER['PHP_SELF'].'?page=' . ($_GET ['page'] + 1) . '&&ok=Lọc&&selkhoa=' . $idkhoa . '"> Trang sau</a>';
							}
							} else {
								echo "<img src='".$images."del_sv.png'>Không có sinh viên nào trong khoa này...";
							}
						} // kết thúc else isset idkhoa

























    	  }else { //thì quay về trang đăng nhập
				header ( "location:$host.'dangnhap.php'" );
			   }
					?>
		<!-- form lọc -->
		<?php if($num>0){ ?>
			<form id="filter" action="<?=$_SERVER['PHP_SELF'];?>" method='get'>
				<input  class="filterbtn" type='submit' name='ok' value='Lọc' />
				<select class="input" name='selkhoa'>;
						<?php
						$re = mysql_query ( "SELECT * FROM khoa" );
						for(; $row = mysql_fetch_array ( $re );) {
							echo "<option value='" . $row ['idkhoa'] . "'>" . $row ['tenkhoa'] . "</option>";
						}
						?>
				</select>
				
			</form>
			<?php } ?>
		<!-- Kết thúc form lọc -->
</article>