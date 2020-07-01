<?php

use app\Model;

class Administration extends Model
{
    public function __construct()
    {
        $this->getConnection();
    }

    public function showChapters(){
        $sql = "SELECT * FROM chapters";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }

    public function showComments(){
        $sql = "SELECT * FROM comments WHERE reported=1";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }
}