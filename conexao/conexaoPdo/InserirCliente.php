<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastri de Cliente</title>
    <link rel="stylesheet" href="style_menu.css"> <!-- Arquivo opcional para estilizar -->
</head>
<body>
<main>
        <h1>Cadastro de Clientes</h1>
        <form action="processarInsercao.php" method="POST">
            <label for="nome">Nome: </label>
            <input class="form-control" type="text" id="nome" name="nome"  placeholder="Ex: Jolocleido da Silva"required><br>
    
            <label for="nome">Endereco: </label>
            <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Ex: Bairro Costa e Silva, Rua Senai, 220"required><br>
    
            <label for="telefone">Telefone:</label>
            <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Ex: 47 40028922" required> <br>
    
            <label for="email">E-mail:</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Ex: email@gmail.com" required>
    
            <button id="btn" class="btn btn-primary" type="submit">Cadastrar Cliente</button>
        </form>
        </main>
    <div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="Menu.php" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="listarCliente.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                        Lista de Clientes
                    </a>
                </li>
                <li>
                    <a href="InserirCliente.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                        Cadastrar Clientes
                    </a>
                </li>
                <li>
                    <a href="atualizarCliente.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                        Atualizar Clientes
                    </a>
                </li>
                <li>
                    <a href="deletarCliente.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                        Deletar Clientes
                    </a>
                </li>
            </ul>
            <hr>
        </div>
    </div>
    <footer id="rodape" class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center"> <a href="/"
        class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap"> <svg
        class="bi" width="30" height="24" aria-hidden="true">
        <use xlink:href="#bootstrap"></use>
        <hr>
    </svg> </a> <span id= class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc - Luís Fernando</span> </div>
    
</svg></a></li>
</ul>
</footer>
</body>
</html>