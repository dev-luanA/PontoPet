<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Petshop</title>
    <link rel="stylesheet" href="login.css">
</head>
<body style="background-image: url('banner.png'); background-size: cover;">
    <div class="login-container">
        <form class="login-form">
            <h2>Login Petshop</h2>
            <div class="form-group">
                <label for="name">Nome Completo:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="email">Senha:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="hasCnpj">Possui CNPJ?</label>
                <input type="checkbox" id="hasCnpj" name="hasCnpj">
            </div>
            <div class="form-group" id="cnpjGroup">
                <label for="cnpj">CNPJ:</label>
                <input type="text" id="cnpj" name="cnpj">
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>

    <script>
        
        const hasCnpjCheckbox = document.getElementById('hasCnpj');
        const cnpjGroup = document.getElementById('cnpjGroup');

        hasCnpjCheckbox.addEventListener('change', function() {
            if (this.checked) {
                cnpjGroup.style.display = 'block';
            } else {
                cnpjGroup.style.display = 'none';
            }
        });
    </script>
</body>
</html>
