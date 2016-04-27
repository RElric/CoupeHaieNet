<?php

class News_model extends CI_Model {

    public function getNews() {
        $this->db->order_by('id','DESC');
        $query = $this->db->get('news');
        return $query->result_array();
    }
    public function getTopNews() {
        $this->db->order_by('id','DESC');
        $this->db->limit(5);
        $query = $this->db->get('news');
        return $query->result_array();
    }
}