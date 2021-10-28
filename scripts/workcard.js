  let text_in = false;
$(function(){

});

function copyLink(link) {
  // копируем
  $('span.copied').animate({opacity: 1}, 200, 'swing');

  setTimeout(function () {
    $('span.copied').animate({opacity: 0}, 500, 'swing');
  }, 1000);
}

function like(link) {
  let icon = $(link).children('i')[0];
  let text = $(link).children('span')[0];

  $(icon).toggleClass('text-orange');
  if (!text_in) {
    $(text).html('Вам понравилось');
    text_in = true;
  }
  else if (text_in) {
    $(text).html("Мне нравится");
    text_in = false;
  }

}
