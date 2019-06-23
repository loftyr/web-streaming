
function draw_data(result){
    var delay = 0;
    for (index in result) {
        var id      = result[index].no_id;
        var judul   = result[index].judul_episode;
        var alur    = result[index].alur_cerita;
        var encoder = result[index].encoder;
        var genre   = result[index].genre;
        var link    = result[index].link_streaming;
        var studio  = result[index].studio;
        var tgl     = result[index].tgl_upload;
        var url_img = result[index].url_img;
        var uploader = result[index].uploader;
        delay += 1;

        var tgl_ago = jQuery.timeago(tgl);
        
        var div = '<div class="col-sm-6 m-bottom-30 animated zoomIn delay-0'+delay+'s">';
        div     += '<div class="card-list">';
        div     += '<div class="thumbnail-card">';
        div     += '<img class="img-card" src="file/upload/'+ url_img +'" alt="">';
        div     += '</div>';
        div     += '<div class="info-card">';
        div     += '<a class="text-center judul" href="play/anime/'+ id +'" target="_blank">'+ judul +'</a>';
        div     += '<button class="btn btn-primary btn-sm ml-2 tonton" id="" dataID="'+id+'">Tonton Online</button>';
        div     += '<button class="btn btn-primary btn-sm ml-2 download" dataID="'+id+'">Download</button> <br>';
        div     += '<span class="ml-2 span-time">'+tgl_ago+'</span>';
        div     += '</div>';
        div     += '</div>';
        div     += '</div>';

        $('#isi-data').append(div);
    }
}

function getAllData(no){
    $('#isi-data').html('');
    $('#result').html('<img id="img-loading" class="animated fadeIn" src="file/app/loading-2.gif"/>');
    $.ajax({
        url: 'home/loadRecord/'+no,
        type: 'GET',
        dataType: 'JSON',
        success: function(response){
            $("#img-loading").removeClass('fadeIn').addClass('fadeOut');
            draw_data(response.result);
            $('#isi-paging').html(response.pagination);
        }
    });
}

$('#isi-paging').on('click','a',function(e){
    e.preventDefault(); 
    var no = ($(this).attr('data-ci-pagination-page') - 1) * 10;
    getAllData(no);
});

$(document).ready(function(){
    getAllData(0);
});

$(document).on("click", "#tonton", function(){
    var id = $(this).attr('dataID');
    var redirect = window.open('play/anime/'+id, '_blank');
    redirect.location;
});

$(document).on("click", ".tonton", function(){
    var id = $(this).attr('dataID');
    var redirect = window.open('play/anime/'+id, '_blank');
    redirect.location;
});

$(document).on("click", ".download", function(){
    var id = $(this).attr('dataID');
    var redirect = window.open('anime/download/'+id, '_blank');
    redirect.location;
});