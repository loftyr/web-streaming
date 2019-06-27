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
                        <a class="nav-link" href="<?= base_url('manga') ?>">Manga DB</a>
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
                        <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Anime DB</a></li>
                        <a href="<?= base_url('home/anime/'.$result[0]->id_anime.'') ?>" class="breadcrumb-item"><?= $result[0]->judul_anime; ?></a>
                        <li class="breadcrumb-item">Play</li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $result[0]->judul_episode; ?></li>
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

                <div id="play-paging" class="pt-2 text-center">
                    <?php if ($prev == null): ?>
                        <a href="" class="btn btn-outline-primary disabled">
                            <span class="fas fa-arrow-alt-circle-left"></span>
                            Prev
                        </a>
                    <?php else: ?>
                        <a href="<?= $prev[0]->no_id ?>" class="btn btn-outline-primary">
                            <span class="fas fa-arrow-alt-circle-left"></span>
                            Prev
                        </a>
                    <?php endif ?>
                    <span class="btn">Episode <?= $result[0]->episode ?></span>
                    <?php if ($next == null): ?>
                        <a href="" class="btn btn-outline-primary disabled" >
                            Next
                            <span class="fas fa-arrow-alt-circle-right"></span>
                        </a>
                    <?php else: ?>
                        <a href="<?= $next[0]->no_id ?>" class="btn btn-outline-primary">
                            Next
                            <span class="fas fa-arrow-alt-circle-right"></span>
                        </a>
                    <?php endif ?>
                </div>

                <!-- Deskripsi -->
                <div class="col-lg-12 mt-4">
                    <h4 class="text-center">Deskripsi</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Judul</th>
                                <td><?= $result[0]->judul_episode; ?></td>
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
                                <th>Tanggal Upload</th>
                                <td><?= $result[0]->tgl_upload; ?></td>
                            </tr>
                            <tr>
                                <th>Studio</th>
                                <td><?= $result[0]->studio = 'NULL' ? '-' : $result->studio ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="col-lg-3 side-body">
                <h1 class="title-list text-center mr-2">Anime Ongoing</h1>

                <ul class="list-group mr-2">
                    <?php foreach ($ongoing as $data): ?>
                        <a href="../../home/anime/<?= $data->id_anime ?>" class="list-group-item"><?= $data->judul_anime ?></a>
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