<?php
include 'Classes/PHPExcel.php';
session_start ();
$connect = mysql_connect ( 'localhost', 'root', '' );
mysql_select_db ( 'chuyennganh', $connect );
mysql_query ( 'set names "utf8"' );
$objReader = new PHPExcel_Reader_Excel5 ();
$objPHPExcel = $objReader->load ( "excel/hocphangv.xls" );
$WorkSheet = $objPHPExcel->getActiveSheet ();
$objPHPExcel->getDefaultStyle ()->getFont ()->setName ( 'Arial' );

$WorkSheet->getDefaultColumnDimension ()->setWidth ( 8 );

$WorkSheet->getPageSetup ()->setOrientation ( PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE );
$WorkSheet->getPageSetup ()->setPaperSize ( PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4 );

for($j = 0; $j <= count ( $_POST ['hk'] ); $j ++) {
	if (isset ( $_POST ['hk'] [$j] )) {
		
		$select = "select mahocphan, tenhocphan, sotinchi, tenhocky, loai, 
								magv, giangvien.hodem, giangvien.ten, SĐT, email, tenkhoa  ";
		$select .= "from giangvien_day_hocphan, hocphan, giangvien, khoa ";
		$select .= "where khoa.idkhoa=giangvien.idkhoa and hocphan.idhocphan=giangvien_day_hocphan.idhocphan and ";
		$select .= "giangvien.idgiangvien=giangvien_day_hocphan.idgiangvien and ";
		$select .= "magv= " . "'" . $_SESSION ["tendangnhap"] . "' and
								tenhocky='" . $_POST ['hk'] [$j] . "'";
		
		$kq = mysql_query ( $select, $connect );
		$num = mysql_num_rows ( $kq );
		
		$stt = 1;
		$i = 14;
		
		while ( $row = mysql_fetch_array ( $kq ) ) { // vong lam mang
			
			$objPHPExcel->setActiveSheetIndex ( 0 )->setCellValue ( 'A' . $i, $stt )->setCellValue ( 'B' . $i, $row ['mahocphan'] )->setCellValue ( 'C' . $i, $row ['tenhocphan'] )->setCellValue ( 'E' . $i, $row ['sotinchi'] )->setCellValue ( 'F' . $i, $row ['tenhocky'] )->setCellValue ( 'G' . $i, $row ['loai'] );
			
			$styleArray = array (
					'borders' => array (
							'allborders' => array (
									'style' => PHPExcel_Style_Border::BORDER_THIN 
							) 
					),
					'alignment' => array (
							'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
							'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
					) 
			);
			$hang = $num + 13;
			
			$WorkSheet->getStyle ( 'A14:G' . $hang )->applyFromArray ( $styleArray );
			
			$WorkSheet->setCellValue ( 'C8', $row ['tenkhoa'] );
			$WorkSheet->setCellValue ( 'C9', $row ['magv'] );
			$WorkSheet->setCellValue ( 'C10', $row [6] . " " . $row [7] );
			$WorkSheet->setCellValue ( 'F9', "" . "O" . $row ['SĐT'] );
			$WorkSheet->setCellValue ( 'F10', $row ['email'] );
			$stylec8c10 = array (
					'alignment' => array (
							'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
							'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
					),
					'font' => array (
							'color' => array (
									'argb' => '000' 
							) 
					) 
			)
			;
			
			$WorkSheet->getStyle ( 'C8:C10' )->applyFromArray ( $stylec8c10 );
			$stylef9f10 = array (
					'alignment' => array (
							'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
							'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
					),
					'font' => array (
							'color' => array (
									'argb' => '000' 
							) 
					) 
			)
			;
			
			$WorkSheet->getStyle ( 'F9:F10' )->applyFromArray ( $stylef9f10 );
			
			$stt ++;
			$i ++;
		}
	}
}

$a = $hang + 5;
$b = $a + 1;
$c = $b + 1;
$d = $c + 3;
$WorkSheet->setCellValue ( 'E' . $a, 'Cần Thơ, ngày 11 tháng 05 năm 2014 ' );
$WorkSheet->setCellValue ( 'E' . $b, 'TL. HIỆU TRƯỞNG' );
$WorkSheet->setCellValue ( 'E' . $c, 'TRƯỞNG PHÒNG QUẢN LÝ ĐÀO TẠO' );
$WorkSheet->setCellValue ( 'E' . $d, 'HUỲNH NGỌC CHINH' );
$WorkSheet->setCellValue ( 'B' . $c, 'NGƯỜI LẬP BẢNG' );
$WorkSheet->setCellValue ( 'B' . $d, 'ĐINH THẾ AN HUY' );

$WorkSheet->getStyle ( 'E' . $a )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );

$WorkSheet->getStyle ( 'E' . $d )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
$WorkSheet->getStyle ( 'E' . $d )->getFont ()->setBold ( true );
$WorkSheet->getStyle ( 'B' . $d )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
$WorkSheet->getStyle ( 'B' . $d )->getFont ()->setBold ( true );
$WorkSheet->getStyle ( 'B' . $c )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
$WorkSheet->getStyle ( 'B' . $c )->getFont ()->setBold ( true );
$Array = array (
		'font' => array (
				'bold' => true 
		),
		
		'alignment' => array (
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
		) 
);
$WorkSheet->getStyle ( 'E' . $b . ':' . 'E' . $c )->applyFromArray ( $Array );

$objPHPExcel->getActiveSheet ()->setTitle ( 'Danh sách Học Phần' );

$objPHPExcel->setActiveSheetIndex ( 0 );
ob_end_clean ();
header ( "Pragma: public" );
header ( "Expires: 0" );
header ( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
header ( "Content-Type: application/force-download" );
header ( "Content-Type: application/octet-stream" );
header ( "Content-Type: application/download" );
;
header ( "Content-Disposition: attachment;filename=hocphangv.xls" );
header ( "Content-Transfer-Encoding: binary " );
$objWriter = PHPExcel_IOFactory::createWriter ( $objPHPExcel, 'Excel5' );
$objWriter->save ( 'php://output' );
exit ();
?>