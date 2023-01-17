$(function () {
    $('.mainVisual .main_slide').slick({
        dots: true,
        autoplay: true,
        arrows: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
    });


    $(window).scroll(function () {
        var scrollValue = $(document).scrollTop();
        console.log(scrollValue);
    });

    $(window).scroll(function () {
        var height = $(document).scrollTop();

        if (height > 2) {
            $('#header').addClass('on');
        } else if (height < 1) {
            $('#header').removeClass('on');
        }
    });
    $('.business_nav ul>li>a').on('click', function () {
        $(this).addClass("on").parents('li').siblings().find('.on').removeClass("on");
    })


    $('.business_nav ul>li>a').on("click", function () {
        var idx = $('.business_nav ul>li>a').index(this); //idx = 클릭한 li가 몇번째 요소인지
        $('.b_navCont').stop().fadeOut("fast"); //모든 .bk 끄기
        $('.b_navCont').eq(idx).stop().fadeIn("fast"); //.bk 중에 idx와 같은 순서의 요소 fadeIn.
        return false;
    });



});