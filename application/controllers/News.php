<?php
    
    require_once(__DIR__."/Template.php");

    class News extends Template {
        public function index() { 
            $this->load->view("pages/news.php");
        }
        public function read($slug) {
            $this->db->where('slug', $slug);
            $query = $this->db->get('news');
            $article = $query->result();
            $this->load->view('pages/article.php', ["slug" => $slug, "article" => $article]);
        }
    }