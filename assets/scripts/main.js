/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        var $window = $(window);

        // Header scroll feature
        $(document).scroll(function() {
          if ( $(document).scrollTop() === 0 ) {
            $('.nav-brand').removeClass('nav-scrolled');
          }
          else {
            $('.nav-brand').addClass('nav-scrolled');
          }
        });


        $('.nav-brand a').click(function(ev) {

          console.log($window.width());

          if ( $window.width() > 800 ) {
            return;
          } else {
            ev.preventDefault();
          }

          // ACTIVATE SCROLL // IF SCROLLED TO TOP
          if ( $(document).scrollTop() === 0 && !$('.mobile-nav').hasClass('mobile-enabled') ) {
            console.log('activate/top');
            $('.nav-brand').addClass('nav-scrolled');
            $('.mobile-nav').addClass('mobile-enabled');
          }

          // ACTIVATE SCROLL // IF SCROLLED DOWN
          else if ( $(document).scrollTop() > 0 && !$('.mobile-nav').hasClass('mobile-enabled') ) {
            console.log('activate/scrolled');
            $('.mobile-nav').addClass('mobile-enabled');
          }

          // DEACTIVATE SCROLL // IF SCROLLED TO TOP
          else if ( $(document).scrollTop() === 0 && $('.mobile-nav').hasClass('mobile-enabled') ) {
            console.log('deactivate/top');
            $('.nav-brand').removeClass('nav-scrolled');
            $('.mobile-nav').removeClass('mobile-enabled');
          }

          // DEACTIVATE SCROLL // IF SCROLLED DOWN
          else if ( $(document).scrollTop() > 0 && $('.mobile-nav').hasClass('mobile-enabled') ) {
            console.log('deactivate/scrolled');
            $('.mobile-nav').removeClass('mobile-enabled');
          }

        });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    'single_post': {
      init: function() {
        // JavaScript to be fired on posts
        if ( $('main .container article').is('.category-fairy-tale-files') ) {

          $('p, figure').has('img').addClass('image-container');

          console.log("TESTING TESTING");
          var container1 = $('.image-container')[0];
          var container2 = $('.image-container')[1];
          var container3 = $('.image-container')[2];

          var number_01 = '<div class="ftf-number"><p>1</p></div>';
          var number_02 = '<div class="ftf-number"><p>2</p></div>';
          var number_03 = '<div class="ftf-number"><p>3</p></div>';

          $(container1).nextUntil(container2).wrapAll( "<div class='ftf-container-01'><div class='ftf-text'></div></div>" );
          $(container1).appendTo('.ftf-container-01');
          $(container1).append(number_01);

          $(container2).nextUntil(container3).wrapAll( "<div class='ftf-container-02'><div class='ftf-text'></div></div>" );
          $(container2).appendTo('.ftf-container-02');
          $(container2).append(number_02);

          $(container3).nextUntil('footer').wrapAll( "<div class='ftf-container-03'><div class='ftf-text'></div></div>" );
          $(container3).appendTo('.ftf-container-03');
          $(container3).append(number_03);

        }
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
