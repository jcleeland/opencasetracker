//GATHER SPCIAL VARIABLES
$(document).ready(function(){
    //$('.header').height($(window).height());
    $('#goto').keypress(function (e) {
        if(e.which==13) {
            window.location.href="index.php?page=case&case="+$('#goto').val();
        }
    })
    
    $('#navToCases').click(function() {
        window.location.href="?page=cases";
    })
    
    $('#navToOptions').click(function() {
        window.location.href="?page=options";
    })
    
    $('#navToAccount').click(function() {
        window.location.href="?page=account";
    })
    
    $('#navToLogout').click(function() {
        window.location.href="?logout=true"
    })    
    
    /*$('.datepicker').each(function() {
        //console.log($(this));
        //console.log($(this).style.width);
        var fontSize=parseInt($(this).css("font-size"));
        $(this).css("width", (($(this).val().length+1)*(fontSize/2))+'px');
        var height=parseInt($(this).css("height"));
        $(this).css("height", (height-2)+'px');
        console.log("After:" + $(this).css("height"));
        $(this).datepicker({dateFormat: "dd/mm/yy"});
        //this.style.width=((this.value.length+1)*8)+'px';
        
    }) */
    

                            
    $('.pagerbutton').click(function() {
        console.log(this.id);
        var functionname=this.id+'_pager';
        console.log(functionname);
        window[functionname]();
    }) 

})