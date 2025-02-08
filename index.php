<?php
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo-padrao.css">
    <title>Sistema Agendador 1.0</title>
</head>

<body>
    <header class="bg-dark">
        <div class="container">
            <header>             
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navabar-brand" href="index.php?menuop=home" class="logo" >
                        <img src="img/logo.png" alt="" srcset="" width="200"  >
                    </a>
                </nav>
            </header>
        </div>
    </header>

    <main>
    <div class="container">

    <?php

        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
        switch ($menuop) {
            case 'home':
                include("paginas/contatos/contatos.php");
                break;           
            case 'contatos':
                include("paginas/contatos/contatos.php");
                break;
            case 'inserir-contato':
                include("paginas/contatos/inserir-contato.php");
                break;    
            case 'editar-contato':
                include("paginas/contatos/editar-contato.php");
                break;   
            case 'excluir-contato':
                include("paginas/contatos/excluir-contato.php");
                break;   
            case 'atualizar-contato':
                include("paginas/contatos/atualizar-contato.php");
                break; 
            case 'cad-contato':
                include("paginas/contatos/cad-contato.php");
                break;
            case 'tarefas':
                include("paginas/tarefas/tarefas.php");
                break;
            case 'eventos':
                include("paginas/eventos/eventos.php");
                break;
                
        }
        
    ?>
    
    </div>
    </main>

    <footer class="container-fluid fixed-bottom bg-dark">
        <div class="text-center">Time Flow</div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>