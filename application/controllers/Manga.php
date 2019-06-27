<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {

    public function home() {
        $dataheader['judul']    = 'Manga DB';
        $dataheader['css']      = '';//manga-style.css
        $datafooter['js']       = '';//manga-script.js

        $data['manga']          = $this->manga_m->getData();
        
        $this->load->view('templates/header', $dataheader);
        $this->load->view('manga/manga_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }

    public function view() {
        $dataheader['judul']    = 'Manga DB';
        $dataheader['css']      = 'mangaView-style.css';//
        $datafooter['js']       = '';//manga-script.js

        $data['manga']          = "";
        // $data['manga']          = $this->manga_m->getDataById();
        
        $this->load->view('templates/header', $dataheader);
        $this->load->view('manga/view_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }
    
}
