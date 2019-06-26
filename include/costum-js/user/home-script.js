
function draw_data(result){
    var delay = 0;
    for (index in result) {
        var id      = result[index].id_anime;
        var judul   = result[index].judul_anime;
        var alur    = result[index].alur_cerita;
        var genre   = result[index].genre;
        var rating  = result[index].rating;
        var url_img = result[index].url_img;

        delay += 1;
        
        var div = '<div class="col-sm-6 m-bottom-30 pl-4 animated zoomIn delay-0'+delay+'s">';
        div     += '<div class="card-list">';
        div     += '<div class="thumbnail-card">';
        div     += '<img class="img-card" src="file/upload/'+ url_img +'" alt="">';
        div     += '</div>';
        div     += '<div class="info-card">';
        div     += '<a class="judul text-center" href="home/anime/'+ id +'" target="_blank">'+ judul +'</a>';
        div     += '<span class="genre">'+genre+'</span>'
        div     += '<div class="btn-detail"><button class="myButton detail" dataID="'+id+'">Lihat Detail</button></div>';
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

$(document).on("click", ".detail", function(){
    var id = $(this).attr('dataID');
    window.open('home/anime/'+id, '_blank');
});

