$(".next-btn1").click(function() {
      $(".tab-pane").hide();
      $("#step2").fadeIn(1000);
      $('.progressbar-dots').removeClass('active');
      $('.progressbar-dots:nth-child(2)').addClass('active');
 });
$(".next-btn2").click(function() {
      $(".tab-pane").hide();
      $("#step3").fadeIn(1000);
      $('.progressbar-dots').removeClass('active');
      $('.progressbar-dots:nth-child(3)').addClass('active'); 
});

$(".submit-btn").click(function() {
    $("#loader").show();
     setTimeout(function(){
       $(".give-form").html("<h2>Yeeeeeeha!! You are on the right track buddy! Brian is now one step closer to becoming the Mayor of London <span class='glyphicon glyphicon-fire'></span></h2>");
     }, 1000);
    return false;
  
});

$('.give-form').find('.form-control').each(function() {
  var targetItem = $(this).parent();
  if ($(this).val()) {
    $(targetItem).find('label').css({
      'top': '10px',
      'fontSize': '14px'
    });
  }
})
$('.give-form').find('.form-control').focus(function() {
  $(this).parent('.input-block').addClass('focus');
  $(this).parent().find('label').animate({
    'top': '10px',
    'fontSize': '14px'
  }, 300);
})
$('.give-form').find('.form-control').blur(function() {
  if ($(this).val().length == 0) {
    $(this).parent('.input-block').removeClass('focus');
    $(this).parent().find('label').animate({
      'top': '25px',
      'fontSize': '18px'
    }, 300);
  }
})