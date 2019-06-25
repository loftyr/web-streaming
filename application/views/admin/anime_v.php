<ul class="nav nav-tabs" id="tab-anime" role="tablist">
  <li class="nav-item">
    <a href="#thread" class="nav-link active" id="list-thread" data-toggle="tab" role="tab">Anime</a>
  </li>
  <li class="nav-item">
    <a href="#detail-thread" class="nav-link" id="d-thread" data-toggle="tab" role="tab">List Anime</a>
  </li>
</ul>
<!-- List All Thread -->
<div class="tab-content" id="content-tabs">
  <!-- Tabs Thread -->
  <div class="tab-pane fade show active" id="thread" role="tabpanel">
    <div class="card shadow mb-4">
      <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Thread</h6>
      </div> -->
      <div class="col-sm-4 mt-2">
        <button class="btn btn-primary btn-tambah" id="add-anime">Add</button>
      </div>
      <div class="card-body"> <!-- Start 1 -->
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Alur Cerita</th>
                <th>Genre</th>
                <th>Studio</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="list-anime">
              
            </tbody>
          </table>
        </div>
      </div> <!-- End 1 -->
    </div>
  </div>
  <!-- Akhir Tab Thread -->
  
  <!-- Tab Detail Thread -->
  <div class="tab-pane fade" id="detail-thread" role="tabpanel">
    <div class="card shadow mb-4">
      <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Thread</h6>
      </div> -->
      <div class="col-sm-4 mt-2">
        <button class="btn btn-primary btn-posting" id="add-list">Tambah List</button>
      </div>
      <div class="card-body"> <!-- Start 1 -->
        <div class="table-responsive">
          <table class="table table-bordered" id="table-list" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Episode</th>
                <th>Tanggal</th>
                <th>Link Streaming</th>
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
<div class="modal fade" tabindex="-1" id="modal-anime" role="dialog">
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
          <!-- <div class="form-group">
            <label for="Tgl">Tanggal Upload</label>
            <input type="text" class="form-control tgl-entry col-sm-3" id="Tgl" name="Tgl" autocomplete="off">
          </div> -->
          <div class="form-group">
              <label for="Genre">Genre</label>
              <input type="text" class="form-control" id="Genre" name="Genre">
          </div>
          <div class="form-group">
              <label for="Studio">Studio</label>
              <input type="text" class="form-control" id="Studio" name="Studio">
          </div>
          <div class="form-group">
              <label for="Uploader">Uploader</label>
              <input type="text" class="form-control" id="Uploader" name="Uploader">
          </div>
          <div class="form-group">
              <label for="Encoder">Encoder</label>
              <input type="text" class="form-control" id="Encoder" name="Encoder">
          </div>
          <div class="form-group">
              <label for="Rating">Rating</label>
              <input type="text" class="form-control" id="Rating" name="Rating">
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

<!-- Modal List Anime -->
<div class="modal fade" tabindex="-1" id="modal-list" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- Bagian Judul Modal -->
      <div class="modal-header">
        <h5 class="modal-title" id="title-modal-list">Modal</h5>

        <button class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Akhir Bagian -->

      <!-- Bagian Body Modal -->
      <div class="modal-body">
        <form action="" id="formList" link="<?= base_url(); ?>" enctype="multipart/form-data">
          <input type="hidden"  value="" id="id_anime" name="id_anime">
          <input type="hidden"  value="" id="no_id" name="no_id">
          <div class="form-group">
            <label for="Episode">Episode</label>
            <input type="text" class="form-control" id="Episode" name="Episode">
          </div>
          <div class="form-group">
            <label for="Jdl_Episode">Judul Episode</label>
            <input type="text" class="form-control" id="Jdl_Episode" name="Jdl_Episode">
          </div>

          <div class="border p-1 mb-2 rounded">
            <div class="form-group">
              <label for="link_gd_fullhd">Link Google Drive FullHD</label>
              <input type="text" class="form-control" id="link_gd_fullhd" name="link_gd_fullhd">
            </div>
            <div class="form-group">
              <label for="link_gd_hd">Link Google Drive HD</label>
              <input type="text" class="form-control" id="link_gd_hd" name="link_gd_hd">
            </div>
            <div class="form-group">
              <label for="link_gd_mhd">Link Google Drive MHD</label>
              <input type="text" class="form-control" id="link_gd_mhd" name="link_gd_mhd">
            </div>
          </div>
          <div class="border p-1 rounded">
            <div class="form-group">
              <label for="link_zy_fullhd">Link ZippyShare FullHD</label>
              <input type="text" class="form-control" id="link_zy_fullhd" name="link_zy_fullhd">
            </div>
            <div class="form-group">
              <label for="link_zy_hd">Link ZippyShare HD</label>
              <input type="text" class="form-control" id="link_zy_hd" name="link_zy_hd">
            </div>
            <div class="form-group">
              <label for="link_zy_mhd">Link ZippyShare MHD</label>
              <input type="text" class="form-control" id="link_zy_mhd" name="link_zy_mhd">
            </div>
          </div>
          <div class="form-group">
              <label for="Streaming">Link Streaming</label>
              <input type="text" class="form-control" id="Streaming" name="Streaming">
          </div>
          <div class="form-group">
            <label for="upload">Tanggal Upload</label>
            <input type="text" class="form-control tgl-entry col-sm-3" id="upload" name="upload" autocomplete="off">
          </div>
        </form>
      </div>
      <!-- Akhir Bagian -->

      <!-- Bagian Footer Modal -->
      <div class="modal-footer">
        <button class="btn btn-primary" id="save-list">Save</button>
      </div>
      <!-- Akhir Bagian -->
    </div>
  </div>  
</div>
<!-- Akhir Modal List Anime-->