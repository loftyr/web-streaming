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
                        <li class="breadcrumb-item"><a href="<?= base_url('manga') ?>">Manga DB</a></li>
                        <li class="breadcrumb-item">View</li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $manga[0]->judul_chapter; ?></li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Deskripsi -->
        <div class="col-lg-12 mt-4">
            <h4 class="text-center">Deskripsi Manga</h4>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Judul</th>
                        <td><?= $manga[0]->judul_chapter; ?></td>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Sinopsis</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Tanggal Upload</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="row pt-2 pb-2">
            <div class="col-lg-12 main-body">
                <div class="mb-5" id="isi-data">
                    <div class="view">
                        <!-- <iframe class="view-manga" frameborder="0" src="" allowfullscreen scrolling='auto'></iframe> -->
                        <iframe class="view-manga" frameborder="0" src="<?= $manga[0]->link; ?>" allowfullscreen scrolling='auto'></iframe>
                    </div>
                </div>
                <div class="paging">
                    
                </div>
                <div id="line-side-body">
        
                </div>
            </div>
        </div>

        <div id="view-paging" class="">
            <a href="" class="prev btn btn-outline-primary disabled">
                <span class="fas fa-arrow-alt-circle-left"></span>
                Prev
            </a>

            <a href="" class="next btn btn-outline-primary disabled" >
                Next
                <span class="fas fa-arrow-alt-circle-right"></span>
            </a>
        </div>

        <!-- Top -->
        <div class="top">
            <button class="btn-top">
                <i class="far fa-arrow-alt-circle-up"></i>
            </button>
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

