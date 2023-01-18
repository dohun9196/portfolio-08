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
    $('.business_marsk .marsk_slide').slick({
        dots: false,
        autoplay: false,
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
    $(window).scroll(function () {
        var height = $(document).scrollTop();

        if (height > 2) {
            $('.sub_heade').addClass('on');
        } else if (height < 1) {
            $('.sub_heade').removeClass('on');
        }
    });

    $('.b_navCont:nth-of-type(4)').show(); //페이지를 로드할 때 표시할 요소
    $('.b_navCont:nth-of-type(n+5)').hide(); //페이지를 로드할 때 숨길 요소

    $('.business_nav ul>li>a').on('click', function () {
        $(this).addClass("on").parents('li').siblings().find('.on').removeClass("on");
    })
    // $('.business_nav ul>li>a').on('click', function () {
    //     $('.marsk_slide .slick-dots>li').addClass("slick-active").parents('.marsk_slide .slick-dots').siblings().find('.slick-active').removeClass("slick-active");
    // })

    // $('.business_nav ul>li>a').on('click', function () {
    //     $('.marsk_slide .slick-dots>li').not($(this)).removeClass('slick-active');
    //     $(this).addClass('slick-active');

    // });



    $('.marsk_slide .slick-dots>li').click(function (e) {
        console.log('active');
    });


    $('.business_nav ul>li>a').on("click", function () {
        var idx = $('.business_nav ul>li>a').index(this); //idx = 클릭한 li가 몇번째 요소인지
        $('.b_navCont').stop().hide(); //모든 .b_navCont 끄기
        $('.b_navCont').eq(idx).stop().show(); //.b_navCont 중에 idx와 같은 순서의 요소 fadeIn.
        return false;
    });



});