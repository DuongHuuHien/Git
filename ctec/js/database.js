$(document).ready(function() {
					  
					  $("tr:odd").css("background","#f9f9f9");
					   $("tr:even").css("background","#fff");
					   $("tr").mouseenter(function(){
					   	 $(this).css("background","#e1e1e1");

					   });
					    $("tr").mouseleave(function(){
					   	 $("tr:odd").css("background","#f9f9f9");
					   	  $("tr:even").css("background","#fff");

					   });

					   

       
    $('#selectall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    
    
});
 
			
					});
					
