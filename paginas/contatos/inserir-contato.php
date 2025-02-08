<header>
    <h3>Inserir Contato</h3>
</header>
<style>
       body{
    background-color: #ECECEC;
}
</style>
<?php
// Certifique-se de que a conexão ($conexao) foi estabelecida corretamente antes deste código.

$nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
$emailContato = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
$telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
$enderecoContato = mysqli_real_escape_string($conexao, $_POST["enderecoContato"]);
$sexoContato = mysqli_real_escape_string($conexao, $_POST["sexoContato"]);
$dataNascContato = mysqli_real_escape_string($conexao, $_POST["dataNascContato"]);

// Corrigir o SQL para incluir vírgulas entre os valores
$sql = "INSERT INTO tbcontatos (
    nomeContato,
    emailContato,
    telefoneContato,
    enderecoContato,
    sexoContato,
    dataNascContato
) VALUES (
    '{$nomeContato}', 
    '{$emailContato}', 
    '{$telefoneContato}', 
    '{$enderecoContato}', 
    '{$sexoContato}', 
    '{$dataNascContato}'
)";

// Executar a consulta e verificar se houve erro
$rs = mysqli_query($conexao, $sql);

if ($rs) {
    echo "O registro foi inserido com sucesso!";
} else {
    die("Erro ao executar a consulta: " . mysqli_error($conexao));
}
?>
