<?php

    class Images_model extends CI_Model {
        public function getTopImages() {

            //Récupération des images
            $this->db->select('images.imgPath AS imgPath, xp.titre AS titre');
            $this->db->from('xp');
            $this->db->join('images', 'images.idXP = xp.id');
            $this->db->where('xp.onSlider',true);
            $query = $this->db->get();
            $imgs = $query->result_array();

            //Récupération du contenu des expériences
            $this->db->select('xpcontent.txt AS rea, xp.titre AS titre');
            $this->db->from('xp');
            $this->db->join('xpcontent', 'xpcontent.idXP = xp.id');
            $this->db->where('xp.onSlider',true);
            $query = $this->db->get();
            $xpContent = $query->result_array();
            
            $tab = array();
            
            foreach($imgs as $img) {
                $tab2['titre'] = $img['titre'];
                $tab2['imgPath'] = $img['imgPath'];
                foreach($xpContent as $content) {
                    if($content['titre'] == $img['titre'])
                        $tab3[] = $content['rea'];
                    $tab2['realisations'] = $tab3;
                }
                $tab[] = $tab2;
            }
            
            return $tab;
        }
    }