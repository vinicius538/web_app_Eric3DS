<?php
  session_start();
    if(isset($_POST['submit'])){

        include_once('config.php');

        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $password;
        $_SESSION['nome'] = $name;

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM usuario WHERE email='$email'")) > 0) {
            echo "<script>alert('Conta já foi criada');</script>";
        } else {
            $result = mysqli_query($conn, "INSERT INTO usuario(email, senha, nome) VALUES('$email', '$password', '$name')");
            echo "<script>alert('Sua conta foi registrada');</script>";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Conta</title>
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
    .signup-card {
      background: #fff;
      border-radius: 15px;
      padding: 40px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      text-align: center;
    }
    .signup-card h3 {
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
    .signup-card a {
      display: block;
      margin-top: 20px;
      text-decoration: none;
      color: #666;
      font-weight: 500;
    }
    .signup-card a:hover {
      color: #0d6efd;
    }
  </style>
</head>
<body>
  <div class="signup-card">
    <h3>Criar Conta</h3>
    <form action="cadastro.php" method="POST">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
        <label for="email">E-mail</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="senha" minlength="4" required>
        <label for="password">Senha</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="name" id="name" placeholder="nome" required>
        <label for="name">Nome</label>
      </div>
      <button type="submit" name="submit" class="btn-custom">Cadastrar</button>
    </form>
    <a href="index.php">Já tem uma conta? Entrar</a>
  </div>
</body>
</html>