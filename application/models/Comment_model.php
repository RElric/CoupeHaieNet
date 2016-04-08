<?php

class Comment_model extends CI_Model {
    public function getTopComment() {
        $this->db->where('onSlider',true);
        $query = $this->db->get('comment');
        return $query->result_array();
    }
}