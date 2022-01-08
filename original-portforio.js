$(document).ready(function(){
    $(".hamburgerMenu").click(function(){
        $(".spNavi").slideToggle();
    });
});

$(document).ready(function(){
      $(".hamburgerMenu").click(function () { 
          $(" .hamburgerMenu").toggleClass("openlink"); 
  });
})

$(function(){
  var pagetop = $('#btn-backtotop');
  // ボタン非表示
  pagetop.hide();
  // 100px スクロールしたらボタン表示
  $(window).scroll(function () {
     if ($(this).scrollTop() > 100) {
          pagetop.fadeIn();
     } else {
          pagetop.fadeOut();
     }
  });
  pagetop.click(function () {
     $('body, html').animate({ scrollTop: 0 }, 500);
     return false;
  });
});