<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}

add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts(){
    wp_enqueue_script( 'jquery' );
    
    wp_register_script( 'script', get_template_directory_uri()."/js/script.js");
    wp_enqueue_script("script");
    
    wp_register_script( 'jquery-3.1.1', get_template_directory_uri()."/js/jquery-3.1.1.js");
    wp_enqueue_script("jquery-3.1.1");
    
    wp_register_script( 'slick', get_template_directory_uri()."/js/slick/slick.js");
	wp_enqueue_script("slick");
    
    wp_enqueue_style( 'slick-style', get_template_directory_uri()."/js/slick/slick.css");
}


add_action('wp_head','pluginname_ajaxurl');
function pluginname_ajaxurl() { ?>
	<script type="text/javascript">
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
		var templateurl = '<?php echo get_template_directory_uri(); ?>';
		var homeurl = '<?php echo get_home_url(); ?>';
		var siteurl = '<?php echo site_url(); ?>';
	</script>
<?php
}


add_action('wp_ajax_nopriv_do_ajax', 'ajax_function');
add_action('wp_ajax_do_ajax', 'ajax_function');

function ajax_function(){
     switch($_REQUEST['fn']){
	case 'get_web':
             $output = get_web_page();
             echo $output;
             break;
     case 'get_photog':
             $output = get_photog_page();
             echo $output;
             break;
         
     case 'get_photog_post':
             $output = get_photog_post($_REQUEST['postID']);
             echo $output;
             break;
             
	default:
		$output = 'nothing here';
		echo $output;
	break;
	}
    die();

}





add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}




function get_web_page(){ ?>
  <?php $page = get_page_by_title('Web'); ?>
    <?php $pageID = $page->ID; ?>
    
   <div class="webContentContainer">
    <div class="innerContent innerContentHeader">
        <h2>I create websites.</h2>
    </div>
    <div class="siteListContainer">
        <?php if(have_rows('sites',$pageID)){ ?>
           <?php $siteNum = 0; ?>
            <?php while(have_rows('sites',$pageID)) : the_row(); ?>
               <div class="siteContainer">
                   <div class="siteInfoContainer">
                       <div class="siteInfoClose" site-num='<?php echo $siteNum; ?>'>×</div>
                       <h5>TASKS</h5>
                       <div class="tasksContainer">
                           <?php the_sub_field('tasks',$pageID); ?>
                       </div>
                       <a class="visitSite" href="<?php the_sub_field('url',$pageID) ?>" target="_blank">
                           <span>VISIT SITE</span>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 25 25" style="enable-background:new 0 0 25 25;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#FFFFFF;}
                                </style>
                                <g id="DqjUCQ.tif_1_">
                                    <g>
                                        <g>
                                            <path class="st0" d="M7.3,3c0,1.2,0,2.5,0,3.7c-1.2,0-2.5,0-3.6,0c0,4.9,0,9.8,0,14.6c4.8,0,9.8,0,14.6,0c0-1.8,0-3.6,0-5.5
                                                c1.2,0,2.5,0,3.7,0c0,3.1,0,6.1,0,9.2c-7.3,0-14.7,0-22,0c0-7.3,0-14.7,0-22C2.5,3,4.9,3,7.3,3z"/>
                                            <path class="st0" id='svgArrow' d="M22,14c-1.2-1.2-2.5-2.5-3.6-3.6c-1.8,1.8-3.7,3.7-5.5,5.5c-1.2-1.2-2.5-2.5-3.7-3.7
                                                c1.8-1.8,3.6-3.6,5.5-5.5C13.5,5.5,12.2,4.2,11,3c3.7,0,7.3,0,11,0C22,6.7,22,10.3,22,14z"/>
                                        </g>
                                    </g>
                                </g>
                                </svg>
                       </a>
                   </div>
                   <div class="site backgroundCenter" site-num='<?php echo $siteNum; ?>' style="background-image:url(<?php echo get_sub_field('image',$pageID)['sizes']['large']; ?>)">
                        <div class="siteFade"></div> 
                        <h4><?php the_sub_field('site_name',$pageID); ?></h4>
                   </div>
               </div>
               <?php $siteNum++; ?>
            <?php endwhile; ?>
        <?php } ?>
    </div>
</div>
<script>
    bgImageLoader('.site');
    
    $('.site').click(function(){
        if($(this).hasClass('active')){
            $('.site').removeClass('active');
        }
        else{
            $('.site').removeClass('active');
            $(this).addClass('active');
            console.log('add active');
        }
    });
    
    $('.siteInfoClose').click(function(){
        var siteNum = $(this).attr('site-num');
//        alert(siteNum);
        $('.site').attr('site-num', siteNum).removeClass('active');
    });
</script>
<? }


function get_photog_page(){ ?>

    
    <div class="webContentContainer">
        <div class="innerContent innerContentHeader">
            <h2>I create memories.</h2>
        </div>
    </div>
    

   <?php $page = get_page_by_title('Photography'); ?>
    <?php $pageID = $page->ID; ?>
   
    <div class="photogHomeSlideContainer">
       <div class="photogSlideInner">
            <?php have_rows('images', $pageID); ?>
            <?php while(have_rows('images', $pageID)) : the_row(); ?>
                <div class="photogSlide backgroundCenter" style='background-image: url(<?php echo get_sub_field('image', $pageID)['url']; ?>)'></div>
            <?php endwhile; ?>
        </div>
    </div>




    <script>
        $('.photogSlideInner').slick({
            autoplay:true,
            autoplaySpeed: 2000,
            speed: 1500,
            fade: true,
            dots: false,
            arrows: false
        });
        
        $('.photogCategory a').click(function(){ 
            if(!$(this).hasClass('active')){
                $('body').removeClass('page');
                $('body').addClass('single');
                $('.photogCategory a').removeClass('active');
                $(this).addClass('active');
                get_photog_post($(this).attr('post_id'));
            }
        });
        
    </script>

   
<?php }


function get_photog_post($postID){
   $args = array(
           'post_type' => 'post',
       );
       $photog = new WP_Query($args);
       if ( $photog->have_posts() ) { ?>
            <div class="photogCategory">  
              <?php while ( $photog->have_posts() ) {
                  $photog->the_post(); ?>
                    <a post_id='<?php echo get_the_ID(); ?>' class="<?php if(get_the_ID() == $postID){ echo 'active'; } ?>"><?php the_title(); ?></a>
               <?php } ?>
            </div>                 

        <div class="photogImageSlides">        
            <?php while(have_rows('images', $postID)) : the_row(); ?>
                <img src="<?php echo get_sub_field('image', $postID)['sizes']['large']; ?>" alt="">

            <?php endwhile; ?>
        </div>
        <div class="slideArrows">
            <div class="slidePrev">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 25 25" style="enable-background:new 0 0 25 25;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#353E43;stroke-width:4;stroke-linejoin:round;stroke-miterlimit:10;}
</style>
<polyline class="st0" points="18.4,1.9 6.6,12.4 18.4,23.1 "/>
</svg>

            </div>
            <div class="slideNext">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 25 25" style="enable-background:new 0 0 25 25;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#353E43;stroke-width:4;stroke-linejoin:round;stroke-miterlimit:10;}
</style>
<polyline class="st0" points="18.4,1.9 6.6,12.4 18.4,23.1 "/>
</svg>

            </div>
        </div>
    <?php } ?>
    
    
    <script>
        $('.photogImageSlides').slick({
            variableWidth: true,
            cssEase: 'ease',
            infinite: false,
            useTransform: true,
            speed: 800,
            centerMode: true,
            prevArrow: $('.slidePrev'),
            nextArrow: $('.slideNext'),
        });
                
        
        var noOfImages = $(".photogImageSlides img").length;
        console.log(noOfImages);
        var noLoaded = 0;
         $('.photogImageSlides img').on('load', function() {
            console.log('enter load');
            noLoaded++;
            if(noOfImages === noLoaded) {
                console.log('all loaded');
                $('.photogImageSlides').slick('slickGoTo',0);

       
                
                setTimeout(function(){
                    $('.photogImageSlides').addClass('active');
                },300);
            }
        });
        
        
        
        $('.photogCategory a').click(function(){ 
            if(!$(this).hasClass('active')){
                get_photog_post($(this).attr('post_id'));
                $('.photogCategory a').removeClass('active');
                $(this).addClass('active');
            }
        });
        
    </script>

<?php    
}

function get_about(){ ?>
    <?php $page = get_page_by_title('About'); ?>
    <?php $pageID = $page->ID; ?>
       
    <div class="aboutPageBg" style="background-image:url(<?php echo get_the_post_thumbnail_url($pageID); ?>);">
        <div class="aboutPage">
           <div class="headerImage" style="background-image: url(<?php echo get_field('image', $pageID)['sizes']['medium_large']; ?>)"></div>
               
               
               
               
           <?php if(have_rows('nouns', $pageID)){ ?>
                <div class="iAmContainer">
                      I am 
                      <?php $nounNum = 0; ?>
                       <?php while(have_rows('nouns', $pageID)) : the_row(); ?>
<!--                        <span class="noun" nounNum='<?php echo $nounNum; $nounNum++; ?>'><?php echo the_sub_field('noun', $pageID); ?>.</span>-->
                    <?php endwhile; ?>
                    <span class="noun"></span>
                    <span class='blinker'>|</span>
                </div>
            <?php } ?>
        </div>
    </div>
      <script>
          
          var nouns = ['a photographer.', 'a rock climber.', 'a videographer.', 'a traveler.', 'a swimmer.', 'a web developer.', 'a binge watcher.', 'a food enthusiast.', 'Pavaris.'];
          
          $('document').ready(function(){
              typeOut(nouns[0]);    
              console.log(nouns[0]);
              var i = 1;
              setInterval(function(){
                  highlightText();
                  if(i == nouns.length){
                      i = 0;
                  }
                  setTimeout(function(){
                      removeText();
                      setTimeout(function(){
                          typeOut(nouns[i]);    
                          i++;
                      },500);
                      
                  },1000);
                  
                  
              }, 4000);
              
          });
          
          
          
          
          
//        $('.iAmContainer span[nounNum="0"]').addClass('active');
//        setInterval(function(){
//            if(i== $('.iAmContainer span').length){
//                i=0;
//            }
//            $('.iAmContainer span.active').removeClass('active');
//            $('.iAmContainer span[nounNum="'+i+'"]').addClass('active');
//            i++;
//        },3000);
          
          
//        $('.iAmContainer span').html(nouns[0]);
//        setInterval(function(){
//            if(i == nouns.length + 1){
//                i = 0;
////                $('.iAmContainer span').html('Pavaris');    
//            }
//                $('.iAmContainer span').html(nouns[i]);
//            
//            i++;
//        },1500);
          
    </script>
<?php
}