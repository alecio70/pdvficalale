<tr>
    <td><?=$data['id'];?></td>
    <td><?=$data['cargo']?></td>
    <td>
        <button onclick="visCargo(<?=$data['id'];?>)" class="btn btn-success"  ><i class='bx bx-low-vision'></i></button>
        <button onclick="editCargo(<?=$data['id'];?>)" class="btn btn-primary"><i class='bx bx-edit'></i></i></button>
        <button onclick="deleteClick(this, <?=$data['id'];?>)" class="btn btn-danger del-button">
            <span class="icon">
                <span class="lid"></span>
                <span class="can"></span>
                <span class="trash"></span>
                <span class="text">Deletado!</span>
            </span>
        </button>
    </td>
</tr>

