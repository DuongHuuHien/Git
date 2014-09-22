$( document ).ready(function(){
   
    $('#search_term').keydown(function(){
      var search_term=$(this).val();
      $('#content').removeHighlight().highlight(search_term);
       });

     $('.readmore').readmore({
    moreLink: '<a href="#">Đọc tiếp....</a>',
    maxHeight: 200,
    afterToggle: function(trigger, element, expanded) {
      if(! expanded) { // The "Close" link was clicked
        $('html, body').animate( { scrollTop: element.offset().top }, {duration: 500 } );
      }
    }
  });

 
          
           $(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});
     $('#pass').keydown(function(){
      $('#submit').slideDown("slow");
       });
});
