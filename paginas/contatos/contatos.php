<style>
.pesquisar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 60px;
    margin-bottom: 10px;
}

.form-pesquisar{
    display: flex;
}


.btn-pesquisar{

    background-color:#0d6efd; 
    color: white;
    border: none; 
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    padding: 10px 20px; 
    font-size: 12px; 
    transition: 0.3s;
    cursor: pointer; 
}

body{
    background-color: #ECECEC;
}
</style>
<div class="pesquisar">
    <div>
        <a href="index.php?menuop=cad-contato" class="btn btn-primary"> Cadastrar </a>
    </div>
    <div>
        <form action="index.php?menuop=contatos" method="post" class="form-pesquisar">
            <input type="text" name="txt_pesquisa">
            <input type="submit" value="Pesquisar" class="btn-pesquisar">
        </form>
    </div>
</div>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="row">ID</th>
            <th scope="row">Nome</th>
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

    $quantidade = 10;   
    $pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1;

    $inicio = ($quantidade * $pagina) - $quantidade;


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
        LIMIT $inicio, $quantidade
        
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
            <td><a href="index.php?menuop=editar-contato&idContato=<?=$dados["idContato"] ?>"class="btn btn-outline-secondary" >Editar</a></td>
            <td><a href="index.php?menuop=excluir-contato&idContato=<?=$dados["idContato"] ?>" class="btn btn-danger">Excluir</a></td>
        </tr>
<?php
}
?>
    
    </tbody>
</table>
<br> 
<?php

$sqlTotal = "SELECT idContato FROM tbcontatos";
$qrTotal = mysqli_query($conexao,$sqlTotal) or die (mysqli_error($conexao));
$numTotal = mysqli_num_rows($qrTotal);
$totalPagina = ceil($numTotal/$quantidade);

echo '<a href="?menuop=contatos&pagina=1"> Primeira Pagina< </a> ';

if($pagina>6){
    ?>
     <a href="?menuop=contatos&pagina=<?php echo $pagina-1?>"> << </a>
    <?php
}


for($i=1;$i<=$totalPagina;$i++){

    if($i>=($pagina-5) && $i <= ($pagina+5)){
        if($i==$pagina){
            echo $i;
        }else{
            echo "<a href=\"?menuop=contatos&pagina=$i\"> $i</a>";
        }
    }
}


if($pagina< ($totalPagina-5)){
    ?>
     <a href="?menuop=contatos&pagina=<?php echo $pagina+1?>"> >> </a>
    <?php
}

echo "<a href=\"?menuop=contatos&pagina=$totalPagina\" > >Ultima Pagina</a> <br> <br>";
echo "total de registros: $numTotal ";
