let now = 1;
let old_width = 0;
let opened = false; // true, если все страницы открыты
$(function() {

  makingOnClick_page_();
  makingOnClick_arrows();

    old_width = $('div.near').width();

});

function togglePage(was, is, was_i, is_i) {
  let count_of_pages = + $('div.page:last').html();

  console.log(is_i);
  console.log(was_i);
  if (was_i < is_i) {
    // если перешли на след.страницу
    console.log('вы перешли на следующую страницу');
    if (is_i != 2) {
      console.log('не вторая');
      $('div.page:first').detach();
      if (count_of_pages > is_i) {
        let next_i = is_i+1;
        let new_btn = '<div class="page page_  d-flex flex-row justify-content-center align-items-center cp ">'+next_i+'</div>';
        $(is).after(new_btn);
        makingOnClick_page_();
      }
      else {
        // посчитать ширину - количество элементов уменьшилось
        let new_width = $('div.near').width() - 40;
        $('div.near').width(new_width+'px');
        if (!opened) old_width = new_width;
      }
    } else { // если 2
      let new_width = $('div.near').width() + 40;
      $('div.near').width(new_width+'px');

      if (!opened) old_width = new_width;
      console.log('вторая');
      let new_btn = '<div class="page page_  d-flex flex-row justify-content-center align-items-center cp ">3</div>';
      $(is).after(new_btn);
      makingOnClick_page_();
    }
  }
  else if (was_i > is_i) {
    console.log('вы перешли на предыдущую страницу');
    // если перешли на предыдущую страницу
    let after_was_i = is_i-1;
    $(was).next().detach();
    if (is_i == 1) {
      let new_width = $('div.near').width() - 40;
      $('div.near').width(new_width+'px');
      if (!opened) old_width = new_width;
    } else {
      let new_btn = '<div class="page page_ d-flex flex-row justify-content-center align-items-center cp ">'+after_was_i+'</div>';
      $(is).before(new_btn);
      makingOnClick_page_();
    }
  }
}



function makingOnClick_page_() {
  $('div.page_').on('click', function(event){
    let btn = event.target;
    let index = +$(btn).html();
    let pre_btn = $('div.page.now');
    let pre_index = +$(pre_btn).html();
    $(pre_btn).removeClass('now');
    $(btn).addClass('now');
    if (!opened) {
      togglePage(pre_btn, btn, pre_index, index);
    }
    // openNews(index); работа с данными

  });
}


function makingOnClick_arrows() {
  $('div.next').on('click', function(event) {
    opened = true;
    console.log('NEXT');
    let count_of_pages = + $('div.page:last').html();
    let count_of_begin_pages = $('div.page_').length;
    let now_index = +$('div.page.now').html();
    let new_btns = [];
    if (now_index != count_of_pages) {
      for (var i = 1; i < count_of_pages; i++) {
        if (i != now_index) {
          new_btns[new_btns.length] = '<div class="page page_ d-flex flex-row justify-content-center align-items-center cp ">'+i+'</div>';
        }
        else
          new_btns[new_btns.length] = '<div class="page page_ now d-flex flex-row justify-content-center align-items-center cp ">'+i+'</div>';
      }
    }
    // изменение ширины
    // let new_width = count_of_pages * (30+10);
    $('div.page_').detach();
    for (var i = new_btns.length - 1; i >= 0; i--) {
      $('div.near').prepend(new_btns[i]);
      let neww = $('div.near').width() + 40;
      $('div.near').width(neww+'px');
    }
    makingOnClick_page_();

    // меняем направление стрелок
    let arrows = event.target;
    $(arrows).removeClass("fa-angle-double-right");
    $(arrows).addClass("fa-angle-double-left");
    $(arrows).parent().removeClass("next");
    $(arrows).parent().addClass("prev");
    makingOnClick_arrows();
  });

  $('div.prev').on('click', function() {
    opened = false;
    let count_of_pages = + $('div.page:last').html();
    let now = $('div.page.now');
    let now_index = +$('div.page.now').html();
    let prev = $(now).prev();
    let prev_index = +$(prev).html();
    let next = $(now).next();
    let next_index = +$(next).html();
    let all = $('div.page_');
    for (var i = 0; i < all.length; i++) {
      if ($(all[i]).html() < prev_index || $(all[i]).html() > next_index) {
        $(all[i]).detach();
      }
    }
    $('div.near').width(old_width+'px');
    console.log('now width is ' + $('div.near').width());
    // меняем направление стрелок
    let arrows = event.target;
    $(arrows).addClass("fa-angle-double-right");
    $(arrows).removeClass("fa-angle-double-left");
    $(arrows).parent().addClass("next");
    $(arrows).parent().removeClass("prev");
    makingOnClick_arrows();

  });
}
