<?php

/**
 * 
 * Fichier database pour appeler les méthodes
 * 
 * Auteur : Diego Da Silva
 * Date : 28.02.2022
 * Description : 
 */

 class Database {

    // Variable de classe
    private $connector;

    /**
     * Se connecter via PDO et utilise la variable de classe $connector
     */
    public function __construct(){
        include('config.php');

        try
        {
            $this->connector = new PDO("mysql:host=$DB_SERVER;dbname=$DB_NAME;charset=utf8" , $DB_USER, $DB_PASSWORD);
                }
        catch (PDOException $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * permet de préparer et d’exécuter une requête de type simple (sans where)
     */
    private function querySimpleExecute($query){

        $req = $this -> connector->prepare($query);
        $req->execute();
        return $req;
    }

    /**
     * permet de préparer, de binder et d’exécuter une requête (select avec where ou insert, update et delete)
     */
    private function queryPrepareExecute($query, $binds){
        
        $req =  $this->connector->prepare($query);
        foreach($binds as $key => $value){
            $req->bindValue($binds[$key]['name'], $binds[$key]["value"], $binds[$key]["type"]);
        }
        $req->execute();

        return $req;
    }

    /**
     * traiter les données pour les retourner par exemple en tableau associatif (avec PDO::FETCH_ASSOC)
     */
    private function formatData($req){

        $result = $req->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * vider le jeu d’enregistrement
     */
    private function unsetData($req){

        $req->closeCursor();
    }

    /**
     * récupère la liste des informations pour 1 enseignant
     */
    public function getOneCar($id){

        // avoir la requête sql pour 1 enseignant (utilisation de l'id)
        $queryOneCar = "SELECT * FROM `t_voiture` WHERE `idVoiture` = $id";

       // appeler la méthode pour executer la requête
       $getQueryOneCar = $this -> querySimpleExecute($queryOneCar);

       // appeler la méthode pour avoir le résultat sous forme de tableau
       // retour l'enseignant
       return $this -> formatData($getQueryOneCar);    
    }

    /**
     * toute les voitures
     */
    public function getAllCar(){

        // avoir la requête sql pour 1 enseignant (utilisation de l'id)
        $queryAllCar = "SELECT * FROM `t_voiture`";

        // appeler la méthode pour executer la requête
        $getQueryAllCar = $this -> querySimpleExecute($queryAllCar);

        // appeler la méthode pour avoir le résultat sous forme de tableau
        // retour l'enseignant
        return $this -> formatData($getQueryAllCar);    
    }

    public function insertUser($useLogin, $usePassword){

        $queryRequest = "INSERT INTO `t_user` (`useLogin`, `usePassword`) VALUES (:login, :password)";

        $arrayBinds = array(
            array("name" => "login", "value" => $useLogin, "type" => PDO::PARAM_STR),
            array("name" => "password", "value" => $usePassword, "type" => PDO::PARAM_STR)
        );

        $this->queryPrepareExecute($queryRequest, $arrayBinds);
    }

    public function selectUserWithLogin($login){

        // Get the informations of the user
        $queryRequest = "SELECT idUser, useLogin, usePassword FROM t_user WHERE useLogin=:login";

        // Set an array with the binds values
        $arrayBinds = array(

            array("name" => "login", "value" => $login, "type" => PDO::PARAM_STR)
        );

        // Execute the request
        $result = $this->queryPrepareExecute($queryRequest, $arrayBinds);

        $usersReturned = $this->formatData($result);

        //return the array
        return $usersReturned;

    }
}
?>
