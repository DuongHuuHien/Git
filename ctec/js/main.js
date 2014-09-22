$( document ).ready(function(){
   
    $('#search_term').keydown(function(){
      var search_term=$(this).val();
      $('#content').removeHighlight().highlight(search_term);
       });
     
$("#mxh").slideDown("slow");
  

           
           $(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});
  });