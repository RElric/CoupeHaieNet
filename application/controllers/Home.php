<?php
    
    require_once(__DIR__."/Template.php");

    class Home extends Template {
        public function index() { 
            $this->load->view("pages/accueil.php");
        }
        public function nimportecomment() {
            echo "nimportecomment"; 
        }
    }