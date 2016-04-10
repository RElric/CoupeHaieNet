<?php
    
    require_once(__DIR__."/Template.php");

    class Where extends Template {
        public function index() {
            $this->load->view('pages/where');
        }
    }