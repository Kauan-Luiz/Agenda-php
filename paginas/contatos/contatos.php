<header>
    <h3>Contatos</h3>
</header>
<div>
    <a href="index.php?menuop=cad-contato">Novo Contato</a>
</div>
<table border="1" >
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
        </tr>
    </thead>

    <tbody>
    
    <?php
    $sql = "SELECT * FROM tbcontatos";
    $rs = mysqli_query($conexao, $sql) or die("Erro ao exercutar a consulta!" . mysqli_error($conexao));

    while ($dados = mysqli_fetch_assoc($rs)) {
        
    

    ?>
        <tr>
            <td><?=$dados["idContato"] ?></td>
            <td><?=$dados["nomeContato"] ?></td>
            <td><?=$dados["emailContato"] ?></td>
            <td><?=$dados["telefoneContato"] ?></td>
            <td><?=$dados["sexoContato"] ?></td>
            <td><?=$dados["dataNascContato"] ?></td>
        </tr>
<?php
}
?>
    
    </tbody>
</table>