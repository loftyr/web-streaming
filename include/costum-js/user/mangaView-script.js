
$(document).ready(function(){

    // $(window).scroll(function(){
    //     var scroll = $(window).scrollTop();

    //     if (scroll >= 400 && scroll <= 990) {
    //         $('.top').fadeIn();
    //         $('#view-paging').fadeIn();
    //     }else if(scroll > 990 ) {
    //         $('#view-paging').fadeOut();
    //     }else {
    //         $('.top').fadeOut();
    //         $('#view-paging').fadeOut();
    //     }
    // });

    $('.view-manga').on('load', function(){
        console.log('yes');
        var iframe = $('.view-manga').contents();
        // console.log(iframe);
        $(iframe).on('scroll', function(){
            console.log('yes');
            var scroll = iframe.scrollTop();
            console.log(scroll);

            // if (scroll >= 400 && scroll <= 990) {
            //     $('.top').fadeIn();
            //     $('#view-paging').fadeIn();
            // }else if(scroll > 990 ) {
            //     $('#view-paging').fadeOut();
            // }else {
            //     $('.top').fadeOut();
            //     $('#view-paging').fadeOut();
            // }
        })
    });

});


const btnUp = document.querySelector('.btn-top');

btnUp.addEventListener("click", function(){
    $('html, body').animate({
        scrollTop: 0 //pindah scroll ke Top (0 px)
    }, 1200, 'easeInOutExpo');
})