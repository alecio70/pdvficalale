<div class="modal fade" id="userForm" data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" data-bs-theme="dark">
                            <h4 class="modal-title">Preencha o Formulário</h4>
                            <button onclick="fechar()" type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form action="<?=$base;?>/cargos" id="myEditForm" method="POST">
                                <div class="card imgholder">
                                    <label for="imgInput" class="upload">
                                        <input type="file" name="" id="imgInput" accept="image/*" onchange="previewImg(event)">
                                        <i class='bx bx-plus-circle' ></i>
                                    </label>
                                    <img src="assets/images/customer01.jpg" id="imagem-preview" alt="" width="200" height="200">
                                </div>

                                <div class="inputField" id="userForm">