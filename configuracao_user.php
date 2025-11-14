<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Configurações</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #dfe9f3 0%, #ffffff 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .navbar {
      background: #ffffff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    .navbar .nav-link {
      color: #333;
      font-weight: 500;
      transition: 0.3s;
    }

    .navbar .nav-link:hover {
      color: #0d6efd;
    }

    .config-card {
      background: #ffffff;
      border-radius: 15px;
      padding: 40px;
      margin-top: 60px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      text-align: center;
    }

    .config-card h3 {
      font-weight: 700;
      margin-bottom: 30px;
      color: #0d6efd;
    }

    .btn-custom {
      background: #0d6efd;
      border: none;
      padding: 12px 25px;
      font-weight: 600;
      border-radius: 10px;
      transition: 0.3s;
    }

    .btn-custom:hover {
      background: #0b5ed7;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(13,110,253,0.3);
    }

    footer {
      margin-top: auto;
      background: #ffffff;
      text-align: center;
      padding: 15px;
      font-size: 14px;
      color: #666;
      border-top: 1px solid #eee;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg px-4">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="home.php" style="color:#0d6efd;">MeuApp</a>
      <div class="d-flex">
        <a class="nav-link" href="home.php"><i class="bi bi-house-door-fill"></i> Início</a>
        <a class="nav-link" href="configuracao_user.php"><i class="bi bi-gear-fill"></i> Config</a>
      </div>
    </div>
  </nav>

  <div class="container d-flex justify-content-center">
    <div class="config-card col-12 col-md-6 col-lg-4">
      <h3>⚙️ Configurações</h3>
      <p class="text-muted mb-4">Gerencie suas preferências e atualize seus dados com segurança.</p>
      <a href="edit_cadastro.php">
        <button class="btn btn-custom">
          <i class="bi bi-key-fill"></i> Alterar Senha
        </button>
      </a>
    </div>
  </div>

  <footer>
    © 2025 - MeuApp | Todos os direitos reservados
  </footer>

</body>
</html>

