<?php 
require ('funcoes.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title>Calculadora</title>
</head>
<body>
<?php

session_start();
$funcionamento= new Funcoes();
$funcionamento->funcionamento();
?>

<div class="container">
    <h4>Calculadora</h4>
        <form method="POST">
            <div id="calculadora">
                    <input class="alert-secondary"id="dados" type="text" name="display" value="<?php echo $_SESSION['display'] ?>"></input>
                    </br>
                    <input class="bg-warning" type="submit" name="botao" value="1">
                    <input class="bg-warning" type="submit" name="botao" value="2">
                    <input class="bg-warning" type="submit" name="botao" value="3">
                    <input class="bg-warning" type="submit" name="botao" value="+">
                    </br>
                    <input class="bg-warning" type="submit" name="botao" value="4">
                    <input class="bg-warning" type="submit" name="botao" value="5">
                    <input class="bg-warning" type="submit" name="botao" value="6">
                    <input class="bg-warning" type="submit" name="botao" value="-">
                    </br>
                    <input class="bg-warning" type="submit" name="botao" value="7">
                    <input class="bg-warning" type="submit" name="botao" value="8">
                    <input class="bg-warning" type="submit" name="botao" value="9">
                    <input class="bg-warning" type="submit" name="botao" value="*">
                     <br/>
                    <input class="bg-warning" type="submit" name="botao" value="0">
                    <input class="bg-warning" type="submit" name="botao" value="C">
                    <input class="bg-warning" type="submit" name="botao" value="/">
                    <input class="bg-warning" type="submit" name="botao" value="=">
        </form>
    </div>
</div>
</body>
</html>