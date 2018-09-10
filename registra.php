<?php

    require_once('db.php');

    $ra = $_POST['ra'];

    $turma = $_POST['turma'];

    $amigo = $_POST['amigo'];
    
    $etico = $_POST['etico'];

    $objDb = new db(); //Criacao de novo obj da classe db.php
    $link = $objDb->conecta_mysql(); //Variavel link recebendo o retorno da funcao mysql

    $ver = mysqli_query($link,$sql="Select * from usuarios where ra = $ra");
    $res = mysqli_num_rows($ver);

    if($res > 0){
        header (
            'Location: home.php?erro=1'
        );
    } else {
        $sql = "INSERT INTO usuarios(ra,turma,amigo,etico) VALUES ('$ra','$turma','$amigo','$etico') ";

        //executar a query
        if(mysqli_query($link, $sql)){
            header(
                'Location: confirma.php'
                
            );
        } else {
            echo 'Erro ao tentar mandar a mensagem!';
            } 
    }    

?>