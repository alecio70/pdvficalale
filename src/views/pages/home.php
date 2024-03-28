<?=$render('header');?>
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

<?=$render('footer');?>