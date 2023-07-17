$(document).ready(function () {
    
    $(".c-mainvisual__slider").slick({
        cssEase: "linear",
        respondTo: "slider",
        autoplay: true,
        infinite: true,
        dots: false,
        arrows: false,
        slidesToShow: 1

    });
    $(".c-pickup__slider").slick({
        cssEase: "linear",
        respondTo: "slider",
        centerMode: true,
        centerPadding: '5.08%',
        autoplay: true,
        infinite: true,
        dots: true,
        arrows: true,
        prevArrow: $(".c-control__itempre"),
        nextArrow: $(".c-control__itemnext"),
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '21.9%',
                    arrows: false,
                },
            }
        ]
    });
    $("#contact__form").validate({
		rules: {
			"familyname": {
				required: true
			},
            "addressMail": {
				required: true
			},
            "phonenumber": {
                required: true,
                number: true,
                minlength: 10,
                maxlength:11
            },
            "email": {
                required: true,
                email: true
            }
		},
		messages: {
			"familyname": {
				required: "『氏名』を入力してください。"
			},
            "phonenumber": {
				required: "『電話番号』を入力してください。",
                minlength:"10文字以上入力してください。",
                maxlength: "11文字以内で入力してください。",
                number: "有効な数値を入力してください。",
			},
            "email": {
				required: "『メールアドレス』を入力してください。",
                email:"有効なメールアドレスを入力してください。"
			},
            "addressMail": {
				required: "『お問い合わせ内容』を入力してください。"
			}
		}
	});
    $( ".c-form01__btn" ).click(function() {
        if (!$( "#contact__form" ).valid()){
            $(".c-form01").removeClass("c-form01__error");
            $(".c-form01").addClass("c-form01__error");
        }else{
            $(".c-form01").removeClass("c-form01__error");
        }
    })
});
function createSlide() {
    if ($(window).width() <= 1024) {
        $(".c-related__row").not(".slick-initialized").slick({
            cssEase: "linear",
            respondTo: "slider",
            autoplay: true,
            infinite: true,
            dots: true,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
            
        });
        
    } else{
        $(".c-related__row.slick-initialized").slick("unslick");
        
    }
};
function createSlide02(){
    if ($(window).width() <= 1024) {
        $(".c-othercompany .c-list01").not(".slick-initialized").slick({
            cssEase: "linear",
            respondTo: "slider",
            autoplay: true,
            infinite: true,
            dots: true,
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                    },
                },
            ]
        });    
    }else{
        $(".c-othercompany .c-list01.slick-initialized").slick("unslick");
    }
    
}
$(window).resize(function () {
    createSlide();
    createSlide02()
});
$(window).on("load", function () {
    createSlide();
    createSlide02()
});

function disableScroll() {
    var ycoord = $(window).scrollTop();
    $(".c-headermb__nav").data("ycoord", ycoord);
    ycoord = ycoord * -1;
    $("body")
        .css("position", "fixed")
        .css("left", "0px")
        .css("right", "0px")
        .css("top", ycoord + "px");
}
function enableScroll() {
    $("body")
        .css("position", "")
        .css("left", "auto")
        .css("right", "auto")
        .css("top", "auto");
    $(window).scrollTop($(".c-headermb__nav").data("ycoord"));
}
$(".c-nav__btnmb--opennav").click(function () {
    $('body').removeClass('is-openNavMb')
    $('body').addClass('is-openNavMb')
    if ($('body').hasClass("is-openNavMb")) {
        disableScroll();
    } else {
        enableScroll();
    }
});
$(".c-nav__btnmb--close,.c-headermb__item.c-nolink,.c-btn03.c-nolink").click(function () {
    $('body').removeClass('is-openNavMb')
    if ($('body').hasClass("is-openNavMb")) {
        disableScroll();
    } else {
        enableScroll();
    }
});

$("#scroll-top").click(function () {
    $(window).scrollTop(0);
});


$(document).ready(function () {
    $(".c-warp__slider").slick({
        cssEase: "linear",
        respondTo: "slider",
        autoplay: false,
        infinite: true,
        dots: true,
        arrows: false,
        slidesToShow: 1

    });
});
