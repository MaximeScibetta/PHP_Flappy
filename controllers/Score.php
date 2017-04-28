<?php

namespace Controllers;

use Models\Score as ScoreModel;

class Score
{
    private $scoreModel = null;

    public function __construct()
    {
        $this->scoreModel = new ScoreModel();
    }

    public function store()
    {
        if( isset($_POST['score']) ){
            if( ctype_digit($_POST['score']) ){
                jsonencode( $this->scoreModel->postScore() );
                echo jsonencode( ['success'=>'Le score a bien été enregistré !'] );
            }else{
                die( jsonencode( ['error'=>'Le nombre que vous avez fournis n´est pas une entier !'] ) );
            }
        }else{
            die( jsonencode( ['error'=>'Il faut fournir un score !']) );
        }
    }

    public function index()
    {
        if( $scores = $this->scoreModel->getScore() ){
            var_dump($scores);
            die();
            return jsonencode($scores);
        }else{
            die( ['error'=>'Il sembe qu´un problème est survenu lors de l´affichage des scores.'] );
        }
    }
}