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
                        <a class="nav-link"  href="<?= base_url() ?>">Anime DB</a>
                    </li>
                    <li class="nav-item pr-2">
                        <a class="nav-link" href="<?= base_url('film') ?>">Film DB</a>
                    </li>
                    <!-- <li class="nav-item pr-2">
                        <a class="nav-link" href="">Series DB</a>
                    </li> -->
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
                
        <div class="row pt-2 pb-2">
            <div class="col-lg-9 main-body">
                <div class="" id="isi-data">
                    <!-- Deskripsi -->
                    <div class="col-lg-12 mt-4">
                        <h4 class="text-center">Deskripsi Manga</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Judul</th>
                                    <td><?= $manga[0]->judul_manga; ?></td>
                                </tr>
                                <tr>
                                    <th>Genre</th>
                                    <td><?= $manga[0]->genre; ?></td>
                                </tr>
                                <tr>
                                    <th>Sinopsis</th>
                                    <td><?= $manga[0]->alur_cerita; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Upload</th>
                                    <td><?= $manga[0]->published; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="list-chapter">
                    <div class="list">
                        <ol class="list-item">List Chapter
                            <?php foreach($chapter as $chap): ?>
                                <li><a class="list-object" href="<?= base_url('manga/view/'.$chap->no_id) ?>"><?= $chap->judul_chapter ?></a></li>
                            <?php endforeach; ?>
                            <!-- <?php for($i = 1; $i <= 50; $i++) : ?>
                                <li><a href="">Chapter <?= $i ?></a></li>
                            <?php endfor; ?> -->
                        </ol>
                    </div>
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
