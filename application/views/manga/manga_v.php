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
                    <!-- <li class="nav-item pr-2">
                        <a class="nav-link" href="">Series DB</a>
                    </li> -->
                    <li class="nav-item pr-2">
                        <a class="nav-link aktif" href="<?= base_url('manga') ?>">Manga DB</a>
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
        <div class="row pt-2 pb-2">
            <div class="col-lg-9 main-body">
                <div class="" id="isi-data">
                    
                    <?php foreach ($manga as $data): ?>
                        <div class="card-list mb-3 ml-2 animated zoomIn delay-0'+delay+'s flex-container">
                            <div class="img-list">
                                <img class="img" src="<?= base_url('file/upload/'.$data->url_img) ?>" alt="Gambar">
                            </div>
                            <div class="info-card pl-2">
                                <div class="bagian-atas align-items-start">
                                    <a class="judul" href="<?= base_url('data/chapter/') ?>"><?= $data->judul_manga ?></a>
                                    <div class="genre">
                                        <?= $data->genre ?>
                                    </div>
                                    <div class="sinopsis">
                                        <?= substr($data->alur_cerita, 0, 255) ?> . . .
                                    </div>
                                </div>
                                <div class="bagian-bawah align-items-end">
                                    <div class="chap">
                                        <a href="">Chapter 1</a>
                                    </div>
                                    <div class="chap">
                                        <a href="">Chapter 2</a>
                                    </div>
                                    <div class="chap">
                                        <a href="">Chapter 3</a>
                                    </div>
                                    
                                    <div class="pt-3">
                                        <button dataURL="<?= base_url() ?>" class="myButton mr-2 all-chap" dataID="'+result[index].no_id+'">All Chapter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
                <div class="paging">
                    
                </div>
                <div id="line-side-body">
        
                </div>
            </div>
            <div class="col-lg-3 side-body">
                <h1 class="title-list text-center mr-2">Last Update</h1>

                <ul class="list-group mr-2">
                    
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
