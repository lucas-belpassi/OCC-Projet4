<?php

namespace app;

abstract class Controller{
    // Fonction pour charger le bon modèle
    public function loadModel(string $model){
        require_once(ROOT . 'models/' . $model .'.php');
        $this->$model = new $model();
    }

    // Fonction pour récup la bonne vue
    public function render(string $file, array $data =[]){
        extract($data);
        require_once(ROOT . "/views/" . strtolower(get_class($this)) . '/' . $file . '.php');
    }
}