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
        window.location.href="?logout=true";
    })
    
    $('#navToNewCase').click(function() {
        window.location.href="?page=create&type=case";
    })
    
    $('#navToNewEnquiry').click(function() {
        window.location.href="?page=create&type=enquiry";
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
        console.log(this.id+'_pager');
        var functionname=this.id+'_pager';
        console.log('Running '+functionname);
        window[functionname]();
    })
    
    $('.filterOrder').click(function() {
        var position=this.id.split('-', 6).join('-').length+1;
        var orderMethod=this.id.substring(position); //13
        var position=$(this).parent().parent().parent().attr('id').split('-', 3).join('-').length+1;
        var orderField=$(this).parent().parent().parent().attr('id').substr(position);
        console.log(orderField);
        var pagerName=$(this).parent().parent().parent().parent().attr('id').substr(11);
        console.log(pagerName);
        
        addPagerOrder(pagerName, orderField, orderMethod);
        $('.last-menu').each(function() {
            $(this).hide();
        })
        
        var funcName='load'+pagerName.charAt(0).toUpperCase() + pagerName.slice(1);
        console.log('The function is called '+funcName);
        window[funcName]();        
        
    }) 
    
})