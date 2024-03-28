// menu Toggle
const hamBurguer = document.querySelectorAll(".toggle-btn");

hamBurguer.forEach(function(botao) {
    botao.addEventListener("click", function() {
        document.querySelector("#sidebar").classList.toggle("expand");
    });
});


// pegar informação do banco de dados e colocar no modal
async function visCargo(id) {
    //console.log(id);
    const dados = await fetch(base+'/cargos/visualizacao?id=' + id);
    const resposta = await dados.json();
    console.log(resposta);
    
    const visModal = new bootstrap.Modal(document.getElementById('viwerForm'));
    visModal.show();

    var inputId = document.getElementById('id');
    var inputCargo = document.getElementById('visCargo');
    
    inputId.value = resposta.id;
    inputCargo.value = resposta.cargo;
}

// pesquisa de cargos
let loading = false;
const conteudoOriginalTr = document.getElementById("s").innerHTML;
const conteudoOriginalPag = document.getElementById("p").innerHTML;
document.getElementById("campoPesquisa").addEventListener("input", async function() {
    
    if (loading) {
        return;
    }
    
    const searchResult = document.getElementById("s");
    const paginacao = document.getElementById("p");
    var termoPesquisa = this.value.trim();
    if (termoPesquisa.length > 0) {

        try {
            const data = await fetch(base+'/pesquisa?s=' + termoPesquisa)

            const response = await data.json();
            
            
            if (termoPesquisa === this.value.trim()) {
        
                searchResult.innerHTML = '';
                if (response && response.length > 0) {
                    response.forEach(cargoItem => {
                        var tr = document.createElement('tr');
                        tr.innerHTML = `
                            <td>${cargoItem.id}</td>
                            <td>${cargoItem.cargo}</td>
                            <td>
                                <button onclick="visCargo(${cargoItem.id})" class="btn btn-success"  ><i class='bx bx-low-vision'></i></button>
                                <button onclick="editCargo(${cargoItem.id})" class="btn btn-primary"><i class='bx bx-edit'></i></i></button>
                                <button onclick="deleteClick(this, ${cargoItem.id})" class="btn btn-danger del-button">
                                    <span class="icon">
                                        <span class="lid"></span>
                                        <span class="can"></span>
                                        <span class="trash"></span>
                                        <span class="text">Deletado!</span>
                                    </span>
                                </button>
                            </td>
                        `;
                        searchResult.appendChild(tr);
                    });
                    paginacao.innerHTML = '';
                } else {
                    searchResult.innerHTML = '<tr><td colspan="3" class="alert alert-danger alert-dismissible fade show" role="alert">Nenhum resultado encontrado.</td></tr>';
                    paginacao.innerHTML = '';
                }

            }

        } catch (error){
            console.error('Erro:', error);
        } finally {
            loading =  false;
        }
        
    } else {
        searchResult.innerHTML = conteudoOriginalTr;
        paginacao.innerHTML = conteudoOriginalPag;
    }
        
    
});


// pegar informação do cargo e editar
async function editCargo(id) {
    const dados = await fetch(base+'/cargos/visualizacao?id=' + id);
    const resposta = await dados.json();

    const editModal = new bootstrap.Modal(document.getElementById('userForm'));
    editModal.show();

    var inputCargo = document.getElementById('editCargo');
    var formEdit =  document.getElementById('myEditForm');

    inputCargo.value = resposta.cargo;
    formEdit.action = base+'/cargos/'+resposta.id+'/editar';

}

// fechar o model
function fechar() {
    var inputCargo = document.getElementById('editCargo');
    var formEdit =  document.getElementById('myEditForm');

    inputCargo.value = '';
    formEdit.action = base + '/cargos';
}

// animação de delete

function deleteClick(button, id) {
    button.classList.add('clicked');

    setTimeout(function() {
       window.location.href = base+'/cargos/'+id+'/excluir';
    }, 2000)
}

// manipulando imagens
function previewImg(event) {
    var input = event.target;
    var file = input.files[0];

    if (!file || !file.name.match(/\.(jpg|jpeg|png|gif)$/)) {
        alert('Por favor, selecione um arquivo de imagem válido (JPEG, PNG, GIF');
        fileInput.value = '';
        return;
    }
    var reader = new FileReader();

    reader.onload = function() {
        var imagemPreviwer = document.getElementById('imagem-preview');
        imagemPreviwer.src = reader.result;
    };

    

    reader.readAsDataURL(input.files[0]);
}