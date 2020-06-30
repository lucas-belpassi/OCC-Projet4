<?php

use app\Model;

class Chapter extends Model
{
    public function __construct()
    {
        $this->table = "chapters";
        $this->getConnection();
    }

    //Fonction pour sélectionner le bon chapitre en fonction de son numéro
    public function findByNumber(string $number)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE number='" . $number . "'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    }

    // Fonction pour aller chercher les chapitres et gérer la pagination
    public function paginate()
    {
        $chaptersPerPage = 2;
        // $chapitresTotaux = $this->_connexion->query('SELECT COUNT(id) FROM ' . $this->table)->fetch()[0];
        // $pagesTotales = ceil($chapitresTotaux / $chapitresParPage);

        if (isset($_GET['page']) and !empty($_GET['page']) and $_GET['page'] > 0) {
            $_GET['page'] = intval($_GET['page']);
            $currentPage = $_GET['page'];
        } else {
            $currentPage = 1;
        }
        $depart = ($currentPage - 1) * $chaptersPerPage;

        $sql = "SELECT * FROM " . $this->table . " ORDER BY id LIMIT " . $depart . "," . $chaptersPerPage;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }

    // Fonction count pour avoir les pages totales$
    public function count()
    {
        $chaptersPerPage = 2;
        $totalChapters = $this->_connexion->query('SELECT COUNT(id) FROM ' . $this->table)->fetch()[0];
        $totalPages = ceil($totalChapters / $chaptersPerPage);
        return $totalPages;
    }

    //Fonction précendent de la pagination
    public function previousPage()
    {
        if(!isset($_GET['page'])){
            $_GET['page'] = 1;
        }
        $currentPage = $_GET['page'];
        settype($currentPage, "integer");
        $previousPage = $currentPage - 1;
        if ($previousPage > 0) {
            return $previousPage;
        } else {
            return $previousPage = 1;
        }
    }

    //Fonction précendent de la pagination
    public function nextPage()
    {
        if(!isset($_GET['page'])){
            $_GET['page'] = 1;
        }
        $chaptersPerPage = 2;
        $totalChapters = $this->_connexion->query('SELECT COUNT(id) FROM ' . $this->table)->fetch()[0];
        $totalPages = ceil($totalChapters / $chaptersPerPage);
        $currentPage = $_GET['page'];
        settype($currentPage, "integer");
        $nextPage = $currentPage + 1;
        if($nextPage < $totalPages) {
            return $nextPage;  
        } else {
            return $nextPage = $totalPages;
        }
    }
}
