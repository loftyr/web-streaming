<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public $dataHeader;

    function __construct() {
        parent::__construct();
        $this->dataHeader = array(
            'class_show' => '', 
            'class_anime' => '',
            'class_film' => '',
            'class_series' => '',
            'class_manga' => '',
            'css' => '');
    }

    public function dashboard(){
        $data["active_link"]    = "home_v";

        $data['jml_anime']      = $this->anime_m->jml_anime();
        $data['jml_episode']    = $this->anime_m->jml_episode();

        $this->dataHeader["css"]    = "dashboard-home-style.css";
        $dataFooter['js']           = "dashboard-home-script.js"; //chart JS

        $this->load->view('templates/headerDasboard', $this->dataHeader);
        $this->load->view('admin/dashboard_v', $data);
        $this->load->view('templates/footerDasboard', $dataFooter);
    }

    // Anime
    public function PageAnime(){
        $data["active_link"]    = "anime_v";
        
        $this->dataHeader["class_show"]   = "show";
        $this->dataHeader["class_anime"]  = "active";

        $dataFooter['js']           = "dashboard-anime-script.js";

        $this->load->view('templates/headerDasboard', $this->dataHeader);
        $this->load->view('admin/dashboard_v', $data);
        $this->load->view('templates/footerDasboard', $dataFooter);
    }

    public function getAnime(){
        $data   = $this->anime_m->get_anime();
        $no     = 1;
        foreach ($data as $anime) {
            $status = $anime->status == 0 ? "Ongoing" : "Finish" ;
            echo '
                <tr>
                  <td>'.$no++.'</td>
                  <td>'.$anime->judul_anime.'</td>
                  <td>'.substr($anime->alur_cerita, 0, 100).'...</td>
                  <td>'.$anime->genre.'</td>
                  <td>'.$anime->studio.'</td>
                  <td>'.$status.'</td>
                  <td class="text-center">
                    <button dataID="'.$anime->id_anime.'" class="btn btn-secondary btn-sm mb-1 btnLihat">
                      <i class="fa fa-book"></i>
                    </button>
                    <button dataID="'.$anime->id_anime.'" class="btn btn-primary btn-sm mb-1 btnEdit">
                      <i class="fa fa-edit"></i>
                    </button>
                    <button dataID="'.$anime->id_anime.'" class="btn btn-danger btn-sm btnHapus">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>
            ';
        }
    }

    public function getDataEdit(){
        $id     = $this->input->post('id');
        $data   = $this->anime_m->get_anime_byId($id);

        echo json_encode($data);
    }

    public function getListEpsAnime(){
        $dataID     = $this->input->post('id');
        $data       = $this->anime_m->get_EpsAnime($dataID);

        echo json_encode($data);
    }

    public function getDataEditEpsAnime(){
        $id     = $this->input->post('id');
        $data   = $this->anime_m->get_EpsAnime_byId($id);

        echo json_encode($data);
    }

    // Akhir Anime

    // Film
    public function PageFilm(){
        $data["active_link"]    = "film_v";

        $this->dataHeader["class_show"]   = "show";
        $this->dataHeader["class_film"]   = "active";

        $dataFooter['js']           = "dashboard-film-script.js"; //

        $this->load->view('templates/headerDasboard', $this->dataHeader);
        $this->load->view('admin/dashboard_v', $data);
        $this->load->view('templates/footerDasboard', $dataFooter);
    }
    // Akhir Film

    // Manga
    public function PageManga(){
        $data["active_link"]    = "manga_v";

        $this->dataHeader["class_show"]   = "show";
        $this->dataHeader["class_manga"]  = "active";

        $this->dataHeader["css"]          = "";
        $dataFooter['js']                 = "dashboard-manga-script.js"; //

        $this->load->view('templates/headerDasboard', $this->dataHeader);
        $this->load->view('admin/dashboard_v', $data);
        $this->load->view('templates/footerDasboard', $dataFooter);
    }
    // Akhir Manga    
}
