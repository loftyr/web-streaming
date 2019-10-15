<ul class="nav nav-tabs" id="tab-manga" role="tablist">
  <li class="nav-item">
    <a href="#list-manga" class="nav-link active" id="manga" data-toggle="tab" role="tab">Manga</a>
  </li>
  <li class="nav-item">
    <a href="#chapter-manga" class="nav-link" id="chap-manga" data-toggle="tab" role="tab">List Chapter Manga</a>
  </li>
</ul>
<!-- List All Manga -->
<div class="tab-content" id="content-tabs">
  <!-- Tabs Manga -->
  <div class="tab-pane fade show active" id="list-manga" role="tabpanel">
    <div class="card shadow mb-4">
      <div class="col-sm-4 mt-2">
        <button class="btn btn-primary btn-tambah" id="add-manga">Tambah Manga</button>
      </div>
      <div class="card-body"> <!-- Start 1 -->
        <div class="table-responsive">
          <table class="table table-bordered" id="tabel-manga" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Alur Cerita</th>
                <th>Genre</th>
                <th>Published</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="body-manga">
              
            </tbody>
          </table>
        </div>
      </div> <!-- End 1 -->
    </div>
  </div>
  <!-- Akhir Tab Thread -->
  
  <!-- Tab Detail Thread -->
  <div class="tab-pane fade" id="chapter-manga" role="tabpanel">
    <div class="card shadow mb-4">
      <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Thread</h6>
      </div> -->
      <div class="col-sm-4 mt-2">
        <button class="btn btn-primary btn-posting" id="add-chapter">Tambah Chapter</button>
      </div>
      <div class="card-body"> <!-- Start 1 -->
        <div class="table-responsive">
          <table class="table table-bordered" id="tabel-list" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul Chapter</th>
                <th>Chapter</th>
                <th>Link</th>
                <th>Tanggal Upload</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="table-detail">
                
            </tbody>
          </table>
        </div>
      </div> <!-- End 1 -->
    </div>
  </div>
  <!-- Akhir Detail Thread -->
</div>
<!-- Akhir List Thread -->

<!-- Modal -->
<div class="modal fade" tabindex="-1" id="modal-manga" role="dialog">
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
            <label for="Status">Status</label>
            <select class="form-control col-sm-3" id="Status" name="Status">
                <option value="0">Ongoing</option>
                <option value="1">Finish</option>
            </select>
          </div>
          <div class="form-group">
              <label for="Genre">Genre</label>
              <input type="text" class="form-control" id="Genre" name="Genre">
          </div>
          <div class="form-group">
              <label for="Rating">Rating</label>
              <input type="text" class="form-control col-sm-3" id="Rating" name="Rating">
          </div>
          <div class="form-group">
            <label for="Tgl">Tanggal Published</label>
            <input type="text" class="form-control tgl-entry col-sm-3" id="Tgl" name="Tgl" autocomplete="off">
          </div>
          <!-- <div class="form-group">
              <label for="Encoder">Credit</label>
              <input type="text" class="form-control" id="Encoder" name="Encoder">
          </div> -->
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
        <button class="btn btn-primary" id="btn-manga">Save</button>
      </div>
      <!-- Akhir Bagian -->
    </div>
  </div>  
</div>
<!-- Akhir Modal-->

<!-- Modal List Anime -->
<div class="modal fade" tabindex="-1" id="modal-chap" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- Bagian Judul Modal -->
      <div class="modal-header">
        <h5 class="modal-title" id="title-modal-chap">Modal</h5>

        <button class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Akhir Bagian -->

      <!-- Bagian Body Modal -->
      <div class="modal-body">
        <form action="" id="formList" link="<?= base_url(); ?>" enctype="multipart/form-data">
          <input type="hidden"  value="" id="no_id" name="no_id">
          <input type="hidden"  value="" id="id_manga" name="id_manga">
          <div class="form-group">
            <label for="judul_chapter">Judul Chapter</label>
            <input type="text" class="form-control" id="judul_chapter" name="judul_chapter">
          </div>
          <div class="form-group">
            <label for="chapter">Chapter</label>
            <input type="text" class="form-control" id="chapter" name="chapter">
          </div>
          <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link">
          </div>
          <div class="form-group">
            <label for="tgl_upload">Tanggal Upload</label>
            <input type="text" class="form-control tgl-entry col-sm-3" id="tgl_upload" name="tgl_upload" autocomplete="off">
          </div>
        </form>
        
        <!-- Loading -->
        <div class="progress" style="display: none;">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
      <!-- Akhir Bagian -->

      <!-- Bagian Footer Modal -->
      <div class="modal-footer">
        <button class="btn btn-primary" id="btn-chap">Save</button>
      </div>
      <!-- Akhir Bagian -->
    </div>
  </div>  
</div>
<!-- Akhir Modal List Anime-->