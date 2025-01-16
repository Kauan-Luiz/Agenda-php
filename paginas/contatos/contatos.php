<header>
    <h3>Contatos</h3>
</header>
<div>
    <a href="index.php?menuop=cad-contato">Novo Contato</a>
</div>
<div>
    <form action="index.php?menuop=contatos" method="post">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value="Pesquisar">
    </form>
</div>
<table border="1" >
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>Edição</th>
            <th>Excluir</th>
        </tr>
    </thead>

    <tbody>
    
    <?php
    $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

    $sql = "SELECT 
    idContato,
    upper(nomeContato) AS nomeContato,
    lower(emailContato) AS emailContato,
    telefoneContato,
    upper(enderecoContato) AS enderecoContato,
    CASE
        WHEN sexoContato='F' THEN 'FEMININO'
        WHEN sexoContato='M' THEN 'MASCULINO'
    ELSE
        'NÃO ESPECIFICADO'
        END AS sexoContato,
    DATE_FORMAT(dataNascContato, '%d/%m/%Y') AS dataNascContato
        FROM tbcontatos 
        WHERE 
        idContato='{$txt_pesquisa}' or 
        nomeContato LIKE '%{$txt_pesquisa}%'

        ORDER BY nomeContato ASC
        
        ";
    $rs = mysqli_query($conexao, $sql) or die("Erro ao exercutar a consulta!" . mysqli_error($conexao));

    while ($dados = mysqli_fetch_assoc($rs)) {
        
    

    ?>
        <tr>
            <td><?=$dados["idContato"] ?></td>
            <td><?=$dados["nomeContato"] ?></td>
            <td><?=$dados["emailContato"] ?></td>
            <td><?=$dados["telefoneContato"] ?></td>
            <td><?=$dados["enderecoContato"] ?></td>
            <td><?=$dados["sexoContato"] ?></td>
            <td><?=$dados["dataNascContato"] ?></td>
            <td><a href="index.php?menuop=editar-contato&idContato=<?=$dados["idContato"] ?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-contato&idContato=<?=$dados["idContato"] ?>">Excluir</a></td>
        </tr>
<?php
}
?>
    
    </tbody>
</table>