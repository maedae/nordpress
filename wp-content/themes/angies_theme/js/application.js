(function ($) {

  $(document).ready(function(){

    $('.modalButton').on('click', function(e){
      var selectedModal = $(this).attr('value');
      $('.active').removeClass('active');
      $('.postModalCarousel' + selectedModal +'.carousel-inner li:first').addClass('active');
      $('.' + selectedModal +'.carousel-indicatorsli:first').addClass('active');

      if(Number($('.postModalCarousel' + selectedModal +'.carousel-indicators').attr('value')) <= 1){
        $('.postModalCarousel' + selectedModal +'.icon.icon-chevron-thin-left').hide();
        $('.postModalCarousel' + selectedModal +'.icon.icon-chevron-thin-right').hide();
        $('.postModalCarousel' + selectedModal +'.carousel-indicators').hide();
      } else {
        $('.postModalCarousel' + selectedModal +'.icon.icon-chevron-thin-left').show();
        $('.postModalCarousel' + selectedModal +'.icon.icon-chevron-thin-right').show();
        $('.postModalCarousel' + selectedModal +'.carousel-indicators').show();
      }
    });

  $(function() {
     var pgurl = window.location.href.substr(window.location.href
  .lastIndexOf("/")+1);
     $("#nav ul li").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     })
  });
  // back to top button - docs
  $(function () {
    if ($('.docs-top').length) {
      _backToTopButton()
      $(window).on('scroll', _backToTopButton)
      function _backToTopButton () {
        if ($(window).scrollTop() > $(window).height()) {
          $('.docs-top').fadeIn()
        } else {
          $('.docs-top').fadeOut()
        }
      }
    }

    // doc nav js
    var $toc    = $('#markdown-toc')
    var $window = $(window)

    if ($toc[0]) {

      maybeActivateDocNavigation()
      $window.on('resize', maybeActivateDocNavigation)

      function maybeActivateDocNavigation () {
        if ($window.width() > 768) {
          activateDocNavigation()
        } else {
          deactivateDocNavigation()
        }
      }

      function deactivateDocNavigation() {
        $window.off('resize.theme.nav')
        $window.off('scroll.theme.nav')
        $toc.css({
          position: '',
          left: '',
          top: ''
        })
      }

      function activateDocNavigation() {

        var cache = {}

        function updateCache() {
          cache.containerTop   = $('.docs-content').offset().top
          cache.containerRight = $('.docs-content').offset().left + $('.docs-content').width() + 40
          measure()
        }

        function measure() {
          var scrollTop = $window.scrollTop()
          var distance =  Math.max(scrollTop - cache.containerTop, 0)

          if (!distance) {
            $($toc.find('li')[1]).addClass('active')
            return $toc.css({
              position: '',
              left: '',
              top: ''
            })
          }

          $toc.css({
            position: 'fixed',
            left: cache.containerRight,
            top: 0
          })
        }

        updateCache()

        $(window)
          .on('resize.theme.nav', updateCache)
          .on('scroll.theme.nav', measure)

        $('body').scrollspy({
          target: '#markdown-toc',
          selector: '#markdown-toc li > a'
        })

        setTimeout(function () {
          $('body').scrollspy('refresh')
        }, 1000)
      }
    }
  })

  });
  })(jQuery);

