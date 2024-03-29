<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film extends CI_Controller {

    public function index(){
        $dataheader['judul']    = 'Film DB';
        $dataheader['css_film']      = 'aktif';
        $dataheader['css']      = 'film-style.css'; //
        $datafooter['js']       = 'film-script.js'; //

        $data['recom']          = $this->film_m->getRecomFilm();

        $this->load->view('templates/header', $dataheader);
        $this->load->view('film/film_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }

    public function loadRecord(){
        $data     = $this->film_m->get_data();
        echo json_encode($data);
    }

    public function loadPage($page){
        $per_page = 8;

        $start    = ($per_page * $page) - 4;

        $data     = $this->film_m->get_dataPage($start, $per_page);
        echo json_encode($data);
    }


    // Admin
    public function save(){
        $this->form_validation->set_rules('Judul', 'Judul', 'required');
        $this->form_validation->set_rules('Sinopsis', 'Sinopsis', 'required');
        $this->form_validation->set_rules('Genre', 'Genre', 'required');

        $config['upload_path']      = '././file/upload/';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = 1000;
        $config['encrypt_name']     = true;

        if ($this->form_validation->run() == false) {
            $result['Msg'] = 'Please Fill All Field !!!';
            $result['Status'] = false;
        }else{
            if (!empty($_FILES['Img']['name'])) {
                $this->upload->initialize($config);

                if($this->upload->do_upload("Img")){
                    $dataimage  = array('upload_data' => $this->upload->data());
                    $imagename  = $dataimage['upload_data']['file_name'];

                    $data = [
                    'judul_film'    => $this->input->post('Judul'),
                    'alur_cerita'   => $this->input->post('Sinopsis'),
                    'genre'         => htmlspecialchars($this->input->post('Genre')),
                    'tahun'         => htmlspecialchars($this->input->post('Tahun')),
                    'kualitas'      => htmlspecialchars($this->input->post('Kualitas')),
                    'rating'        => htmlspecialchars($this->input->post('Rating')),
                    'tgl_upload'    => $this->input->post('Tgl').' '.date('H:i:s'),
                    'url_img'       => $imagename,
                    'link_streaming'=> $this->input->post('Streaming')
                    ];
                }else{
                    $data   = "";
                }
            }else{
                $data = [
                'judul_film'    => $this->input->post('Judul'),
                'alur_cerita'   => $this->input->post('Sinopsis'),
                'genre'         => htmlspecialchars($this->input->post('Genre')),
                'tahun'         => htmlspecialchars($this->input->post('Tahun')),
                'kualitas'      => htmlspecialchars($this->input->post('Kualitas')),
                'rating'        => htmlspecialchars($this->input->post('Rating')),
                'tgl_upload'    => $this->input->post('Tgl').' '.date('H:i:s'),
                'url_img'       => null,
                'link_streaming'=> $this->input->post('Streaming')
                ];
            }

            if ($data == "") {
                $result['Msg']       = 'Data Gagal Disimpan . . .'. $this->upload->display_errors();
                $result['Status']    = false;
            }else{
                $hasil  = $this->film_m->save_film($data);

                if($hasil == true){
                    $result['Msg']       = 'Data Berhasil Disimpan . . .';
                    $result['Status']    = true;
                }else{
                    $result['Msg']       = $this->db->error()['message'];
                    $result['Status']    = false;
                }
            }

        }

        echo json_encode($result);

    }

    public function saveEdit(){
        $id = $this->input->post('id');

        $this->db->where('id_film', $id);
        $linkImg    = $this->db->get('list_film')->row('url_img');

        $this->form_validation->set_rules('Judul', 'Judul', 'required');
        $this->form_validation->set_rules('Sinopsis', 'Sinopsis', 'required');
        $this->form_validation->set_rules('Genre', 'Genre', 'required');

        $config['upload_path']      = '././file/upload/';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = 1000;
        $config['encrypt_name']     = true;

        if ($this->form_validation->run() == false) {
            $result['Msg'] = 'Please Fill All Field !!!';
            $result['Status'] = false;
        }else{
            if (!empty($_FILES['Img']['name'])) {
                $this->upload->initialize($config);

                if($this->upload->do_upload("Img")){
                    @unlink('././file/upload/'.$linkImg);
                    $dataimage  = array('upload_data' => $this->upload->data());
                    $imagename  = $dataimage['upload_data']['file_name'];

                    $data = [
                    'judul_film'    => $this->input->post('Judul'),
                    'alur_cerita'   => $this->input->post('Sinopsis'),
                    'genre'         => htmlspecialchars($this->input->post('Genre')),
                    'tahun'         => htmlspecialchars($this->input->post('Tahun')),
                    'kualitas'      => htmlspecialchars($this->input->post('Kualitas')),
                    'rating'        => htmlspecialchars($this->input->post('Rating')),
                    'tgl_upload'    => $this->input->post('Tgl').' '.date('H:i:s'),
                    'url_img'       => $imagename,
                    'link_streaming'=> $this->input->post('Streaming')
                    ];
                }else{
                    $data   = "";
                }
            }else{
                $data = [
                'judul_film'    => $this->input->post('Judul'),
                'alur_cerita'   => $this->input->post('Sinopsis'),
                'genre'         => htmlspecialchars($this->input->post('Genre')),
                'tahun'         => htmlspecialchars($this->input->post('Tahun')),
                'kualitas'      => htmlspecialchars($this->input->post('Kualitas')),
                'rating'        => htmlspecialchars($this->input->post('Rating')),
                'tgl_upload'    => $this->input->post('Tgl').' '.date('H:i:s'),
                'url_img'       => null,
                'link_streaming'=> $this->input->post('Streaming')
                ];
            }

            $where = [
                'id_film'  => $id
            ];

            if ($data == "") {
                $result['Msg']       = 'Data Gagal Disimpan . . .'. $this->upload->display_errors();
                $result['Status']    = false;
            }else{
                $hasil  = $this->film_m->save_editFilm($where, $data);

                if($hasil == true){
                    $result['Msg']       = 'Perubahan Data Berhasil Disimpan . . .';
                    $result['Status']    = true;
                }else{
                    $result['Msg']       = $this->db->error()['message'];
                    $result['Status']    = false;
                }
            }            
        }

        echo json_encode($result);
    }

    public function getFilm(){
        $data   = $this->film_m->getFilm();
        $no     = 1;

        foreach ($data as $film) {
            echo '
                <tr>
                  <td>'.$no++.'</td>
                  <td>'.$film->judul_film.'</td>
                  <td>'.$film->tahun.'</td>
                  <td>'.$film->kualitas.'</td>
                  <td>'.$film->rating.'</td>
                  <td>'.$film->tgl_upload.'</td>
                  <td class="text-center">
                    <button dataID="'.$film->id_film.'" class="btn btn-primary btn-sm mb-1 btnEdit">
                      <i class="fa fa-edit"></i>
                    </button>
                    <button dataID="'.$film->id_film.'" class="btn btn-danger btn-sm btnHapus">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>
            ';
        }
    }

    public function getDataEditFilm(){
        $id     = $this->input->post('id');
        $data   = $this->film_m->getFilmById($id);

        echo json_encode($data);
    }

    public function deleteFilm($id){

        $this->db->where('id_film', $id);
        $linkImage  = $this->db->get('list_film')->row('url_img');

        $query      = $this->film_m->delete_film($id);
        
        if ($query == true) {
            @unlink('././file/upload/'.$linkImage);
            $result['Msg']      = 'Data Berhasil Di Hapus . . .';
            $result['Status']   = true;
        }else{
            $result['Msg']      = $this->db->error()['message'];
            $result['Status']   = false;
        }

        echo json_encode($result);
    }
}
