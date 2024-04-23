$(document).ready(function () {
    $(document).ready(function() {
        $('.popup_video').magnificPopup({
            type:'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                          '<div class="mfp-close"></div>'+
                          '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                        '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button
              
                patterns: {
                  youtube: {
                    index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
              
                    id: 'v=', // String that splits URL in a two parts, second part should be %id%
                    // Or null - full URL will be returned
                    // Or a function that should return %id%, for example:
                    // id: function(url) { return 'parsed id'; }
              
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
                  },
                  vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: '//player.vimeo.com/video/%id%?autoplay=1'
                  },
                  gmaps: {
                    index: '//maps.google.',
                    src: '%id%&output=embed'
                  }
              
                  // you may add here more sources
              
                },
              
                srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
              }
        });
      });
    // carousel
    $(".owl-carousel").owlCarousel({
        loop:true,
        items:1,
        dots:false,
        nav:true,
        navText: ['<img src="'+stylesheet_directory_uri+'/assets/images/customer_review/prev.png">','<img src="'+stylesheet_directory_uri+'/assets/images/customer_review/next.png">'],
        slideBy:1,
        autoplay:true,
        autoplayTimeout:5000
       
    });
    
	const slider = $(".product-slider-wrapper");  
    function onSliderAfterChange(event, slick, currentSlide) {
      $(event.target).data('current-slide', currentSlide);
    }
    
    function onSliderWheel(e) {
      var deltaY = e.originalEvent.deltaY,
        $currentSlider = $(e.currentTarget),
        currentSlickIndex = $currentSlider.data('current-slide') || 0;
      
      if (
        // check when you scroll up
        (deltaY < 0 && currentSlickIndex == 0) ||
        // check when you scroll down
        (deltaY > 0 && currentSlickIndex == $currentSlider.data('slider-length') - 1)
      ) {
        return;
      }

      e.preventDefault();

      if (e.originalEvent.deltaY < 0) {
        $currentSlider.slick('slickPrev');
      } else {
        $currentSlider.slick('slickNext');
      }
    }
    
    slider.each(function(index, element) {
      var $element = $(element);
      // set the length of children in each loop
      // but the better way for performance is to set this data attribute on the div.slider in the markup
      $element.data('slider-length', $element.children().length);
    })
    .slick({
        dots: true,
        infinite: false,
        speed: 500,
        fade: true,
        arrows: false,
        autoplay: true,
        cssEase: 'linear'
    })
    .on('afterChange', onSliderAfterChange)
    .on('wheel', onSliderWheel);
	
	//tablist
	jQuery("ul.taglist").on("click", ".init", function() {
	  jQuery(this).closest("ul.taglist").children('li:not(.init)').toggle();
	});
	
	
	//Work Slider
	$('.work-slider-wrapper').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  dots: true,
	  autoplay: true,
	  arrows: false,
	});
});
