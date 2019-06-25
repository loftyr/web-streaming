<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function dashboard(){
        $data["active_link"]    = "home_v";

        $data['jml_anime']      = $this->anime_m->jml_anime();
        $data['jml_episode']    = $this->anime_m->jml_episode();

        $dataHeader["class_show"]   = "";
        $dataHeader["class_anime"]  = "";
        $dataHeader["class_film"]   = "";
        $dataHeader["class_series"] = "";

        $dataHeader["css"]          = "dashboard-home-style.css";
        $dataFooter['js']           = "dashboard-home-script.js";

        $this->load->view('templates/headerDasboard', $dataHeader);
        $this->load->view('admin/dashboard_v', $data);
        $this->load->view('templates/footerDasboard', $dataFooter);
    }

    // Anime
    public function PageAnime(){
        $data["active_link"]    = "anime_v";
        
        $dataHeader["class_show"]   = "show";
        $dataHeader["class_anime"]  = "active";
        $dataHeader["class_film"]   = "";
        $dataHeader["class_series"] = "";

        $dataHeader["css"]          = "";
        $dataFooter['js']           = "dashboard-anime-script.js";

        $this->load->view('templates/headerDasboard', $dataHeader);
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

    // Anime
    public function PageFilm(){
        $data["active_link"]    = "film_v";

        $dataHeader["class_show"]   = "show";
        $dataHeader["class_anime"]  = "";
        $dataHeader["class_film"]   = "active";
        $dataHeader["class_series"] = "";

        $dataHeader["css"]          = "";
        $dataFooter['js']           = "dashboard-film-script.js"; //

        $this->load->view('templates/headerDasboard', $dataHeader);
        $this->load->view('admin/dashboard_v', $data);
        $this->load->view('templates/footerDasboard', $dataFooter);
    }
}
