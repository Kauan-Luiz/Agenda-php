<style>

    .header-cad{
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

<header class="header-cad">
    <h3>Cadastro de Contatos</h3>
</header>
<div>
    <form action="index.php?menuop=inserir-contato" method="post" >
    <div>
        <label for="nomeContato" class="form-label">Nome</label>
        <input type="text" name="nomeContato" class="form-control custom-input" >
    </div>
    <div>
        <label for="emailContato" class="form-label">E-mail</label>
        <input type="email" name="emailContato" class="form-control custom-input" >
    </div>
    <div>
        <label for="telefoneContato" class="form-label">Telefone</label>
        <input type="text" name="telefoneContato" class="form-control custom-input" >
    </div>
    <div>
        <label for="enderecoContato" class="form-label">Endereço</label>
        <input type="text" name="enderecoContato" class="form-control custom-input" >
    </div>

    <div>
        <label for="sexoContato" class="form-label">Sexo</label>
        <input type="text" name="sexoContato" class="form-control custom-input" >
    </div>

    <div>
        <label for="dataNascContato" class="form-label">Data de Nascimento</label>
        <input type="date" name="dataNascContato" class="form-control custom-input" >
    </div>
    <br>
    <div>
        <input type="submit" value="Adicionar" name="btnAdicionar" class="btn btn-success">
    </div>
    </form>
</div>

<footer class="container-fluid fixed-bottom bg-dark">
        <div class="text-center">Time Flow</div>

    </footer>