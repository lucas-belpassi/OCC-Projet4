<?php

use app\Model;

class Comment extends Model
{
    public function __construct()
    {
        $this->table = "comments";
        $this->getConnection();
    }

    public function findByIdChapter($id_chapter)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id_chapter='" . $id_chapter . "' ORDER BY date_comment_publication DESC";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }

    public function postComment($id_chapter)
    {
        if (isset($_POST['submit_comment'])) {
            if (isset($_POST['pseudo'], $_POST['comment']) and !empty($_POST['pseudo']) and !empty($_POST['comment'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $content = htmlspecialchars($_POST['comment']);
                if (strlen($pseudo) < 25) {
                    $sql = $this->_connexion->prepare("INSERT INTO " . $this->table . " (pseudo, content, id_chapter, date_comment_publication) VALUES(:pseudo, :content, :id_chapter, CURDATE())");
                    $sql->execute(array(
                        'pseudo' => $pseudo,
                        'content' => $content,
                        'id_chapter' => $id_chapter,
                    ));
                    //Pour éviter l'ajout du commentaire a chaque actualisation :
                    $delai = 1;
                    $url = "http://localhost/projet4/index.php?p=chapters/read/" . $id_chapter;
                    header("Refresh: $delai;url=$url");
                } else {
                    $commentMsg = "Erreur : Le pseudo contient plus de 25 caractères";
                    return $commentMsg;
                }
            } else {
                $commentMsg = "Erreur : tous les champs doivent être complétés";
                return $commentMsg;
            }
        }
    }

    // public function reportComment(){
    //     $id_comment = 
    //     if (isset($_POST['submit_report_comment'])){

    //     }

    // }

}