<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PDVALe</title>
    <!-- ===================== Styles ==================== -->
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>

    <!-- =============== Navigation =====================-->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class='bx bx-grid-alt' ></i>
                </button>
                <div class="sidebar-logo">
                    <a href="<?=$base;?>">PDV Ale</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="<?=$base;?>" class="sidebar-link">
                        <i class='bx bx-home'></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#cadastro" aria-expanded="false" aria-controls="cadastro">
                        <i class='bx bx-folder'></i>
                        <span>Cadastro</span>
                    </a>
                    <ul id="cadastro" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Produtos</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Fornecedores</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Usuários</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Funcionários</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="<?=$base;?>/cargos" class="sidebar-link">Cargos</a>
                        </li>
                    </ul>
                </li>
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#estoque" aria-expanded="false" aria-controls="estoque">
                        <i class='bx bx-candles'></i>
                        <span class="title">Estoque</span>
                    </a>

                    <ul id="estoque" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Entradas de Produtos</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Saída de Produtos</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Nivel Baixo</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#movimentacao" aria-expanded="false" aria-controls="movimentacao">
                        <i class='bx bx-cart-add'></i>
                        <span class="title">Movimentações</span>
                    </a>

                    <ul id="movimentacao" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Vendas</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Movimentação</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Gastos</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Pagamentos</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Consutar Vendas</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Fluxo de Caixa</a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#relatorio" aria-expanded="false" aria-controls="relatorio">
                        <i class='bx bxs-report'></i>
                        <span class="title">Relatório</span>
                    </a>

                    <ul id="relatorio" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Fluxo de Caixa</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Movimentações</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Produtos</a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Vendas</a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class='bx bx-cog'></i>
                        <span class="title">Configuração</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class='bx bx-exit' ></i>
                    <span>Sair</span>
                </a>
            </div>
        </aside>

        <div class="main p-3">
            <div class="topbar">
                <div class="hindde">
                    <div class="toggle-btn" type="button">
                        <i class='bx bx-grid-alt' ></i>
                    </div>
                </div>
                
                <div class="search">
                    <label>
                        <input type="text" placeholder="Procure aqui" name="" id="campoPesquisa" >
                        <i class='bx bx-search'></i>
                    </label>
                </div>
                <div class="user">
                    <img src="assets/images/customer01.jpg" alt="">
                </div>
            </div>