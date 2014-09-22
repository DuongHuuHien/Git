-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 23 Août 2014 à 02:47
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chuyennganh`
--

-- --------------------------------------------------------

--
-- Structure de la table `chuong`
--

CREATE TABLE IF NOT EXISTS `chuong` (
  `idchuong` int(11) NOT NULL AUTO_INCREMENT,
  `tenchuong` varchar(45) DEFAULT NULL,
  `tomtat` varchar(45) DEFAULT NULL,
  `idhocphan` int(11) NOT NULL,
  `linkdown` int(11) NOT NULL,
  PRIMARY KEY (`idchuong`),
  KEY `fk_chuong_hocphan1_idx` (`idhocphan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `chuong`
--

INSERT INTO `chuong` (`idchuong`, `tenchuong`, `tomtat`, `idhocphan`, `linkdown`) VALUES
(1, 'Tên chương I', 'Tóm Tắt chương I', 28, 1),
(2, 'Tên Chương I', 'Tóm Tắt Chương I', 24, 1),
(3, 'Tên Chương I', ' Tóm Tắt Chương I', 25, 1),
(4, 'Tên Chương I', 'Tóm Tắt Chương I', 27, 1),
(7, 'Tên chương I', 'Tóm Tắt chương I', 26, 1),
(8, 'Tên chương I', 'Tóm Tắt chương I', 63, 1),
(9, 'Tên chương I', 'Tóm Tắt chương I', 64, 1),
(10, 'Tên chương I', 'Tóm Tắt chương I', 66, 1),
(11, 'Tên chương I', 'Tóm Tắt chương I', 68, 1),
(12, 'Tên chương I', 'Tóm Tắt chương I', 69, 1),
(13, 'Tên chương I', 'Tóm Tắt chương I', 70, 1),
(18, 'Tên Chương II', 'Tóm Tắt Chương II', 24, 2),
(19, 'Tên Chương II', 'Tóm Tắt Chương II', 25, 2),
(20, 'Tên Chương II', 'Tóm Tắt Chương II', 26, 2),
(21, 'Tên Chương II', 'Tóm Tắt Chương II', 27, 2),
(22, 'Tên Chương II', 'Tóm Tắt Chương II', 28, 2),
(23, 'Tên Chương II', 'Tóm Tắt Chương II', 63, 2),
(24, 'Tên Chương II', 'Tóm Tắt Chương II', 64, 2),
(25, 'Tên Chương II', 'Tóm Tắt Chương II', 66, 2),
(26, 'Tên Chương II', 'Tóm Tắt Chương II', 68, 2),
(27, 'Tên Chương II', 'Tóm Tắt Chương II', 69, 2),
(28, 'Tên Chương II', 'Tóm Tắt Chương II', 70, 2),
(29, 'Tên Chương III', 'Tóm Tắt Chương III', 24, 3),
(30, 'Tên Chương III', 'Tóm Tắt Chương III', 25, 3),
(31, 'Tên Chương III', 'Tóm Tắt Chương III', 26, 3),
(32, 'Tên Chương III', 'Tóm Tắt Chương III', 27, 3),
(33, 'Tên Chương III', 'Tóm Tắt Chương III', 28, 3),
(34, 'Tên Chương III', 'Tóm Tắt Chương III', 63, 3),
(35, 'Tên Chương III', 'Tóm Tắt Chương III', 64, 3),
(36, 'Tên Chương III', 'Tóm Tắt Chương III', 66, 3),
(37, 'Tên Chương III', 'Tóm Tắt Chương III', 68, 3),
(38, 'Tên Chương III', 'Tóm Tắt Chương III', 69, 3),
(39, 'Tên Chương III', 'Tóm Tắt Chương III', 70, 3),
(40, 'Tên Chương IV', 'Tóm Tắt Chương IV', 24, 4),
(41, 'Tên Chương IV', 'Tóm Tắt Chương IV', 25, 4),
(42, 'Tên Chương IV', 'Tóm Tắt Chương IV', 26, 4),
(43, 'Tên Chương IV', 'Tóm Tắt Chương IV', 27, 4),
(44, 'Tên Chương IV', 'Tóm Tắt Chương IV', 28, 4),
(45, 'Tên Chương IV', 'Tóm Tắt Chương IV', 63, 4),
(46, 'Tên Chương IV', 'Tóm Tắt Chương IV', 64, 4),
(47, 'Tên Chương IV', 'Tóm Tắt Chương IV', 66, 4),
(48, 'Tên Chương IV', 'Tóm Tắt Chương IV', 68, 4),
(49, 'Tên Chương IV', 'Tóm Tắt Chương IV', 69, 4),
(50, 'Tên Chương IV', 'Tóm Tắt Chương IV', 70, 4);

-- --------------------------------------------------------

--
-- Structure de la table `giangvien`
--

CREATE TABLE IF NOT EXISTS `giangvien` (
  `idgiangvien` int(11) NOT NULL AUTO_INCREMENT,
  `magv` varchar(50) NOT NULL,
  `hodem` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `SĐT` int(11) NOT NULL,
  `idkhoa` int(11) NOT NULL,
  PRIMARY KEY (`idgiangvien`),
  UNIQUE KEY `magv` (`magv`),
  UNIQUE KEY `magv_2` (`magv`),
  UNIQUE KEY `magv_3` (`magv`),
  KEY `idkhoa` (`idkhoa`),
  KEY `idkhoa_2` (`idkhoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=123 ;

--
-- Contenu de la table `giangvien`
--

INSERT INTO `giangvien` (`idgiangvien`, `magv`, `hodem`, `ten`, `email`, `SĐT`, `idkhoa`) VALUES
(1, 'ntthuc', 'Nguyễn Trọng', 'Thức', 'ntthuc@ctec.edu.vn', 949515362, 1),
(3, 'phcam', 'Phạm Hồng', 'Cẩm', 'phcam@ctec.edu.vn', 947725595, 1),
(4, 'nmquyen', 'Nguyễn Minh', 'Quyền', 'nmq@ctec.edu.vn', 918376397, 1),
(6, 'tbhuy', 'Trần Bá ', 'Huy', 'tbhuy@ctec.edu.vn', 932934984, 1),
(7, 'nmdoi', 'Nguyễn Minh ', 'Đợi', 'nmdoi@ctec.edu.vn', 949571809, 1),
(8, 'hnhtrang', 'Huỳnh Nguyễn Huyền', 'Trang', 'hnhtrang@ctec.edu.vn', 1225161120, 1),
(9, 'nhpdai', 'Nguyễn Hữu Phước', 'Đại', 'nhpdai@ctec.edu.vn', 919886785, 1),
(10, 'nthieu', 'Ngô Trung', 'Hiếu', 'nthieu@ctec.edu.vn', 1682292555, 1),
(11, 'vhtu', 'Võ Hoàng ', 'Tú', 'vhtu@ctec.edu.vn', 1213932002, 1),
(12, 'clsalin', 'Châu Lê', 'Salin', 'clsalin@ctec.edu.vn', 943133711, 1),
(13, 'nvthoai', 'Nguyễn Văn ', 'Thoại', 'nvthoai@ctec.edu.vn', 983947139, 2),
(14, 'nlkthu', 'Nguyễn Lâm Kim', 'Thu', 'nlkthu@ctec.edu.vn', 918025776, 2),
(15, 'tdchinh', 'Trịnh Đình ', 'Chính', 'tdchinh@ctec.edu.vn', 918125275, 2),
(17, 'ttnthanh', 'Tô Thị Ngọc ', 'Thanh', 'ttnthanh@ctec.edu.vn', 918184054, 2),
(18, 'cdnga', 'Chung Diệu', 'Nga', 'cdnga@ctec.edu.vn', 949632999, 2),
(20, 'nttung', 'Nguyễn Thanh ', 'Tùng', 'nttung@ctec.edu.vn', 938795669, 2),
(21, 'nbngoc', 'Nguyễn Bích ', 'Ngọc', 'nbngoc@ctec.edu.vn', 942377277, 2),
(22, 'ntlanh', 'Nguyễn Thị Lan ', 'Anh', 'ntlanh@ctec.edu.vn', 1234058833, 2),
(23, 'nqhuy', 'Ngô Quang', 'Huy', 'nqhuy@ctec.edu.vn', 989238079, 2),
(24, 'tmthien', 'Thiềm Mỹ ', 'Thiên', 'tmthien@ctec.edu.vn', 919245884, 2),
(27, 'ntlphuong', 'Nguyễn Thị Ly', 'Phương', 'ntlphuong@ctec.edu.vn', 912611595, 4),
(29, 'pdnguyen', 'Phan Đình ', 'Nguyên', 'pdnguyen@ctec.edu.vn', 925555669, 4),
(30, 'nthquy', 'Nguyễn Thanh Hoàng', 'Qúy', 'nthquy@ctec.edu.vn', 989317318, 4),
(31, 'lhnga', 'Lê Huỳnh ', 'Nga', 'lhnga@ctec.edu.vn', 979796663, 4),
(33, 'vthnhung', 'Võ Thị Hồng', 'Nhung', 'vthnhung@ctec.edu.vn', 988946457, 4),
(34, 'dkphuong', 'Đặng Kim ', 'Phương', 'dtkphuong@ctec.edu.vn', 917137913, 4),
(35, 'ntkquyen', 'Nguyễn Thị Kim', 'Quyên', 'ntkquyen@ctec.edu.vn', 908257607, 4),
(36, 'ntbphuong', 'Ngô Thị Bích ', 'Phượng', '  dtkphuong@ctec.edu.vn', 983821898, 4),
(37, 'nvchanh', 'Nguyễn Văn', 'Chánh', 'nvchanh@ctec.edu.vn', 1207350982, 4),
(38, 'pdphuong', 'Phạm Diễm ', 'Phương', 'pdphuong@ctec.edu.vn', 1688075414, 4),
(39, 'vqduy', 'Vương Quốc ', 'Duy', 'vqduy@ctec.edu.vn', 939002280, 4),
(40, 'nhgam', 'Nguyễn Hồng ', 'Gấm', 'nhgam@ctec.edu.vn', 909645358, 3),
(41, 'tqkhai', 'Trương Quốc ', 'Khải', 'tqkhai@ctec.edu.vn', 908045804, 3),
(42, 'pnthuan', 'Phạm Ngọc ', 'Thuận', 'pnthuan@ctec.edu.vn', 913617707, 3),
(43, 'nvthao', 'Nguyễn Việt ', 'Thảo', 'nvthao@ctec.edu.vn', 913871043, 3),
(44, 'ntle', 'Nguyễn Thị ', 'Lệ', 'ntle@ctec.edu.vn', 918160042, 3),
(45, 'dhnghi', 'Đỗ Hữu', 'Nghị', 'dhnghi@ctec.edu.vn', 908324899, 3),
(46, 'vtnhat', 'Võ Thái', 'Nhật', 'vtnhu@ctec.edu.vn', 939943942, 3),
(47, 'ntnanh', 'Nguyễn Thị Ngọc ', 'Anh', 'ntnanh@ctec.edu.vn', 988633466, 3),
(48, 'lhlien', 'La Hồng ', 'Liên', 'lhlien@ctec.edu.vn', 907244817, 3),
(49, 'nmlinh', 'Nguyễn Mỹ', 'Linh', 'nmlinh@ctec.edu.vn', 983789197, 3),
(50, 'tpttuan', 'Tạ Phúc Thanh', 'Tuấn', 'tpttuan@ctec.edu.vn', 936171337, 3),
(51, 'dtut', 'Đỗ Thị', 'Út', 'dtut@ctec.edu.vn', 939836838, 3),
(52, 'ntdphuong', 'Nguyễn Thị Diễm', 'Phương', ' ntdphuong@ctec.edu.vn', 907005877, 3),
(53, 'nmtan', 'Nguyễn Minh Thúy ', 'An', 'nmtan@ctec.edu.vn', 939304463, 3),
(54, 'lhthanh', 'Lê Hoàng ', 'Thanh', 'lhthanh@ctec.edu.vn', 918758234, 5),
(55, 'ntmvan', 'Nguyễn Thị Mỹ ', 'Vân', 'nymvan@ctec.edu.vn', 918052973, 5),
(56, 'tcnhan', 'Trần Chí ', 'Nhân', 'tcnhan@ctec.edu.vn', 986868659, 5),
(57, 'tdphuong', 'Trần Diễm ', 'Phượng', 'tdphuong@ctec.edu.vn', 947777223, 5),
(58, 'hmhanh', 'Hồ Mỹ ', 'Hạnh', 'hmhanh@ctec.edu.vn', 903480494, 5),
(59, 'luuyen', 'Lương Uyên ', 'Uyên', 'luuyen@ctec.edu.vn', 947707315, 5),
(60, 'btptam', 'Bùi Thị Phương', ' Tâm', 'btptam@ctec.edu.vn', 958117798, 5),
(61, 'ntkdiem', 'Nguyễn Thị Kiều ', 'Diễm', 'ntkdiem@ctec.edu.vn', 932777494, 5),
(62, 'ntmkhanh', 'Nguyễn Thị Mai', 'Khanh', 'ntmkhanh@ctec.edu.vn', 917777722, 5),
(63, 'nqthanh', 'Nguyễn Quốc ', 'Thanh', 'nqthanh@ctec.edu.vn', 908831023, 5),
(64, 'tntran', 'Tiết Ngọc ', 'Trân', 'tntran@ctec.edu.vn', 909770909, 5),
(65, 'vmkhoi', 'Võ Minh ', 'Khôi', 'vmkhoi@ctec.edu.vn', 917877347, 5),
(66, 'nnhanh', 'Nguyễn Ngọc Hoàng ', 'Anh', 'nnhanh@ctec.edu.vn', 1286877347, 5),
(67, 'pnquang', 'Phạm Ngọc ', 'Quang', 'pnquang@ctec.edu.vn', 935161659, 5),
(68, 'ltphat', 'Lâm Tấn', ' Phát', 'ltphat@ctec.edu.vn', 944892555, 5),
(69, 'vthhanh', 'Võ Thị Hồng ', 'Hạnh', 'vthhanh@ctec.edu.vn', 1685226772, 5),
(70, 'ptnanh', 'Phạm Thị Ngọc', ' Ánh', 'ptnanh@ctec.edu.vn', 985771756, 5),
(71, 'nvquyen', 'Nguyễn Văn', ' Quyên', 'nvquyen@ctec.edu.vn', 918280414, 6),
(72, 'mthuong', 'Mai Thu', 'Hương', 'mthuong@ctec.edu.vn', 914211475, 6),
(73, 'nthhai', 'Nguyễn Thị Hưng ', 'Hải', 'nthhai@ctec.edu.vn', 919458451, 6),
(74, 'pvbe', 'Phạm Văn ', 'Bé', 'pvbe@ctec.edu.vn', 918416523, 6),
(75, 'nphao', 'Nguyễn Phúc ', 'Hảo', 'nphao@ctec.edu.vn', 943633225, 6),
(76, 'ttttrang', 'Thái Thị Thanh ', 'Trang', 'ttttrang@ctec.edu.vn', 916905908, 6),
(77, 'nhthao', '.Nguyễn Hồng ', 'Thảo', 'nhthao@ctec.edu.vn', 939783015, 6),
(78, 'nvube', 'Nguyễn Văn Út ', 'Bé', 'nvube@ctec.edu.vn', 939488882, 6),
(79, 'nntlam', 'Nguyễn Ngọc Thanh', ' Lam', 'nntlam@ctec.edu.vn', 903118238, 6),
(80, 'dvsu', 'Dương Văn ', 'Sử', 'dvsu@ctec.edu.vn', 913974447, 6),
(81, 'ptxthuy', 'Phan Thị Xuân ', 'Thuỷ', 'ptxthuy@ctec.edu.vn', 918549181, 6),
(82, 'ltbchau', 'Lê  Thị Bảo', ' Châu', 'ltbchau@ctec.edu.vn', 939791616, 6),
(83, 'htnluu', 'Huỳnh Thị Ngọc', ' Lưu', 'htnluu@ctec.edu.vn', 948924534, 6),
(84, 'qhmanh', 'Quách Huỳnh Mỹ ', 'Anh', 'qhmanh@ctec.edu.vn', 939000393, 6),
(85, 'ctduong', 'Châu Trùng ', 'Dương', 'ctduong@ctec.edu.vn', 909788766, 6),
(86, 'hnkhanh', 'Hoàng Ngọc ', 'Khánh', 'hnkhanh@ctec.edu.vn', 916815934, 6),
(87, 'nkkhoa', 'Nguyễn Kim ', 'Khoa', 'nkkhoa@ctec.edu.vn', 918864774, 6),
(88, 'mtduong', 'Mai Thùy ', 'Dương', 'mtduong@ctec.edu.vn', 914211475, 6),
(89, 'ptlthi', 'Phan Thị Lệ ', 'Thi', 'ptlthi@ctec.edu.vn', 939501053, 6),
(90, 'npcuong', ' Nguyễn Phú ', 'Cường', 'npcuong@ctec.edu.vn', 913838979, 6),
(91, 'lmhung', 'Lê Minh ', 'Hùng', 'lmhung@ctec.edu.vn', 909813193, 6),
(92, 'ndquyen', 'Nguyễn Doanh ', 'Quyền', 'ndquyen@ctec.edu.vn', 987001693, 6),
(93, 'ntmhanh', 'Nguyễn Thị Mỹ', ' Hạnh', 'ntmhanh@ctec.edu.vn', 1684968880, 6),
(94, 'nthphuong', 'Nguyễn Thị Hồng ', 'Phượng', 'nthphuong@ctec.edu.vn', 933253588, 6),
(95, 'tvtran', 'Tạ Vũ', ' Trân', 'tvtran@ctec.edu.vn', 919325585, 7),
(96, 'ttlanh', 'Trần Thị Loan', ' Anh', 'ttlanh@ctec.edu.vn', 918480796, 7),
(97, 'nlnluong', 'Ngô Lê Ngọc ', 'Lưỡng', 'nlnluong@ctec.edu.vn', 989053383, 7),
(98, 'lttuyen', 'Lê Thanh ', 'Tuyển', 'lttuyen@ctec.edu.vn', 985595799, 7),
(99, 'kmngoc', 'Khổng Minh', ' Ngọc', 'kmngoc@ctec.edu.vn', 919811936, 7),
(100, 'ltnhan', 'Lê Thị Ngọc ', 'Hân', 'ltnhan@ctec.edu.vn', 907299908, 7),
(101, 'tqduy', ' Trần Quốc', ' Duy', 'tqduy@ctec.edu.vn', 904147547, 7),
(102, 'ntmhuong', 'Nguyễn Thị Mai', ' Hương', 'ntmhuong@ctec.edu.vn', 939143649, 7),
(103, 'lbthuan', 'Lê Bích ', 'Thuận', 'lbthuan@ctec.edu.vn', 919745705, 7),
(104, 'ttnlam', 'Trần Thái Nhật ', 'Lam', 'ttnlam@ctec.edu.vn', 913707799, 7),
(105, 'qhoanh', 'Quách Hoàng', ' Oanh', 'qhoanh@ctec.edu.vn', 939828479, 7),
(106, 'vtnam', 'Võ Thành', ' Nam', 'vtnam@ctec.edu.vn', 939398166, 7),
(107, 'lthque', 'Lê Thị Hồng ', 'Quế', 'lthque@ctec.edu.vn', 939821980, 7),
(108, 'ntnlinh', 'Nguyễn Thị Ngọc ', 'Linh', 'ntnlinh@ctec.edu.vn', 945609600, 7),
(109, 'dtnlieu', 'Đặng Thị Ngọc ', 'Liễu', 'dtnlieu@ctec.edu.vn', 919114885, 7),
(110, 'nbvi', 'Nguyễn Bá', ' Vi', 'nbvi@ctec.edu.vn', 942342009, 7),
(111, 'nvvu', 'Nguyễn Vương ', 'Vũ', 'nvvu@ctec.edu.vn', 907803879, 7),
(112, 'nhnguyen', 'Nguyễn Hoàng', ' Nguyên', 'nhnguyen@ctec.edu.vn', 932852322, 7),
(113, 'nhtduc', 'Nguyễn Huỳnh Trọng ', 'Đức', 'nhtduc@ctec.edu.vn', 949284705, 7),
(114, 'ltdthanh', 'Lê Thị Đào ', 'Thanh', 'ltdthanh@ctec.edu.vn', 919459099, 8),
(115, 'bqnhon', 'Bùi Quang', ' Nhơn', 'bqnhon@ctec.edu.vn', 919462535, 8),
(116, 'lklinh', 'Lâm Khánh', ' Linh', 'lklinh@ctec.edu.vn', 939531547, 8),
(117, 'nqdket', 'Nguyễn Quốc Đoàn', ' Kết', 'nqdket@ctec.edu.vn', 909811612, 8),
(118, 'qnlnhan', ' Quách Ngọc Ly ', 'Nhân', 'qnlnhan@ctec.edu.vn', 909992070, 8),
(119, 'hvtanh', 'Huỳnh Văn ', 'Tánh', 'hvtanh@ctec.edu.vn', 909777494, 8),
(120, 'nmhanh', 'Nguyễn Mỹ ', 'Hạnh', 'nmhanh@ctec.edu.vn', 934005131, 8),
(121, 'ltdhanh', 'La Thị Diệu ', 'Hạnh', 'ltdhanh@ctec.edu.vn', 989369926, 8),
(122, 'lathu', 'Lê Anh ', 'Thư', 'ltathu@ctec.edu.vn', 918543350, 8);

-- --------------------------------------------------------

--
-- Structure de la table `giangvien_day_hocphan`
--

CREATE TABLE IF NOT EXISTS `giangvien_day_hocphan` (
  `idhocphan` int(11) NOT NULL AUTO_INCREMENT,
  `idgiangvien` int(11) NOT NULL,
  PRIMARY KEY (`idhocphan`,`idgiangvien`),
  KEY `fk_hocphan_has_giangvien_giangvien1_idx` (`idgiangvien`),
  KEY `fk_hocphan_has_giangvien_hocphan1_idx` (`idhocphan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Contenu de la table `giangvien_day_hocphan`
--

INSERT INTO `giangvien_day_hocphan` (`idhocphan`, `idgiangvien`) VALUES
(28, 1),
(68, 1),
(69, 1),
(70, 1),
(28, 2),
(28, 3),
(16, 4),
(25, 4),
(28, 4),
(28, 5),
(28, 6),
(68, 6),
(69, 6),
(28, 7),
(66, 7),
(27, 8),
(28, 8),
(24, 9),
(28, 9),
(30, 23),
(42, 23),
(31, 24),
(43, 24),
(32, 25),
(44, 25),
(33, 26),
(45, 26),
(34, 27),
(46, 27),
(35, 28),
(47, 28),
(36, 29),
(48, 29),
(37, 30),
(38, 31),
(49, 31),
(39, 32),
(50, 32),
(51, 33),
(59, 33),
(52, 34),
(60, 34),
(53, 35),
(61, 35),
(54, 36),
(62, 36),
(55, 37),
(63, 37),
(56, 38),
(64, 38),
(57, 39),
(65, 39),
(58, 40),
(66, 40),
(41, 121),
(26, 125),
(28, 125),
(63, 125),
(28, 126),
(64, 126);

-- --------------------------------------------------------

--
-- Structure de la table `hocphan`
--

CREATE TABLE IF NOT EXISTS `hocphan` (
  `idhocphan` int(11) NOT NULL AUTO_INCREMENT,
  `mahocphan` varchar(45) DEFAULT NULL,
  `tenhocphan` varchar(45) DEFAULT NULL,
  `sotinchi` int(11) DEFAULT NULL,
  `tenhocky` int(11) NOT NULL,
  `loai` varchar(30) NOT NULL,
  PRIMARY KEY (`idhocphan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Contenu de la table `hocphan`
--

INSERT INTO `hocphan` (`idhocphan`, `mahocphan`, `tenhocphan`, `sotinchi`, `tenhocky`, `loai`) VALUES
(3, 'DC103', 'Toán Cao Cấp', 3, 1, 'Đại cương'),
(4, 'DC104', 'Tiếng Anh 1', 3, 1, 'Đại cương'),
(5, 'DC1003', 'Giáo dục thể chất', 2, 2, 'Đại cương'),
(6, 'DC1001', 'Giáo dục quốc phòng 1', 3, 1, 'Đai cương'),
(7, 'DC1002', 'Giáo dục quốc phòng 2', 2, 1, 'Đại cương'),
(8, 'DC2001', 'Giáo dục quốc phòng 3', 3, 2, 'Đại cương'),
(9, 'DC151', 'Đường lối CM của Đảng CS VN', 3, 5, 'Đại cương'),
(10, 'DC152', 'Pháp luật đại cương', 2, 2, 'Đại cương'),
(11, 'DC153', 'Tiếng Anh 2', 4, 2, 'Đại cương'),
(12, 'TH151', 'Tin học đại cương', 3, 2, 'Cơ sở ngành'),
(13, 'QT151', 'Kinh tế vi mô', 3, 2, 'Cơ sở ngành'),
(14, 'DC110', 'Xác suất thống kê', 2, 6, 'Đại cương'),
(15, 'DC158', 'Toán rời rạc', 2, 2, 'Đại cương'),
(16, 'TH152', 'Kiến trúc máy tính', 3, 2, 'Cơ sở ngành'),
(17, 'QT3003', 'Nguyên lý thống kê', 2, 3, 'Cơ sở ngành'),
(18, 'KT3003', 'Tài chính - Tiền tệ - Ngân hàng', 4, 3, 'Chuyên ngành'),
(19, 'KT3002', 'Nguyên lý kế toán', 3, 3, 'Đại cương'),
(20, 'QT3002	', 'Kinh tế vĩ mô', 2, 3, 'Cơ sở ngành'),
(21, 'PL3001', 'Pháp luật kinh tế', 2, 3, 'Chuyên ngành'),
(22, 'PL3002', 'Soạn thảo văn bản', 2, 5, 'Đại cương'),
(23, 'PL3003', 'Tư tưởng Hồ Chí Minh', 2, 3, 'Đại cương'),
(24, 'TH3001', 'Cài đặt, lắp ráp và sửa chữa', 2, 3, 'Chuyên ngành'),
(25, 'TH3002', 'Hệ diều hành', 2, 3, 'Cơ sở ngành'),
(26, 'TH3003', 'Hệ quản trị Cơ sở Dữ liệu SQL Server', 4, 3, 'Cơ sở ngành'),
(27, 'TH3005', 'Lập trình căn bản', 3, 3, 'Cơ sở ngành'),
(28, 'TH3006', 'Tin học văn phòng', 3, 3, 'Cơ sở ngành'),
(29, 'PL3002', 'Soạn thảo văn bản', 2, 3, 'Đại cương'),
(30, 'PL3003', 'Tư tưởng Hồ Chí Minh', 3, 3, 'Đai cương'),
(31, 'KT3005', 'Nguyên lý kế toán (QT)', 3, 3, 'Đại cương'),
(32, 'DC109', 'Hóa học đại cương 2', 2, 1, 'Đại cương'),
(33, 'DC156', 'Sinh học đại cương', 2, 2, 'Đại cương'),
(34, 'DC157', 'Vật lý đại cương 1', 3, 2, 'Đại cương'),
(35, 'CB3002', 'Hóa học thực phẩm', 2, 3, 'Cơ sở ngành'),
(36, 'CB3007	', 'Vẽ kỹ thuật', 3, 3, 'Đại cương'),
(37, 'CB3003', 'Hóa phân tích', 2, 3, 'Chuyên ngành'),
(38, 'CB205', 'Kỹ thuật thực phẩm 2', 2, 3, 'Chuyên ngành'),
(39, 'CB4010', 'Nguyên lý bảo quản thực phẩm', 3, 3, 'Chuyên ngành'),
(40, 'CB3004', 'Hóa sinh học thực phẩm', 2, 3, 'Chuyên ngành'),
(41, 'CB4013', 'Vi sinh vật học và an toàn TP', 3, 3, 'Chuyên ngành'),
(42, 'CB4003', 'Kỹ thuật bao bì thực phẩm', 1, 3, 'Chuyên ngành'),
(43, 'CB4008', 'Máy và thiết bị công nghệ', 2, 4, 'Cơ sở ngành'),
(44, 'CB4014', 'Nước cấp - nước thải kỹ nghệ', 3, 4, 'Cơ sở ngành'),
(45, 'CB3001', 'An toàn lao động trong CB & TP', 3, 4, 'Cơ sở ngành'),
(46, 'CB3005', 'Kỹ thuật thực phẩm 1', 3, 4, 'Chuyên ngành'),
(47, 'CB4001', 'Công nghệ chế biến thực phẩm', 3, 4, 'Chuyên ngành'),
(48, 'CB4002', 'Công nghệ lạnh thực phẩm', 2, 4, 'Chuyên ngành'),
(49, 'CB4011', 'Phụ gia thực phẩm', 2, 4, 'Cơ sở ngành'),
(50, 'KT4005', 'Tài chính hành chính sự nghiệp', 3, 4, 'Cơ sở ngành'),
(51, 'KT4006	', 'Tài chính quốc tế', 3, 4, 'Chuyên ngành'),
(52, 'KT4009', 'Thị trường tài chính', 3, 4, 'Chuyên ngành'),
(53, 'KT4010', 'Thuế', 3, 4, 'Chuyên ngành'),
(54, 'KT4012', 'Tin học ứng dụng', 3, 4, 'Cơ sở ngành'),
(55, 'QT4002', 'Marketing căn bản', 2, 4, 'Đại cương'),
(56, 'QT4005', 'Quản trị học', 2, 4, 'Cơ sở ngành'),
(57, 'KT4004', 'Tài chính doanh nghiệp', 4, 4, 'Chuyên ngành'),
(58, 'KT4006', 'Tài chính quốc tế', 3, 4, 'Chuyên ngành'),
(59, 'KT4007', 'Thanh toán quốc tế', 3, 3, 'Cơ sở ngành'),
(60, 'KT4009', 'Thị trường tài chính', 3, 4, 'Cơ sở ngành'),
(61, 'KT4008', 'Thị trường chứng khoán', 3, 4, 'Cơ sở ngành'),
(62, 'KT4011', 'Tin học kế toán', 3, 4, 'Đại cương'),
(63, 'TH4001', 'Chuyên đề môn học 1', 2, 4, 'Cơ sở ngành'),
(64, 'TH4002', 'Cơ sở dữ liệu', 3, 4, 'Cơ sở ngành'),
(65, 'TH4003', 'Kỹ thuật đồ họa', 3, 4, 'Chuyên ngành'),
(66, 'TH4004	', 'Kỹ thuật lập trình', 3, 4, 'Chuyên ngành'),
(68, 'TH4006', 'Lập trình Web', 2, 3, 'Chuyên ngành'),
(69, 'TH4007', 'Thiết kế Website', 3, 4, 'Chuyên ngành'),
(70, 'TH4005', 'Lập Trình Truyền Thông', 2, 4, 'Cơ sở ngành');

-- --------------------------------------------------------

--
-- Structure de la table `hocphan_tailieugiangday`
--

CREATE TABLE IF NOT EXISTS `hocphan_tailieugiangday` (
  `idhocphan` int(11) NOT NULL AUTO_INCREMENT,
  `idtailieugiangday` int(11) NOT NULL,
  `linkdown` int(11) NOT NULL,
  PRIMARY KEY (`idhocphan`,`idtailieugiangday`),
  KEY `fk_hocphan_has_tailieugiangday_tailieugiangday1_idx` (`idtailieugiangday`),
  KEY `fk_hocphan_has_tailieugiangday_hocphan1_idx` (`idhocphan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Contenu de la table `hocphan_tailieugiangday`
--

INSERT INTO `hocphan_tailieugiangday` (`idhocphan`, `idtailieugiangday`, `linkdown`) VALUES
(0, 1, 110),
(24, 1, 100),
(24, 2, 102),
(24, 3, 102),
(24, 4, 103),
(24, 5, 104),
(24, 6, 105),
(25, 1, 108),
(25, 2, 107),
(25, 4, 109),
(25, 6, 106),
(26, 2, 110),
(26, 3, 122),
(27, 6, 113),
(28, 1, 115),
(28, 2, 114),
(63, 1, 116),
(63, 2, 110),
(63, 3, 111),
(63, 4, 112),
(63, 5, 109),
(63, 6, 123),
(64, 1, 110),
(64, 2, 112),
(64, 3, 88),
(64, 4, 27),
(64, 5, 57),
(64, 6, 118),
(66, 1, 112),
(66, 2, 110),
(66, 3, 57),
(66, 4, 41),
(66, 5, 98),
(66, 6, 123),
(68, 1, 112),
(68, 2, 111),
(68, 3, 89),
(68, 4, 110),
(68, 5, 114),
(68, 6, 86),
(69, 1, 111),
(69, 2, 113),
(69, 3, 89),
(69, 4, 90),
(69, 5, 110),
(69, 6, 112),
(70, 1, 115),
(70, 2, 114),
(70, 3, 67),
(70, 4, 57),
(70, 5, 25),
(70, 6, 24);

-- --------------------------------------------------------

--
-- Structure de la table `khoa`
--

CREATE TABLE IF NOT EXISTS `khoa` (
  `idkhoa` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhoa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idkhoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `khoa`
--

INSERT INTO `khoa` (`idkhoa`, `tenkhoa`) VALUES
(1, 'Tin Học Quản Lý'),
(2, 'Tài Chính Ngân Hàng'),
(3, 'Quản Trị Kinh Doanh'),
(4, 'Kế Toán'),
(5, 'Kinh Tế Thủy Sản'),
(6, 'Kinh Tế Nông Nghiệp'),
(7, 'Khoa Học Cơ Bản'),
(8, 'Giáo Dục Chính Trị Pháp Luật');

-- --------------------------------------------------------

--
-- Structure de la table `menu_khoa`
--

CREATE TABLE IF NOT EXISTS `menu_khoa` (
  `idkhoa` int(11) NOT NULL AUTO_INCREMENT,
  `makhoa` varchar(50) NOT NULL,
  `tenkhoa` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`idkhoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `menu_khoa`
--

INSERT INTO `menu_khoa` (`idkhoa`, `makhoa`, `tenkhoa`, `link`) VALUES
(1, 'KT', 'Kế Toán', 'http://www.ctec.edu.vn/kt/index.php/en/'),
(2, 'TCNH', 'Tài Chính Ngân Hàng', 'http://www.ctec.edu.vn/ctec2013/?page=khoa&cd=10&cdc=119'),
(3, 'QTKD', 'Quản Trị Kinh Doanh', 'http://www.ctec.edu.vn/ctec2013/?page=khoa&cd=10&cdc=54'),
(4, 'THQL', 'TIn Học Quản Lý', 'http://www.ctec.edu.vn/ctec2013/?page=khoa&cd=10&cdc=55'),
(5, 'KTTS', 'Kinh Tế Thủy Sản', 'http://www.ctec.edu.vn/ctec2013/?page=khoa&cd=10&cdc=56'),
(6, 'KTNN', 'Kinh Tế Nông Nghiệp', 'http://www.ctec.edu.vn/ctec2013/?page=khoa&cd=10&cdc=57'),
(7, 'KHCB', 'Khoa Học Cơ Bản', 'http://www.ctec.edu.vn/ctec2013/?page=khoa&cd=10&cdc=58'),
(8, 'GDCT', 'Giáo Dục Chính Trị', 'http://www.ctec.edu.vn/ctec2013/?page=khoa&cd=10&cdc=59'),
(9, 'tc', 'tài chính', 'dd');

-- --------------------------------------------------------

--
-- Structure de la table `menu_phong`
--

CREATE TABLE IF NOT EXISTS `menu_phong` (
  `idphong` int(11) NOT NULL AUTO_INCREMENT,
  `maphong` varchar(50) NOT NULL,
  `tenphong` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`idphong`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `menu_phong`
--

INSERT INTO `menu_phong` (`idphong`, `maphong`, `tenphong`, `link`) VALUES
(1, 'QLDT', 'Quản Lý Đào Tạo', 'http://www.ctec.edu.vn/ctec2013/?page=phong&cd=12&cdc=9'),
(2, 'CTHSSV', 'Công Tác HSSV', 'http://www.ctec.edu.vn/ctsv/'),
(3, 'KTDBCL', 'Khảo Thí Đảm Bảo CL', 'http://www.ctec.edu.vn/ctec2013/?page=phong&cd=12&cdc=47'),
(4, 'HTQT', 'Hợp Tác Quốc Tế', 'http://www.ctec.edu.vn/htqt/'),
(5, 'HCNS', 'Hành Chính Nhân Sự', 'http://www.ctec.edu.vn/ctec2013/?page=phong&cd=12&cdc=48'),
(6, 'QTTB', 'Quản Trị Thiết Bị', 'http://www.ctec.edu.vn/ctec2013/?page=phong&cd=12&cdc=49'),
(7, 'TV', 'Tài Vụ', 'http://www.ctec.edu.vn/ctec2013/?page=phong&cd=12&cdc=51'),
(8, 'TTPC', 'Thanh Tra Pháp Chế', 'http://www.ctec.edu.vn/ctec2013/?page=phong&cd=12&cdc=50');

-- --------------------------------------------------------

--
-- Structure de la table `registered_members`
--

CREATE TABLE IF NOT EXISTS `registered_members` (
  `id_mem` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(70) NOT NULL,
  `hodem` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sinhvien`
--

CREATE TABLE IF NOT EXISTS `sinhvien` (
  `idsinhvien` int(11) NOT NULL AUTO_INCREMENT,
  `masv` varchar(50) NOT NULL,
  `hodem` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `idkhoa` int(11) NOT NULL,
  `lop` varchar(50) NOT NULL,
  PRIMARY KEY (`idsinhvien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `sinhvien`
--

INSERT INTO `sinhvien` (`idsinhvien`, `masv`, `hodem`, `ten`, `idkhoa`, `lop`) VALUES
(4, '12cnha0012', 'Mai Trần Thị Thu', 'Cúc', 2, 'CNH12'),
(5, '12ctca0043', 'Nguyễn Minh', 'Vũ', 2, 'CTC12'),
(6, '12ctda0030', 'Nguyễn Thị Kim', 'Hên', 2, 'CTD12A'),
(8, '12cbva0078', 'Giảng Kim', 'Ngân', 6, 'CBV12'),
(9, '12aqma0056', 'Nguyễn Thị Huỳnh', 'Như', 3, 'CQM12'),
(12, '12cpla0023', 'Trần', 'Nguyễn', 8, 'TPL12'),
(13, '12cdda0045', 'Võ Thái', 'Bình', 6, 'CDD12'),
(21, 'hehe', 'keke', 'hjhj', 12, '1');

-- --------------------------------------------------------

--
-- Structure de la table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `quyen` varchar(50) NOT NULL,
  PRIMARY KEY (`tendangnhap`),
  KEY `quyen` (`quyen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `taikhoan`
--

INSERT INTO `taikhoan` (`tendangnhap`, `matkhau`, `quyen`) VALUES
('12aqma0056', 'aaf41f0c3ca2c90ccc8181b626301815', 'SV'),
('12cbba0020', '9cd9854431e45e0de961ff270e20b11f', 'SV'),
('12cbva0078', '223dc35dc7ddc9b915afd6aba606409f', 'SV'),
('12ccna0034', '32e411b8d08eb9e6f5e6a0d92601586c', 'SV'),
('12cdda0045', 'f64f589ffe84df9df6505e2385cb0caf', 'SV'),
('12cnha0012', 'ce57320e717d2d06bb6b91f19fd49236', 'SV'),
('12cnna0040', 'a0df1dc0292753875e8fd362a3893c4a', 'SV'),
('12cnta0078', 'c70c4b244a9e9f1a5faf5ebf264016e2', 'SV'),
('12cpla0023', 'e011c50151c7f0f429b9281d3aa37f9a', 'SV'),
('12cqqa0013', '950b9584ea14b5d915867e5847eeb3db', 'SV'),
('12cqqa0090', 'ae294fff4c9e05a141babdb7cbf264de', 'SV'),
('12ctca0043', '3fbfb1a0c98d45fec18590f6d026a455', 'SV'),
('12ctda0030', 'ec65bb839ea0528a7af22618d31b7e60', 'SV'),
('12ctha0086', '7c6b42c1ab5d4dd8c8a7af3d1ddbe944', 'SV'),
('12ctpa0074', 'c2e47aa62ac4b5cf20a35975592af478', 'SV'),
('12ctua0040', '1b60c17706c25abb289418ce8d9ee3bf', 'SV'),
('12ctua0056', '7662fb4647be99fa8db911bb6204386b', 'SV'),
('bqnhon', 'b095785de9c644147f7ce8e2d49f29f3', 'GV'),
('btptam', 'c4390cc090893a78299b87a91311055d', 'GV'),
('cdnga', '7cec05b85fb2c2f4b1ca2b09a3c747bf', 'GV'),
('clsalin', '15a96e4e325db4220c580d600234d618', 'GV'),
('ctduong', '3341ccc03dba68c2c31710cddb274bda', 'GV'),
('dhhien', '3cf498807ffbdec740393be129870d72', 'QT'),
('dhnghi', '331d7b6a306c23c3227b77c1e4d0b1d5', 'GV'),
('dkphuong', '80a98ba4f21398e90f5a2400cbe3ef4c', 'GV'),
('dtnlieu', '1dc333d1a26d32f62d0a83e987928cda', 'GV'),
('dtut', '8cbf34307d6138a4af6d8ffa6a9c9594', 'GV'),
('dvsu', 'd28f9bfcffa35331c6e7b1f58871fbee', 'GV'),
('haha', '123456', 'SV'),
('hehe', '123456', 'SV'),
('hjhj', 'e10adc3949ba59abbe56e057f20f883e', 'SV'),
('hmhanh', '47a4cf8f99a715b8fdd037da7a12208a', 'GV'),
('hnhtrang', '0863982303d278921c2bdf69b7bc2493', 'GV'),
('hnkhanh', '7d57b11e1daed0f37581f9f0183b1228', 'GV'),
('hqthinh', '6157131e38ccfffeefe2f3a7eb2d9e9f', 'GV'),
('htnluu', '177539cb6d8444358d89c6027db73c97', 'GV'),
('hvtanh', 'a73b2891e98544e3d8c9aadcefa4af65', 'GV'),
('khinkhin', 'a4e1d46042d8bd3f80b3084701c0c53a', 'QT'),
('kmngoc', '9a5b1c0004860d345e29eb9342220710', 'GV'),
('lathu', '9d660c14877472b258550bd8a034fca6', 'GV'),
('lbthuan', '832d075bb0cb7d1725fc9d386f9ca547', 'GV'),
('lhlien', '27feab163abbf962587f7c0daf41854d', 'GV'),
('lhnga', '6ea3030b66bfdfe8bc705573b64ead67', 'GV'),
('lhthanh', '1d4af911d20b9e15f911b813bb7fd490', 'GV'),
('lklinh', '9e3bf823e995393b77f3adcb00619786', 'GV'),
('lmhung', '67ccf0797da7dfaa2c195b6fc375dcba', 'GV'),
('lpathi', '476000a6e9ea4a6b58b4696ddd10a8a7', 'GV'),
('ltbchau', 'f2149d3c92f8bb2b5d5210ebbef21ab3', 'GV'),
('ltdhanh', '274a32472756a5ca58c2e22e8dcae326', 'GV'),
('ltdthanh', '1d3506372eb311f20269f654e3020bae', 'GV'),
('lthque', '2613c83ad7853a349a4ab78cb438c2d0', 'GV'),
('ltnhan', '90ffde3b7d5a91b667c1c399b4f66677', 'GV'),
('ltphat', 'fdbbee3dafbabef2eea86e0986cf093f', 'GV'),
('ltpphi', '0d64c39012dd527ffc46d5f8266b8def', 'GV'),
('lttuyen', '5f5939c7f693cb34802aaf338f668218', 'GV'),
('luuyen', '15a224a1509a9c049af95edf3cb987d0', 'GV'),
('mtduong', '88e29c29b6aaf18b95e90a484ea9b551', 'GV'),
('mthuong', '103ff83c9334a432c404cede7b1ee2dc', 'GV'),
('nbngoc', '082e91cbb402d525593257691756929d', 'GV'),
('nbvi', '0b2ee37c5cd3d382c49a6b26eddbd783', 'GV'),
('ndathang', '7f82e86a0d04660bcd8f7d00677a7d34', 'GV'),
('ndquyen', 'efdc7c710a2612f081600085ed73e03e', 'GV'),
('nhgam', '557b4d9d9502e50eb2624c9b30289fd9', 'GV'),
('nhnguyen', '7adde317af5f6c67697269e747cb8570', 'GV'),
('nhpdai', '660d4a9d047ab833a3f9a8152c16e45c', 'GV'),
('nhtduc', '66895689ab850bab2ca0f5d47b6e07a7', 'GV'),
('nhthao', '2eb6a037131ce5a59f5c87b6f7fa0d6d', 'GV'),
('nkkhoa', 'abc199acb29a92e753c30e02db839e52', 'GV'),
('nlkthu', '854b52a2e239fdf4e708bd09f9e98066', 'GV'),
('nlnluong', '35e13c36c56b3977dc43f58819be5c7f', 'GV'),
('nmdoi', 'a00467bacfa4b76aa9d907df26bed234', 'GV'),
('nmhanh', '412457d94ca36818119b3b0cd7a113ff', 'GV'),
('nmlinh', '11c0d8b15ac0918156f76c1eb92705e3', 'GV'),
('nmquyen', 'ae6b6a29536549f289c006874263d4fe', 'GV'),
('nmtan', '39efc57a5b308488fffc50eaeed3e7b4', 'GV'),
('nnhanh', 'c30e1ea51e9fec456055315359f99947', 'GV'),
('nntlam', '7308b9da327cfb71597f41d42d7f87de', 'GV'),
('npcuong', '0f84b28509747413b89df230d256b788', 'GV'),
('nphao', 'e89ccd3a6d60c0f986c6fc6f0d92e78c', 'GV'),
('nqdket', '2af96ed8400d5f9402bb0df19bb04535', 'GV'),
('nqhuy', 'b1200f883875ad6b70fc055cf27b2a65', 'GV'),
('nqthanh', 'bfed92cffdd49fc252aae8ed9c347ece', 'GV'),
('ntbngoc', '5e6f4c7e599c9d39b26641e97802ecb1', 'QT'),
('ntbphuong', 'e77988a556405b36f6d27183837bfe0f', 'GV'),
('ntdphuong', '6bfa9e412c27b9c60a0d5a32d29aef44', 'GV'),
('nthhai', 'aec531e720fcca11c51618684287badd', 'GV'),
('nthieu', 'fe8549c5b375e46dfa1fa2aeee3810d8', 'GV'),
('nthphuong', '5dae60a8f1e31963aae8ce403120bf0f', 'GV'),
('nthquy', 'f2a9215e12b2e7b9f9e279784a48fa35', 'GV'),
('ntkdiem', '135a40388996b0c9d1142099f16332d8', 'GV'),
('ntkquyen', 'e4188db9544a7953e8f068c2f3b66263', 'GV'),
('ntlanh', 'af5016622632fabefb5401295aac3fb4', 'GV'),
('ntle', '5554214812b829c86b89ded4f9bea6e9', 'GV'),
('ntlphuong', '10f3b5d8a6184e0a8788004e9324f1b3', 'GV'),
('ntmhanh', 'bcaf7da3b65a9fc8f7542fe3c6217b73', 'GV'),
('ntmhuong', '80d2f0d5d6034bb2b5bdb6df20f90c38', 'GV'),
('ntmkhanh', '1bf20725110b0cd3ee3376085869ec55', 'GV'),
('ntmvan', 'e3924068b6c78cf8c675c23459bf7823', 'GV'),
('ntnanh', '13bf6ada19820185789f8415ce8dfe10', 'GV'),
('ntnlinh', '1387128be7144a6ba9799701c0fb68cc', 'GV'),
('ntthuc', 'ab6f677f59d79836b3fdd87f478399c3', 'GV'),
('nttung', '558af708295e028c0d1f2aed5bcfd442', 'GV'),
('nvchanh', 'd677204eaaf8fe0140263c1157ef3072', 'GV'),
('nvquyen', '5e46675326f990d3c3c7ad3642b4e94b', 'GV'),
('nvthao', 'f4ee005b0cda6efa1038c265182f1854', 'GV'),
('nvthoai', 'a7cc8e07f5d39907d8297ff0faddf93d', 'GV'),
('nvube', '16789f49a2da1d1e466c7493950d716a', 'GV'),
('nvvu', '51e42e31aa57cb12b44dd38565b64dd7', 'GV'),
('pdnguyen', 'b88acabe3094046ff70006dc183a197e', 'GV'),
('pdphuong', '0ab4704abce6e7520528823b141ae600', 'GV'),
('phcam', 'f59f7f3c64fbf891ade544c80c5d90f0', 'GV'),
('pnngan', '3d8b2462d3a1ff808bf655729ad596f8', 'GV'),
('pnquang', '32499ad86f205bb402d949d580657d33', 'GV'),
('pnthuan', '041b3564e5b69b0cf5778ba660fc08e8', 'GV'),
('ppgiang', '9440182e8f3dd6a1b0035663bb371acb', 'GV'),
('ptlthi', '498ba6d94dbd0efeaf592cda1bf7d953', 'ptlthi'),
('ptnanh', '4aa4c600cb908fe3fb8cadd5d9844937', 'GV'),
('ptxthuy', '82e658e7a40c95ddcb0cd8c683bcc170', 'GV'),
('pvbe', '3f81a5cf8a3be25cceeae4a3fcf927de', 'GV'),
('qhmanh', 'f8493ce3bc5b19b488951b84f9de4820', 'qhmanh'),
('qhoanh', 'fc13418e4d4f88cbc75b7574fd55fe53', 'GV'),
('qnlnhan', 'bace63f0d428f7d9438b20e6d88a9cb5', 'GV'),
('tbhuy', 'a8e0bf429afe2fc6a587b352b6f26da4', 'GV'),
('tcnhan', '158de23da072f2583c105952fda82a89', 'GV'),
('tdchinh', '9a8fdedd2154a1cec5cb14369b3368a3', 'GV'),
('tdphuong', '3c7aea69439b7df35a30a3ad8b2d96ad', 'GV'),
('tmthien', '357d72dfb9205734d62ef70767d449f9', 'GV'),
('tntran', 'a89a8e103651846d01edc354ff19f421', 'GV'),
('tpttuan', '131ac98aa440918fb4e3e650c0404135', 'GV'),
('tqdung', '7a32385945ee12303c794a54558a13f9', 'GV'),
('tqduy', '27b206265b17d2e844ca396b4c183a0c', 'GV'),
('tqkhai', '72f5771d563d3658c55e838c86b56120', 'GV'),
('ttlanh', '4aeebc33a02c1e732499f86d9d5a61fe', 'GV'),
('ttnlam', 'ea7a9df665a3fb682fe12a5b72e4dfb5', 'GV'),
('ttnthanh', '4fb510115d6c5922b1b8dffcd49ce9a2', 'GV'),
('ttttrang', '32a18329298400b715223ca3803e5eeb', 'GV'),
('tvtran', 'c41c5510b69ffc0e2bc5c2ef3a00f2f4', 'GV'),
('vhtu', '367104efba7bfced43a446f63c82563b', 'GV'),
('vmkhoi', '4d3b2cd0fdc2e419eecefcf4102ab67d', 'GV'),
('vqduy', 'fc02de006754b620f1448e99872793b1', 'GV'),
('vthhanh', '6e0ddfdf7e67daea858ab9ddbfc505bf', 'GV'),
('vthnhung', '0a98029810f3753e9a79f640d3c9717b', 'GV'),
('vtnam', '992b74cd630f39e71e786b75393ade6a', 'vtnam'),
('vtnhat', 'ebc9cc0d1878aea0f13a3f0df4496e4d', 'GV');

-- --------------------------------------------------------

--
-- Structure de la table `tailieugiangday`
--

CREATE TABLE IF NOT EXISTS `tailieugiangday` (
  `idtailieugiangday` int(11) NOT NULL AUTO_INCREMENT,
  `tentailieu` varchar(45) DEFAULT NULL,
  `tacgia` varchar(45) DEFAULT NULL,
  `namxuatban` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtailieugiangday`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `tailieugiangday`
--

INSERT INTO `tailieugiangday` (`idtailieugiangday`, `tentailieu`, `tacgia`, `namxuatban`) VALUES
(1, 'Tên tài liệu 1', 'tác giả 1', 1990),
(2, 'Tên tài liệu 2', 'tác giả 2', 1991),
(3, 'Tên tài liệu 3', 'tác giả 3', 1992),
(4, 'Tên tài liệu 4', 'tác giả 4', 1993),
(5, 'Tên tài liệu 5', 'tác giả 5', 1994),
(6, 'Tên tài liệu 6', 'tác giả 6', 1995),
(7, 'f', 'h', 0),
(8, 'e', 'r', 0),
(9, 'd', 'e', 0),
(10, 'x', 'ư', 0),
(11, 'l', 'd', 0),
(12, 'ke', 'lư', 0),
(13, 'f', 'd', 0);

-- --------------------------------------------------------

--
-- Structure de la table `temp_members_db`
--

CREATE TABLE IF NOT EXISTS `temp_members_db` (
  `maxacnhan` varchar(70) NOT NULL,
  `tendangnhap` varchar(70) NOT NULL,
  `hodem` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `upload`
--

INSERT INTO `upload` (`name`, `type`, `size`) VALUES
('access.doc', 'applicatio', 41984),
('101_access.docx', 'applicatio', 29783),
('Caodangcantho.com_Trac_nghiem_Access.doc', 'applicatio', 16263680),
('Cau hoi Trac nghiem hoc phan 4 - I.doc', 'applicatio', 11216896),
('Table Test.doc', 'applicatio', 3029504),
('Access_GT_BT.pdf', 'applicatio', 1933900),
('Cau hoi Trac nghiem hoc phan 4 - II.doc', 'applicatio', 12460544),
('Cau hoi Trac nghiem hoc phan 4 - III.doc', 'applicatio', 10338816),
('Form Test.doc', 'applicatio', 741376),
('khotailieu.com_DD607362.doc', 'applicatio', 135168);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
