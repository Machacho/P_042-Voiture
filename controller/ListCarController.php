<?php
/**
 * ETML
 * Auteur : Diego Da Silva
 * Date: 06.05.2022
 * Controler pour gérer les détails d'une soule voiture
 */

class ListCarController extends Controller {

    /**
     * Dispatch current action
     *
     * @return mixed
     */
    public function display() {

        if(isset($_GET['action'])){
            $action = $_GET['action'] . "Action";
        }else{
            $action = "NoAction";
        }

        // Call a method in this class
        try {
            return call_user_func(array($this, $action));
        } catch (\Throwable $th) {
            return call_user_func(array($this, "ListCarAction"));
        }
    }

    /**
     * Display the home page
     *
     * @return string
     */
    private function ListCarAction() 
    {
        $database = new Database();

            $product = $database->GetAllCar();
    
            $_SESSION['listCar'] = $product;
    
            $view = file_get_contents('view/page/listCar/listCar.php');
    
            ob_start();
            eval('?>' . $view);
            $content = ob_get_clean();
    
            return $content;
        
    }
}