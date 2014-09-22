 <?php
      session_start();
         include "ketnoi.php";
    ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" >

<!-- disable iPhone inital scale -->


<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >

<title>TRANG CHỦ</title>
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/highlight.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <script type="text/javascript" src="../js/database.js"></script>
    <script type="text/javascript" src="../js/func_js.js"></script>
<!-- main css -->
<link href="../css/main.css" rel="stylesheet" type="text/css">
<link href="../css/database.css" rel="stylesheet" type="text/css">
<!-- media queries css -->
<link href="../css/media-queries.css" rel="stylesheet" type="text/css">



<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
  <![endif]-->


</head>

<body>
<?php include $inc."div_mxh.php"; ?>

<div id="pagewrap">
		
	<header id="header">
	
		<?php 
			include $inc."div_user.php";
			include $inc."div.logo.php";
			include $inc."div_menu.php"; 
		?>	
	</header>
	<!-- /#header -->
	<div id="content">	
	<?php
		if (isset ( $_SESSION ["tendangnhap"] )) { ?>
			<form id="filter" action="<?=$_SERVER['PHP_SELF'];?>" method='get'>
				<input  class="filterbtn" type='submit' name='ok' value='XEM' />
				<select class="input" name='table'>
					<option value='1'>TÀI LIỆU GIẢNG DẠY</option>
					<option value='2'>GIẢNG VIÊN</option>
					<option value='3'>SINH VIÊN</option>
					<option value='4'>KHOA</option>
					<option value='5'>CHƯƠNG</option>
					<option value='6'>MENU KHOA</option>
					<option value='7'>MENU PHÒNG</option>
					<option value='8'>GIẢNG VIÊN DẠY HỌC PHẦN</option>
					<option value='9'>HỌC PHẦN TẠI LIỆU GIẢNG DẠY</option>
					<option value='10'>TÀI KHOẢN</option>
					<option value='11'>THÀNH VIÊN</option>
					<option value='12'>THÀNH VIÊN CHỜ DUYỆT</option>
					<option value='13'>HỌC PHẦN</option>
					
				</select>
			</form>
			<br />
				<?php	} else {
					header ( "location: ../dangnhap.php" );
				}
				?>
				<div id="table">
				
					Danh Sách bảng:
					<ol>
						<li><a href='<?=$xdl.'1' ?>'>Tài liệu giảng dạy</a></li>
						<li><a href='<?=$xdl.'2' ?>'>Giảng viên</a></li>
						<li><a href='<?=$xdl.'3' ?>'>Sinh Viên</a></li>
						<li><a href='<?=$xdl.'4' ?>'>Khoa</a></li>
						<li><a href='<?=$xdl.'5' ?>'>Chương</a></li>
						<li><a href='<?=$xdl.'6' ?>'>Menu khoa</a></li>
						<li><a href='<?=$xdl.'7' ?>'>Menu phòng</a></li>
						<li><a href='<?=$xdl.'8' ?>'>Giảng Viên dạy học phần</a></li>
						<li><a href='<?=$xdl.'9' ?>'>Học phần tài liệu giảng dạy</a></li>
						<li><a href='<?=$xdl.'10' ?>'>Tài khoản</a></li>
						<li><a href='<?=$xdl.'11' ?>'>Thành viên</a></li>
						<li><a href='<?=$xdl.'12' ?>'>Thành viên chờ duyệt</a></li>
						<li><a href='<?=$xdl.'13' ?>'>Học Phần</a></li>
					</ol>
				
				</div>
	</div>
	<!-- End #content --> 

	<?php include $inc."div_footer.php"; ?> 
	<!-- Nút điều khiển lên-xuống -->
               <div id='bttop'>LÊN TRÊN</div>
</div>
<!-- /#pagewrap -->
</body>
</html>