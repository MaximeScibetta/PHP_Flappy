<?php
    include './utils.php';
    include 'configs/config.php';
    require 'vendor/autoload.php';
    include './router.php';
//$dsn = 'mysql:dbname=flappy;host=127.0.0.1;charset=UTF8';
//$username = 'homestead';
//$password = 'secret';
//$options = [
//    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
//];
//
//$cx = new PDO( $dsn, $username, $password, $options);
//
//function jsonencode($something)
//{
//    return json_encode($something, JSON_UNESCAPED_UNICODE);
//}
//
//$method = $_SERVER['REQUEST_METHOD'];
//if ( $method === 'GET' ){
//
//$sql = 'SELECT * FROM scores ORDER BY score DESC LIMIT 10';
//$pdoSt = $cx->query($sql);
//echo jsonencode( $pdoSt->fetchAll() );
//
//}elseif ( $method === 'POST' ){
//if( isset($_POST['score'] ) ){
//    if( ctype_digit($_POST['score']) ){
//        //try{
//        //$sql = 'INSERT INTO scores(`score`) VALUES (:score)';
//        //$pdoSt = $cx->prepare($sql);
//        //$pdoSt->bindValue(':score',$_POST['score']);
//        //$pdoSt->execute([':score'=>$_POST['score']]);
//        echo jsonencode( ['success'=>'Le score a bien été enregistré !'] );
//        //} catch (PDOException $e){
//        echo jsonencode(['error'=>$e->getMessage()]);
//    }
//}else{
//    die( jsonencode( ['error'=>'Le nombre que vous avez fournis n´est pas une entier !'] ) );
//}
//}else{
//    die( jsonencode( ['error'=>'Il faut fournir un score !']) );
//}
//}else{
//    die( jsonencode( ['error'=>'Vous avez demandé une méthode invalide.'] ) );
//}