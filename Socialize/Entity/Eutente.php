<?php

/* 
 * Realizzazione del caso d'uso relativo alla gestione della registrazione 
 */

class Eutente {
    
    //attributi
    private $nome;
    private $cognome;
    private $data_nas;
    private $sesso;
    private $pwd;
    private $citta;
    private $email;
    
    //metodi
    /*
     *   restituisce il nome
     */
    public function getNome(){
        return $this->$nome;
        
        }
    /*
     * restituisce il cognome
     */    
    public function getCognome() {
        return $this->$cognome;
        
    }
    
    /*
     * restituisce la data di nascita
     */
    public function getData() {
        //da implementare da decidere che tipo di variabile sara' la data
        
    }
    
    /*
     * restituisce il sesso
     */
    public function getSesso() {
        return $this->sesso;
    }
    
    /*
     * restituisce la citta'
     */
    public function getCitta(){
        return $this->citta;
    }
    
    /*
     * resituisce la pwd: DA VEDERE SE PORRE PUBLIC, PROTECTED O PRIVATE
     */
    private function getPwd(){
        return $this->pwd;
    }
    
    /*
     * restituisce l'email
     */
    public function getEmail(){
        return $this->email;
    }
    
    /*
     * costruttore
     */
    public function __construct( $name, $surname, $date, $pass, $sex, $mail, $city) {
        $this->nome = $name;
        $this->cognome = $surname;
        $this->email = $mail;
        $this->sesso = $sex;
        $this->data_nas = $date;
        $this->citta = $city;
        $this->pwd = $pass;
    }
     
    
     
    
    
}


?>
