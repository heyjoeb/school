function init() {
  $('body').removeClass('fade-out');
}
window.onload = init();

$(document).ready(function () {
  $('.slider').slick({
    nextArrow: $('#triggerForm'),
    adaptiveHeight: true,
    draggable: false
  });
});