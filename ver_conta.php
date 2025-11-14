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
    }
    .login-card h3 {
      font-weight: 700;
      margin-bottom: 30px;
      color: #0d6efd;
      text-align: center;
    }
    .form-floating input {
      border-radius: 10px;
    }
    .login-card a {
      display: block;
      margin-top: 20px;
      text-decoration: none;
      color: #666;
      font-weight: 500;
      text-align: center;
    }
    .login-card a:hover {
      color: #0d6efd;
    }
    .login-card p{
      margin-left:30px;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h3>Sua conta</h3>
      <div class="info">
        <?php
        session_start();
          echo "<p><strong style = 'color: #0d6efd;'>Email:</strong> " . htmlspecialchars($_SESSION['email']) . "</p>";
          echo "<p><strong style = 'color: #0d6efd;'>Nome:</strong> " . htmlspecialchars($_SESSION['nome']) . "</p>";
          echo "<p><strong style = 'color: #0d6efd;'>Senha:</strong> " . htmlspecialchars($_SESSION['senha']) . "</p>";
        ?>
      </div>
      <br>
    <a href="cadastro.php">Criar uma conta</a>
    <a href="index.php">Entrar em outra conta</a>
  </div>
</body>
</html>