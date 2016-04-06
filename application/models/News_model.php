<?php

class News_model extends CI_Model {

    public function getBySlug($slug) {
        $this->db->where('slug', $slug);
        $query = $this->db->get('news');
        $article = $query->result();
        return $article;
    }
}