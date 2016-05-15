var main = function() {
  /* Push the body and the nav over by 285px over */
  $('.icon-menu').click(function () {
    $('#sidebar-wrapper').animate({
      right: "0px"
    }, 600);


    $('body').animate({
      right: "350px"
    }, 800);
  });

  $('#sidebar-wrapper').click(function() {
    $('#sidebar-wrapper').animate({
      right: "-350px"
    }, 600);

    $('body').animate({
      right: "0px"
    }, 900);
  });

}

$(document).ready(main);
