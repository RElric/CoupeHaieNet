<?php
    
    require_once(__DIR__."/Template.php");

    class Home extends Template {
        public function index() {
            //On charge les models qui récupèrerons les données en BDD
            $this->load->model("news_model", "news");
            $this->load->model("images_model", "image");
            $this->load->model("comment_model", "comment");
            
            //On récupère les données requises en BDD
            $news = $this->news->getTopNews();
            $sliderComment = $this->comment->getTopComment();
            $sliderImg = $this->image->getTopImages();
            
            //Une fois les infos récupérées on les envoi à l'affichage
            $this->load->view(
                "pages/home.php", 
                [
                    "sliderImg" => $sliderImg,
                    "sliderXP" => $sliderComment,
                    "news" => $news
                ]
            );
        }
    }