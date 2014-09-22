<?php
session_start ();
include "php/ketnoi.php";
if (array_key_exists ( 'send', $_POST )) {
	/* $to = 'ntctuyen.cth12@gmail.com'; */
	// list expected fields
	$expected = array (
			'user',
			'hodem',
			'ten',
			'email',
			'password',
			'repass',
			'chude',
			'security_code' 
	);
	// set required fields
	$required = array (
			'user',
			'hodem',
			'ten',
			'email',
			'password',
			'repass',
			'security_code' 
	);
	// create empty array for any missing fields
	$missing = array ();
	// process the $_POST variables
	foreach ( $_POST as $key => $value ) {
		// assign to temporay variable and strip white space
		$temp = is_array ( $value ) ? $value : trim ( $value );
		// if empty and required, add to $missing array
		if (empty ( $temp ) && in_array ( $key, $required )) {
			array_push ( $missing, $key );
		} 		// otherwise, assign to a variable of the same name as $key
		elseif (in_array ( $key, $expected )) {
			${$key} = $temp;
		}
	}
	// validate the email address
	if (! empty ( $email )) {
		// regex to ensure no illegal characters in email address
		$checkEmail = '/^[^@]+@[^\s\r\n\'";,@%]+$/';
		// reject the email address if it doesn't match
		if (! preg_match ( $checkEmail, $email )) {
			array_push ( $missing, 'email' );
		}
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
        $(document).ready(function()    {
            $('#contact-form').validate();
        });
    
    </script>
<link rel="stylesheet" type="text/css" href="css/dangky.css" />

<title>ĐĂNG KÝ</title>
</head>

<body>
	<div id="wrapper">
	<a href="<?=$host;?>"><img src="images/logo.png" /></a>
        <?php
								if ($_POST && isset ( $missing )) {
									?>
            <p class="warning">Điền vào đầy đủ thông tin bên dưới!!!</p>
        <?php
								} elseif ($_POST && ! $mailSent) {
									?>
        <p class="warning">Xin lỗi, có sự cố xảy ra! mail của bạn chưa
			được gửi!</p>
        <?php
								} elseif ($_POST && $mailSent) {
									?>
        <p class="success">
			<strong>Thông tin đăng ký của bạn đã được gửi! Chúng tôi sẽ phản hồi
				bạn sớm nhất!!</strong>
		</p>
        <?php } ?>
      
        <form method="post" action="xuly.php" id="contact-form">
			<label for="user"><strong>Tên Đăng Nhập:<span>*</span></strong> <?php
			if (isset ( $missing ) && in_array ( 'user', $missing )) {
				?>
                    <span class="error">Điền vào tên đăng nhập của bạn!</span> <?php } ?>
                </label>
			<input type="text" size="50" name="user" id="user" class="required"
				minlength=4
				<?php
				
				if (isset ( $missing )) {
					echo 'value="' . htmlentities ( $_POST ['user'] ) . '"';
				}
				?> />
			<label for="hodem"><strong>Họ Đêm:<span>*</span></strong> <?php
			if (isset ( $missing ) && in_array ( 'hodem', $missing )) {
				?>
                    <span class="error">Điền vào họ đệm của bạn!</span> <?php } ?>
                </label>
			<input type="text" size="50" name="hodem" id="hodem" class="required"
				minlength=4
				<?php
				
				if (isset ( $missing )) {
					echo 'value="' . htmlentities ( $_POST ['hodem'] ) . '"';
				}
				?> />
			<label for="ten"><strong>Tên:<span>*</span></strong> <?php
			if (isset ( $missing ) && in_array ( 'ten', $missing )) {
				?>
                    <span class="error">Điền vào Tên của bạn!</span> <?php } ?>
                </label>
			<input type="text" size="50" name="ten" id="ten" class="required"
				minlength=4
				<?php
				
				if (isset ( $missing )) {
					echo 'value="' . htmlentities ( $_POST ['ten'] ) . '"';
				}
				?> />

			<label for="email"><strong>Email:<span>*</span></strong><?php
			if (isset ( $missing ) && in_array ( 'email', $missing )) {
				?>
                    <span class="error">Điền vào email của bạn!</span> <?php } ?>
                </label>
			<input type="text" size="50" name="email" id="email"
				class="required email"
				<?php
				
				if (isset ( $missing )) {
					echo 'value="' . htmlentities ( $_POST ['email'] ) . '"';
				}
				?> />
			<label for="password"><strong>Mật Khẩu:<span>*</span></strong> <?php
			if (isset ( $missing ) && in_array ( 'password', $missing )) {
				?>
                    <span class="error">Điền vào Mật khẩu(tối thiếu 5 ký
					tự)!</span> <?php } ?>
                </label>
			<input type="password" size="50" name="password" id="password"
				class="required" minlength=6
				<?php
				
				if (isset ( $missing )) {
					echo 'value="' . htmlentities ( $_POST ['password'] ) . '"';
				}
				?> />
			<label for="repass"><strong>Nhập Lại:<span>*</span></strong> <?php
			if (isset ( $missing ) && in_array ( 'repass', $missing )) {
				?>
                    <span class="error">Điền vào mật khẩu ở trên!</span> <?php } ?>
                </label>
			<input type="password" size="50" name="repass" id="repass"
				class="required" minlength=6
				<?php
				
				if (isset ( $missing )) {
					echo 'value="' . htmlentities ( $_POST ['repass'] ) . '"';
				}
				?> />
				 <?php
					if (isset ( $_POST ['password'] ) && isset ( $_POST ['repass'] ) && $_POST ['password'] != $_POST ['repass']) {
						?>
                    <span class="error">Không khớp mật khẩu!</span> <?php
					}
					
					?><br />

			<img src="captcha.php" id="captcha" alt="captcha" />
			<label for="security_code"><strong></p>Ô nhập liệu Capcha</strong><span>*</span><?php
			if (isset ( $missing ) && in_array ( 'security_code', $missing )) {
				?>
                    <span class="error">Điều vào captcha ở trên(Không
					phân biệt hoa thường)!</span> <?php } ?>
            </label>
			<input type="text" id="security_code" name="security_code"
				autocomplete="off" class="required" />
			<input type="submit" value="ĐĂNG KÝ" name="send" />

		</form>
	</div>
	<!--End #wrapper-->
	<hr color="#fff" />
	<p class="ft">
		Trường Cao đẳng Kinh tế - Kỹ thuật Cần Thơ<br /> Điện thoai: (84-0710)
		3765775 ; Fax: (84-0710) 3821326 ; Email: ktktct@ctec.edu.vn<br /> Địa
		chỉ: Số 9, đường Cách mạng Tháng tám, Phường An Hòa, Quận Ninh Kiều,
		TP. Cần Thơ<br /> Copyright 2014 by <a
			href="http://ctec.edu.vn/ctec2013"> <abbr
			title="Trương Cao Đẳng Kinh Tế Kỹ Thuật Cần Thơ">CTEC</abbr></a>. All
		Rights Reserved.
	</p>




</body>
</html>