var method;
var methodChap;
var ID = 0;
const modalManga        = $('#modal-manga');
const modalChap         = $('#modal-chap');
const judulModal        = $('#title-modal');
const judulModalChap    = $('#title-modal-chap');
const btnManga          = $('#btn-manga');
const btnChap           = $('#btn-chap');
const btnMangaSave      = document.querySelector('#btn-manga');

function draw_data(result){
    var no = 0;

    for (index in result){
        var no_id   = result[index].no_id;
        var id_manga= result[index].id_manga;
        var judul   = result[index].judul_chapter;
        var chap    = result[index].chapter;
        var link  = result[index].link ;
        var tgl   = result[index].tgl_upload;
        no += 1;

        var tr  = '<tr>';
        tr      += '<td>'+ no +'</td>';
        tr      += '<td>'+ judul +'</td>';
        tr      += '<td>'+ chap +'</td>';
        tr      += '<td>'+ link.substr(0, 50) +'....</td>';
        tr      += '<td>'+ tgl +'</td>';
        tr      += '<td>';
        tr      += '<div class="row"><div class="col-sm-12"><button id_manga="'+id_manga+'" dataID="'+no_id+'" class="btn btn-danger btn-sm mb-1 btnHapusList"> <i class="fa fa-trash"></i></button></div></div>';
        tr      += '<div class="row"><div class="col-sm-12"><button dataID="'+no_id+'" class="btn btn-info btn-sm mb-1 btnEditList"> <i class="fa fa-edit"></i></button></div></div>';
        tr      += '</td>'
        tr      += '</tr>'

        $('#table-detail').append(tr);
    }

    $('#tabel-list').DataTable();
}

function loadListChapter(id_manga){
    $('#table-detail').html('<tr class="animated fadeIn"><td colspan="7" class="text-center"><img src="../file/app/loading-2.gif" alt=""></td></tr>');

    $.ajax({
        url: '../Manga/getChapter/'+ID,
        data: {id:ID},
        type: 'POST',
        dataType: 'JSON',
        success:function(result){
            $('#tabel-list').DataTable().destroy(); //Id Tabel
            $('#table-detail').html(''); //Id Tabel Body
            draw_data(result);
        }
    });
}

$(document).on('click', '.btnLihat', function(){
    $('#tab-manga a[href="#chapter-manga"]').tab('show');

    ID = $(this).attr('dataID');
    loadListChapter(ID);
});

function getManga(){
    $('#tabel-manga').DataTable().destroy();
    $('#body-manga').html('<tr class="animated fadeIn"><td colspan="7" class="text-center"><img src="../file/app/loading-2.gif" alt=""></td></tr>');

    $.ajax({
        url: '../Manga/getManga',
        type: 'POST',
        success:function(result){
            $('#body-manga').html(result);
            $('#tabel-list').DataTable();
        }
    });
}

function previewImage(input) {
  if(input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('img.img-preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("input#Img").change(function() {
    previewImage(this);
});

$(document).ready(function(){
    getManga();
    $('.tgl-entry').datepicker({dateFormat: 'yy-mm-dd', maxDate: '0'});
    $('.modal').on('hidden.bs.modal', function(e){
        $(this).find('form').trigger('reset');
        $('img.img-preview').attr('src', '');
    });
});

$(document).on('click', '#add-manga', function() {
    method = 'add';
    judulModal.html("Tambah Manga");
    btnManga.html("Save Manga");
    modalManga.modal("show");
})

$(document).on('click', '#add-chapter', function() {
    if (ID == 0) {
        Swal.fire({
            position: 'top-end',
            type: 'error',
            title: 'ID Manga Kosong !!!',
            showConfirmButton: false,
            timer: 1500
        });
    }else{
        methodChap = 'add';
        $('#id_manga').val(ID);

        judulModalChap.html("Tambah Chapter");
        btnChap.html("Save Chapter");
        modalChap.modal("show");
    }
})

btnMangaSave.addEventListener('click', function(event) {
    event.preventDefault();
    var url;
    var base_url    = $('#form').attr('link');
    var form        = document.querySelector("#form");

    if (method == 'add') {
        url = base_url+'manga/save';
    }else {
        url = base_url+'manga/saveEdit';
    }

    $('.progress').show();
    btnMangaSave.disabled = true;

    $.ajax({
        xhr : function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener('progress', function(e) {
                if(e.lengthComputable) {
                    var percent = Math.round((e.loaded / e.total) * 100);

                    $('.progress-bar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                }
            });
            return xhr;
        },

        url: url,
        data: new FormData(form),
        type: "POST",
        dataType: "JSON",
        processData: false,
            contentType: false,
            cache: false,
        success:function(result){
            $('.progress').hide();
            btnMangaSave.disabled = false;

            if (result.Status == false) {
                Swal.fire({
                    position: 'top-end',
                    type: 'error',
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1500
                })
            }else{
                modalManga.modal("hide");

                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    if(result.dismiss === Swal.DismissReason.timer) {
                        getManga();
                    }
                })
            }
        },
        error:function(jqXHR, textStatus, errorThrown) {
            alert('Error');
        }
    });
});

$(document).on('click', '.btnHapus', function(){
  Swal.fire({
    title: 'Are You Sure?',
    text: 'Delete This Data !!!',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
      var id = $(this).attr('dataID');

      $.ajax({
        url: "../Manga/deleteManga/"+id,
        type: 'GET',
        dataType: 'JSON',
        success:function(result){
          if (result.Status == true) {
            Swal.fire({
              position: 'top-end',
                type: 'success',
                title: result.Msg,
                showConfirmButton: false,
                timer: 1000
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    getManga();
               }
            })
          }else{
            Swal.fire({
              position: 'top-end',
                type: 'error',
                title: result.Msg,
                showConfirmButton: false,
                timer: 1000
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    getManga();
               }
            })
          }
        }
      });
            
    }else {
      Swal.fire({
        position: 'top-end',
          type: 'info',
          title: 'Data will be keep . . .',
          showConfirmButton: false,
          timer: 1000
      })
    }
  })
});

$(document).on('click', '.btnEdit', function(){
    method = 'edit';
    judulModal.html("Edit Manga");
    btnManga.html("Save Change");
    modalManga.modal("show");

    var edit_id = $(this).attr('dataID');

    $.ajax({
        url: '../manga/getDataEdit',
        data: {id:edit_id},
        type: 'POST',
        dataType: 'JSON',
        success:function(result){
            $('#id').val(result[0].id_manga);
            $('#Judul').val(result[0].judul_manga);
            $('#Sinopsis').val(result[0].alur_cerita);
            if (result[0].status == 0) {
                $('#Status').html('<option value="0" selected="">Ongoing</option><option value="1">Finish</option>');
            }else{
                $('#Status').html('<option value="0">Ongoing</option><option value="1" selected="">Finish</option>');
            }
            $('#Genre').val(result[0].genre);
            $('#Rating').val(result[0].rating);
            $('#Encoder').val(result[0].encoder);
            $('#Rating').val(result[0].rating);
            $('#Tgl').datepicker('setDate', result[0].published);
        }
    });
});


$(document).on('click', '#btn-chap', function() {
    event.preventDefault();
    var url;
    var base_url  = $('#formList').attr('link');
    var form      = document.querySelector("#formList");

    if(methodChap == 'add') {
        url = base_url+'manga/saveChap';
    }else {
        url = base_url+'manga/saveEditChap';
    }

    $('.progress').show();
    btnChap.disabled = true;

    $.ajax({
        xhr : function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener('progress', function(e){
                if(e.lengthComputable) {
                var percent = Math.round((e.loaded / e.total) * 100);

                $('.progress-bar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                }
            });
            return xhr;
        },
        url: url,
        data: new FormData(form),
        type: "POST",
        dataType: "JSON",
        processData:false,
            contentType:false,
            cache:false,
        success:function(result){
            $('.progress').hide();
            btnChap.disabled = false;
                  
            if (result.Status == false) {
                Swal.fire({
                    position: 'top-end',
                    type: 'error',
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1500
                })
            }else{
                modalChap.modal('hide');
                
                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        loadListChapter(ID);
                    }
                })
            }
        },
        error:function(jqXHR, textStatus, errorThrown) {
          alert('Error Add / Update Data');
        }
    });
});

$(document).on('click', '.btnHapusList', function(){
    Swal.fire({
        title: 'Are You Sure?',
        text: 'Delete This Data !!!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
          var no_id    = $(this).attr('dataID');
          var id_manga = $(this).attr('id_manga');

          $.ajax({
            url: "../Manga/deleteListChapter/"+no_id,
            type: 'GET',
            dataType: 'JSON',
            success:function(result){
              if (result.Status == true) {
                Swal.fire({
                  position: 'top-end',
                    type: 'success',
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1000
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                      loadListChapter(ID);
                   }
                })
              }else{
                Swal.fire({
                  position: 'top-end',
                    type: 'error',
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1000
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        loadListChapter(ID);
                   }
                })
              }
            }
          });
                
        }else {
          Swal.fire({
            position: 'top-end',
              type: 'info',
              title: 'Data will be keep . . .',
              showConfirmButton: false,
              timer: 1000
          })
        }
    })
});


$(document).on('click', '.btnEditList', function(){
    methodChap = "edit";
    
    btnChap.html("Save Edit List");
    judulModalChap.html("Edit List Anime");
    modalChap.modal("show");

    var edit_id = $(this).attr('dataID');
    $.ajax({
        url: '../Manga/getDataListChapter',
        data: {id:edit_id},
        type: 'POST',
        dataType: 'JSON',
        success:function(result){
            $('#no_id').val(result[0].no_id);
            $('#id_manga').val(result[0].id_manga);
            $('#judul_chapter').val(result[0].judul_chapter);
            $('#chapter').val(result[0].chapter);
            $('#link').val(result[0].link);
            $('#tgl_upload').datepicker('setDate', result[0].tgl_upload);
        }
    });
});