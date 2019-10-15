<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manga_m extends CI_Model {
    var $table      = 'list_manga'; /*Tabel Anime*/
    var $table2     = 'list_chapter_manga'; /*Tabel Episode Anime*/
    
    public function get_manga(){
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->result();
    }

    public function getMangabyID($id){
        $this->db->from($this->table);
        $this->db->where(['id_manga' => $id]);
        return $this->db->get()->result();
    }

    // Save Manga
    public function save_manga($data){
        $query  = $this->db->insert($this->table, $data);
        
        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Save Chapter
    public function save_chapter($data){
        $query  = $this->db->insert($this->table2, $data);
        
        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Edit Manga
    public function edit_manga($where, $data){
        $query = $this->db->update($this->table, $data, $where);

        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Edit Chapter
    public function save_EditChap($where, $data){
        $query = $this->db->update($this->table2, $data, $where);

        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Delete Manga
    public function delete_by_id($id){
        $this->db->where('id_manga', $id);
        $query = $this->db->delete($this->table);

        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Delete Manga
    public function deleteListChap($id){
        $this->db->where('no_id', $id);
        $query = $this->db->delete($this->table2);

        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Get Chapter Manga
    public function get_chapter($id){
        $this->db->select('*');
        $this->db->from($this->table2);
        $this->db->where(['id_manga' => $id]);
        return $this->db->get()->result();
    }

    // Get Chapter Manga
    public function getDataListChap($id){
        $this->db->select('*');
        $this->db->from($this->table2);
        $this->db->where(['no_id' => $id]);
        return $this->db->get()->result();
    }

}
