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
                $('.webContentContainer').addClass('active');
                setTimeout(function(){
                    $('.webContentContainer').css('overflow','visible');
                },500);
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


function get_photog_post(postID){
    console.log('enter ajax');
  $.ajax({
        url: ajaxurl, 
        data: {
            action: 'do_ajax',
            fn: 'get_photog_post',
            postID: postID
        },
        success: function(data){
            $('.ajaxContentContainer').addClass('fade');
            $('.single-post').removeClass('single-post');
            $('body').addClass('single');
            $('body').addClass('page-template');
            $('.backgroundfade').css('display','none');
            
            setTimeout(function(){
                $('.ajaxContentContainer').html(data);
                $('.ajaxContentContainer').removeClass('fade');
            },500);
//            alert(data);
        },

    });
}


function bgImageLoader(className){
    var imgLoaded = 0;
    var images = $(className).length;
    $(className).each(function(){
       var src = $(this).css('background-image');
       var url = src.match(/\((.*?)\)/)[1].replace(/('|")/g,'');

       var img = new Image();
       img.onload = function() {
           console.log('image loaded');
           imgLoaded++;
           imgCheck(imgLoaded, images);
       }
       img.src = url;
       if (img.complete) img.onload();

    });

}

function imgCheck(imgLoaded,images){
   if(imgLoaded == images){
      console.log('hiding load');
       $('.loadingScreen').hide();
       $('.centerDesc svg').fadeOut();
       setTimeout(function(){
        $('.centerDescInfo').addClass('active');    
       },400);
       
       
   }
}
