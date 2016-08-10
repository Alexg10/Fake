$( document ).ready(function() {
    $('.video_hover, .icon-play2').on('click', function(){
    console.log("oka");
    	
        $('.cover_container, .icon-play2, .video_container_name').fadeOut();
    	$(".video_iframe")[0].src += "?&autoplay=1";
    	$(this).unbind("click");
    });


    $('.slider_member, .slider_gallery .column_picture').flickity({
      // options
      cellAlign: 'left',
      contain: true
    });

    $('.albums').flickity({
      // options
      cellAlign: 'left',
      cellSelector: '.carousel-cell',
      contain: true
    });

    $('.member').on('click', function(){
      $('.popin').toggleClass('visible');
      $('.slider_member').toggleClass('visible');
    });


    $('.single_gallery').on('click', function(){
      gallery= $(this).data('gallery');
      $('.popin').toggleClass('visible');
      $('.'+gallery).toggleClass('slider_gallery_visible');
        console.log(gallery);
        // .toggleClass('slider_gallery_visible')  $('.popin').toggleClass('visible');
        // $('.slider_member').toggleClass('visible');

    });

    $('.popin').on('click', function(){
      $('.popin').removeClass('visible');
      $('.slider_gallery').removeClass('slider_gallery_visible');
      $('.slider_member').removeClass('visible');

    });

    var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x
    $('body').bind(mousewheelevt, function(e){

        var evt = window.event || e //equalize event object     
        evt = evt.originalEvent ? evt.originalEvent : evt; //convert to originalEvent if possible               
        var delta = evt.detail ? evt.detail*(-40) : evt.wheelDelta //check for detail first, because it is used by Opera and FF

        if(delta > 0) {
            //scroll up
            console.log("up");
            $('.site-header').addClass('visible');
        }
        else{
            //scroll down
            console.log("down");
            $('.site-header').removeClass('visible');
        }   
    });



});