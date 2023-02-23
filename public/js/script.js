
$(document).ready(function(){
    //헤더 푸터 컴포넌트
    $('#header').load('./components/header.html', function(){

        $('#header .main-menu').mouseover(function(){
            $('#header .sub-menu').stop().fadeIn(300);
        });
        $('#header .main-menu').mouseleave(function(){
            $('#header .sub-menu').stop().fadeOut(300);
        });

    });
    $('#footer').load('./components/footer.html', function(){});

    $('#pagination').load('./components/pagination.html');
    $('#top_menu').load('./components/top_menu.html');


    //스크롤 애니메이션  
    AOS.init();
})