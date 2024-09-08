
function duplicar(){
    var dup = document.getElementById("dup");
    dup.innerHTML += `
        <div class="form-group">
            <label for="texto">Adicionar Competência:</label>
            <div class="input-group">
                <input type="text" class="form-control" id="texto" name="enviado[]" placeholder="Digite uma competência">
                <div class="input-group-append">
                    <button type="button" class="btn btn-primary" onclick="duplicar()">Adicionar +</button>
                </div>
            </div>
        </div>
    `;
}