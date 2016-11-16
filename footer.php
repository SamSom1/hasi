<div id="front_page">
</div>

<footer class="foot">
Find us on <a href="mailto:mail@watchoutfreedom.com">mail@watchoutfreedom.com</a>, <a href="">Instagram</a> and <a href="">Twitter</a>
<!-- js scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>

<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/app.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript">


  function handler (){

    $('li').off('click');
    $('li').on('click',function(value){
    // do whatever you want here

    $cat = $(this).attr('value');
    sessionStorage.setItem('cat',$cat);

    HidePosts();
    CatSelect();
    /*$.ajax({
        url: ajaxpagination.ajaxurl,
        type: 'post',
        data: {
          action: 'ajax_pagination'
        },
        success: function( result ) {
          alert( result );
        }
      })*/

    });

//RESTORE TO DEFAULT CAT ALL
$('.header__text-logo a').on('click',function(value){
    // do whatever you want here

    sessionStorage.removeItem('cat');

  });



}

function HidePosts(){


$('.home__content').each(function(){
  var contiene = false;
  var valueC = $(this).attr('value').split(",");
  $.each(valueC,function(index,value){
          //	alert(value + " cat es " + $cat)

          if(value==$cat || $cat == -1)
          {
            contiene = true;
          }


        });

          //alert(valueC + "es" + contiene + "cat" + $cat);

          if(contiene==true)
          {
            $(this).parent().show();//.css('display', 'block');
          }
          if(contiene==false) {
            $(this).parent().hide();//.css('display', 'false');
          }
        });
}

function CatSelect(){
$('.theLink').each(
  function(){
    var back = ["#FFD500","#FF3C00","#02B7A0","#3399FF","#2980B9","#E74C3C","#16A085","#E67E22","#F39C12","#C0392B"];
    var rand = back[$cat-(Math.floor($cat/10)*10)];

    //var rand = back[Math.floor(Math.random() * back.length)];

    if($(this).attr('value')== sessionStorage.getItem('cat'))
    {
      console.log($cat-(Math.floor($cat/10)*10));
      $(this).css({"background-color": rand,"border-color": rand,"color": "white"
    });
    }

    if($(this).attr('value')!= sessionStorage.getItem('cat'))
      {$(this).css({"border-color": "", "background-color": "","color": ""});
  }

})
}


$(document).ready(function(){

if(sessionStorage.getItem('cat')!=null)
{
  $cat = sessionStorage.getItem('cat');
  HidePosts();
  CatSelect();

  sessionStorage.removeItem('cat');
}


} );



$(document).bind("mobileinit", function () {
      // jQuery Mobile's Ajax navigation does not work in all cases (e.g.,
      // when navigating from a mobile to a non-mobile page), especially when going back, hence disabling it.
      $.extend($.mobile, {
        ajaxEnabled: false
      });
  });
// or:

</script>
</footer>

</div><!-- allwrapper -->
</body>
</html>
