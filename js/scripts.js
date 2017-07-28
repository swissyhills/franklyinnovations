$(document).ready(function () {
  var pageURL = window.location.href;

  //Add active class to menu item in main menu
  $('#mainMenu .navbar-collapse .nav-link').each(function () {
    var navURL = $(this).attr('href');
    if (pageURL.indexOf(navURL) > -1) {
      $(this).parent().addClass('active');
      $(this).parent('li').siblings().removeClass('active');
    }
  });

  //Add active class to tab item in tab navigation
  $('.nav-tabs .nav-item .nav-link').each(function () {
    var tabURL = $(this).attr('href');
    if (pageURL.indexOf(tabURL) > -1) {
      $(this).addClass('active');
      $(this).parent('li').siblings().children().removeClass('active');
    }
  });
});
