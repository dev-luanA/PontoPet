<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profissionais.css">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    <title>Cadastro de Profissional - PetShop</title>
    
</head>
<body>

<div class="container">
    <h2>Cadastro de Novo Profissional</h2>
    <form action="cadastrofuncionarios.php" method="post">
        <label for="nome_completo">Nome Completo:</label>
        <input type="text" id="nome_completo" name="nome_completo" required>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="descricao">Breve Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea>

        <label for="localizacao">Localização:</label>
        <input type="text" id="localizacao" name="localizacao" required>

        <label for="url_foto">URL da Foto:</label>
        <input type="text" id="url_foto" name="url_foto" required>

        <input type="submit" value="Cadastrar Profissional">
    </form>
</div>

</body>
</html>



</html>
</body>
</html>
