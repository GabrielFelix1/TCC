<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/icons/CyberBurguerLogoSmall.png" type="image/x-icon">
    <!--CSS do BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--Material Symbols Outlined-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/b95d68622e.js" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../../assets/css/menu.css">
    <link rel="stylesheet" href="../../assets/css/estoque/estoque.css">
  <title>Estoque</title>
</head>
<body>
    <div class="fundo">
        <aside class="sidebar">
            <nav>
                <a href="../pagina-inicial/index.php">
                    <button >
                        <span>
                                <i class="material-symbols-outlined">home</i>
                                <span>Home</span>
                        </span>
                    </button>
                </a>

                <a href="../mesas/index.php">
                    <button>
                        <span>
                            <i class="material-symbols-outlined">table_restaurant</i>
                            <span>Mesas</span>
                        </span>
                    </button>
                </a>
                
                <a href="../estoque/index.php">
                    <button class="active">
                        <span>
                            <i class="material-symbols-outlined">inventory</i>
                            <span>Estoque</span>
                        </span>
                    </button>
                </a>

                <a href="../estatisticas/index.php">
                    <button>
                        <span>
                            <i class="material-symbols-outlined">paid</i>
                            <span>Estatísticas</span>
                        </span>
                    </button>
                </a>
            </nav>
            
            <header class="sidebar-header">
                <!--Foto Usuário-->
                <img class="logo-img" src="https://sujeitoprogramador.com/steve.png" alt="Foto do usuário">
                <span class="dados">
                    <!--Nome do Usuário-->
                    <span class="nome">Nome</span>
                    <br>
                    <!--Número de identificação-->
                    <span class="id">#565555</span>
                </span>
                <span id="options">
                    <span class="opcoes">
                        <div class="optionsMenu disable">
                            <div class="itemList">
                               <a href="../meu-perfil/index.php"><i class="material-symbols-outlined">settings</i><span>Configurações</span></a>
                            </div>
                            <hr class="menuLinha">
                            <p><a href="">Sair da conta</a></p>
                        </div>
                        <span class="ball"></span>
                        <span class="ball"></span>
                        <span class="ball"></span>
                    </span>
                </span>
            </header>
        </aside>

        <!--Principal-->
        <main class="main">
            <div class="header">
                <div><i class="material-symbols-outlined">inventory</i><span>ESTOQUE</span></div>
            </div>
            <hr class="mainLinha">
            <div class="mainArea">
                <div class="filtro">
                    <button id="blocos">
                        <i class="material-symbols-outlined">
                        grid_view
                        </i>Blocos
                    </button>
                    <button id="tabela" class="activeBtn">
                        <i class="material-symbols-outlined">
                        table_chart
                        </i>Tabela
                    </button>
                </div>
                <!--Barra de Pesquisa-->
                <div class="searchArea">
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" name="search" placeholder="Pesquisar..." class="searchBar" />
                            </div>
                            <div class="col-2">
                                <button type="submit" class="searchButton">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="estoque">
                    <div class="container blocos">
                        <div class="row">
                            <div class="col-4 Bloco">
                                <div class="estoqueItem">
                                    <div class="row">
                                        <div class="col-6 imgItem">
                                            <img src="../../assets/img/produtos/mesa-redonda 3.png" alt="Imagem do produto">
                                        </div>
                                        <div class="col-6 infoBloco">
                                            <p class="itemHeader">Tomate</p>
                                            <hr class="estoqueLinha">
                                            <p>Lote:</p>
                                            <p>Unidades:</p>
                                            <p>Validade:</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>                           
                    </div>        
                    <div class="tabela active">
                        <table id="tabelaReal" style="border-radius: 10px;">
                            <thead>
                                <th>Nome:</th>
                                <th>Lote:</th>
                                <th>Unidades:</th>
                                <th>Validade:</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tomate</td>
                                    <Td>6164343</Td>
                                    <td>45</td>
                                    <td>14-4-2025</td>
                                </tr>  
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <a href="editar-estoque/index.php" class="btnEditar"><Button>Editar</Button></a>
                </div>
            </div>
        </main>
    </div>
    <script src="../../assets/js/paginaInicial/searchBar.js"></script>
    <script src="../../assets/js/estoque/estoque.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>