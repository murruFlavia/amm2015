<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViewDescriptor
 *
 * @author amm
 */
class ViewDescriptor {
    /**
     * GET http
     */
    const get = 'get';
    /**
     * Post HTTP
     */
    const post = 'post';
    /**
     * Titolo della finestra del browser
     * @var string
     */
    private $titolo;
    /**
     * File che include la definizione HTML del logo (parte dello header)
     * @var string 
     */
    private $logo_file;
    /**
     * File che include la definizione HTML dei tab della pagina (parte dello header)
     * @var string 
     */
    private $menu_file;
 
    
      /**
     * File che include la definizione HTML del contenuto principale
     * @var string 
     */
    private $content_file;
    
    /**
     * Pagina della vista corrente 
     * (le funzionalita' sono divise in tre categorie: 
     * amministratore, studente e docente, corrispondenti alle sottocartelle 
     * di view nel progetto)
     * @var string 
     */
    private $pagina;
    
    public function __construct() {
        $this->js = array();
        $this->json = false;
    }
    /**
     * Restituisce il titolo della scheda del browser
     * @return string
     */
    public function getTitolo() {
        return $this->titolo;
    }
    /**
     * Imposta il titolo della scheda del browser
     * @param string $titolo il titolo della scheda del browser
     */
    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }
    /**
     * Imposta il file che include la definizione HTML del logo (parte dello header)
     * @param $logoFile il path al file contentente il logo
     */
    public function setLogoFile($logoFile) {
        $this->logo_file = $logoFile;
    }
    /**
     * Restituisce il path al file include la definizione HTML del logo (parte dello header)
     * @return string
     */
    public function getLogoFile() {
        return $this->logo_file;
    }
    /**
     * Restituisce il path al file che include la definizione HTML dei tab (parte dello header)
     * @return string
     */
    public function getMenuFile() {
        return $this->menu_file;
    }
    /**
     * Imposta il path al file che include la definizione HTML dei tab (parte dello header)
     * @param string $menuFile il path al file contenente il menu
     */
    public function setMenuFile($menuFile) {
        $this->menu_file = $menuFile;
    }
    
    
    public function setContentFile($contentFile) {
        $this->content_file = $contentFile;
    }
    /**
     * Restituisce il path al file che contiene il contenuto principale
     * @return string
     */
    public function getContentFile() {
        return $this->content_file;
    }
    
    public function getPagina() {
        return $this->pagina;
    }
    
    /**
     * Imposta il nome della pagina corrente
     * @param string $pagina
     */
    public function setPagina($pagina) {
        $this->pagina = $pagina;
    }
}
