
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
                                    <a class="judul" href="<?= base_url('manga/chapter/'.$data->id_manga) ?>"><?= $data->judul_manga ?></a>
                                    <div class="genre">
                                        <?= $data->genre ?>
                                    </div>
                                    <div class="sinopsis">
                                        <?= substr($data->alur_cerita, 0, 255) ?> . . .
                                    </div>
                                </div>
                                <div class="bagian-bawah align-items-end">
                                    <!-- <div class="chap">
                                        <a href="">Chapter 1</a>
                                    </div> -->
                                    <div class="pt-3">
                                        <button dataURL="<?= base_url(''.$data->id_manga) ?>" class="myButton mr-2 all-chap" dataID="$data->id_manga">All Chapter</button>
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
