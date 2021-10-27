$(function(){

});

function openFilters(selector, e) {
  // открываем фильтры
  $(selector).toggle('normal');
  // крутим стрелку
  let btn = e.target;
  let arrow = $(btn).children('i')[0];
  $(arrow).toggleClass('for_rotate');
}
