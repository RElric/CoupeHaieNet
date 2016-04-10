<?php
    
    require_once(__DIR__."/Template.php");

    class Galery extends Template {
        public function index() {
            $this->load->model("images_model", "image");
            $sliderImg = $this->image->getImages();
            
            $this->load->view('pages/galery', [
                "sliderImg" => $sliderImg
            ]);
        }
    }