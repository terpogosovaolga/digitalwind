let image_to_zoom;


$(function(){
  $('img.zoomed').hover(function(event) {
    let image = event.target;
    image_to_zoom = image;
    let imgtop = Math.round($(image).offset().top);
    let imgleft = Math.round($(image).offset().left);
    let width = Math.round($(image).width());
    let height = Math.round($(image).height());
    let forzoomed = $('div.forzoomed');
    $(forzoomed).css('top', imgtop+'px');
    $(forzoomed).css('left', imgleft+'px');
    $(forzoomed).css('width', width+'px');
    $(forzoomed).css('height', height+'px');
    $(forzoomed).css('opacity', '0.7');
  }, function(event) {
    let image=event.target;
    let forzoomed = $('div.forzoomed');
    $(forzoomed).css('opacity', '0');
  });

  // $('img.zoomed').on('mouseleave', function(event){
  //   let image=event.target;
  //   let forzoomed = $('div.forzoomed');
  //   // $(forzoomed).css('opacity', '0');
  // });

  // правный скролл к результатам
  $('a#tofreshresults').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 200, 'swing');
  });

});


function showMenu(selector) {
  $(selector).animate({
    right: "0"
  }, 300);
  // $(selector).css('animation-play-state', 'running');
}

function hideMenu(selector) {
  $(selector).animate({
    right: "-700px"
  }, 300);
}

function zoomPhoto() {
  // image_to_zoom заменяется во время mouseenter
  $(image_to_zoom).animate({

  })
}
