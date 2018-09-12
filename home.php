<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ADM | UNASP-HT</title>
    <link rel="shortcut icon" href="img/logo_unasp.png" type="image/x-png"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
            body {
                background: #edf3f7; 
            }
    </style>
    
</head>
<body>
    <div class="col-sm-12">
        <div class="container">
            
            <div class="row">
                
                <div class="text-center titulo">
                    <h2>Realize sua votação</h2>
                </div>
            </div>    
            
            <div class="col-md-2"></div>

                <div class="conteudo-home col-sm-8">
                    <form method="post" action="registra.php" id="formContato">
                           
                        <div class="row"> 
                            <div class="col-md-2"></div>

                            <div class="form-group col-md-6">
                                <label for="ra" class="letra">Seu RA</label>
                                <input type="text" name="ra" class="form-control" placeholder="Digite seu RA" id="ra" required="required">
                            
                            <?php
                                if ($erro ==1) {
                                    echo '<font color="#FF0000">Ra já foi utilizado na votação!</font>';
                                }                            
                            ?>
                            
                            </div>
                        
                            <div class="form-group col-md-2">
                               <label for="turma" class="letra">Turma: </label>
                                <select name="turma" class="custom-select box" >
                                    <option selected>Selecione</option>
                                    <option value="1">2°A</option>
                                    <option value="2">4°A</option>
                                    <option value="3">4°B</option>
                                    <option value="4">6°A</option>
                                    <option value="5">6°B</option>
                                    <option value="6">8°A</option>
                                    <option value="7">8°B</option>
                                </select>
                            </div>
                        </div>  

                        <div class="row">
                            <div class="col-md-2"></div>
                        
                            <div class="form-group col-md-8">
                                <label for="amigo" class="letra">Qual o professor que você gostaria que fosse o Paraninfo da sua formatura?</label>
                                <input type="text" name="resposta" class="form-control" placeholder="Digite o nome do professor" id="amigo" required="required">
                            </div>
                            
                        </div>  

                        <div class="col-md-5"></div>
                        <button type="submit" class="btn btn-primary btn-votar col-md-2" id="btn-votar">Enviar resposta</button>

                    </form>  
                </div>     
            </div>
        </div>
    </div>
</body>
</html>