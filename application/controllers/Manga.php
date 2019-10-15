<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {

    public function index() {
        $dataheader['judul']    = 'Manga DB';
        $dataheader['css']      = 'manga-style.css';//
        $datafooter['js']       = 'manga-script.js';//

        $data['manga']          = $this->manga_m->get_manga();
        
        $this->load->view('templates/header', $dataheader);
        $this->load->view('manga/manga_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }

    public function view() {
        $dataheader['judul']    = 'Manga DB';
        $dataheader['css']      = 'mangaView-style.css';//
        $datafooter['js']       = 'mangaView-script.js';//

        $data['manga']          = "";
        // $data['manga']          = $this->manga_m->getDataById();
        
        $this->load->view('templates/header', $dataheader);
        $this->load->view('manga/view_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }

    public function chapter() {
        $dataheader['judul']    = 'Manga DB';
        $dataheader['css']      = '';//mangaChap-style.css
        $datafooter['js']       = '';//mangaChap-script.js

        $data['manga']          = "";
        // $data['manga']          = $this->manga_m->getDataById();
        
        $this->load->view('templates/header', $dataheader);
        $this->load->view('manga/chapter_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }

    public function getManga(){
        $data   = $this->manga_m->get_manga();
        $no     = 1;
        foreach ($data as $manga) {
            $status = $manga->status == 0 ? "Ongoing" : "Finish" ;
            echo '
                <tr>
                  <td>'.$no++.'</td>
                  <td>'.$manga->judul_manga.'</td>
                  <td>'.substr($manga->alur_cerita, 0, 100).'...</td>
                  <td>'.$manga->genre.'</td>
                  <td>'.$manga->published.'</td>
                  <td>'.$status.'</td>
                  <td class="text-center">
                    <button dataID="'.$manga->id_manga.'" class="btn btn-secondary btn-sm mb-1 btnLihat">
                      <i class="fa fa-book"></i>
                    </button>
                    <button dataID="'.$manga->id_manga.'" class="btn btn-primary btn-sm mb-1 btnEdit">
                      <i class="fa fa-edit"></i>
                    </button>
                    <button dataID="'.$manga->id_manga.'" class="btn btn-danger btn-sm btnHapus">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>
            ';
        }
    }

    public function getChapter($id){
        $data   = $this->manga_m->get_chapter($id);
        echo json_encode($data);
    }

    public function save() {
        $this->form_validation->set_rules('Judul', 'Judul', 'required');
        $this->form_validation->set_rules('Sinopsis', 'Sinopsis', 'required');
        $this->form_validation->set_rules('Genre', 'Genre', 'required');

        $config['upload_path']      = '././file/upload/';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = 1000;
        $config['encrypt_name']     = true;

        if ($this->form_validation->run() == false) {
            $result['Msg']          = 'Please Fill All Field !!!';
            $result['MsgUpload']    = '';
            $result['Status']       = false;
        }else{
            $this->upload->initialize($config);
            if($this->upload->do_upload("Img")){
                $dataimage  = array('upload_data' => $this->upload->data());
                $imagename  = $dataimage['upload_data']['file_name'];

                $data = [
                    'judul_manga'   => htmlspecialchars($this->input->post('Judul')),
                    'alur_cerita'   => $this->input->post('Sinopsis'),
                    'status'        => htmlspecialchars($this->input->post('Status')),
                    'genre'         => htmlspecialchars($this->input->post('Genre')),
                    'rating'        => htmlspecialchars($this->input->post('Rating')),
                    'published'     => $this->input->post('Tgl').' '.date('H:i:s'),
                    'url_img'       => $imagename
                    ];                
            }else{
                $data = [
                    'judul_manga'   => htmlspecialchars($this->input->post('Judul')),
                    'alur_cerita'   => $this->input->post('Sinopsis'),
                    'status'        => htmlspecialchars($this->input->post('Status')),
                    'genre'         => htmlspecialchars($this->input->post('Genre')),
                    'rating'        => htmlspecialchars($this->input->post('Rating')),
                    'published'     => $this->input->post('Tgl').' '.date('H:i:s'),
                    'url_img'       => null
                    ];
            }

            if ($this->upload->display_errors() != NULL) {
                $result['Msg']       = $this->upload->display_errors();
                $result['MsgUpload'] = $this->upload->display_errors();
                $result['Status']    = false;
            }else{
                $hasil = $this->manga_m->save_manga($data);

                if($hasil == true){
                    $result['Msg']       = 'Data Berhasil Disimpan . . .';
                    $result['MsgUpload'] = $this->upload->display_errors();
                    $result['Status']    = true;
                }else{
                    $result['Msg']       = $this->db->error()['message'];
                    $result['MsgUpload'] = $this->upload->display_errors();
                    $result['Status']    = false;
                }
            }

        }

        echo json_encode($result);
    }

    public function saveEdit(){
        $id = $this->input->post('id');

        $this->db->where('id_manga', $id);
        $linkImg    = $this->db->get('list_manga')->row('url_img');
        
        $this->form_validation->set_rules('Judul', 'Judul', 'required');
        $this->form_validation->set_rules('Sinopsis', 'Sinopsis', 'required');
        $this->form_validation->set_rules('Genre', 'Genre', 'required');

        $config['upload_path']      = '././file/upload/';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = 1000;
        $config['encrypt_name']     = true;

        if ($this->form_validation->run() == false) {
            $result['Msg']          = 'Please Fill All Field !!!';
            $result['MsgUpload']    = '';
            $result['Status']       = false;
        }else{
            if (!empty($_FILES['Img']['name'])) {
                $this->upload->initialize($config);
                if($this->upload->do_upload("Img")){
                    @unlink('././file/upload/'.$linkImg);
                    $dataimage  = array('upload_data' => $this->upload->data());
                    $imagename  = $dataimage['upload_data']['file_name'];

                    $data = [
                        'judul_manga'   => htmlspecialchars($this->input->post('Judul')),
                        'alur_cerita'   => $this->input->post('Sinopsis'),
                        'status'        => htmlspecialchars($this->input->post('Status')),
                        'genre'         => htmlspecialchars($this->input->post('Genre')),
                        'rating'        => htmlspecialchars($this->input->post('Rating')),
                        'published'     => $this->input->post('Tgl').' '.date('H:i:s'),
                        'url_img'       => $imagename
                        ];                
                }else{
                    $result['Msg']       = $this->upload->display_errors();
                    $result['MsgUpload'] = $this->upload->display_errors();
                    $result['Status']    = false;
                }
            }else{
                $data = [
                    'judul_manga'   => htmlspecialchars($this->input->post('Judul')),
                    'alur_cerita'   => $this->input->post('Sinopsis'),
                    'status'        => htmlspecialchars($this->input->post('Status')),
                    'genre'         => htmlspecialchars($this->input->post('Genre')),
                    'rating'        => htmlspecialchars($this->input->post('Rating')),
                    'published'     => $this->input->post('Tgl').' '.date('H:i:s'),
                    'url_img'       => null
                    ];
            }

            $where = [
                'id_manga'  => $id
            ];
            
            $hasil  = $this->manga_m->edit_manga($where, $data);

            if($hasil == true){
                $result['Msg']       = 'Data Berhasil Diubah . . .';
                $result['MsgUpload'] = '';
                $result['Status']    = true;
            }else{
                $result['Msg']       = $this->db->error()['message'];
                $result['MsgUpload'] = '';
                $result['Status']    = true;
            }
        }

        echo json_encode($result);
    }

    public function getDataEdit(){
        $id     = $this->input->post('id');
        $data   = $this->manga_m->getMangabyID($id);

        echo json_encode($data);
    }

    public function deleteManga($id){

        $this->db->where('id_manga', $id);
        $linkImage  = $this->db->get('list_manga')->row('url_img');

        $query  = $this->manga_m->delete_by_id($id);
        
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
    
    public function saveChap() {
        $this->form_validation->set_rules('chapter', 'chapter', 'required');

        if ($this->form_validation->run() == false) {
            $result['Msg']          = 'Please Fill All Field !!!';
            $result['MsgUpload']    = '';
            $result['Status']       = false;
        }else{
            $data = [
                'id_manga'          => htmlspecialchars($this->input->post('id_manga')),
                'judul_chapter'     => htmlspecialchars($this->input->post('judul_chapter')),
                'chapter'           => htmlspecialchars($this->input->post('chapter')),
                'link'              => htmlspecialchars($this->input->post('link')),
                'tgl_upload'        => $this->input->post('tgl_upload').' '.date('H:i:s')
                ]; 
            $hasil = $this->manga_m->save_chapter($data);

            if($hasil == true){
                $result['Msg']       = 'Data Berhasil Disimpan . . .';
                $result['Status']    = true;
            }else{
                $result['Msg']       = $this->db->error()['message'];
                $result['Status']    = false;
            }
            

        }

        echo json_encode($result);
    }

    public function saveEditChap(){
        $this->form_validation->set_rules('chapter', 'chapter', 'required');

        if ($this->form_validation->run() == false) {
            $result['Msg']          = 'Please Fill All Field !!!';
            $result['MsgUpload']    = '';
            $result['Status']       = false;
        }else{
            $data = [
                'id_manga'          => htmlspecialchars($this->input->post('id_manga')),
                'judul_chapter'     => htmlspecialchars($this->input->post('judul_chapter')),
                'chapter'           => htmlspecialchars($this->input->post('chapter')),
                'link'              => htmlspecialchars($this->input->post('link')),
                'tgl_upload'        => $this->input->post('tgl_upload').' '.date('H:i:s')
                ]; 

            $where = [
                'no_id'  => $this->input->post('no_id')
            ];

            $hasil = $this->manga_m->save_EditChap($where, $data);

            if($hasil == true){
                $result['Msg']       = 'Data Berhasil Disimpan . . .';
                $result['Status']    = true;
            }else{
                $result['Msg']       = $this->db->error()['message'];
                $result['Status']    = false;
            }
            

        }

        echo json_encode($result);
    }

    public function deleteListChapter($id){
        $query  = $this->manga_m->deleteListChap($id);
        
        if ($query == true) {
            $result['Msg']      = 'Data Berhasil Di Hapus . . .';
            $result['Status']   = true;
        }else{
            $result['Msg']      = $this->db->error()['message'];
            $result['Status']   = false;
        }

        echo json_encode($result);
    }

    public function getDataListChapter(){
        $no_id = $this->input->post('id');
        $data   = $this->manga_m->getDataListChap($no_id);

        echo json_encode($data);        
    }
}
