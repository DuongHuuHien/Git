<article id="post clearfix" class="post clearfix">
	<h1 class="post-title"><a href="#">HỌC PHẦN SINH VIÊN</a></h1>
                <hr color="gray" />
		<?php
			if (isset ( $_SESSION ["tendangnhap"] )) {	
				if (! isset ( $_GET ['ok'] )) {
							
						
							$select = "select hocphan.idhocphan, mahocphan, tenhocphan, sotinchi, tenhocky, giangvien.idgiangvien ";
							$select .= "from giangvien_day_hocphan, hocphan, giangvien ";
							$select .= "where hocphan.idhocphan=giangvien_day_hocphan.idhocphan and ";
							$select .= "giangvien.idgiangvien=giangvien_day_hocphan.idgiangvien and ";
							$select .= "magv= " . "'" . $_SESSION ["tendangnhap"] . "'";
							$kq = mysql_query ( $select, $connect );
							if($kq){
							$number1 = mysql_num_rows ( $kq );
							if ($number1> 0) { ?>
								<form name="form1" method="post" action="GVcheck.php">
								<input type='submit' value='XÓA' name='delete' id='delete'/>
								<br /><br/>	
										<table><thead><tr><th>Mã Học Phần</th>
										<th>Tên Học Phần</th><th>Số tín chỉ</th><th>Học Kỳ</th><th>
										Tài Liệu</th><th>Sửa</th><th><input type='checkbox' id='selectall' />
										</th></tr></thead> <tbody> 
							
							<?php }
								 while ( $row = mysql_fetch_array ( $kq ) ) {
									
								echo "<tr><td>$row[1]</td>";
								echo "<td>$row[2]</td>";
								echo "<td>$row[3]</td>";
								echo "<td>$row[4]</td>";
								echo "<td><a href='".$page."tailieu&&idhocphan=$row[0]&&tenhocphan=$row[2]'><img src='".$images."document.png'></td>";
								echo "<td><a href='".$page."suahocphan&&idhocphan=$row[idhocphan]'><img src='".$images."edit.png' /></td>";
								echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
								value='$row[idhocphan]' /></td></tr>";
												echo "<input type='hidden' name='idgiangvien' value='$row[5]' />";
								} // kết thúc vòng lặp while
								echo " </tbody></table></form>"; ?>
					<?php if($number1>0){ ?>			<form name='Form' action="excelsv.php" method='post'>
					Học kỳ 1:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='1'
						value='1' /> Học kỳ 2:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='2'
						value='2' /> Học kỳ 3:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='3'
						value='3' /> Học kỳ 4:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='4'
						value='4' /> Học kỳ 5:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='5'
						value='5' /> Học kỳ 6:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='6'
						value='6' />

					<input type='hidden' name='checkedBox' value='0' />
					<input type="submit" value="Xuất Excel" onclick="chk_action();" />
				</form> <?php } ?>
							<?php } else { // kết thúc if num >0
								echo "<br /><img src='".$images."'del.png'><h2 style='margin-left: 150px;'>không có dữ liệu để hiện thị!</h2>";
							}
						} else { // đã nhấn oke tồn tại biến idkhoa trong select
							
							$sel1 = "select hocphan.idhocphan, mahocphan, tenhocphan, sotinchi, tenhocky, giangvien.idgiangvien";
						$sel1 .= " from giangvien_day_hocphan, hocphan, giangvien ";
						$sel1 .= "where hocphan.idhocphan=giangvien_day_hocphan.idhocphan and ";
						$sel1 .= "giangvien.idgiangvien=giangvien_day_hocphan.idgiangvien and ";
						$sel1 .= "magv= " . "'" . $_SESSION ["tendangnhap"] . "' and tenhocky='$hocky'";
							$res1 = mysql_query ( $sel1, $connect );
							$number1 = mysql_num_rows ( $res1 );
							if ($number1 > 0) { ?>
								<form name="form1" method="post" action="GVcheck.php">
							<input type='submit' value='XÓA' name='XÓA' id='delete'/>
								<br /><br /><table><thead><tr><th>Mã Học Phần</th>
					<th>Tên Học Phần</th><th>Số tín chỉ</th><th>Học Kỳ</th><th>
					Tài Liệu</th><th>Sửa</th><th><input type='checkbox' id='selectall' />
					</th></tr></thead> <tbody>
								<?php while ( $row = mysql_fetch_array ( $res1 ) ) {
									
									echo "<td>$row[1]</td>";
								echo "<td>$row[2]</td>";
								echo "<td>$row[3]</td>";
								echo "<td>$row[4]</td>";
								echo "<td><a href='".$page."tailieu&&idhocphan=$row[0]&&tenhocphan=$row[2]'><img src='".$images."document.png'></td>";
								echo "<td><a href='".$page."suahocphan&&idhocphan=$row[idhocphan]'><img src='".$images."edit.png' /></td>";
								
								echo "<td><input class='checkbox1' name='checkbox[]' type='checkbox' 
						value='$row[idhocphan]' /></td></tr>";
						echo "<input type='hidden' name='idgiangvien' value='$row[5]' />";
								} // kết thúc vòng lặp while
								echo " </tbody></table></form>"; ?>
						<?php if($number1>0){ ?>		<form name='Form' action="excelsv.php" method='post'>
					Học kỳ 1:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='1'
						value='1' /> Học kỳ 2:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='2'
						value='2' /> Học kỳ 3:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='3'
						value='3' /> Học kỳ 4:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='4'
						value='4' /> Học kỳ 5:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='5'
						value='5' /> Học kỳ 6:
					<input type='checkbox' name='hk[]' onclick='isChecked(this)' id='6'
						value='6' />

					<input type='hidden' name='checkedBox' value='0' />
					<input type="submit" value="Xuất Excel" onclick="chk_action();" />
				</form> <?php } ?>
							<?php } else {
								echo "<img src='".$images."del_sv.png'>Không có học phần nào trong học kỳ này...";
							}
						} // kết thúc else isset idkhoa	
						
					} else { //enfif session dang nhap
						header ( "location: ../dangnhap.php" );
					}
					?>

					<?php if($number1>0){ ?>
			<form id="filter" action="<?=$_SERVER['PHP_SELF'];?>" method='get'>
				<input  class="filterbtn" type='submit' name='ok' value='Lọc' />
				<select class="input" name='hocky'>;
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
			
			
				