var method;
var methodList;
var ID;
const modalView   = $('#modal-anime');
const modalList   = $('#modal-list');
const btnAdd      = document.querySelector('#add-anime');
const btnSave     = document.querySelector('#btn-save');
const btn_save    = $('#btn-save');
const btn_saveList= $('#save-list');
const judulModal  = $('#title-modal');
const jdlModalList= $('#title-modal-list');
const btnAddList  = document.querySelector('#add-list');
const btnSaveList = document.querySelector('#save-list');

function loadListAnime(id_anime){
  $('#table-detail').html('<tr class="animated fadeIn"><td colspan="7" class="text-center"><img src="../file/app/loading-2.gif" alt=""></td></tr>');
  // $('#tab-anime a[href="#detail-thread"]').tab('show');
  
  $.ajax({
      url: 'getListEpsAnime',
      data: {id:id_anime},
      type: 'POST',
      dataType: 'JSON',
      success:function(result){
          $('#table-list').DataTable().destroy();
          $('#table-detail').html('');
          draw_data(result);
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

function getData(){
  $('#list-anime').html('<tr class="animated fadeIn"><td colspan="7" class="text-center"><img src="../file/app/loading-2.gif" alt=""></td></tr>');
  $.ajax({
      url: 'getAnime',
      type: 'POST',
      success:function(data){
          $('#list-anime').html(data);
          $('#dataTable').DataTable();
      }
  });
}

$("input#Img").change(function() {
  previewImage(this); 
});

$(document).ready(function(){
  $('.tgl-entry').datepicker({dateFormat: 'yy-mm-dd', maxDate: '0'});
  $('.modal').on('hidden.bs.modal', function(e){
    $(this).find('form').trigger('reset');
    $('img.img-preview').attr('src', '');
  });

  getData();
    
  $('#table-list').DataTable();
});

function draw_data(result){
    var no = 0;

    for (index in result){
        var id_anime= result[index].id_anime;
        var id      = result[index].no_id;
        var judul   = result[index].judul_episode;
        var episode = result[index].episode;
        var linkstreaming = result[index].link_streaming;
        var tgl     = result[index].tgl_upload;
        no += 1;

        var tr  = '<tr>';
        tr      += '<td>'+ no +'</td>';
        tr      += '<td>'+ judul +'</td>';
        tr      += '<td>'+ episode +'</td>';
        tr      += '<td>'+ tgl +'</td>';
        tr      += '<td>'+ linkstreaming.substr(0, 50) +' ...</td>';
        tr      += '<td>';
        tr      += '<div class="row"><div class="col-sm-12"><button id_anime="'+id_anime+'" dataID="'+id+'" class="btn btn-danger btn-sm mb-1 btnHapusList"> <i class="fa fa-trash"></i></button></div></div>';
        tr      += '<div class="row"><div class="col-sm-12"><button dataID="'+id+'" class="btn btn-info btn-sm mb-1 btnEditList"> <i class="fa fa-edit"></i></button></div></div>';
        tr      += '</td>'
        tr      += '</tr>'

        $('#table-detail').append(tr);
    }

    $('#table-list').DataTable();
}

$(document).on('click', '.btnLihat', function(){
    $('#table-detail').html('<tr class="animated fadeIn"><td colspan="7" class="text-center"><img src="../file/app/loading-2.gif" alt=""></td></tr>');
    $('#tab-anime a[href="#detail-thread"]').tab('show');

    ID = $(this).attr('dataID');

    $.ajax({
        url: 'getListEpsAnime',
        data: {id:ID},
        type: 'POST',
        dataType: 'JSON',
        success:function(result){
            $('#table-list').DataTable().destroy();
            $('#table-detail').html('');
            draw_data(result);
        }
    });
});

$(document).on('click', '.btnEdit', function(){
    method = "edit";
    judulModal.html("Edit Anime");
    btn_save.html("Save Edit");
    modalView.modal("show");

    var edit_id = $(this).attr('dataID');

    $.ajax({
        url: 'getDataEdit',
        data: {id:edit_id},
        type: 'POST',
        dataType: 'JSON',
        success:function(result){
          $('#id').val(result[0].id_anime);
          $('#Judul').val(result[0].judul_anime);
          $('#Sinopsis').val(result[0].alur_cerita);
          if (result[0].status == 0) {
            $('#Status').html('<option value="0" selected="">Ongoing</option><option value="1">Finish</option>');
          }else{
            $('#Status').html('<option value="0">Ongoing</option><option value="1" selected="">Finish</option>');
          }
          $('#Genre').val(result[0].genre);
          $('#Studio').val(result[0].studio);
          $('#Uploader').val(result[0].uploader);
          $('#Encoder').val(result[0].encoder);
        }
    });
});

$(document).on('click', '#add-anime', function(){
  method = 'add';

  judulModal.html("Add Anime");
  btn_save.html("Save Data");
  modalView.modal("show");
});

btnAddList.addEventListener('click', function(){
  methodList = 'add';
  $('#id_anime').val(ID);

  btn_saveList.html("Save List Data");
  jdlModalList.html("Add List Anime");
  modalList.modal("show");
});

$(document).on('click', '#btn-save', function(event){
  event.preventDefault();
  var url;
  var base_url  = $('#form').attr('link');
  var form      = document.querySelector("#form");

  if(method == 'add') {
    url = base_url+'anime/save';
  }else {
    url = base_url+'anime/saveEdit';
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
      console.log(result.MsgUpload);
      
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
              window.location.reload();
           }
        })
        // window.location.reload();
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
        url: "../Anime/deleteAnime/"+id,
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
                  window.location.reload();
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
                  window.location.reload();
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

btnSaveList.addEventListener('click', function(){
  var id_anime = document.getElementById('id_anime').value;
  
  var url;
  var base_url  = $('#formList').attr('link');
  var form      = document.querySelector("#formList");

  if(methodList == 'add') {
    url = base_url+'anime/saveList';
  }else {
    url = base_url+'anime/saveEditList';
  }

  btnSaveList.disabled = true;

  $.ajax({
    url: url,
    data: new FormData(form),
    type: "POST",
    dataType: "JSON",
    processData:false,
        contentType:false,
        cache:false,
    success:function(result){
      btnSaveList.disabled = false;
      
      if (result.Status == false) {
        Swal.fire({
          position: 'top-end',
            type: 'error',
            title: result.Msg,
            showConfirmButton: false,
            timer: 1500
        })
      }else{
        modalList.modal('hide');
        
        Swal.fire({
          position: 'top-end',
            type: 'success',
            title: result.Msg,
            showConfirmButton: false,
            timer: 1500
        }).then((hasil) => {
            if (hasil.dismiss === Swal.DismissReason.timer) {
              loadListAnime(id_anime);
           }
        })
        // window.location.reload();
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
      var id       = $(this).attr('dataID');
      var id_anime = $(this).attr('id_anime');

      $.ajax({
        url: "../Anime/deleteAnimeList/"+id,
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
                  loadListAnime(id_anime);
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
                  window.location.reload();
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
    methodList = "edit";
    
    btn_saveList.html("Save Edit List");
    jdlModalList.html("Edit List Anime");
    modalList.modal("show");

    var edit_id = $(this).attr('dataID');
    $.ajax({
        url: 'getDataEditEpsAnime',
        data: {id:edit_id},
        type: 'POST',
        dataType: 'JSON',
        success:function(result){
          $('#id_anime').val(result[0].id_anime);
          $('#no_id').val(result[0].no_id);
          $('#Episode').val(result[0].episode);
          $('#Jdl_Episode').val(result[0].judul_episode);
          $('#link_gd_fullhd').val(result[0].link_gd_fullhd);
          $('#link_gd_hd').val(result[0].link_gd_hd);
          $('#link_gd_mhd').val(result[0].link_gd_mhd);
          $('#link_zy_fullhd').val(result[0].link_zy_fullhd);
          $('#link_zy_hd').val(result[0].link_zy_hd);
          $('#link_zy_mhd').val(result[0].link_zy_mhd);
          $('#Streaming').val(result[0].link_streaming);
          $('#upload').datepicker('setDate', result[0].tgl_upload);
        }
    });
});