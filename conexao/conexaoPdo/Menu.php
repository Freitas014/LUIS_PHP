<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Painel Clientes</title>
    <link rel="stylesheet" href="style_menu.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <h1>Painel de Clientes</h1>
        <p id="p">Este painel permite o gerenciamento completo dos registros de clientes. 
            Utilize o menu lateral para acessar as funcionalidades de cadastro, edição, exclusão e listagem de clientes.</p>
        </main>
        <div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
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
                    <a href="pesquisarCliente.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                        Pesquisar Clientes
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