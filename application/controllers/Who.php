<?php
    
    require_once(__DIR__."/Template.php");

    class Who extends Template {
        public function index() {
            $this->load->view("pages/who.php");
        }
    }