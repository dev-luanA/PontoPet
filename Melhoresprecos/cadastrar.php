<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_petshop2";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificando se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $url_imagem = $_POST['url_imagem'];

    // Verificando se todos os campos obrigatórios foram preenchidos
    if (!empty($nome) && !empty($descricao) && !empty($preco) && !empty($categoria) && !empty($url_imagem)) {
        // Usando prepared statements para evitar SQL Injection
        $stmt = $conn->prepare("INSERT INTO produtos (nome_produto, descricao_produto, preco_produto, categoria_produto, url_imagem) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdss", $nome, $descricao, $preco, $categoria, $url_imagem);

        if ($stmt->execute()) {
            // Redirecionando para a página de categoria específica
            switch ($categoria) {
                case "Gatos":
                    header("Location: Gatos/gatos.php");
                    break;
                case "Cachorros":
                    header("Location: Cachorros/cachorros.php");
                    break;
                case "Aquaticos":
                    header("Location: Aquaticos/aquaticos.php");
                    break;
                case "Roedores":
                    header("Location: Roedores/roedores.php");
                    break;
                case "Passaros":
                    header("Location: Passaros/passaros.php");
                    break;
                // Adicione outros casos conforme necessário
                default:
                    // Redirecionar para alguma página padrão, caso a categoria não seja encontrada
                    header("Location: index.php");
                    break;
            }
            exit(); // Certifique-se de sair após redirecionar
        } else {
            echo "Erro ao inserir o produto: " . $stmt->error;
        }

        // Fechando o statement
        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos obrigatórios.";
    }

    // Fechando a conexão
    $conn->close();
}
?>
