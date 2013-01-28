$(document).ready(function(){ 


  /* ANIMATE LINKS */

  $('.animate a').hover(function(){
    $(this).stop().animate({'padding-left':'5px'});
  },function(){
    $(this).stop().animate({'padding-left':'0px'});
  });

 
  /* TWITTER */

  $(".twitter").tweet({
      username: "EnvatoWebDesign",
      join_text: "auto",
      count: 4,
      auto_join_text_default: "",
      auto_join_text_ed: "",
      auto_join_text_ing: "",
      auto_join_text_reply: "",
      auto_join_text_url: "",
      loading_text: "loading tweets..."
  });


   /* IMAGE HOVER EFFECT */

  $(".roll").css("opacity","0");
  $(".roll").hover(function () {
    $(this).stop().animate({
      opacity: .7
    }, "slow");
    },function () {
        $(this).stop().animate({
        opacity: 0
    }, "slow");
  });


    /* IMAGE GAllERY */
  
   $('ul#filter a').click(function() {  
        $(this).css('outline','none');  
        $('ul#filter .current').removeClass('current');  
        $(this).parent().addClass('current');  
  
        var categories = $(this).text().toLowerCase().replace(' ','-');  
        var count = 0;
        if(categories == 'all') {  
          $('ul#portfolio li').each(function() {  
              count++;
              if(count == 4){
                $(this).addClass('last'); 
              count=0;
              }else{
                $(this).removeClass('last'); 
              }
           $(this).fadeIn('slow').removeClass('hidden');  
          });

          } else {  
            $('ul#portfolio li').each(function() {  
                if(!$(this).hasClass(categories)) {  
                    $(this).fadeOut('normal').addClass('hidden');  
                    $(this).removeClass('last'); 
                } else {
                    count++;
                    if(count == 4){
                      $(this).addClass('last'); 
                      count=0;
                    }else{
                      $(this).removeClass('last'); 
                    }
                  $(this).fadeIn('slow').removeClass('hidden');  
                }  
            });  
              
          }  
  
        return false;  
    });



  /* PRETTY PHOTO */

  $("a[rel^='prettyPhoto']").prettyPhoto();

  /* LOCAL SCROLL */

  $.localScroll();


  /* MOUSE OVER IMAGE CHANGE */

  $('.buttons img').hover(
    function(){
        var t = $(this);
        t.attr('src',t.attr('src').replace(/([^.]*)\.(.*)/, "$1-over.$2"));
    },
    function(){ 
        var t= $(this);
        t.attr('src',t.attr('src').replace('-over',''));
    });
  
  
   /* FORM VALIDATE/SUBMIT */

    $('#commentForm').submit(function(){
      return false;
    });

   $('#searchForm').submit(function(){
        return false;
    });
   

  $('.successMessage').hide();
  $("#contactForm").validate({
    submitHandler: function(form) { 
      jQuery(form).ajaxSubmit({
        url: 'assets/php/form.php',
        target: ".successMessage"
      });

      $('#contactForm').hide(0,function() {
          $('.successMessage').css("text-indent",0).fadeIn('slow');
      });
    }
  });
    
});



$(window).load(function () {

  /* SLIDER */

  $('#slider2')
  .anythingSlider({
    resizeContents      : true,
    autoPlay            : false,
    pauseOnHover        : true,
    delay               : 4000, 
    hashTags            : false, 
    toggleArrows        : true,
    autoPlayLocked      : true,
    resumeDelay         : 4000,
    buildArrows         : true,      // If true, builds the forwards and backwards buttons
    buildNavigation     : true,      // If true, builds a list of anchor links to link to each panel
    buildStartStop      : false      // If true, builds the start/stop button
  })
  .anythingSliderFx({
  // base FX definitions can be mixed and matched in here too.

  // for more precise control, use the "inFx" and "outFx" definitions
  // inFx = the animation that occurs when you slide "in" to a panel
  inFx : {
  '.textSlide h1'  : { opacity: 1, left  : 0, duration: 200 },
  '.textSlide p'  : { opacity: 1, left  : 0, duration: 200}
  },
  // out = the animation that occurs when you slide "out" of a panel
  // (it also occurs before the "in" animation)
  outFx : {
  '.textSlide h1'      : { opacity: 0, left  : '-700px', duration: 350 },
  '.textSlide p'      : { opacity: 0, left  : '800px', duration: 350 }

  }
  });
});

