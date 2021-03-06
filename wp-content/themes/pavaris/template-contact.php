<?php
	//Template Name: Contact Page
	?>
<?php get_header(); ?>

<section id="content" role="main">

<div class="ajaxContentContainer">
    
    </div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="narrowInnerContent">
    <div class="contactHeader ">
        <div class="contactImage backgroundCenter" style='background-image:url(<?php echo get_field('image')['url']; ?>)'></div>
        <div class="contactText">
            <h2 class="textheader"><?php echo get_field('description'); ?></h2>
            <a class="emailHeader" href="mailto:me@pavaris.com"><h5><?php echo get_field('email'); ?></h5></a>
            <div class="socialLinks">
                <a href="" class="linkedin" target='_blank'>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill-rule:evenodd;clip-rule:evenodd;fill:black;}
                    </style>
                    <g>
                        <path class="st0" d="M55.3,42.1c8-12.2,22.7-12.3,32.2-8.3c7.1,3,10.1,9.2,11.4,16.3c0.8,4,1.1,8.2,1.1,12.3
                            c0,11.7-0.1,23.4,0,35.1c0,2-0.5,2.5-2.5,2.5c-5.3-0.1-10.6-0.2-15.9,0c-2.2,0.1-2.5-0.7-2.5-2.7c0.1-10.7,0.1-21.5,0-32.2
                            c0-2.1-0.2-4.1-0.5-6.2c-0.8-5.8-4.2-8.9-9.6-9.1c-6.7-0.2-10.8,2.7-12.2,8.8C56.1,62.1,56,65.5,56,69C56,78.5,56,88,56,97.4
                            c0,1.8-0.3,2.6-2.4,2.5c-5.4-0.2-10.9-0.1-16.4,0c-1.6,0-2.3-0.3-2.3-2.1c0.1-20.9,0.1-41.7,0-62.6c0-1.5,0.3-2.2,2-2.1
                            c5.5,0.1,10.9,0.1,16.4,0c1.6,0,2,0.5,1.9,2C55.2,37.2,55.3,39.4,55.3,42.1z"/>
                        <path class="st0" d="M1.7,66.6c0-10.4,0.1-20.8,0-31.2c0-1.9,0.5-2.3,2.4-2.3c5.4,0.1,10.9,0.1,16.4,0c1.5,0,2,0.4,2,1.9
                            c0,21,0,41.9,0,62.9c0,1.7-0.5,2.1-2.1,2.1c-5.5-0.1-10.9-0.1-16.4,0c-1.7,0-2.2-0.5-2.2-2.2C1.7,87.4,1.7,77,1.7,66.6z"/>
                        <path class="st0" d="M11.9,23.8C5.3,23.8,0,18.5,0,11.9C0,5.3,5.4,0,12,0c6.7,0,12.1,5.4,12,12.1C23.9,18.7,18.6,23.8,11.9,23.8z"
                            />
                    </g>
                    </svg>

                </a> 
                   
                   
               <a href="" class="instagram" target='_blank'>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="475px" height="475px" viewBox="0 0 475 475" enable-background="new 0 0 475 475" xml:space="preserve">
                        <g>
                            <path fill="#060709" d="M474.782,171.11c-0.142-21.988-0.547-44.046-5.083-65.73c-7.409-35.411-25.406-63.772-56.359-83.101
                                C389.128,7.162,361.991,2.441,333.98,1.129c-32.072-1.503-64.162-1.088-96.249-1.013c-22.206,0-44.418-0.312-66.617,0.088
                                c-21.991,0.396-44.083,0.405-65.725,5.14C58.674,15.563,26.172,42.274,10.1,87.959c-8.486,24.121-9.393,49.273-9.677,74.359
                                c-0.537,47.182-0.511,94.375-0.204,141.561c0.142,21.988,0.382,44.079,5.113,65.722c10.215,46.729,36.939,79.233,82.629,95.302
                                c24.121,8.484,49.278,9.395,74.367,9.678c47.184,0.533,94.377,0.509,141.563,0.202c21.989-0.142,44.083-0.384,65.726-5.116
                                c46.729-10.215,79.222-36.952,95.292-82.637c8.485-24.119,9.387-49.274,9.671-74.361
                                C475.114,265.486,475.089,218.294,474.782,171.11z M430.079,342.046c-2.009,26.745-9.781,50.95-31.732,68.574
                                c-13.684,10.986-29.689,16.018-46.697,18.418c-18.407,2.599-36.989,2.714-55.51,2.881c-39.2,0.352-78.409,0.48-117.605-0.04
                                c-21.953-0.291-44.074,0.186-65.706-4.774c-38.765-8.888-62.42-35.881-66.969-75.536c-2.059-17.948-2.593-35.964-2.766-53.959
                                c-0.385-40.065-0.501-80.142,0.034-120.206c0.287-21.432-0.113-43.025,4.673-64.157C56.65,74.179,83.632,50.342,123.597,45.9
                                c28.321-3.148,56.759-2.919,85.172-3.022c33.472-0.121,66.952-0.01,100.419,0.554c19.188,0.323,38.476,0.422,57.268,5.474
                                c35.009,9.41,54.738,32.708,61.498,67.673c3.868,20.011,3.429,40.371,3.967,60.611c0.502,18.894,0.106,37.812,0.106,56.719
                                C431.996,269.965,432.783,306.047,430.079,342.046z"/>
                            <path fill="#060709" d="M238.954,115.387c-67.624-0.755-123.41,54.142-123.443,120.921
                                c-0.034,68.96,53.736,123.193,122.099,123.193c66.904,0,121.297-54.2,122.029-120.287
                                C360.395,171.187,305.339,116.127,238.954,115.387z M237.68,316.63c-43.31,0.164-79.156-35.521-79.302-78.943
                                c-0.146-43.351,35.385-79.045,78.94-79.303c43.227-0.256,79.155,35.507,79.305,78.938
                                C316.771,280.661,281.132,316.466,237.68,316.63z"/>
                            <path fill="#060709" d="M364.442,82.202c-16.019-0.035-28.891,12.664-28.896,28.505c-0.005,15.74,13.056,28.75,28.868,28.754
                                c15.578,0.004,28.326-12.787,28.393-28.488C392.877,94.691,380.599,82.237,364.442,82.202z"/>
                        </g>
                    </svg>

                </a>
               
                <a href="" class="youtube" target='_blank'>
                   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 100 65.1" style="enable-background:new 0 0 100 65.1;" xml:space="preserve">
<style type="text/css">
	.st0{fill:black;}
</style>
<g>
	<g>
		<path class="st0" d="M0,37.4c0-3.3,0-6.5,0-9.8c0-0.2,0.1-0.4,0.1-0.6c0.2-3.3,0.4-6.6,0.7-9.9c0.3-4.6,2.1-8.7,5.5-12.2
			c2.2-2.2,4.8-3.5,8-3.7c2.5-0.1,5-0.4,7.5-0.5c5.7-0.2,11.4-0.5,17.1-0.6c16-0.3,31.9,0.1,47.9,1.1c2.7,0.2,5.1,1.2,7,2.9
			c2.9,2.6,4.4,5.9,5,9.5c0.5,3.5,0.6,7,0.9,10.5c0.1,1,0.2,1.9,0.2,2.9c0,3.4,0,6.7,0,10.1c0,0.2-0.1,0.4-0.1,0.6
			c-0.2,3.3-0.5,6.7-0.6,10c-0.2,4.4-1.9,8.3-4.9,11.7c-2,2.3-4.4,4-7.6,4.5c-2.6,0.4-5.2,0.5-7.8,0.5c-6.8,0.2-13.5,0.5-20.3,0.6
			c-14.7,0.2-29.4-0.1-44.1-1c-3-0.2-5.4-1.2-7.5-3.1c-3.2-2.7-5.2-6.3-5.8-10.3c-0.6-3.4-0.7-6.9-0.9-10.3
			C0.1,39.3,0.1,38.4,0,37.4z M41.5,44.7c7.8-4.1,15.5-8.2,23.3-12.3c-7.9-4.1-15.6-8.2-23.3-12.3C41.5,28.4,41.5,36.4,41.5,44.7z"
			/>
	</g>
</g>
</svg>

                </a>
            </div>
        </div>
    </div>
    
    <div class="form ">
        <form action="" class="">
            <div class="inputs">
                <h5 class="namePrompt noun"></h5>
                <input type="text" id="name-input">
                <h6 class='formCTA enter1'>(press enter to continue)</h6>
                <h5 class="return formName"></h5>

                <input type="email" id="email-input">
                <h5 class="return formEmail"></h5>
                <h6 class='formCTA enter2'>(press enter to continue)</h6>
                
                <input type='text' id="message-input" maxlength="300">
                <h5 class="return formMessage"></h5>
           </div>
       </form>
        <h6 class='errorMsg'>That's not a valid input, please try again.</h6>
        <div class="submit">Submit</div>

    </div>
    
    <?php echo do_shortcode('[contact-form-7 id="121" title="form"]'); ?>
</div>

<?php endwhile; endif; ?>
</section>

<script>

    var stateObj = {
        current: '',
        prev: '',
        next: 'initial'
    }
    
    var formName='';
    var formEmail='';
    var formMessage='';
    
    $(document).ready(function(){
        

        formStates(stateObj);
    });
    
    function formStates(){
        console.log('enter formStates');
        console.log(stateObj.next);
        $('.formCTA').hide();
        switch(stateObj.next){
            case 'initial':
                console.log('entering initial');
                stateObj.current = 'initial';
                stateObj.next = 'email';
                initialForm();
                break;
            
            case 'email':
                stateObj.prev = 'initial';
                stateObj.current = 'email';
                stateObj.next = 'message';
                $('html,body').animate({
                    scrollTop: $("#name-input").offset().top - 200
                },1000);
                emailForm();
                break;
            case 'message':
                stateObj.prev = 'email';
                stateObj.current = 'message';
                stateObj.next = 'submit';
                $('html,body').animate({
                    scrollTop: $("#name-input").offset().top 
                },1000);
                messageForm();
                break;
            case 'submit':
                submission();
                break;
        }
    }
    
    
    function initialForm(stateObj){
        console.log('initial begin');
        $('#name-input').show();
        $('.form #name-input').focus();
        $('.form #name-input').focusout(function(){
            $('.form #name-input').focus();
        });
            typeOut("Oh hi there! What's your name?", 30);
            $('.formCTA.enter1').fadeIn();
           $(document).keypress(function (e) {
                if (e.which == 13) {
                    event.preventDefault();

                    //check if no symbols and if not empty

                    if(isValid($('#name-input').val()) && $('#name-input').val()){
                        $('.errorMsg').removeClass('active');
                        formName = $('#name-input').val();
                        var firstName = formName.split(' ');
                        
                        $('#name-input').blur();
                        setTimeout(function(){
                            typeOut('Hey ' + firstName[0] + '! What email should I respond to?', 30, $('.return.formName'));
                            $(document).unbind();
                            $('.form #name-input').unbind();
                            formStates();

                        },200);
                    }
                    else{
                        console.log('invalid');
                        $('.errorMsg').addClass('active');

                    }
                }
           });

    }
    
    
    function emailForm(stateObj){
        console.log('email begin');
        $('#email-input').show();
        $('.form #email-input').focus();
       $('.formCTA.enter2').fadeIn();

        $(document).keypress(function (e) {
        
            if (e.which == 13) {
                    event.preventDefault();

                    //check if no symbols and if not empty

                    if(validateEmail($('#email-input').val()) && $('#email-input').val()){
                        $('.errorMsg').removeClass('active');
                        formEmail = $('#email-input').val();

                        $('#email-input').blur();
                        setTimeout(function(){
                            typeOut('Awesome. What do you wanna talk about?', 30, $('.return.formEmail'));
                            $(document).unbind();
                            $('.form #email-input').unbind();
                            formStates();

                        },200);
                    }
                    else{
                        console.log('invalid');
                        $('.errorMsg').addClass('active');

                    }
                }
        });

    }
    function messageForm(){
        //fix form focus
        console.log('textarea begin');
        $('#message-input').show();
        $('.submit').css('display','flex');
        $('#message-input').focus();
        formStates();
   
    }
    
    function submission(){
        console.log('enter submission');
        $('.wpcf7').on('wpcf7:submit', function(event){
            console.log('submitted successfully');
            $('.submit').addClass('active');
            $('.submit').removeClass('processing');
            $('.submit').html('SENT!');
        });
        $('.wpcf7').on('wpcf7:invalid', function(event){
           console.log('form no good');
           $('.errorMsg').addClass('active');
            
        });
        
        
        $('.submit').click(function(){
            formSubmit();
            $(document).unbind('keypress');
            $('#message-input').blur();
            $('.submit').html('Sending');
            $('.submit').addClass('processing');
            
        });
        
       $(document).keypress(function (e) {
            if (e.which == 13) {
                event.preventDefault();
                formSubmit();    
                $('.submit').html('Sending');
                $('#message-input').blur();
                $('.submit').unbind('click');
                $('.submit').addClass('processing');
            }
       });
    }
    
    function formSubmit(){
         console.log('begin submission');
            formEmail = $('#email-input').val();
            formName = $('#name-input').val();
            formMessage = $('#message-input').val();    
            if(!isValid(formName) || !validateEmail(formEmail) || !formMessage){
                $('.errorMsg').addClass('active');
            }
            else{
                $('.errorMsg').removeClass('active');
                $('input[name="your-name"]').val(formName);
                $('input[name="your-email"]').val(formEmail);
                $('textarea').val(formMessage);
                setTimeout(function(){
                    $('.wpcf7-form').submit();
                },300);
            }
    }
    
</script>

<?php get_footer(); ?>