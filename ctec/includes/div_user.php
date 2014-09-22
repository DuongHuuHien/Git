<?php 
		if(isset($_SESSION['tendangnhap'])){
					$sl="select tendangnhap, quyen ";
					$sl.="from taikhoan ";
					$sl.="where tendangnhap="."'".$_SESSION["tendangnhap"]."'";
					$kq1=mysql_query($sl, $connect);
					while($row=mysql_fetch_array($kq1)){
					echo "<img src='".$images."admin.png' /><h3 style='color: snow; text-shadow: 1px 1px 3px white;'>$row[0] ($row[1])</h3>";
					}
			}
	 ?>