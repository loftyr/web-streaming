$(document).on("click", ".all-chap", function(){
    var base = $(this).attr('dataURL');
    // var id = $(this).attr('dataID');
    window.location = base+'manga/chapter/';
});