<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_m extends CI_Model {
    var $table      = 'list_anime'; /*Tabel Anime*/
    var $table2     = 'list_episode_anime'; /*Tabel Episode Anime*/

    public function get_jumlah_row() {
        $this->db->from($this->table);
        return $this->db->get()->num_rows();
    }

    public function get_data($limit, $start) {
        $this->db->order_by('id_anime', 'desc');

        return $this->db->get($this->table, $limit, $start)->result();
    }

    public function get_jumlah_rowAnime($id){
        $this->db->from($this->table2 .' A');
        $this->db->join($this->table .' B', 'A.id_anime = B.id_anime');
        $this->db->where('A.id_anime', $id);
        return $this->db->get()->num_rows();
    }

    public function get_data_Anime($limit, $start, $id){
        $this->db->join($this->table2 .' B', 'A.id_anime = B.id_anime');
        $this->db->where('A.id_anime', $id);
        $this->db->order_by('B.tgl_upload', 'desc');

        return $this->db->get($this->table.' A', $limit, $start)->result();
    }
}
