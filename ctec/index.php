<?php
session_start();
include "php/ketnoi.php";

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<!-- disable iPhone inital scale -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
		<title>TRANG CHỦ</title>
		<link rel="shortcut icon" href="favicon.ico"/>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/highlight.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/readmore.js"></script>
		<!-- main css -->
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<!-- main css -->
		<link href="css/index.css" rel="stylesheet" type="text/css">
		<!-- media queries css -->
		<link href="css/media-queries.css" rel="stylesheet" type="text/css">
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
					include $inc."div.logo.php";
					include $inc."div_menu.php";
				?>
			</header>
			<!-- /#header -->
			
			<div id="content">
				<?php
					
					if(isset($_GET['page'])){
						$page=$_GET['page'];
						if($page=='tuyensinh') include $inc."tuyensinh.php";
					if($page=='lienhe') include $inc."lienhe.php";
					if($page=='gioithieu') include $inc."gioithieu.php";
					if($page=='thudientu') include $inc."thudientu.php";
					if($page=='doimatkhau') include $inc."doimatkhau.php";
					if($page=='suagiangvien') include $suadulieu."suagiangvien.php";
					if($page=='suasinhvien') include $suadulieu."suasinhvien.php";
					if($page=='suahocphan') include $suadulieu."suahocphan.php";
					if($page=='suatlgd') include $suadulieu."suatlgd.php";
					if($page=='suakhoa') include $suadulieu."suakhoa.php";
					if($page=='suachuong') include $suadulieu."suachuong.php";
					if($page=='suamenukhoa') include $suadulieu."suamenukhoa.php";
					if($page=='suamenuphong') include $suadulieu."suamenuphong.php";
					if($page=='suagvdhp') include $suadulieu."suagvdhp.php";
					if($page=='suahptlgd') include $suadulieu."suahptlgd.php";
					if($page=='suataikhoan') include $suadulieu."suataikhoan.php";
					if($page=='suathanhvien') include $suadulieu."suathanhvien.php";
					if($page=='suatvch') include $suadulieu."suatvcd.php";
					if($page=='suatv') include $suadulieu."suatv.php";
					if($page=='capnhat') include $inc."capnhat.php";
					if($page=='xemdulieu') include $inc."xemdulieu.php";
					if($page=='tailieu') include $inc."tailieu.php";
					if($page=='thongtinchuong') include $inc."thongtinchuong.php";
				
					
				}else {	include $inc."post.php";}
				?>
				<hr />
				
				<script type="text/javascript">
				epi_id = 'epi-widget-container';
				epi_width = 'auto';
				epi_height = 'auto';
				epi_theme = 'widgetDisplayThemeGrey';
				epi_border = 1;
				</script>
				<script type="text/javascript" src="http://www.baomoi.com/Widget/JS/Widget.js"></script>
				<script type="text/javascript" src="http://www.baomoi.com/Widget/GenerateJS.aspx?zone=59&count=5&ntype=popular&dtype=2&target=0"></script>
				
			</div>
			<!-- End #content -->
			
			
			<aside id="sidebar">
				<?php
					include $inc."div_login.php";
					include $inc."div_menukhoa.php";
					include $inc."div_menuphong.php";
					include $inc."div_facebook.php";
				?>
			</aside>
			<!-- End #sidebar -->
			<?php include $inc."div_footer.php"; ?>
			<!-- Nút điều khiển lên-xuống -->
			<div id='bttop'>LÊN TRÊN</div>
		</div>
		<!-- /#pagewrap -->
		<div id="google">
			<form method="get" action="http://www.google.com/search" id="cse-search-box">
				
				<input type="text" placeholder="Google search" name="query" size="25" maxlength="255" value="" id="q" />
			</form>
		</div>
	</body>
</html>