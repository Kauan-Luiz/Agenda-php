<header>
    <h3>Inserir Contato</h3>
</header>

<?php

$nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
$emailContato = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
$telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
$sexoContato = mysqli_real_escape_string($conexao, $_POST["sexoContato"]);
$dataNascContato = mysqli_real_escape_string($conexao, $_POST["dataNascContato"]);

   

?>