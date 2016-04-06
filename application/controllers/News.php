<?php
    
    require_once(__DIR__."/Template.php");

    class News extends Template {
        
        public function __construct() {
            parent::__construct();
            $this->load->model('news_model', 'news');
        }
        public function index() { 
            $this->load->view("pages/news.php");
        }
        public function read($slug) {
            
            $article = $this->news->getBySlug($slug);
            $this->load->view('pages/article.php', ["slug" => $slug, "article" => $article]);
        }
    }