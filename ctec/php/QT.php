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

<title>QUẢN TRỊ</title>
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/highlight.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/database.js"></script>
<script type="text/javascript" src="../js/func_js.js"></script>
<!-- main css -->
<link href="../css/main.css" rel="stylesheet" type="text/css">
<link href="../css/database.css" rel="stylesheet" type="text/css">
<link href="../css/QT.css" rel="stylesheet" type="text/css">


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
<?php
		if (isset ( $_GET ['ok'] )) {
			// Lay idkhoa da chon trong select
			$idkhoa = $_GET ['selkhoa'];
		}
		?>
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
	<br />

				
	
	<div id="content">
	<?php include $inc."div_QTGV.php"; ?>

	<?php if(isset($num)&&$num>0){ ?>
			<form id="search" >
				Tìm kiếm <input type="text" onkeyup="showResult(this.value)"  /> 
			</form>  <?php } ?>
			
				
	</div>
	<!-- End #content --> 

	
	

	<?php include $inc."div_footer.php"; ?> 
	<!-- Nút điều khiển lên-xuống -->
               <div id='bttop'>LÊN TRÊN</div>
</div>
<!-- /#pagewrap -->
</body>
</html>