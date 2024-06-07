<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produto</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
        <h1>Inserir Produto</h1>
        <form id="produto-form" action="cadastrar.php" method="POST"> <!-- Alterado o action -->
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>

            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" required>

            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria" required>
                <option value="Farmacia">Farmácia</option>
                <option value="Gatos">Gatos</option>
                <option value="Cachorros">Cachorros</option>
                <option value="Passaros">Pássaros</option>
                <option value="Aquaticos">Aquáticos</option>
                <option value="Roedores">Roedores</option>
            </select>

            <label for="url_imagem">URL da Imagem:</label>
            <input type="url" id="url_imagem" name="url_imagem" required>

            <button type="submit">Inserir Produto</button>
        </form>
    </div>
</body>
</html>
