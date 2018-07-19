$(document).ready(function() {
  $('#serv_hr').addClass('hidden').viewportChecker({
    classToAdd: 'visible animated bounceInRight color',
    offset : 300
  });

  $('#serv1_content').addClass('hidden').viewportChecker({
    classToAdd: 'visible animated slideInLeft',
    offset : 300
  });
  $('#serv1_img').addClass('hidden').viewportChecker({
    classToAdd: 'visible animated slideInRight',
    offset : 300
  });
  $('#serv2').addClass('hidden').viewportChecker({
    classToAdd: 'visible animated fadeIn',
    offset : 300
  });
  $('#serv3_content').addClass('hidden').viewportChecker({
    classToAdd: 'visible animated slideInLeft',
    offset : 300
  });
  $('#serv3_img').addClass('hidden').viewportChecker({
    classToAdd: 'visible animated slideInRight',
    offset : 300
  });

  $(window).scroll(function() {
    var nav_offset = $('nav').scrollTop().top;
    console.log(nav_offset);
  });
});
