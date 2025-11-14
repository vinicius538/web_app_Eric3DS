<?php
session_start();
include_once('config.php');

if(isset($_POST['submit'])){
    $password = $_POST['password'];
    $confirmarpassword = $_POST['confirmarpassword'];
    $novasenha = $_POST['novasenha'];

    // Confere se as senhas digitadas batem
    if($password === $confirmarpassword){
        $email = $_SESSION['email']; // supondo que você salva o email do usuário na sessão ao logar

        // Verifica a senha atual no banco
        $sql = "SELECT senha FROM usuario WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row && $row['senha'] === $password){ // aqui o ideal é usar password_hash
            // Atualiza a senha
            $update = "UPDATE usuario SET senha='$novasenha' WHERE email='$email'";
            if(mysqli_query($conn, $update)){
                echo "<script>alert('Senha alterada com sucesso!');</script>";
            } else {
                echo "<script>alert('Erro ao alterar senha.');</script>";
            }
        } else {
            echo "<script>alert('Senha atual incorreta.');</script>";
        }
    } else {
        echo "<script>alert('A senha e a confirmação não coincidem.');</script>";
    }
}
?>

    
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #dfe9f3 0%, #ffffff 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-card {
      background: #fff;
      border-radius: 15px;
      padding: 40px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      text-align: center;
    }
    .login-card h3 {
      font-weight: 700;
      margin-bottom: 30px;
      color: #0d6efd;
    }
    .form-floating input {
      border-radius: 10px;
    }
    .btn-custom {
      background: #0d6efd;
      border: none;
      padding: 12px;
      width: 100%;
      font-weight: 600;
      border-radius: 10px;
      transition: 0.3s;
      color: #fff;
      margin-top: 15px;
    }
    .btn-custom:hover {
      background: #0b5ed7;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(13,110,253,0.3);
    }
    .social-btns .btn {
      margin: 5px;
      border-radius: 50%;
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-card a {
      display: block;
      margin-top: 20px;
      text-decoration: none;
      color: #666;
      font-weight: 500;
    }
    .login-card a:hover {
      color: #0d6efd;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h3>Trocar senha</h3>
    <form method="POST">
      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="senha" required>
        <label for="email">Senha</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="confirmarpassword" id="confirmarpassword" placeholder="senha" required>
        <label for="password">Confirmar senha</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="novasenha" id="novasenha" placeholder="senha" required>
        <label for="email">Nova senha</label>
      </div>
      <button type="submit" name="submit" class="btn-custom">Confirmar</button>
    </form>
    <a href="cadastro.php">Criar uma conta</a>
    <a href="ver_conta.php">Visualizar conta</a>
  </div>
</body>
</html>