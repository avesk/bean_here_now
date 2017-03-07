$(document).ready(function() {
  
  var menuIsclicked = false;
    
  $("#mobile-menu").hide();
  
  $("#menu-toggle").click(function(){
    
    if(!menuIsclicked){
      
      $("#mobile-menu").show();
      menuIsclicked = true;
    }
    
    else{
      $("#mobile-menu").hide();
      menuIsclicked = false;              
    }
    
});
  
});
