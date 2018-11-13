$( document ).ready(function(){
    $(".button-collapse").sideNav();
    $('.slider').slider();
    $('.parallax').parallax();
    $('.modal').modal();
    $('ul.tabs').tabs('select_tab', 'tab_id');
    $('ul.tabs').tabs();
    $('.tabs').tabs();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
});