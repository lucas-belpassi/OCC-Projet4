<?php

namespace app;

abstract class Model{
    // Informations de BDD
    private $host ="localhost";
    private $db_name = "projet4";
    private $username = "root";
    private $password = "";

    // Propriété contenant la connexion (utilisable par les classes enfants)
    protected $_connexion;

    //Propriétés contenant les informations de requêtes
    public $table;
    public $id;

    // Fonction permettant de se connecter à la BDD
    public function getConnection(){
        // On efface la connection précédente
        $this->_connexion = null;

        try{
            $this->_connexion = new \PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->_connexion->exec('set names utf8');
        }catch(\PDOException $exeption){
            echo 'Erreur :' .$exeption->getMessage();
        }
    }

    // Fonction pour récupérer toutes les informations de la BDD :
    public function getAll(){
        $sql = "SELECT * FROM ". $this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }

    // Fonction 
    public function getOne(){
        $sql = "SELECT * FROM ". $this->table . 'WHERE id=' . $this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}