var $ = jQuery.noConflict();


$(document).ready(function(){
    $('#homePhotographyLink').click(function(){
        $('.photographyCont').addClass('active');
        
        //replace with show loading icon:
        $( "#homeWebLink" ).unbind( "click");
        
        setTimeout(function(){
            $('body').removeClass('home');
            $('body').addClass('page'); 
            $('body').addClass('page-template-template-photography'); 
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

    
    $('.siteMode').hover(function(){
        
    });
    
//    
//    $('#aboutPage').click(function(){
//        $(".aboutPageBg").toggleClass('active');
//        if($('.aboutPageBg').hasClass('active')){
//            setTimeout(function(){
//                startTypeOut();
//            },200)
//            
//        }else{
//            clearInterval(typeInterval);
//            removeText();
//        }
//    });
    
    $('.aboutPage .close').click(function(){
        clearInterval(typeInterval);
        removeText();
        $(".aboutPageBg").removeClass('active');
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
                    setTimeout(function(){
                        $('html, body').animate({scrollTop: $('.siteListContainer').offset().top - 300},600);
                    },500);
                    
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



var typeInterval;
function startTypeOut(){
     var nouns = ['a photographer.', 'a rock climber.', 'a videographer.', 'a traveler.', 'a swimmer.', 'a web developer.', 'a binge watcher.', 'a food enthusiast.', 'Pavaris.'];
          
      typeOut(nouns[0]);    
      console.log(nouns[0]);
      var i = 1;
      typeInterval = setInterval(function(){
          highlightText();
          if(i == nouns.length){
              i = 0;
          }
          setTimeout(function(){
              removeText();
              setTimeout(function(){
                  typeOut(nouns[i]);    
                  i++;
              },300);

          },900);


      }, 3900);

}



function typeOut(noun){
    var fullString = '';
    for(var i = 0; i < noun.length; i++){
        fullString = fullString + noun[i];
        displayChar(fullString, i);
    }
    
}

function displayChar(fullString, i){
    setTimeout(function(){
        $(".noun").html(fullString);
    },i * 75);
}


function highlightText(){
    $('.noun').addClass('highlight');
    $('.blinker').css('visibility','hidden');
}

function removeText(){
    $('.noun').html('');
    $('.noun').removeClass('highlight');
    $('.blinker').css('visibility','visible');
}

