<?php
    
    require_once(__DIR__."/Template.php");

    class News extends Template {
        
        public function __construct() {
            parent::__construct();
            $this->load->model('news_model', 'news');
        }
        public function index($slug = null) { 
            $actus = $this->news->getNews();
            $this->load->view("pages/news.php", ["actus" => $actus, "slug" => $slug]);
        }
    }