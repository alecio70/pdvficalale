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
                    <a href="#">PDV Ale</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
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
                            <a href="#" class="sidebar-link">Cargos</a>
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
                        <input type="text" placeholder="Procure aqui" name="" id="">
                        <i class='bx bx-search'></i>
                    </label>
                </div>
                <div class="user">
                    <img src="assets/images/customer01.jpg" alt="">
                </div>
            </div>
            <!-- ============================== Cards ============================ -->
            <div class="cBox">
                <div class="c">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cName">Visualizações Diárias</div>
                    </div>

                    <div class="iconBx">
                        <i class='bx bx-low-vision' ></i>
                    </div>
                </div>

                <div class="c">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cName">Vendas</div>
                    </div>

                    <div class="iconBx">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>

                <div class="c">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cName">Comentados</div>
                    </div>
                    
                    <div class="iconBx">
                        <i class='bx bx-message-rounded-dots' ></i>
                    </div>
                </div>

                <div class="c">
                    <div>
                        <div class="numbers">R$7.842,00</div>
                        <div class="cName">Ganhos</div>
                    </div>

                    <div class="iconBx">
                        <i class='bx bx-money' ></i>
                    </div>
                </div>
            </div>

            <!-- ========================= Order Details List ==================== -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Pedidos Recentes</h2>
                        <a href="#" class="button">Ver Tudo</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Nome</td>
                                <td>Preço</td>
                                <td>Pagamentos</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Geladeira Estrela</td>
                                <td>R$1.200,00</td>
                                <td>Pago</td>
                                <td><span class="status delivered">Entregue</span></td>
                            </tr>

                            <tr>
                                <td>Dell Leptop</td>
                                <td>R$120,00</td>
                                <td>Devendo</td>
                                <td><span class="status pending">Pendente</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>R$1.200,00</td>
                                <td>Pago</td>
                                <td><span class="status return">Retornar</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>R$620,00</td>
                                <td>Devendo</td>
                                <td><span class="status inProgress">Em Andamento</span></td>
                            </tr>

                            <tr>
                                <td>Geladeira Estrela</td>
                                <td>R$1.200,00</td>
                                <td>Pago</td>
                                <td><span class="status delivered">Entregue</span></td>
                            </tr>

                            <tr>
                                <td>Dell Leptop</td>
                                <td>R$120,00</td>
                                <td>Devendo</td>
                                <td><span class="status pending">Pendente</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>R$1.200,00</td>
                                <td>Pago</td>
                                <td><span class="status return">Retornar</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>R$620,00</td>
                                <td>Devendo</td>
                                <td><span class="status inProgress">Em Andamento</span></td>
                            </tr>
                        </tbody>
                            
                    </table>
                </div>

                <!-- ======================= New Customers ======================= -->
                <div class="recentsCustomers">
                    <div class="cardHeader">
                        <h2>Clientes Recentes</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/images/customer02.jpg" alt=""></div>
                            </td>

                            <td>
                                <h4>David <br> <span>Brasil</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/images/customer01.jpg" alt=""></div>
                            </td>

                            <td>
                                <h4>Alecio <br> <span>Brasilia</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/images/customer02.jpg" alt=""></div>
                            </td>

                            <td>
                                <h4>Igor <br> <span>Goias</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/images/customer01.jpg" alt=""></div>
                            </td>

                            <td>
                                <h4>Lucas <br> <span>Rio de Janeiro</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/images/customer02.jpg" alt=""></div>
                            </td>

                            <td>
                                <h4>Francinaldo <br> <span>São Paulo</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/images/customer01.jpg" alt=""></div>
                            </td>

                            <td>
                                <h4>Felix <br> <span>Bahia</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    

    <!-- ================= Scripts ========================= -->
    <script src="assets/js/main.js"></script>

    <!-- ================= Scripts do bootstrap ============ -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>