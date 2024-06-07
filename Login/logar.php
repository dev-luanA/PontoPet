<?php
session_start();


$conn = new mysqli("localhost", "root", "", "db_petshop2");


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
 
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    $stmt = $conn->prepare("SELECT id_cliente FROM cliente WHERE email_cliente = ? AND senha_cliente = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $stmt->store_result();

   
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id);
        $stmt->fetch();

        $_SESSION["user_logged_in"] = true;
        $_SESSION["user_id"] = $user_id;

     
        header("Location: http://localhost/PetshopTeste/PetShop/index.php");
        exit();
    } else {
       
        $login_error = "Email ou senha incorretos.";
    }

    $stmt->close();
}

$conn->close();
?>
