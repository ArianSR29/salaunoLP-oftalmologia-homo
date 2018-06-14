$(document).ready(function () {
    //--------------------Efecto Parallax---------------------------------------

    $(window).bind('scroll', function (e) {
        parallaxScroll();
    });

    function parallaxScroll() {
        var scrollEje_Y = $(window).scrollTop();
        $('.info-banner').css('left', + ((scrollEje_Y * -0.5)) + 'px');
    }

    //--------------------Menú pegajoso---------------------------------------
    $(window).resize(function () {
        var width = $(window).width();
        if (width < 1024) {
            console.log(width);

            var flag = false;
            var scroll;

            $(window).scroll(function () {
                scroll = $(window).scrollTop();
                //console.log(scroll);
                if (scroll > 90) {
                    if (!flag) {
                        $('.c-top-tel').addClass('stiky');
                        flag = true;
                    }
                } else {
                    if (flag) {
                        $('.c-top-tel').removeClass('stiky');
                        flag = false;
                    }
                }
            });
        } else if (width > 1025) {}
    });

    $(function () {
        $('div.blocks div').inview({'viewFactor': 0.3});
    });

   $(document).on('click', '.btn-agendar', function(event) {
            event.preventDefault();
            $('#modal-iframe').iziModal('open', this);
            alert("MODAL");
        });
        $('#modal-iframe').iziModal({
            width: 800, //横幅
            iframe: true, //iframeを利用
            iframeHeight: 500, //iframeの高さ
            iframeURL: 'https://agenda.salauno.com.mx/' //iframe内に表示するurl
        });
    });

