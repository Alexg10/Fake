$( document ).ready(function() {
    $('.video_hover, .icon-play2').on('click', function(){
    console.log("oka");
    	
        $('.cover_container, .icon-play2, .video_container_name').fadeOut();
    	$(".video_iframe")[0].src += "?&autoplay=1";
    	$(this).unbind("click");
    });


    $('.slider_member').flickity({
      // options
      cellAlign: 'left',
      contain: true
    });

    $('.albums').flickity({
      // options
      cellAlign: 'left',
      contain: true
    });

    $('.member,.popin').on('click', function(){
        $('.popin').toggleClass('visible');
        $('.slider_member').toggleClass('visible');

    })


});