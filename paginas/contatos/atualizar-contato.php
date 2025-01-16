<header>
    <h3>Atualizar Contato</h3>
</header>

<?php
// Certifique-se de que a conexão ($conexao) foi estabelecida corretamente antes deste código.
$idContato= mysqli_real_escape_string($conexao, $_POST["idContato"]);
$nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
$emailContato = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
$telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
$enderecoContato = mysqli_real_escape_string($conexao, $_POST["enderecoContato"]);
$sexoContato = mysqli_real_escape_string($conexao, $_POST["sexoContato"]);
$dataNascContato = mysqli_real_escape_string($conexao, $_POST["dataNascContato"]);

// Corrigir o SQL para incluir vírgulas entre os valores
$sql = " UPDATE tbcontatos SET
nomeContato = '{$nomeContato}',
emailContato = '{$emailContato}',
telefoneContato = '{$telefoneContato}',
sexoContato = '{$sexoContato}',
enderecoContato = '{$enderecoContato}',
dataNascContato = '{$dataNascContato}'

WHERE idcontato = '{$idContato}'
";

 mysqli_query($conexao,$sql) or die("erro ao executar a consulta." . mysqli_error($conexao));

 echo "o registro foi atualizado com sucesso!";

