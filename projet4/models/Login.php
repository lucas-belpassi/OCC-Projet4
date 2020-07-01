<?php

use app\Model;

class Login extends Model
{
    public function __construct()
    {
        $this->table = "admin";
        $this->getConnection();
    }

    public function login()
    {
        if (isset($_POST['adminformconnection'])) {
            $mail = htmlspecialchars($_POST['mail']);
            $password = sha1($_POST['password']);
            if (!empty($mail) and !empty($password)) {
                $requser = $this->_connexion->prepare("SELECT * FROM " . $this->table . " WHERE mail = ? AND password = ?");
                $requser->execute(array($mail, $password));
                $userexist = $requser->rowCount();
                if($userexist == 1){
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['id'];
                    $_SESSION['mail'] = $userinfo['mail'];
                    header("Location: http://localhost/projet4/index.php?p=admin/adminpage&id=" . $_SESSION['id']);
                }else{
                    $errorLoginMsg = "Mauvais identifiants de connexion";
                    return $errorLoginMsg;  
                }

            } else {
                $errorLoginMsg = "Vous devez replir tous les champs.";
                return $errorLoginMsg;
            }
        }
    }
}
