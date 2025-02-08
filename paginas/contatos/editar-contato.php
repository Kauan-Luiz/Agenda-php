<?php

$idContato = $_GET["idContato"];

$sql = "SELECT * FROM tbcontatos WHERE idcontato= {$idContato}";

$rs = mysqli_query($conexao,$sql) or die ("Erro ao recuperar os dados do registro." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<style>

    .header-edit{
        margin-top: 60px;
        

    }
    .custom-input {
        width: 400px; 
        height: 40px; 
        font-size: 16px; 
    }

    body{
    background-color: #ECECEC;
}
</style>

<header class="header-edit">
    <h3>Editar contato</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-contato" method="post"> 
    <div class="mb-3">
        <label for="idContato" class="form-label">ID</label>
        <input type="text" name="idContato" value="<?=$dados["idContato"]?>" class="form-control custom-input">
    </div>

    <div class="mb-3">
        <label for="nomeContato" class="form-label">Nome</label>
        <input type="text" name="nomeContato"value="<?=$dados["nomeContato"]?>" class="form-control custom-input">
    </div>

    <div class="mb-3">
        <label for="emailContato" class="form-label">E-mail</label>
        <input type="email" name="emailContato"value="<?=$dados["emailContato"]?>" class="form-control custom-input">
    </div>

    <div class="mb-3">
        <label for="telefoneContato" class="form-label">Telefone</label>
        <input type="text" name="telefoneContato"value="<?=$dados["telefoneContato"]?>" class="form-control custom-input">
    </div>

    <div class="mb-3">
        <label for="enderecoContato" class="form-label">Endereço</label>
        <input type="text" name="enderecoContato"value="<?=$dados["enderecoContato"]?>" class="form-control custom-input">
    </div>

    <div class="mb-3">
        <label for="sexoContato" class="form-label">Sexo</label>
        <input type="text" name="sexoContato"value="<?=$dados["sexoContato"]?>" class="form-control custom-input">
    </div>

    <div class="mb-3">
        <label for="dataNascContato" class="form-label">Data de Nascimento</label>
        <input type="date" name="dataNascContato"value="<?=$dados["dataNascContato"]?>" class="form-control custom-input">
    </div>
    
    <div>
        <input type="submit" value="Atualizar" name="btnAtualizar" class="btn btn-success">
    </div>

    </form>
</div>