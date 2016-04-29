<?php

    class Comment_model extends CI_Model {
        public function getTopComment() {
            $this->db->where('onSlider',true);
            $this->db->where('valid',true);
            $query = $this->db->get('comment');
            return $query->result_array();
        }
        public function getValidComments() {
            $this->db->where('valid',true);
            $query = $this->db->get('comment');
            return $query->result_array();
        }
        public function addComment($nom, $msgComment) {
            $data = array(
                'comment' => $msgComment,
                'author' => $nom,
                'onSlider' => FALSE,
                'valide' => FALSE
            );
            $this->db->insert('comment', $data);
        }
    }