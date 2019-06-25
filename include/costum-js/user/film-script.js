function draw_data(result){
    
    var delay = 0;
    for (index in result) {
        var id      = result[index].id_film;
        var judul   = result[index].judul_film;
        var alur    = result[index].alur_cerita;
        var genre   = result[index].genre;
        var tahun   = result[index].tahun;
        var kualitas= result[index].kualitas;
        var rating  = result[index].rating;
        var tgl     = result[index].tgl_upload;
        var url_img = result[index].url_img;
        
        if (url_img == null) {
            var url     = 'file/upload/default_image_01.png';
        }else{
            var url     = 'file/upload/'+url_img+'';
        }

        delay += 1;

        var tgl_ago = jQuery.timeago(tgl);
        
        var div = '<a href="play/film/'+id+'" class="col-sm-3 card-list shadow animated fadeIn">';
        div     += '<div class="img-list">';
        div     += '<img src="'+url+'" alt="Gambar">';
        div     += '</div>';
        div     += '</div>';
        div     += '<div class="info-list">';
        div     += '<span class="rating">'+rating+' &#10029;</span>';
        div     += '<span class="kualitas">'+kualitas+'</span>';
        div     += '<span class="judul">'+judul+'</span>';
        div     += '<span class="img-play"><i class="shadow far fa-play-circle"></i></span>';
        div     += '</div>';
        div     += '</a>';

        $('#isi-data').append(div);
    }
}

function draw_dataPage(result){
    
    var delay = 0;
    for (index in result) {
        var id      = result[index].id_film;
        var judul   = result[index].judul_film;
        var alur    = result[index].alur_cerita;
        var genre   = result[index].genre;
        var tahun   = result[index].tahun;
        var kualitas= result[index].kualitas;
        var rating  = result[index].rating;
        var tgl     = result[index].tgl_upload;
        var url_img = result[index].url_img;
        
        if (url_img == null) {
            var url     = 'file/upload/default_image_01.png';
        }else{
            var url     = 'file/upload/'+url_img+'';
        }

        delay += 1;

        var tgl_ago = jQuery.timeago(tgl);
        
        var div = '<a href="play/film/'+id+'" class="col-sm-3 card-list shadow animated fadeInDown delay-0'+delay+'s">';
        div     += '<div class="img-list">';
        div     += '<img src="'+url+'" alt="Gambar">';
        div     += '</div>';
        div     += '</div>';
        div     += '<div class="info-list">';
        div     += '<span class="rating">'+rating+' &#10029;</span>';
        div     += '<span class="kualitas">'+kualitas+'</span>';
        div     += '<span class="judul">'+judul+'</span>';
        div     += '<span class="img-play"><i class="shadow far fa-play-circle"></i></span>';
        div     += '</div>';
        div     += '</a>';

        $('#isi-data').append(div);
    }
}

function getData(){
    $('#isi-data').html('');
    $('#result').html('<img id="img-loading" class="animated fadeIn" src="file/app/loading-2.gif"/>');
    $.ajax({
        url: 'film/loadRecord/',
        type: 'GET',
        dataType: 'JSON',
        success: function(response){
            $("#img-loading").removeClass('fadeIn').addClass('fadeOut');
            draw_data(response);
        }
    });
}

$(document).ready(function(){
    getData();
});

const btnLoad = document.querySelector('.btn-load');

btnLoad.addEventListener('click', function(){
    var page = $(this).attr('dataPage');
    var next = parseInt(page) + 1;
    $(".btn-load").attr("dataPage", next);

    $(".btn-load").html('loading . . .');
    $.ajax({
        url: 'film/loadPage/'+next,
        type: 'GET',
        dataType: 'JSON',
        success: function(response){
            if (response == '') {
                Swal.fire({
                  position: 'top-end',
                    type: 'error',
                    title: "Data Kosong . . .",
                    showConfirmButton: false,
                    timer: 1500
                });
            }else{
                draw_dataPage(response);
            }
            $(".btn-load").html('Load More');
        }
    });
});