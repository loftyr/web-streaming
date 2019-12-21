<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $dataheader['judul']    = 'Anime DB';
        $dataheader['css_anime']      = 'aktif';
        $dataheader['css']      = 'home-style.css';
        $datafooter['js']       = 'home-script.js';

        $data['ongoing']        = $this->anime_m->getAnimeOngoing();

        $this->load->view('templates/header', $dataheader);
        $this->load->view('home_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }

    public function loadRecord(){
        $config['base_url']     = base_url().'home/index';
        $config['total_rows']   = $this->home_m->get_jumlah_row();
        $config['per_page']     = 10;
        $config['uri_segment']  = 3;
        $pilih                  = $config['total_rows'] / $config['per_page'];
        $config['num_links']    = 2;

        // Style Pagination
        $config['first_link']       = "First";
        $config['last_link']        = "Last";
        $config['next_link']        = "Next";
        $config['prev_link']        = "Prev";
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $this->pagination->initialize($config);
        $data['page']       = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['result']     = $this->home_m->get_data($config['per_page'], $data['page']);
        $data['pagination'] = $this->pagination->create_links(); 

        echo json_encode($data);
    }

    public function anime($id){
        $dataheader['judul']    = 'Anime';
        $dataheader['css']      = 'anime-style.css';
        $datafooter['js']       = 'anime-script.js';

        $data['anime']          = $id;
        $data['ongoing']        = $this->anime_m->getAnimeOngoing();

        $this->load->view('templates/header', $dataheader);
        $this->load->view('anime/anime_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }

    public function loadRecordAnime(){
        $id     = $this->uri->segment(3);
        $no     = $this->uri->segment(4);

        $config['base_url']     = base_url().'home/anime';
        $config['total_rows']   = $this->home_m->get_jumlah_rowAnime($id);
        $config['per_page']     = 10;
        $config['uri_segment']  = 4;
        $pilih                  = $config['total_rows'] / $config['per_page'];
        $config['num_links']    = 2;

        // Style Pagination
        $config['first_link']       = "First";
        $config['last_link']        = "Last";
        $config['next_link']        = "Next";
        $config['prev_link']        = "Prev";
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $this->pagination->initialize($config);
        $data['page']    = ($no) ? $no : 0;
        $data['result']  = $this->home_m->get_data_Anime($config['per_page'], $data['page'], $id);
        $data['pagination'] = $this->pagination->create_links(); 

        echo json_encode($data);
    }
}
