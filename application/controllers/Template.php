<?php

    class Template extends CI_Controller {
        public function __construct() {
            parent::__construct();
            echo $this->load->view("templates/header.php", null, true);
        }
        public function __destruct() {
            echo $this->load->view("templates/footer.php", null, true);
        }
    }