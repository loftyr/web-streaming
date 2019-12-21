

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
                <div id="line-side-body">
        
                </div>
            </div>
            <div class="col-lg-3 side-body">
                <h1 class="title-list text-center mr-2">Anime Ongoing</h1>

                <ul class="list-group mr-2">
                    <?php foreach ($ongoing as $data): ?>
                        <a href="home/anime/<?= $data->id_anime ?>" class="list-group-item"><?= $data->judul_anime ?></a>
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


    
</div> <!-- Akhir container