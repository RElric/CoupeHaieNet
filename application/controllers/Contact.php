<?php
    
    require_once(__DIR__."/Template.php");

    class Contact extends Template {
        public function index() {
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');

            $this->form_validation->set_rules('nom', 'Nom', 'required');
            $this->form_validation->set_rules('phone', 'Téléphone', 'required');
            $this->form_validation->set_rules('object', 'Objet', 'required');
            $this->form_validation->set_rules('msgContact', 'Message', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('pages/contact.php');
            }
            else
            {
                $this->load->helper('email');
                send_email('contact@coupehaie.net', $this->input->post('object'), $this->input->post('nom').' '.$this->input->post('prenom').' a envoyé '.$this->input->post('msgContact'));
                $this->load->view('pages/successfull.php');
                $this->load->view('pages/contact.php');
            }      
        }
    }