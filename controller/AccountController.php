<?php
/**
 * ETML
 * Auteur : Diego Da Silva
 * Date : 23.05.2022
 * Controler pour gérer la page compte 
 */
class AccountController extends Controller{

    /**
     * Dispatch current action
     * 
     * @return mixed
     */
    public function display(){

        $action = $_GET['action'] . "Action";

        return call_user_func(array($this, $action));
    }

    private function listAction() {
        
        $view = file_get_contents('view/page/compte/compte.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    private function editAction() {
        
        $db = new Database();

        $view = file_get_contents('view/page/compte/compte.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }


    private function addAction() {
        
        $view = file_get_contents('view/page/compte/addCar.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

}