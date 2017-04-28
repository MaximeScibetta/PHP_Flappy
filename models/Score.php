<?php

namespace Models;

use Models\Model as ModelModel;

class Score
{
    private $modelModel = null;

    public function __construct()
    {
        $this->modelModel = new ModelModel();
    }

    public function getScore()
    {
        $pdo = $this->modelModel->connectDB();
        if( $pdo ){
            $sql = 'SELECT * FROM scores ORDER BY score DESC LIMIT 10';
            try{
                $pdoSt = $pdo->query($sql);
                return $pdoSt->fetchAll();
            }catch (PDOException $e){
                return false;
            }
        }else{
            die('Il semble qu´un problème est survenu lors de la récupération des scores.');
        }
    }

    public function postScore()
    {
        $pdo = $this->modelModel->connectDB();
        if( $pdo ){
            $sql = 'INSERT INTO scores(`score`) VALUES (:score)';
            try {
                $pdoSt = $pdo->prepare($sql);
                //$pdoSt->bindValue(':score',$_POST['score']);
                return $pdoSt->execute([':score' => $_POST['score']]);
            } catch (PDOException $e) {
                return false;
            }
        }
    }
}