
<article id="post clearfix" class="post clearfix">
	 <h1 class="post-title"><a href="#">QUẢN LÝ SINH VIÊN</a></h1>
                <hr color="gray" />
	
					<?php if (isset ( $_SESSION ["tendangnhap"] )) { //Nếu tồn tại session tendangnhap thì hiển thị dữ liệu
						if (! isset ( $_GET ['ok'] )) { // Không tồn tại biến lọc
							if (! isset ( $_GET ['page'] )) {
								$_GET ['page'] = 1;
							}
							$start = ($_GET ['page'] - 1) * 5;
							$select = "select masv, hodem, ten, lop, tenkhoa, idsinhvien ";
							$select .= "from sinhvien, khoa ";
							$select .= "where  sinhvien.idkhoa=khoa.idkhoa limit $start, 5"; // Giới hạn số mẫu tin cho một trang";
							$kq = mysql_query ( $select, $connect );
							if($kq){
							$num = mysql_num_rows ( $kq );

							if ($num > 0) {
								echo '<form name="form1" method="post" action="checkSV.php">';
								echo "<input type='submit' value='XÓA' name='delete' id='delete'/>";
								/* Phần Trang */
								$sel = "select masv, hodem, ten, lop, tenkhoa, idsinhvien ";
							$sel .= "from sinhvien, khoa ";
							$sel .= "where  sinhvien.idkhoa=khoa.idkhoa";
								$res = mysql_query ( $sel, $connect );
								$number = mysql_num_rows ( $res );
								$tst = floor ( $number / 5 )+1; // Tính tổng số trang
								
							}else{
									echo "<br /><img src='".$images."del.png'><h2 style='margin-left: 150px;'>không có dữ liệu để hiện thị!</h2>";
							} ?>
								
								<br /><br />
								<?php if($num>0){ ?> <table>
						<thead><tr><th>Mã SV</th><th>Họ Đệm<th>Tên</th>
					<th>LỚP</th><th>Tên Khoa</th><th>Sửa</th><th>Xóa</th><th>
					<input type='checkbox' id='selectall' />
					</th></tr></thead> <tbody> <?php } 
					else{
											echo "<br /><img src='".$images."del.png'><h2 style='margin-left: 150px;'>không có dữ liệu để hiện thị!</h2>";
											} ?>
							<?php	while ( $row = mysql_fetch_array ( $kq ) ) {
									
									echo "<tr>";
							echo "<td>$row[0]</td>";
							echo "<td>$row[1]</td>";
							echo "<td>$row[2]</td>";
							echo "<td>$row[3]</td>";
							echo "<td>$row[4]</td>";
							echo "<td><a href='".$page."suasinhvien&&idsinhvien=$row[idsinhvien]'><img src='".$images."edit.png' /></td>";
							echo "<td><a href=\"#\" onclick=\"delsv_notpaging('$_GET[page]', '$row[idsinhvien]');\"><img src='".$images."xoa.png' /></a></td>";
							echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
						value='$row[idsinhvien]' /></td></tr>";
						}
						echo "</tbody></table>";
						echo "</form>";
						if ($_GET ['page'] > 1) {
									echo '<a class="a" href="QLSV.php?page=' . ($_GET ['page'] - 1) . '">Trước </a>';
								}
								echo " ";
								for($i = 1; $i <= $tst; $i ++) {
									if ($i == $_GET ['page']) {
										echo ' <a href="#" class="active">' . $i . '</a> ';
									} else {
										echo '<a class="a" href="QLSV.php?page=' . $i . '">' . $i . ' </a>  ';
									}
								}
								if ($_GET ['page'] < $tst) {
									echo '<a class="a" href="QLSV.php?page=' . ($_GET ['page'] + 1) . '"> Sau</a>';
								}
							} else { // kết thúc if $kq
								echo "<br /><img src='".$images."del.png'><h2 style='margin-left: 150px;'>không có dữ liệu để hiện thị!</h2>";
							}
						} else { // đã nhấn oke tồn tại biến idkhoa trong select
							if (! isset ( $_GET ['page'] )) { //không tồn tại biến page thì mặc địng page=1
								$_GET ['page'] = 1;
							}
							$start1 = ($_GET ['page'] - 1) * 5; // tính vị trí bắt đầu trang
							/* Phần Trang */
							$sel1 = "select masv, hodem, ten, lop, tenkhoa, idsinhvien ";
							$sel1 .= "from sinhvien, khoa ";
							$sel1 .= "where  sinhvien.idkhoa=khoa.idkhoa and khoa.idkhoa='$idkhoa' ";
							$res1 = mysql_query ( $sel1, $connect );
							$number1 = mysql_num_rows ( $res1 );
							$tst1 = floor ( $number1 / 5 )+1; // Tính tổng số trang
							
							/* Kết Thúc phân trang */
							
							
							
							$select = "select masv, hodem, ten, lop, tenkhoa, idsinhvien ";
							$select .= "from sinhvien, khoa ";
							$select .= "where  sinhvien.idkhoa=khoa.idkhoa and khoa.idkhoa='$idkhoa' limit $start1, 5"; // Giới hạn số mẫu tin cho một trang";
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) {
								echo '<form name="form1" method="post" action="checkSV.php">';
							echo "<input type='submit' value='DELETE' name='delete' id='delete'/>";
								echo "<br /><br /><table>";
						echo "<thead><tr><th>Mã SV</th><th>Họ Đệm<th>Tên</th>
					<th>LỚP</th><th>Tên Khoa</th><th>Sửa</th><th>Xóa</th><th>
					<input type='checkbox' id='selectall' />
					</th></tr></thead> <tbody>";
								while ( $row = mysql_fetch_array ( $kq ) ) {
									echo "<tr>";
							echo "<td>$row[0]</td>";
							echo "<td>$row[1]</td>";
							echo "<td>$row[2]</td>";
							echo "<td>$row[3]</td>";
							echo "<td>$row[4]</td>";
							echo "<td><a href='".$page."suasinhvien&&idsinhvien=$row[idsinhvien]'><img src='".$images."edit.png' /></td>";
							echo "<td><a href=\"#\" onclick=\"delsv_paging('$_GET[selkhoa]','$_GET[page]', '$row[idsinhvien]');\"><img src='".$images."xoa.png' /></a></td>";
							echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
						value='$row[idsinhvien]' /></td></tr>";
						}
						echo "</tbody></table>";
						echo "</form>";
						if ($_GET ['page'] > 1) {
								echo '<a class="a" href="QLSV.php?page=' . ($_GET ['page'] - 1) . '&&ok=Lọc&&selkhoa=' . $idkhoa . '">Trước </a>';
							}
							echo " ";
							for($i = 1; $i <= $tst1; $i ++) {
								if ($i == $_GET ['page']) {
									echo ' <a href="#" class="active">' . $i . '</a> ';
								} else {
									echo '<a class="a" href="QLSV.php?page=' . $i . '&&ok=Lọc&&selkhoa=' . $idkhoa . '">' . $i . ' </a>  ';
								}
							}
							if ($_GET ['page'] < $tst1) {
								echo '<a class="a" href="QLSV.php?page=' . ($_GET ['page'] + 1) . '&&ok=Lọc&&selkhoa=' . $idkhoa . '"> Sau</a>';
							}
							} else {
								echo "<img src='".$images."del_sv.png'>Không có sinh viên nào trong khoa này...";
							}
						} // kết thúc else isset idkhoa
					} 					// kết thúc if isset session đăng nhập
					else { //unset Session thì chuyển qua trang đăng nhập, đăng ký
						header ( "location: ../dangnhap.php" );
					}
					?>
					
						<?php if($num>0){ ?>
			<form id="filter" action='QLSV.php' method='get'>
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
			</article>