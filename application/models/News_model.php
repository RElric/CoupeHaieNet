<?php

class News_model extends CI_Model {

    public function getBySlug($slug) {
        $this->db->where('slug', $slug);
        $query = $this->db->get('news');
        $article = $query->result();
        return $article;
    }
    public function getTopNews() {
        $this->db->order_by('id','DESC');
        $this->db->limit(5);
        $query = $this->db->get('news');
        return $query->result_array();
    }
}