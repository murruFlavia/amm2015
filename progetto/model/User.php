<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author amm
 */
class User {
   const Admin=1;
   const Cliente=2;
   
   private $username;
   private $password;
   private $ruolo;
   
   public function __construct() 
   {
        
   }
   
    
     public function getUsername() {
        return $this->username;
    }
    /**
     * Imposta lo username per l'autenticazione dell'utente. 
     * I nomi che si ritengono validi contengono solo lettere maiuscole e minuscole.
     * La lunghezza del nome deve essere superiore a 5
     * @param string $username
     * @return boolean true se lo username e' ammissibile ed e' stato impostato,
     * false altrimenti
     */
    public function setUsername($username) {
        // utilizzo la funzione filter var specificando un'espressione regolare
        // che implementa la validazione personalizzata
        if (!filter_var($username, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/[a-zA-Z]{5,}/')))) {
            return false;
        }
        $this->username = $username;
        return true;
    }
    /**
     * Restituisce la password per l'utente corrente
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }
    /**
     * Imposta la password per l'utente corrente
     * @param string $password
     * @return boolean true se la password e' stata impostata correttamente,
     * false altrimenti
     */
    public function setPassword($password) {
        $this->password = $password;
        return true;
    }
    
    public function getRuolo() {
        return $this->ruolo;
    }
    /**
     * Imposta un ruolo per un dato utente
     * @param int $ruolo
     * @return boolean true se il valore e' ammissibile ed e' stato impostato,
     * false altrimenti
     */
    public function setRuolo($ruolo) {
        switch ($ruolo) {
            case self::Admin:
            case self::Cliente:
                $this->ruolo = $ruolo;
                return true;
            default:
                return false;
        }
    }
    
    
   
}
