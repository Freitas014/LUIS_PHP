<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
    <link rel="stylesheet" href="style_menu.css">
</head>
<body>
    <main>
    <h1>Excluir Cliente</h1>
    <form action="processarDelecao.php" method="POST">
        <label for="id"> ID do Cliente:</label>
        <input class="form-control" type="number" id="id" name="id_cliente" placeholder="Insira o ID do cliente" required>

        <button id="btn" class="btn btn-primary" type="submit">Excluir Cliente</button>
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
    </svg> </a> <span id= class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc</span> </div>
    
</svg></a></li>
</ul>
</footer>
</body>
</html>