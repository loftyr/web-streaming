<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class film_m extends CI_Model {
    var $table      = 'list_film'; /*Tabel Anime*/

    public function getRecomFilm(){
        $this->db->from($this->table);
        $this->db->where('rating >', 6);
        $this->db->order_by("RAND()");
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function getFilm(){
        $this->db->from($this->table);
        $this->db->order_by('tgl_upload', 'desc');
        return $this->db->get()->result();
    }

    public function getFilmById($id){
        $this->db->from($this->table);
        $this->db->where(['id_film' => $id]);
        return $this->db->get()->result();
    }

    public function get_data(){
        $this->db->from($this->table);
        $this->db->order_by('tgl_upload', 'desc');
        $this->db->limit(12);
        return $this->db->get()->result();
    }

    public function get_dataPage($start, $limit){
        $this->db->from($this->table);
        $this->db->order_by('tgl_upload', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    // CRUD
    public function save_film($data){
        $query  = $this->db->insert($this->table, $data);
        
        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    public function save_editFilm($where, $data){
        $query = $this->db->update($this->table, $data, $where);

        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    public function delete_film($id){
        $this->db->where('id_film', $id);
        $query = $this->db->delete($this->table);

        if (!$query) {
            return false;
        }else{
            return true;
        }
    }
}
