jQuery(document).foundation();

jQuery(document).ready(function() {

  jQuery("li.menu-item-has-children").mouseenter(function() {
    jQuery(".search-bar-bg").removeClass('show');
      if (jQuery(this).siblings().children().hasClass('show')){
        jQuery(this).siblings().children("div.cutommega").removeClass('show').addClass('hide');
      }
      jQuery(this).children("div.cutommega").addClass('show').removeClass('hide');
    }).mouseleave(function() {
  });

  jQuery("li.no-child").mouseenter(function() {
    jQuery(".search-bar-bg").removeClass('show');
    jQuery(this).siblings().children("div.cutommega").removeClass('show').addClass('hide');
    }).mouseleave(function() {
  });

  jQuery("li.searchIcon a").mouseenter(function() {
    jQuery("li.menu-item-has-children").siblings().children("div.cutommega").removeClass('show').addClass('hide');
    jQuery(".search-bar-bg").addClass('show');
    jQuery(".search-bar-bg input.search-field").focus();
    }).mouseleave(function() {
  });

  jQuery("li.menu-item-has-children").on('touchstart', function(e) {
    jQuery(".search-bar-bg").removeClass('show');
    if (jQuery(this).siblings().children().hasClass('show')){
      jQuery(this).siblings().children("div.cutommega").removeClass('show').addClass('hide');
    }
    jQuery(this).children("div.cutommega").addClass('show').removeClass('hide');
  });

  jQuery("li.no-child").on('touchstart', function(e) {
    jQuery(".search-bar-bg").removeClass('show');
    jQuery(this).siblings().children("div.cutommega").removeClass('show').addClass('hide');
  });

  jQuery("li.searchIcon a").on('touchstart', function(e) {
    jQuery("li.menu-item-has-children").siblings().children("div.cutommega").removeClass('show').addClass('hide');
    jQuery(".search-bar-bg").addClass('show');
    jQuery(".search-bar-bg input.search-field").focus();
  });

  jQuery(window).scroll(function() {
  var scroll = jQuery(window).scrollTop();
    if (scroll >= 5) {
    jQuery(".search-bar-bg").addClass("fixed");
      } else {
    jQuery(".search-bar-bg").removeClass("fixed");
    }
  });

  jQuery('.accordion p:empty, .orbit p:empty').remove();
	jQuery('.archive-grid .columns').last().addClass( 'end' );

  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

});
