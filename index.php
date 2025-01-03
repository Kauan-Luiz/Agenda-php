<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Agendador 1.0</title>
</head>
<body>
    <header>
        <h1>Sistema Agendador 1.0</h1>
        <nav>
            <a href="index.php?menuop=home">Home</a> 
            <a href="index.php?menuop=contatos">Contatos</a>
            <a href="index.php?menuop=tarefas">Tarefas</a>
            <a href="index.php?menuop=eventos">Eventos</a>
        </nav>
    </header>

    <main>
    <?php

        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
        switch ($menuop) {
            case 'home':
                include("paginas/home/home.php");
                break;           
            case 'contatos':
                include("paginas/contatos/contatos.php");
                break;
            case 'tarefas':
                include("paginas/tarefas/tarefas.php");
                break;
            case 'eventos':
                include("paginas/eventos/eventos.php");
                break;
                
        }
        
    ?>
    </main>

</body>
</html>