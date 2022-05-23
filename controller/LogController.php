<?php
session_start();
/**
 * ETML
 * Auteur : Emilien Charpié
 * Date: 29.03.2022
 * Controler pour gérer les pages de connexion et d'inscription
 * ../../../P_042-Smartphone/SourceFile/models/database.php
 */

class LogController extends Controller {

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
        return call_user_func(array($this, $action));
    }

    /**
    * Display signin page
    *
    * @return string
    */
    private function signinAction() {

        $view = file_get_contents('view/page/connexion/signin.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    /**
    * Display login page
    *
    * @return string
    */
    private function loginAction() {

        $view = file_get_contents('view/page/connexion/login.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    /**
    * Display logout page
    *
    * @return string
    */
    private function logoutAction() {

        $view = file_get_contents('view/page/connexion/logout.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    /**
    * Display signin method
    *
    * @return string
    */
    private function checkSigninAction() {
        if(isset($_POST['btnSubmit'])){
            //Get the class Database
            $database = new Database();

            extract($_POST);

            //Check if the user correctly entered the values
            if(preg_match('/^([a-z]|[A-z]|\d|\_)+$/', $login)){
                //Check if the user entered the same passwords
                if($password == $passwordConfirm){
                    //Hash password
                    $hashPass = password_hash($password, PASSWORD_BCRYPT);

                    //Insert the user
                    $database->insertUser($login, $hashPass);

                    //Connect the user
                    $usersFound = $database->selectUserWithLogin($login);

                    if($usersFound){
                        foreach ($usersFound as $key => $value) {
                            $passwordFromDB = $usersFound[$key]['usePassword'];
                            if($hashPass == $passwordFromDB){
                                //Select the products in the cart
                                //Set the session variables
                                $_SESSION['login'] = $usersFound[$key]['useLogin'];
                                $_SESSION['id'] = $usersFound[$key]['idUser'];
                                header("Location:index.php?controller=home&action=index");
                            }else{
                                //Write an error message if the password is false
                            }
                        }
                    }
                }else{
                    //Write error message if the password not corresponding
                    header("Location:index.php?controller=connexion&action=signin&error=2");
                }
            }else{
                //Write a message error if the fields have wrong inputs
                header("Location:index.php?controller=connexion&action=signin&error=1");
            }
        }else{
            //Redirect the user to the home page if he can't see the page
            header("Location:index.php?controller=home&action=index");
        }
    }

    /**
    * Login method
    *
    * @return string
    */
    private function checkLoginAction() {
        if(isset($_POST['btnSubmit'])){
            //Get the class Database
            $database = new Database();

            extract($_POST);

            //Check if the user correctly entered the values
            if(preg_match('/^([a-z]|[A-z]|\d|\_)+$/', $login)){
                $usersFound = $database->selectUserWithLogin($login);
                if($usersFound){
                    echo var_dump($usersFound);
                    foreach ($usersFound as $key => $value) {
                        $hashPass = $usersFound[$key]['usePassword'];
                        if(password_verify($password, $hashPass)){
                            //Set the session variables
                            $_SESSION['login'] = $usersFound[$key]['useLogin'];
                            $_SESSION['id'] = $usersFound[$key]['idUser'];
                            header("Location:index.php?controller=home&action=index");
                        }else{
                            //Write an error message if the password is false
                            header("Location:index.php?controller=connexion&action=login&error=2");
                        }
                    }
                }else{
                    //Write a message if none of the email have an account
                    header("Location:index.php?controller=connexion&action=login&error=3");
                }
            }else{
                //Write a message if the user doeasn't respect the regex
                header("Location:index.php?controller=connexion&action=login&error=1");
            }
        }else{
            //Redirect the user to the home page if he can't see the page
            header("Location:index.php?controller=home&action=index");
        }
    }
}