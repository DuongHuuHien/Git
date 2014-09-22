<?php
include 'Classes/PHPExcel.php';
session_start ();
$connect = mysql_connect ( 'localhost', 'root', '' );
mysql_select_db ( 'chuyennganh', $connect );
mysql_query ( 'set names "utf8"' );
$objReader = new PHPExcel_Reader_Excel5 ();
$objPHPExcel = $objReader->load ( "excel/hocphansv.xls" );
$WorkSheet = $objPHPExcel->getActiveSheet ();
$objPHPExcel->getDefaultStyle ()->getFont ()->setName ( 'Arial' );
$objPHPExcel->getDefaultStyle ()->getFont ()->setSize ( 12 );
$WorkSheet->getColumnDimension ( 'B' )->setAutoSize ( true );
$WorkSheet->getColumnDimension ( 'C' )->setAutoSize ( true );
$WorkSheet->getColumnDimension ( 'G' )->setAutoSize ( true );
$WorkSheet->getColumnDimension ( 'H' )->setAutoSize ( true );
$WorkSheet->getPageSetup ()->setOrientation ( PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE );
$WorkSheet->getPageSetup ()->setPaperSize ( PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4 );

for($j = 0; $j < count ( $_POST ['hk'] ); $j ++) {
	if (isset ( $_POST ['hk'] [$j] )) {
		
		$select = "select mahocphan, tenhocphan, sotinchi, tenhocky, giangvien.hodem,
								giangvien.ten, loai, tenkhoa, lop, masv, sinhvien.hodem, sinhvien.ten ";
		$select .= "from hocphan, giangvien, giangvien_day_hocphan, sinhvien, khoa ";
		$select .= "where sinhvien.idkhoa=giangvien.idkhoa and khoa.idkhoa=sinhvien.idkhoa ";
		$select .= "and giangvien.idgiangvien=giangvien_day_hocphan.idgiangvien and ";
		$select .= "hocphan.idhocphan=giangvien_day_hocphan.idhocphan and ";
		$select .= "tenhocky='" . $_POST ['hk'] [$j] . "' and masv= " . "'" . $_SESSION ["tendangnhap"] . "'";
		
		$kq = mysql_query ( $select, $connect );
		$num = mysql_num_rows ( $kq );
		
		$stt = 1;
		$i = 14;
		
		while ( $row = mysql_fetch_array ( $kq ) ) { // vong lam mang
			
			$objPHPExcel->setActiveSheetIndex ( 0 )->setCellValue ( 'A' . $i, $stt )->setCellValue ( 'B' . $i, $row ['mahocphan'] )->setCellValue ( 'C' . $i, $row ['tenhocphan'] )->setCellValue ( 'E' . $i, $row ['sotinchi'] )->setCellValue ( 'F' . $i, $row ['tenhocky'] )->setCellValue ( 'G' . $i, $row [4] . "" . $row [5] )->setCellValue ( 'H' . $i, $row ['loai'] );
			
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
			
			$WorkSheet->getStyle ( 'A14:H' . $hang )->applyFromArray ( $styleArray );
			
			$WorkSheet->setCellValue ( 'C8', $row ['tenkhoa'] );
			$WorkSheet->setCellValue ( 'C9', $row ['lop'] );
			$WorkSheet->setCellValue ( 'C10', $row ['masv'] );
			$WorkSheet->setCellValue ( 'C11', $row [10] . " " . $row [11] );
			$style = array (
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
			
			$WorkSheet->getStyle ( 'C8:C11' )->applyFromArray ( $style );
			
			$stt ++;
			$i ++;
		}
	}
}

$a = $hang + 15;
$b = $a + 1;
$c = $b + 1;
$d = $c + 3;
$WorkSheet->setCellValue ( 'G' . $a, 'Cần Thơ, ngày 11 tháng 05 năm 2014 ' );
$WorkSheet->setCellValue ( 'G' . $b, 'TL. HIỆU TRƯỞNG' );
$WorkSheet->setCellValue ( 'G' . $c, 'TRƯỞNG PHÒNG QUẢN LÝ ĐÀO TẠO' );
$WorkSheet->setCellValue ( 'G' . $d, 'HUỲNH NGỌC CHINH' );
$WorkSheet->setCellValue ( 'B' . $c, 'NGƯỜI LẬP BẢNG' );
$WorkSheet->setCellValue ( 'B' . $d, 'ĐINH THẾ AN HUY' );
$objPHPExcel->getDefaultStyle ( 'G' . $a )->getFont ()->setSize ( 10 );
$WorkSheet->getStyle ( 'G' . $a )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
$objPHPExcel->getDefaultStyle ( 'G' . $d )->getFont ()->setSize ( 11 );
$WorkSheet->getStyle ( 'G' . $d )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
$WorkSheet->getStyle ( 'G' . $d )->getFont ()->setBold ( true );
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
$WorkSheet->getStyle ( 'G' . $b . ':' . 'G' . $c )->applyFromArray ( $Array );

$objPHPExcel->getActiveSheet ()->setTitle ( 'Danh sach Học Phần' );

$objPHPExcel->setActiveSheetIndex ( 0 );
ob_end_clean ();
header ( "Pragma: public" );
header ( "Expires: 0" );
header ( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
header ( "Content-Type: application/force-download" );
header ( "Content-Type: application/octet-stream" );
header ( "Content-Type: application/download" );
;
header ( "Content-Disposition: attachment;filename=hocphansv.xls" );
header ( "Content-Transfer-Encoding: binary " );
$objWriter = PHPExcel_IOFactory::createWriter ( $objPHPExcel, 'Excel5' );
$objWriter->save ( 'php://output' );
exit ();
?>