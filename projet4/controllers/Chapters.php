<?php
use app\Controller;

class Chapters extends Controller{

    //Affichage des chapitres + pagination
    public function index(){
        $this->loadModel("Chapter");
        $totalPages = $this->Chapter->count();
        $previousPage = $this->Chapter->previousPage();
        $nextPage = $this->Chapter->nextPage();
        $chapters = $this->Chapter->paginate();
        
        $this->render('index', compact('chapters', 'totalPages', 'previousPage', 'nextPage'));
    }

    //Affichage du chapitre + commentaires
    public function read($number){
       
        $this->loadModel('Chapter');
        // On affiche l'article souhaité
        $chapter = $this->Chapter->findByNumber($number);

        $this->loadModel('Comment');
        // Méthode pour poster un commentaire
        $commentMsg = $this->Comment->postComment($number);
        // Méthode pour afficher les commentaires
        $comments = $this->Comment->findByIdChapter($number);

        //Méthode pour signaler un commentaire
        $this->Comment->reportComment();

        $this->render('read', compact('chapter', 'comments', 'commentMsg'));
    }
}