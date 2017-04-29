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
                $scores = $this->scoreModel->postScore();
                $errors = [
                    'success' => 'Le score a bien été enregistré !',
                    ];
            }else{
                $errors = [
                    'error' => 'Le nombre que vous avez fournis n´est pas un entier !',
                ];
            }
        }else{
            $errors = [
                'error' => 'Il faut fournir un score !',
            ];
        }
        return compact( 'scores', 'errors');
    }

    public function index()
    {
        if( $scores = $this->scoreModel->getScore() ){
            $errors = [
                'success' => 'Le score a bien été affiché !',
            ];
        }else{
            $errors = [
                'error' => 'Il sembe qu´un problème est survenu lors de l´affichage des scores.',
            ];
        }
        return compact( 'scores', 'errors');
    }
}