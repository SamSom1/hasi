var saveCookie = function() {
  var CookieDate = new Date;
  CookieDate.setFullYear(CookieDate.getFullYear( ) +10);
  document.cookie = 'acceptCookies=madridfree; expires=' + CookieDate.toGMTString( ) + ';';
}

var acceptedCookies = function() {
  return document.cookie.indexOf('acceptCookies=madridfree') > -1;
}

//ANIMATE MOUSE
$(document).on('mousemove', function(e){
  $('#imgfollow').css({
     left:  e.pageX,
     top:   e.pageY
  });
});


$(document).ready(function() {
  $("div:has(img)").addClass("image");
  $("p:has(img)").addClass("image");
//  $('#simple-menu').side({
  //  side: 'right'
  //});



  $('.rrss-share a.fb').on('click', function() {
    var url = $(this).attr('data-href');
    FB.ui({
      method: 'share',
      href: url,
    }, function(response){
      console.log(response);
    });

    return false;
  });

  $('.rrss-share a.gplus').on('click', function() {
    var url = encodeURIComponent($(this).attr('data-href'));
    var settings = 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600';

    window.open('https://plus.google.com/share?url=' + url, '', settings);

    return false;
  });

  $('.rrss-share a.tw').on('click', function() {
    var url = encodeURIComponent($(this).attr('data-href'));
    var text = encodeURIComponent($(this).attr('data-text'));
    var via = "madridfree";
    var related = $(this).attr('related');

    var settings = 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=550,width=420';

    var tweet = 'https://twitter.com/intent/tweet';
    tweet = tweet + '?url=' + url + '&via=' + via + '&related' + related + '&text=' + text;

    window.open(tweet, '', settings);

  });

  if(!acceptedCookies()) {
    $('#acceptCookies').show();
    $('#acceptCookies button').click(function() {
      saveCookie();
      $('#acceptCookies').hide();
    });
  }

 $(function(){
    $('#know_more_front').on('click',function() {
      $.scrollTo('#front_page',300);
      return false;
    }


);

  }
);

$(function(){
   $('#know_more_front_title').on('click',function() {
     $.scrollTo('#front_nav',300);
     return false;
   }
 );

   }
 );


 $(function(){
    $('.tag').on('click',function() {
      $.scrollTo('#tag_top',300);
      return false;
    }
  );

    }
  );



}
);
