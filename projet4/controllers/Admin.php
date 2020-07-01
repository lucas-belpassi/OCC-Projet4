<?php
use app\Controller;

class Admin extends Controller{


    public function login(){
        $this->render('login');
        $this->loadModel("Login");
        $this->Login->login();
    }

    public function adminpage(){
        $this->loadModel("Administration");
        $chapters =  $this->Administration->showChapters();
        $comments =  $this->Administration->showComments();
        $this->render('adminpage', compact('chapters', 'comments'));
    }
}