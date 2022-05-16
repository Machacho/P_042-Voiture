<?php
/**
 * ETML
 * Auteur : Simon Baeriswyl
 * Date: 06.05.2022
 * Controler pour gérer les détails d'une soule voiture
 */

class SingleCarController extends Controller {

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
            return call_user_func(array($this, "SingleCarAction"));
        }
    }

    /**
     * Display the home page
     *
     * @return string
     */
    private function SingleCarAction() {
        $database = new Database();

        if(isset($_GET['id'])){
            $product = $database->GetOneCar($_GET['id']);
    
            $_SESSION['singleCar'] = $product;
    
            $view = file_get_contents('view/page/SingleCar/SingleCar.php');
    
            ob_start();
            eval('?>' . $view);
            $content = ob_get_clean();
    
            return $content;
        }else{
            header("Location:index.php?controller=home&action=home");
        }
    }
}