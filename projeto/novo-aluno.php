<h1>Novo Aluno</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="salvar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar
        </button>
    </div>

</form>