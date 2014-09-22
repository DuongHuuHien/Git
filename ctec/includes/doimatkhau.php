<article class="post clearfix">
<header>
                <h1 class="post-title"><a href="#">Đổi mật khẩu</a></h1>
</header>
<script>
		function ktdl(){
      if(document.doimatkhau.pass.value==""){
        alert("Bạn phải nhập password mới!!");
        return false;
        }
        else if(document.doimatkhau.repass.value=="")
      {
        alert("Bạn Phải nhập lại password!!");
        return false;
      }
	  else return true;
	  }
		 function testpass () {
			if(document.doimatkhau.pass.value!=document.doimatkhau.repass.value)
		  {
			alert("Mật khẩu không khớp");
			return false;
		  }
		  else {
			return true;
			
		  }
		  }
	  
</script>

				<div id="form">
					<form action='#' method='post' name='doimatkhau'
						onsubmit="return testpass();">
						<input type="hidden"
							value="<?php echo $_SESSION['tendangnhap']; ?>"
							name="tendangnhap" />
							<table id="table">
						<tr>
							<td>Mật khẩu mới: </td><td><input id="pass" type="password"
								name="pass" /> </td>
						</tr>
						<tr>
							<td>Nhập lại:</td><td><input id="repass" type="password"
								name="repass" /></td>
						</tr>
						</table>
						<input type="submit" id="delete" value="ĐỔI" name="submit"
							onclick="return ktdl();" />
					</form>
					</article>
					<?php
			
			if (isset ( $_POST ['submit'] )) {
				$tendangnhap = $_SESSION ["tendangnhap"];
				$pass = md5 ( $_POST ['pass'] );
				$repass = md5 ( $_POST ['repass'] );
				$update = "update taikhoan set ";
				$update .= "matkhau='$pass' ";
				$update .= "where tendangnhap='$tendangnhap' ";
				$kq = mysql_query ( $update, $connect );
				if ($kq) {
					echo "ĐỔI PASS THÀNH CÔNG";
				}
			}
			?>
			
