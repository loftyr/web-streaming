<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anime extends CI_Controller {

    public function download($id){
        $dataheader['judul']    = 'Download Anime';
        $dataheader['css']      = '';
        $datafooter['js']       = '';

        $data['anime']          = $this->anime_m->get_dataJoin_byId($id);
        $data['ongoing']        = $this->anime_m->getAnimeOngoing();

        $this->load->view('templates/header', $dataheader);
        $this->load->view('anime/download_v', $data);
        $this->load->view('templates/footer', $datafooter);
    }

    public function save() {
        $this->form_validation->set_rules('Judul', 'Judul', 'required');
        $this->form_validation->set_rules('Sinopsis', 'Sinopsis', 'required');
        $this->form_validation->set_rules('Genre', 'Genre', 'required');
        $this->form_validation->set_rules('Studio', 'Studio', 'required');

        $config['upload_path']      = '././file/upload/';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = 1000;
        $config['encrypt_name']     = true;

        if ($this->form_validation->run() == false) {
            $result['Msg'] = 'Please Fill All Field !!!';
            $result['Status'] = false;
        }else{
            $this->upload->initialize($config);
            if($this->upload->do_upload("Img")){
                $dataimage  = array('upload_data' => $this->upload->data());
                $imagename  = $dataimage['upload_data']['file_name'];

                $data = [
                    'judul_anime'   => htmlspecialchars($this->input->post('Judul')),
                    'status'        => htmlspecialchars($this->input->post('Status')),
                    'alur_cerita'   => $this->input->post('Sinopsis'),
                    'url_img'       => $imagename,
                    'genre'         => htmlspecialchars($this->input->post('Genre')),
                    'studio'        => htmlspecialchars($this->input->post('Studio')),
                    'encoder'       => htmlspecialchars($this->input->post('Encoder')),
                    'uploader'      => htmlspecialchars($this->input->post('Uploader')),
                    'rating'        => htmlspecialchars($this->input->post('Rating'))
                    ];                
            }else{
                $data = [
                    'judul_anime'   => htmlspecialchars($this->input->post('Judul')),
                    'status'        => htmlspecialchars($this->input->post('Status')),
                    'alur_cerita'   => $this->input->post('Sinopsis'),
                    'url_img'       => NULL,
                    'genre'         => htmlspecialchars($this->input->post('Genre')),
                    'studio'        => htmlspecialchars($this->input->post('Studio')),
                    'encoder'       => htmlspecialchars($this->input->post('Encoder')),
                    'uploader'      => htmlspecialchars($this->input->post('Uploader')),
                    'rating'        => htmlspecialchars($this->input->post('Rating'))
                    ];
            }

            $hasil = $this->anime_m->save_anime($data);

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

        echo json_encode($result);
    }

    public function saveEdit(){
        $id = $this->input->post('id');

        $this->db->where('id_anime', $id);
        $linkImg    = $this->db->get('list_anime')->row('url_img');

        $this->form_validation->set_rules('Judul', 'Judul', 'required');
        $this->form_validation->set_rules('Sinopsis', 'Sinopsis', 'required');
        $this->form_validation->set_rules('Genre', 'Genre', 'required');
        $this->form_validation->set_rules('Studio', 'Studio', 'required');

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
                        'judul_anime'   => htmlspecialchars($this->input->post('Judul')),
                        'status'        => htmlspecialchars($this->input->post('Status')),
                        'alur_cerita'   => $this->input->post('Sinopsis'),
                        'url_img'       => $imagename,
                        'genre'         => htmlspecialchars($this->input->post('Genre')),
                        'studio'        => htmlspecialchars($this->input->post('Studio')),
                        'encoder'       => htmlspecialchars($this->input->post('Encoder')),
                        'uploader'      => htmlspecialchars($this->input->post('Uploader')),
                        'rating'        => htmlspecialchars($this->input->post('Rating'))
                        ];                
                }else{
                    $result['Msg']       = $this->upload->display_errors();
                    $result['MsgUpload'] = $this->upload->display_errors();
                    $result['Status']    = false;
                }
            }else{
                $data = [
                    'judul_anime'   => htmlspecialchars($this->input->post('Judul')),
                    'status'        => htmlspecialchars($this->input->post('Status')),
                    'alur_cerita'   => $this->input->post('Sinopsis'),
                    'genre'         => htmlspecialchars($this->input->post('Genre')),
                    'studio'        => htmlspecialchars($this->input->post('Studio')),
                    'encoder'       => htmlspecialchars($this->input->post('Encoder')),
                    'uploader'      => htmlspecialchars($this->input->post('Uploader')),
                    'rating'        => htmlspecialchars($this->input->post('Rating'))
                    ];
            }

            $where = [
                'id_anime'  => $id
            ];
            
            $hasil  = $this->anime_m->edit_anime($where, $data);

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

    public function deleteAnime($id){

        $this->db->where('id_anime', $id);
        $linkImage  = $this->db->get('list_anime')->row('url_img');

        $query  = $this->anime_m->delete_by_id($id);
        
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

    public function saveList(){
        $this->form_validation->set_rules('id_anime', 'id_anime', 'required');
        $this->form_validation->set_rules('Episode', 'Episode', 'required');
        $this->form_validation->set_rules('Jdl_Episode', 'Jdl_Episode', 'required');
        $this->form_validation->set_rules('Streaming', 'Streaming', 'required');
        $this->form_validation->set_rules('id_anime', 'id_anime', 'required');
        $this->form_validation->set_rules('upload', 'upload', 'required');

        if ($this->form_validation->run() == false) {
            $result['Msg'] = 'Please Fill All Field !!!';
            $result['Status'] = false;
        }else{
            $data = [
            'id_anime'      => htmlspecialchars($this->input->post('id_anime')),
            'episode'       => htmlspecialchars($this->input->post('Episode')),
            'judul_episode' => htmlspecialchars($this->input->post('Jdl_Episode')),
            'link_gd_fullhd'=> htmlspecialchars($this->input->post('link_gd_fullhd')),
            'link_gd_hd'    => htmlspecialchars($this->input->post('link_gd_hd')),
            'link_gd_mhd'   => htmlspecialchars($this->input->post('link_gd_mhd')),
            'link_zy_fullhd'=> htmlspecialchars($this->input->post('link_zy_fullhd')),
            'link_zy_hd'    => htmlspecialchars($this->input->post('link_zy_hd')),
            'link_zy_mhd'   => htmlspecialchars($this->input->post('link_zy_mhd')),
            'link_streaming'=> htmlspecialchars($this->input->post('Streaming')),
            'tgl_upload'    => $this->input->post('upload').' '.date('H:i:s')
            ];

            $hasil = $this->anime_m->save_animeList($data);

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

    public function saveEditList(){
        $this->form_validation->set_rules('id_anime', 'id_anime', 'required');
        $this->form_validation->set_rules('no_id', 'no_id', 'required');
        $this->form_validation->set_rules('Episode', 'Episode', 'required');
        $this->form_validation->set_rules('Jdl_Episode', 'Jdl_Episode', 'required');
        $this->form_validation->set_rules('Streaming', 'Streaming', 'required');
        $this->form_validation->set_rules('upload', 'upload', 'required');

        if ($this->form_validation->run() == false) {
            $result['Msg']    = 'Please Fill All Field !!!';
            $result['id']     = "";
            $result['Status'] = false;
        }else{
            $data = [
            'episode'       => htmlspecialchars($this->input->post('Episode')),
            'judul_episode' => htmlspecialchars($this->input->post('Jdl_Episode')),
            'link_gd_fullhd'=> htmlspecialchars($this->input->post('link_gd_fullhd')),
            'link_gd_hd'    => htmlspecialchars($this->input->post('link_gd_hd')),
            'link_gd_mhd'   => htmlspecialchars($this->input->post('link_gd_mhd')),
            'link_zy_fullhd'=> htmlspecialchars($this->input->post('link_zy_fullhd')),
            'link_zy_hd'    => htmlspecialchars($this->input->post('link_zy_hd')),
            'link_zy_mhd'   => htmlspecialchars($this->input->post('link_zy_mhd')),
            'link_streaming'=> htmlspecialchars($this->input->post('Streaming')),
            'tgl_upload'    => $this->input->post('upload').' '.date('H:i:s')
            ];

            $where = [
                'id_anime'  => $this->input->post('id_anime'),
                'no_id'     => $this->input->post('no_id')
            ];

            $hasil  = $this->anime_m->edit_ListAnime($where, $data);
            if($hasil == 1){
                $result['Msg']      = 'Data Berhasil Diubah . . .';
                $result['id']       = $this->input->post('id_anime');
                $result['Status']   = true;
            }else{
                $result['Msg']      = $this->db->error()['message'];
                $result['id']       = "";
                $result['Status']   = false;
            }
        }

        echo json_encode($result);
    }

    public function deleteAnimeList($id){
        $query  = $this->anime_m->deleteList_by_id($id);
        
        if ($query == true) {
            $result['Msg']      = 'Data Berhasil Di Hapus . . .';
            $result['Status']   = true;
        }else{
            $result['Msg']      = $this->db->error()['message'];
            $result['Status']   = false;
        }

        echo json_encode($result);
    }

}
