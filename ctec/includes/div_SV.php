<article id="post clearfix" class="post clearfix">
	<h1 class="post-title"><a href="#">HỌC PHẦN SINH VIÊN</a></h1>
                <hr color="gray" />
		<?php
		if (isset ( $_SESSION ["tendangnhap"] )) {
			/*Nếu chưa bấm phim lọc*/
			if (! isset ( $_GET ['ok'] )){
				$select = "select hocphan.idhocphan, mahocphan, tenhocphan, sotinchi, tenhocky, giangvien.hodem, giangvien.ten, loai ";
				$select .= "from hocphan, giangvien, giangvien_day_hocphan, sinhvien ";
				$select .= "where sinhvien.idkhoa=giangvien.idkhoa and ";
				$select .= "giangvien.idgiangvien=giangvien_day_hocphan.idgiangvien and ";
				$select .= "hocphan.idhocphan=giangvien_day_hocphan.idhocphan ";
				$select .= "and masv= " . "'" . $_SESSION ["tendangnhap"] ."'"; 
				$kq = mysql_query ( $select, $connect );
				if ($kq) {
					$num = mysql_num_rows ( $kq );
					if($num>0){  ?>
					<form name="form1" method="post" action="#">
					<input  type='submit' value='SINH VIÊN' name='delete' id='delete'/>
				<table>
					<thead>
						<tr>
							<th>Mã Học Phần</th>
							<th>Tên Học Phần</th>
							<th>Số tín chỉ</th>
							<th>Học Kỳ</th>
							<th>GV giảng dạy</th>
							<th>Chương</th>
							<th>Loại</th>
						</tr>
					</thead>
					<?php
					while ( $row = mysql_fetch_array ( $kq ) ) {
						echo "<tr >";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td>";
						echo "<td>$row[3]</td>";
						echo "<td>$row[4]</td>";
						echo "<td>$row[5] $row[6]</td>";
						echo "<td><a href='" . $page . "thongtinchuong&&idhocphan=$row[0]&tenhocphan=$row[2]'><img src='".$images."document.png'></td>";
						echo "<td>$row[7]</td></tr>";
					} // kết thúc vòng lặp while
					echo " </tbody></table></form><br />";
					?>		
					<form name='Form' action="excelsv.php" method='post'>
					Học kỳ 1: <input type='checkbox' name='hk[]'
					onclick='isChecked(this)' id='1' value='1' /> Học kỳ 2: <input
					type='checkbox' name='hk[]' onclick='isChecked(this)' id='2'
					value='2' /> Học kỳ 3: <input type='checkbox' name='hk[]'
					onclick='isChecked(this)' id='3' value='3' /> Học kỳ 4: <input
					type='checkbox' name='hk[]' onclick='isChecked(this)' id='4'
					value='4' /> Học kỳ 5: <input type='checkbox' name='hk[]'
					onclick='isChecked(this)' id='5' value='5' /> Học kỳ 6: <input
					type='checkbox' name='hk[]' onclick='isChecked(this)' id='6'
					value='6' /> <input type='hidden' name='checkedBox' value='0' /> <input
					type="submit" value="Xuất Excel" onclick="chk_action();" />
			</form> <?php } else{
				echo "<br /><img src='" . $images . "'del.png'><h2 style='margin-left: 150px;'>không có dữ liệu để hiện thị!</h2>";
			}
				
		} else { // kết thúc !$kq
					echo "<br /><img src='" . $images . "'del.png'><h2 style='margin-left: 150px;'>không có dữ liệu để hiện thị!</h2>";
				}
				
			} /*Kết thúc !isset lọc*/
			else { // đã nhấn oke tồn tại biến idkhoa trong select
				
				$sel1 = "select hocphan.idhocphan, mahocphan, tenhocphan, sotinchi, tenhocky, giangvien.hodem, giangvien.ten, loai ";
				$sel1 .= "from hocphan, giangvien, giangvien_day_hocphan, sinhvien ";
				$sel1 .= "where sinhvien.idkhoa=giangvien.idkhoa and ";
				$sel1 .= "giangvien.idgiangvien=giangvien_day_hocphan.idgiangvien and ";
				$sel1 .= "hocphan.idhocphan=giangvien_day_hocphan.idhocphan ";
				$sel1 .= "and masv= " . "'" . $_SESSION ["tendangnhap"] . "' and tenhocky='$hocky'";
				$res1 = mysql_query ( $sel1, $connect );
				$number1 = mysql_num_rows ( $res1 );
				$kq = mysql_query ( $sel1, $connect );
				$num = mysql_num_rows ( $kq );
				if ($num > 0) {
					?>
								<form name="form1" method="post" action="#">
								<input  type='submit' value='SINH VIÊN' name='delete' id='delete'/>
				<table>
					<thead>
						<tr>
							<th>Mã Học Phần</th>
							<th>Tên Học Phần</th>
							<th>Số tín chỉ</th>
							<th>Học Kỳ</th>
							<th>GV giảng dạy</th>
							<th>Chương</th>
							<th>Loại</th>
						</tr>
					</thead>
					<tbody> 
								<?php
					
while ( $row = mysql_fetch_array ( $kq ) ) {
						
						echo "<tr >";
						echo "<td>$row[1]</td>";
						echo "<td>$row[2]</td>";
						echo "<td>$row[3]</td>";
						echo "<td>$row[4]</td>";
						echo "<td>$row[5] $row[6]</td>";
						echo "<td><a href='" . $page . "thongtinchuong&&idhocphan=$row[0]&tenhocphan=$row[2]'><img src='".$images."document.png'></td>";
						echo "<td>$row[7]</td></tr>";
					} // kết thúc vòng lặp while
					echo " </tbody></table></form>";
					?>
						<?php if($num>0){ ?>		<form name='Form' action="excelsv.php"
							method='post'>
							Học kỳ 1: <input type='checkbox' name='hk[]'
								onclick='isChecked(this)' id='1' value='1' /> Học kỳ 2: <input
								type='checkbox' name='hk[]' onclick='isChecked(this)' id='2'
								value='2' /> Học kỳ 3: <input type='checkbox' name='hk[]'
								onclick='isChecked(this)' id='3' value='3' /> Học kỳ 4: <input
								type='checkbox' name='hk[]' onclick='isChecked(this)' id='4'
								value='4' /> Học kỳ 5: <input type='checkbox' name='hk[]'
								onclick='isChecked(this)' id='5' value='5' /> Học kỳ 6: <input
								type='checkbox' name='hk[]' onclick='isChecked(this)' id='6'
								value='6' /> <input type='hidden' name='checkedBox' value='0' />
							<input type="submit" value="Xuất Excel" onclick="chk_action();" />
						</form> <?php
				
			} 
		}
		}
		} else { // enfif session dang nhap
			header ( "location: ../dangnhap.php" );
		}
		?>

					<?php if(isset($num) && $num>0){ ?>
					<form id="filter" action="<?=$_SERVER['PHP_SELF'];?>" method='get'>
							<input class="filterbtn" type='submit' name='ok' value='Lọc' /> <select
								class="input" name='hocky'>;
						<?php
						$re = mysql_query ( "SELECT DISTINCT tenhocky FROM hocphan" );
						for(; $row = mysql_fetch_array ( $re );) {
							echo "<option value='" . $row ['tenhocky'] . "'>" . $row ['tenhocky'] . "</option>";
						}
						?>
					</select>
					</form>
			<?php } ?>
</article>