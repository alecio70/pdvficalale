
<?=$render('header');?>

<!-- ============================== Order CRUD List ============================ -->
<?=$render('header-table', ['flash' => $flash, 'cadastro' => $cadastro, 'tableCab' => $tableCab]);?>
          
    <?php foreach($cargo['cargo'] as $cargoItem) : ?>
        <?=$render('item-table', ['data' => $cargoItem]);?>
    <?php endforeach; ?>
                            
<?=$render('footer-table');?>

<!-- ============================== Paginação ============================ -->
<nav id="p" aria-label="...">
                <ul class="pagination">
                    <li class="page-item <?=(($cargo['currentPage'] == 0) ? 'disabled':'')?>">
                        <a class="page-link" href="<?=$base;?>/cargos?page=<?=$cargo['pageAnterior']-1?>">Anterior</a>
                    </li>

                    <?php for($i=0; $i < $cargo['pageCount']; $i++): ?>
                        <li class="page-item <?=($i==$cargo['currentPage'] ? 'active':'')?>">
                            <a class="page-link" href="<?=$base;?>/cargos?page=<?=$i;?>"><?=$i+1?></a>
                        </li>           
                    <?php endfor; ?>     
                                          
                    <li class="page-item <?=(($cargo['currentPage']+1 == $cargo['pageCount']) ? 'disabled':'')?>">
                        <a class="page-link" href="<?=$base;?>/cargos?page=<?=$cargo['pageProximo']+2?>">Proximo</a>
                    </li>
                </ul>
</nav>
            
<!-- ============================== Modal Form ============================ -->
<?=$render('header-modal-form');?>
    <div>
        <label for="editCargo" >Cargo:</label>
        <input type="text" name="cargo" id="editCargo" maxlength="30" required>
    </div>
    
<?=$render('footer-modal-form');?>

<!-- ============================== Modal Visualização ============================ -->
<?=$render('header-modal-view');?>
    <div>
        <label for="id" >ID:</label>
        <input type="text" name="cargo" id="id" maxlength="30" disabled>
    </div>

    <div>
        <label for="visargo" >Cargo:</label>
        <input type="text" name="cargo" id="visCargo" maxlength="30" disabled>
    </div>

<?=$render('footer-modal-view');?>           
            
            
<?=$render('footer');?>