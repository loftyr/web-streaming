
function draw_data(result){
    var delay = 0;
    for (index in result){
        delay += 1;

        var div = '<div class="card-list mb-3 ml-2 animated zoomIn delay-0'+delay+'s">';
        div    += '<div class="img-list">';
        div    += '<img class="img" src="../../file/upload/'+result[index].url_img+'" alt="Gambar">';
        div    += '</div>';
        div    += '<div class="info-card pl-3">';
        div    += '<a href="../../play/anime/'+result[index].no_id+'" target="_blank">'+result[index].judul_episode+'</a>';
        div    += '<div class="genre pt-2">'+result[index].genre+'</div>';
        div    += '<p class="pt-2 mb-0 pb-0 alur">'+result[index].alur_cerita.substr(0, 200)+'. . .</p>';
        div    += '<div class="pt-4">'+result[index].tgl_upload+'</div>';
        div    += '<div class="pt-4"><button class="myButton mr-2 tonton" dataID="'+result[index].no_id+'">Streaming</button><button class="myButton download" dataID="'+result[index].no_id+'">Download</button></div>';
        div    += '</div>';
        div    += '</div>';

        $('#isi-data').append(div);
    }
}

function getAllData(no){
    var id = document.querySelector('#id_anime').value;
    $('#isi-data').html('');
    $('#loading').html('<img id="img-loading" class="animated fadeIn" src="../../file/app/loading-2.gif"/>');
    $.ajax({
        url: '../loadRecordAnime/'+id+'/'+no,
        type: 'GET',
        dataType: 'JSON',
        success: function(response){
            $("#img-loading").removeClass('fadeIn').addClass('fadeOut');
            draw_data(response.result);
            $('#paging').html(response.pagination);
        }
    });
}

$('#paging').on('click','a',function(e){
    e.preventDefault(); 
    var no = ($(this).attr('data-ci-pagination-page') - 1) * 10;
    getAllData(no);
});

$(document).ready(function(){
    getAllData(0);
});

$(document).on("click", ".download", function(){
    var id = $(this).attr('dataID');
    window.open('../../anime/download/'+id, '_blank');
});

$(document).on("click", ".tonton", function(){
    var id = $(this).attr('dataID');
    window.open('../../play/anime/'+id, '_blank');
});