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
                        <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Anime DB</a></li>
                        <a href="../anime/<?= $anime[0]->id_anime ?>" class="breadcrumb-item"><?= $anime[0]->judul_anime ?></a>
                        <li class="breadcrumb-item">Download</li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $anime[0]->judul_episode ?></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row pt-2 pb-2">
            <div class="col-lg-9 main-body">
                <div class="col-sm-12 text-center">
                    <h3><?= $anime[0]->judul_episode ?></h3>
                </div>
                <div class="col-sm-12 text-center">
                    <img class="shadow" width="320px" src="<?= base_url('file/upload/'.$anime[0]->url_img.'') ?>" alt="Image">
                </div>
                <div class="col-sm-12 mt-3">
                    <h4 class="text-center">Sinopsis</h4>
                    <p><?= $anime[0]->alur_cerita ?></p>
                </div>
                
                <div class="col-sm-12 mt-3"> <!-- Link -->
                    <h4 class="text-center">Link Download</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>720p</th>
                                <td>
                                    <?php if ($anime[0]->link_gd_fullhd != ''): ?>
                                        <a href="<?= $anime[0]->link_gd_fullhd ?>" class="btn btn-primary btn-sm">Google Drive</a>
                                    <?php else: ?>
                                        <a href="" class="btn btn-primary btn-sm disabled">Google Drive</a>
                                    <?php endif ?>
                                    
                                    <?php if ($anime[0]->link_zy_fullhd != ''): ?>
                                        <a href="<?= $anime[0]->link_zy_fullhd ?>" class="btn btn-primary btn-sm">Zippy</a>
                                    <?php else: ?>
                                        <a href="" class="btn btn-primary btn-sm disabled">Zippy</a>
                                    <?php endif ?>
                                    
                                <td>
                            </tr>
                            <tr>
                                <th>480p</th>
                                <td>
                                    <?php if ($anime[0]->link_gd_hd != ''): ?>
                                        <a href="<?= $anime[0]->link_gd_fullhd ?>" class="btn btn-primary btn-sm">Google Drive</a>
                                    <?php else: ?>
                                        <a href="" class="btn btn-primary btn-sm disabled">Google Drive</a>
                                    <?php endif ?>
                                    
                                    <?php if ($anime[0]->link_zy_hd != ''): ?>
                                        <a href="<?= $anime[0]->link_zy_fullhd ?>" class="btn btn-primary btn-sm">Zippy</a>
                                    <?php else: ?>
                                        <a href="" class="btn btn-primary btn-sm disabled">Zippy</a>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <th>360p</th>
                                <td>
                                    <?php if ($anime[0]->link_gd_mhd != ''): ?>
                                        <a href="<?= $anime[0]->link_gd_fullhd ?>" class="btn btn-primary btn-sm">Google Drive</a>
                                    <?php else: ?>
                                        <a href="" class="btn btn-primary btn-sm disabled">Google Drive</a>
                                    <?php endif ?>
                                    
                                    <?php if ($anime[0]->link_zy_mhd != ''): ?>
                                        <a href="<?= $anime[0]->link_zy_fullhd ?>" class="btn btn-primary btn-sm">Zippy</a>
                                    <?php else: ?>
                                        <a href="" class="btn btn-primary btn-sm disabled">Zippy</a>
                                    <?php endif ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- Akhir Link -->

                <div id="line-side-body">
        
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