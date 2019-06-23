<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anime_m extends CI_Model {
    var $table      = 'list_anime'; /*Tabel Anime*/
    var $table2     = 'list_episode_anime'; /*Tabel Episode Anime*/

    public function getAnimeOngoing(){
        $this->db->from($this->table);
        $this->db->where('status', 0);
        return $this->db->get()->result();
    }

    public function get_dataJoin_byId($id){
        $this->db->join($this->table2 .' B', 'A.id_anime = B.id_anime');
        $this->db->where(['B.no_id' => $id]);

        return $this->db->get($this->table.' A')->result();
    }

    public function get_ListEps_byEpisode($id, $episode){
        $this->db->join($this->table2 .' B', 'A.id_anime = B.id_anime');
        $this->db->where(['B.id_anime' => $id, 'episode' => $episode]);

        return $this->db->get($this->table.' A')->result();
    }

    // Admin
    public function jml_anime(){
        return $this->db->count_all($this->table);
    }
    
    public function jml_episode(){
        return $this->db->count_all($this->table2);
    }

    public function get_anime() {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->result();
    }

    public function get_anime_byId($id) {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['id_anime' => $id]);
        return $this->db->get()->result();
    }

    public function get_EpsAnime($dataID) {
        $this->db->select('*');
        $this->db->from($this->table2);
        $this->db->where('id_anime', $dataID);
        return $this->db->get()->result();
    }

    public function get_EpsAnime_byId($id) {
        $this->db->select('*');
        $this->db->from($this->table2);
        $this->db->where(['no_id' => $id]);
        return $this->db->get()->result();
    }

    // Save Anime
    public function save_anime($data){
        $query  = $this->db->insert($this->table, $data);
        
        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Edit Anime
    public function edit_anime($where, $data){
        $query = $this->db->update($this->table, $data, $where);

        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Delete Anime
    public function delete_by_id($id){
        $this->db->where('id_anime', $id);
        $query = $this->db->delete($this->table);

        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Save List Anime
    public function save_animeList($data){
        $query  = $this->db->insert($this->table2, $data);
        if (!$query) {
            return false;
        }else{
            return true;
        }
    }

    // Edit List Anime
    public function edit_ListAnime($where, $data){
        $this->db->update($this->table2, $data, $where);
        return $this->db->affected_rows();
    }

    // Delete List Anime
    public function deleteList_by_id($id){
        $this->db->where('no_id', $id);
        $query = $this->db->delete($this->table2);

        if (!$query) {
            return false;
        }else{
            return true;
        }
    }
}
