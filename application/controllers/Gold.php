<?php
    
    require_once(__DIR__."/Template.php");

    class Gold extends Template {
        public function index() {
            //On charge le model qui récupère les données en BDD
            $this->load->model("comment_model", "comment");
            
            //On récupère les données requises en BDD
            $displayComments = $this->comment->getValidComments();
            
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');

            $this->form_validation->set_rules('nom', 'Nom', 'required');
            $this->form_validation->set_rules('msgComment', 'Commentaire', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view(
                    "pages/gold.php", 
                    [
                        "displayComments" => $displayComments
                    ]
                );
            }
            else
            {
                $this->comment->addComment($this->input->post('nom'),$this->input->post('msgComment'));
                $this->load->view('pages/successComment');
                $this->load->view(
                    "pages/gold.php", 
                    [
                        "displayComments" => $displayComments
                    ]
                );
            } 
        }
    }