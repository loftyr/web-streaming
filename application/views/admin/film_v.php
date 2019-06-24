<ul class="nav nav-tabs" id="tab-film" role="tablist">
  <li class="nav-item">
    <a href="#film" class="nav-link active" data-toggle="tab" role="tab">Film</a>
  </li>
</ul>
<!-- List All Thread -->
<div class="tab-content" id="content-tabs">
  <!-- Tabs Thread -->
  <div class="tab-pane fade show active" id="film" role="tabpanel">
    <div class="card shadow mb-4">
      <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Thread</h6>
      </div> -->
      <div class="col-sm-4 mt-2">
        <button class="btn btn-primary btn-tambah" id="add-film">Add Film</button>
      </div>
      <div class="card-body"> <!-- Start 1 -->
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="width: 20px;">No</th>
                <th>Judul</th>
                <th>Tahun</th>
                <th>Kualitas</th>
                <th>Rating</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="list-film">
              
            </tbody>
          </table>
        </div>
      </div> <!-- End 1 -->
    </div>
  </div>
  <!-- Akhir Tab Thread -->
</div>
<!-- Akhir List Thread -->

<!-- Modal -->
<div class="modal fade" tabindex="-1" id="modal-film" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- Bagian Judul Modal -->
      <div class="modal-header">
        <h5 class="modal-title" id="title-modal">Modal</h5>

        <button class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Akhir Bagian -->

      <!-- Bagian Body Modal -->
      <div class="modal-body">
        <form action="" id="form" link="<?= base_url(); ?>" enctype="multipart/form-data">
          <input type="hidden"  value="" id="id" name="id">
          <div class="form-group">
            <label for="Judul">Judul</label>
            <input type="text" class="form-control" id="Judul" name="Judul">
          </div>
          <div class="form-group">
            <label for="Sinopsis">Sinopsis</label>
            <textarea class="form-control" name="Sinopsis" id="Sinopsis" rows="3"></textarea>
          </div>
          <div class="form-group">
              <label for="Genre">Genre</label>
              <input type="text" class="form-control" id="Genre" name="Genre">
          </div>
          <div class="form-group">
              <label for="Tahun">Tahun</label>
              <input type="text" class="form-control" id="Tahun" name="Tahun">
          </div>
          <div class="form-group">
              <label for="Kualitas">Kualitas</label>
              <input type="text" class="form-control" id="Kualitas" name="Kualitas">
          </div>
          <div class="form-group">
              <label for="Rating">Rating</label>
              <input type="text" class="form-control" id="Rating" name="Rating">
          </div>
          <div class="form-group">
              <label for="Streaming">Streaming</label>
              <input type="text" class="form-control" id="Streaming" name="Streaming">
          </div>
          <div class="form-group">
            <label for="Tgl">Tanggal Upload</label>
            <input type="text" class="form-control tgl-entry col-sm-3" id="Tgl" name="Tgl" autocomplete="off" value="<?= date('Y-m-d'); ?>">
          </div>
          <div class="form-group">
            <label for="Img">Image</label>
            <input type="file" class="form-control-file col-sm-4" id="Img" name="Img">
            <img src="" class="img-preview">
            <small id="info" class="form-text text-muted">Max Ukuran Image 250 x 150</small>
          </div>
        </form>

        <div class="progress" style="display: none;">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
      <!-- Akhir Bagian -->

      <!-- Bagian Footer Modal -->
      <div class="modal-footer">
        <button class="btn btn-primary" id="btn-save">Save</button>
      </div>
      <!-- Akhir Bagian -->
    </div>
  </div>  
</div>
<!-- Akhir Modal-->
