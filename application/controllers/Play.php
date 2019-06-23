<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Play extends CI_Controller {

    public function anime($id) {
        $dataheader['judul']    = 'Anime DB';
        $dataheader['css']      = 'playAnime-style.css';
        $datafooter['js']       = 'playAnime-script.js';

        $data['result']         = $this->anime_m->get_dataJoin_byId($id);
        $data['ongoing']        = $this->anime_m->getAnimeOngoing();
        
        $id_anime               = $data['result'][0]->id_anime;
        $episode                = $data['result'][0]->episode;
        $next                   = $episode + 1;
        $prev                   = $episode - 1;

        $data['next']           = $this->anime_m->get_ListEps_byEpisode($id_anime, $next);
        $data['prev']           = $this->anime_m->get_ListEps_byEpisode($id_anime, $prev);
        
        $this->load->view('templates/header', $dataheader);
        $this->load->view('anime/playAnime_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }
}
