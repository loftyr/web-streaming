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
                        <a class="nav-link active" href="<?= base_url('film') ?>">Film DB</a>
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
        <div class="row pt-2 pb-2">
            <div class="col-lg-9 main-body">
                <div id="result" class="loading">
                    
                </div>
                <div class="row mb-5" id="isi-data">
                    
                </div>
                <div class="paging">
                    <div class="col-sm-12" id="isi-paging">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 side-body">
                <h1 class="title-list text-center mr-2">Recommended Film</h1>

                <ul class="list-group mr-2">
                    <!-- <?php foreach ($ongoing as $data): ?>
                        <a href="home/anime/<?= $data->id_anime ?>" class="list-group-item"><?= $data->judul_anime ?></a>
                    <?php endforeach ?> -->
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