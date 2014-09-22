<?php
				include "ketnoi.php";
				session_start();
				$key = $_GET ['q'];
				$select = "select hocphan.idhocphan, mahocphan, tenhocphan, sotinchi, tenhocky, giangvien.hodem, giangvien.ten, loai ";
				$select .= "from hocphan, giangvien, giangvien_day_hocphan, sinhvien ";
				$select .= "where sinhvien.idkhoa=giangvien.idkhoa and ";
				$select .= "giangvien.idgiangvien=giangvien_day_hocphan.idgiangvien and ";
				$select .= "hocphan.idhocphan=giangvien_day_hocphan.idhocphan ";
				$select .= "and (mahocphan like '%$key%' or tenhocphan like '%$key%' or
							sotinchi like '%$key%' or tenhocky  like '%$key%' or giangvien.hodem  like '%$key%' or giangvien.ten  like '%$key%' or loai  like '%$key%') and masv= " . "'" . $_SESSION ["tendangnhap"] ."'"; 
							$kq = mysql_query ( $select, $connect );
							$num = mysql_num_rows ( $kq );
							if ($num > 0) { ?>
								<br /> Có  <?=$num; ?> học phần cho từ khóa: <b><?=$key;?></b><br />
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
			</form> 
						<?php	} else {
								echo "<img src='".$images."del.png' /><center>Không có kết quả nào cho từ khóa này! Vui lòng nhập lại....</center>";
							}
						
					
					?>
			