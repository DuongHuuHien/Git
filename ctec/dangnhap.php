<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
#login {
	width: 300px;
	height: 500px;
	margin: 50px auto;
	background: #3D496B;
	outline: none;
	border-radius: 10px;
	padding: 20px;
	line-height: 40px;
	font-size: 20px;
}

#login p {
	color: #bababa;
	text-align: center;
	height: 40px;
	font-size: 30px;
	background: url("./images/forum.png") no-repeat top right;
}



#login  input[type="text"] {
	width: 285px;
	height: 50px;
	margin-bottom: 10px;
	
	outline: none;
	padding: 10px;
}

#login  input[type="password"] {
	width: 210px;
	height: 50px;
	margin-bottom: 20px;
	padding: 10px;
	
}

#login input[type="submit"] {
	
	background: #46B8B5;
	outline: none;
	padding: 15px;
	color: white;
	font-weight: bold;
	width: 70px;
}

#login span {
	color: #3E636A;
}

h6 {
	color: white;
}

a {
	font-size: 22px;
	color: gray;
	text-decoration: none;
}
</style>

<div id="login">
	<h6>*VUI LÒNG ĐĂNG NHẬP HOẶC ĐĂNG KÝ!</h6>
	<p>ĐĂNG NHẬP</p>
	<hr />
	<form action="php/kt_dangnhap.php" method="post" name="dangnhap"
		id="dangnhap" onsubmit="return test();">
		<input type="text" name="user" id="user" value=""
			placeholder="Tên Đăng Nhập" /> <br /> <input type="password"
			name="password" id="pass" value="" placeholder="Mật Khẩu" /> <input
			type="submit" value="Login" name="submit" id="submit" /> <br />
	 	<a href="dangky.php">Đăng Ký</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
			href="quenmatkhau.php">Quên mật khẩu? </a>
	


	</form>
	<script type="text/javascript">
						function test(){
			if(document.dangnhap.user.value==""){
				alert("Bạn phải nhập tên đăng nhập!!");
				return false;
				}
			else if(document.dangnhap.pass.value=="")
			{
				alert("Bạn phải nhập mật khẩu!!");
				return false;
			}
				else 
				{
				return true;
				}
			}
					</script>
	<a
			
</div>
