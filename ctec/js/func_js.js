
//Trang chủ
function test() {
            if (document.dangnhap.user.value == "") {
                alert("Bạn phải nhập tên đăng nhập!!");
                return false;
            }
            else if (document.dangnhap.pass.value == "") {
                alert("Bạn phải nhập mật khẩu!!");
                return false;
            }
            else {
                return true;
            }
        }
//Trang quản trị
function showResult(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("post clearfix").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("post clearfix").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}

function delgv_notpaging(page, idgiangvien){
        if(confirm("Bạn có chắc xóa giảng viên này ra khỏi danh sách không?")){
            window.location="delgv_notpaging.php?page="+page+"&&idgiangvien="+idgiangvien;
        } 
        }
        function confirmLogout(){
            if(confirm("Bạn có chắc muốn đăng xuất không?")){
                return true;
            }
            return false;
        }   
        function delgv_paging(selkhoa, page, idgiangvien){
        if(confirm("Bạn có chắc xóa giảng viên này ra khỏi danh sách không?")){
            window.location="delgv_paging.php?selkhoa="+selkhoa+"&&page="+page+"&&idgiangvien="+idgiangvien;
        } 
        }
//Trang Quảng lý sinh viên        
function delsv_notpaging(page, idsinhvien){
        if(confirm("Bạn có chắc xóa sinh viên này ra khỏi danh sách không?")){
            window.location="delsv_notpaging.php?page="+page+"&&idsinhvien="+idsinhvien;
        } 
        }
 function delsv_paging(selkhoa, page, idsinhvien){
        if(confirm("Bạn có chắc xóa sinh viên này ra khỏi danh sách không?")){
            window.location="delsv_paging.php?selkhoa="+selkhoa+"&&page="+page+"&&idsinhvien="+idsinhvien;
        } 
        }  
    

function showResultSV(str) {
  var xmlhttp;
if (str=="")
  {
  document.getElementById("post clearfix").innerHTML=xmlhttp.responseText;
  return;
  }

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("post clearfix").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","livesearchSV.php?q="+str,true);
  xmlhttp.send();
}




    function del(){
    if(confirm("Bạn có chắc muốn xóa bảng này không?")){
        return true;
      }
      return false;
    } 

var checkflag = "false";
function check(field) {
  if (checkflag == "false") {
    for (i = 0; i < field.length; i++) {
      field[i].checked = true;
    }
    checkflag = "true";
    return "Uncheck All";
  } else {
    for (i = 0; i < field.length; i++) {
      field[i].checked = false;
    }
    checkflag = "false";
    return "Check All";
  }
}

//Trang Giảng Viên       
function showResultHPGV(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("post clearfix").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("post clearfix").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","livesearchHPGV.php?q="+str,true);
  xmlhttp.send();
}
//Trang Sinh Viên       
function showResultHPSV(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("post clearfix").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("post clearfix").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","livesearchHPSV.php?q="+str,true);
  xmlhttp.send();
}


//search trang xemdulieu
function tableTLGD(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchTLGD.php?q="+str,true);
  xmlhttp.send();
}

function tableGV(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchGV.php?q="+str,true);
  xmlhttp.send();
}

function tableSV(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchSV.php?q="+str,true);
  xmlhttp.send();
}


function tableKHOA(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchKHOA.php?q="+str,true);
  xmlhttp.send();
}

function tableCHUONG(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML="";
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchCHUONG.php?q="+str,true);
  xmlhttp.send();
}

function tableMENUKHOA(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML="";
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchMENUKHOA.php?q="+str,true);
  xmlhttp.send();
}

function tableMENUPHONG(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchMENUPHONG.php?q="+str,true);
  xmlhttp.send();
}

function tableGVDHP(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchGVDHP.php?q="+str,true);
  xmlhttp.send();
}

function tableHPTLGD(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchHPTLGD.php?q="+str,true);
  xmlhttp.send();
}

function tableTAIKHOAN(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchTAIKHOAN.php?q="+str,true);
  xmlhttp.send();
}

function tableTHANHVIEN(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchTV.php?q="+str,true);
  xmlhttp.send();
}



function tableHP(str) {
var xmlhttp;
if (str=="")
  {
  document.getElementById("result").innerHTML=xmlhttp.responseText;
  return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","searchHP.php?q="+str,true);
  xmlhttp.send();
}


