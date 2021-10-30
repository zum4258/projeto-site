<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>
    <form method="POST" action="processa.php">
     <label>E-mail: </label>
     <input type="email" name="email" placeholder="Digite seu e-mail"><br><br>

     <label>Senha: </label>
     <input type="password" name="senha" placeholder="Digite sua senha"><br><br>

     <label>Telefone: </label>
     <input type="tel" name="Telefone" placeholder="(xx)xxxxx-xxxx"><br><br>

      <input type="submit" value="Cadastrar">
    </form>
</body>
</html>