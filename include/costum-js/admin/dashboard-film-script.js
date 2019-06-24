var method;
var ID;
const modalView   = $('#modal-film');
const btnAdd      = document.querySelector('#add-film');
const btnSave     = document.querySelector('#btn-save');
const btn_save    = $('#btn-save');
const judulModal  = $('#title-modal');

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

function getData(){
    $('#dataTable').DataTable().destroy();

    $('#list-film').html('<tr class="animated fadeIn"><td colspan="7" class="text-center"><img src="../file/app/loading-2.gif" alt=""></td></tr>');
    $.ajax({
        url: '../film/getFilm',
        type: 'POST',
        success:function(data){
            $('#list-film').html(data);
            $('#dataTable').DataTable();
        }
    });
}

$(document).ready(function(){
    $('.tgl-entry').datepicker({dateFormat: 'yy-mm-dd', maxDate: '0'});

    $('.modal').on('hidden.bs.modal', function(e){
        $(this).find('form').trigger('reset');
        $('img.img-preview').attr('src', '');
    });
    getData();

});


btnAdd.addEventListener('click', function(){
    method = 'add';

    judulModal.html("Add Film");
    btn_save.html("Save Data");
    modalView.modal("show");
});

btnSave.addEventListener('click', function(){
    event.preventDefault();
    var url;
    var base_url  = $('#form').attr('link');
    var form      = document.querySelector("#form");

    if(method == 'add') {
        url = base_url+'film/save';
    }else {
        url = base_url+'film/saveEdit';
    }

    $('.progress').show();
    btnSave.disabled = true;

    $.ajax({
        xhr : function() {
          var xhr = new window.XMLHttpRequest();
          xhr.upload.addEventListener('progress', function(e){
            if(e.lengthComputable) {
              // console.log('Bytes Load : ' + e.loaded);
              // console.log('Total Size : ' + e.total);
              // console.log('Persen : ' + (e.loaded / e.total));
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
            btnSave.disabled = false;
          
            if (result.Status == false) {
                Swal.fire({
                    position: 'top-end',
                    type: 'error',
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1500
                })
            }else{
                modalView.modal('hide');
                
                Swal.fire({
                  position: 'top-end',
                    type: 'success',
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        getData();
                   }
                })
            }
        },
        error:function(jqXHR, textStatus, errorThrown) {
            alert('Error Add / Update Data');
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
                url: "../film/deleteFilm/"+id,
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
                                getData();
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
                                getData();
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
    method = "edit";
    judulModal.html("Edit Anime");
    btn_save.html("Save Edit");
    modalView.modal("show");

    var edit_id = $(this).attr('dataID');

    $.ajax({
        url: '../film/getDataEditFilm',
        data: {id:edit_id},
        type: 'POST',
        dataType: 'JSON',
        success:function(result){
            $('#id').val(result[0].id_film);
            $('#Judul').val(result[0].judul_film);
            $('#Sinopsis').val(result[0].alur_cerita);
            $('#Genre').val(result[0].genre);
            $('#Tahun').val(result[0].tahun);
            $('#Kualitas').val(result[0].kualitas);
            $('#Rating').val(result[0].rating);
            $('#Streaming').val(result[0].link_streaming);
            $('#Tgl').datepicker('setDate', result[0].tgl_upload);
        }
    });
});
