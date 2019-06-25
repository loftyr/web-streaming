<div class="container"> <!-- Awal container -->
    <div id="header" class="shadow"> <!-- Awal Header -->
        <div id="logo">
            <a class="navbar-brand logo-btn" href="<?= base_url() ?>">&#10023; Nonton Full &#10023;</a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light"> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#homenav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="homenav">
                <ul class="navbar-nav">
                    <li class="nav-item pr-2">
                        <a class="nav-link" href="<?= base_url() ?>">Anime DB</a>
                    </li>
                    <li class="nav-item pr-2">
                        <a class="nav-link" href="<?= base_url('film') ?>">Film DB</a>
                    </li>
                    <li class="nav-item pr-2">
                        <a class="nav-link" href="">Series DB</a>
                    </li>
                    <li class="nav-item pr-2">
                        <a class="nav-link" href="">Support Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Request</a>
                    </li>
                </ul>
            </div>
            <div class="justify-content-between">
                <div class="search-box">
                    <input type="text" class="search-txt" name="" placeholder="Input Search Key">
                    <button class="search-btn"><span class="fas fa-search"></span></button>
                </div>
            </div>
        </nav> 
    </div> <!-- Akhir Header -->
    <div id="batas-header">
        
    </div>

    <div id="body" class="shadow">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('film') ?>">Film DB</a>
                        </li>
                        <li class="breadcrumb-item">Play</li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $result[0]->judul_film; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row pt-2 pb-2">
            <div class="col-lg-9 main-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <?php if ($result[0]->link_streaming == null): ?>
                        <div class="text-center position-top alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Maaf</strong> Link Streaming Tidak Ditemukan.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php else: ?>
                        <iframe class="" src="<?= $result[0]->link_streaming ?>" frameborder="0" allowfullscreen></iframe>
                    <?php endif ?>
                </div>

                <!-- Deskripsi -->
                <div class="col-lg-12 mt-4">
                    <h4 class="text-center">Deskripsi</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Judul</th>
                                <td><?= $result[0]->judul_film; ?></td>
                            </tr>
                            <tr>
                                <th>Genre</th>
                                <td><?= $result[0]->genre; ?></td>
                            </tr>
                            <tr>
                                <th>Sinopsis</th>
                                <td><?= $result[0]->alur_cerita; ?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td><?= $result[0]->tahun ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Upload</th>
                                <td><?= $result[0]->tgl_upload; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="col-lg-3 side-body">
                <h1 class="title-list text-center mr-2">Recommended Film</h1>

                <ul class="list-group mr-2">
                    <?php foreach ($recom as $data): ?>
                        <a href="../../play/film/<?= $data->id_film ?>" class="list-group-item"><?= $data->judul_film ?></a>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <div id="footer" class="">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-white text-center mt-4">&copy; Anime DB</p>
            </div>
        </div>
    </div>
</div> <!-- Akhir container -->