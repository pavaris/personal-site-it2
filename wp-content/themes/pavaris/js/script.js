var $ = jQuery.noConflict();


$(document).ready(function(){
    $('#homePhotographyLink').click(function(){
        $('.photographyCont').addClass('active');
        
        //replace with show loading icon:
        $( "#homeWebLink" ).unbind( "click");
        
        setTimeout(function(){
            $('body').removeClass('home');
            $('body').addClass('page');    
            window.history.pushState('', 'Photography', '/photography/');
            get_photog_page();
        },1000);
        
    });    
    
    $('#homeWebLink').click(function(){
        $('.webCont').addClass('active');
        
        //replace with show loading icon:
        $( "#homePhotographyLink" ).unbind( "click");
        
        
        setTimeout(function(){
            $('body').removeClass('home');
            $('body').addClass('page');    
            window.history.pushState('', 'Web', '/web/');
            get_web_page();
        },1000);
    });    

    
    
});


function get_web_page(){
    console.log('enter ajax');
  $.ajax({
        url: ajaxurl, 
        data: {
            action: 'do_ajax',
            fn: 'get_web',
        },
        success: function(data){
            $('.ajaxContentContainer').html(data);
            setTimeout(function(){
                $('.backgroundFade').css('z-index',0);    
            },400);
            setTimeout(function(){
                $('.webContentContainer').addClass('active');
            },700);            
            setTimeout(function(){
                $('.centerDesc').html('');    
                $('.centerDesc').addClass('hide');  
            },1000);

            
        },

    });
}

function get_photog_page(){
    console.log('enter ajax');
  $.ajax({
        url: ajaxurl, 
        data: {
            action: 'do_ajax',
            fn: 'get_photog',
        },
        success: function(data){
            $('.ajaxContentContainer').html(data);
            setTimeout(function(){
                $('.photographyCont').hide();
                $('.webCont').hide();
                $('.photogCategory').addClass('active');
            },400);
            setTimeout(function(){
                $('.webContentContainer').addClass('active');
            },700);            
            setTimeout(function(){
                $('.centerDesc').html('');    
                $('.centerDesc').addClass('hide');  
            },1000);

            
        },

    });
}

