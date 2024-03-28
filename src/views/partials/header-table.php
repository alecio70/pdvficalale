<div class="table-crud">
                <section class="p-3">
                
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userForm"><?=$cadastro?> <i class='bx bx-clipboard'></i></button>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-12">
                            <?php if(!empty($flash)): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo $flash; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                            <?php endif; ?>

                            <table class="table table-striped table-hover mt-3 text-center table-borde">
                                <thead>
                                    <tr>
                                        <?php for($i = 0; $i < count($tableCab); $i++): ?>
                                            <th><?=$tableCab[$i];?></th>
                                        <?php endfor;?>
                                    </tr>
                                </thead>

                                <tbody id="s"> 
