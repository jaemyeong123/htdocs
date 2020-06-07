// JavaScript Document
function btn_etc(){
  $(".etc_menu").stop().toggle();
}


//gnb-------------------------------------------------------------------------------
function singlenavOpen(element){
  $(element).find(".drop_menu").stop().slideDown(300);
}

function singlenavClose(element){
  $(element).find(".drop_menu").stop().slideUp(300);
}
//-----------------------------------------------------------------------------------------

//tab_1-------------------------------------------------------------------------------------

$(document).ready(function() {

  //tab_1-------------------------------------------------------------------------------------

  $(".tab_1 .tab_menu a").click(function(){
    if($(this).hasClass("active")){
      return false;
    }

    $(".tab_1 .tab_menu a").removeClass("active");
    $(this).addClass("active");

    var tab_num = $(".tab_1 .tab_menu a").index(this); //클릭한 메뉴와 같은 순서의 탭 내용 show
    $(".tab_1 .tab_content").hide();
    $(".tab_1 .tab_content").eq(tab_num).fadeIn();
  });

  });
