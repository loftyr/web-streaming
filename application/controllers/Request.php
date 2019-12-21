<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {
    public function index() {
        $dataheader['judul']    = 'Request';
        $dataheader['css_req']      = 'aktif';
        $dataheader['css']      = 'request-style.css';//
        $datafooter['js']       = 'request-script.js';//

        $data['req']            = "";

        
        $this->load->view('templates/header', $dataheader);
        $this->load->view('request/req_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }
}
