<h1>Editar usuário</h1>
<?php
    $userId = isset($_REQUEST["id"]) ? $_REQUEST["id"] : null;

    if ($userId !== null) {
        $sql = "SELECT * FROM usuarios WHERE id=" . $userId;
        $res = $conn->query($sql);

        if ($res && $res->num_rows > 0) {
            $row = $res->fetch_object();
?>
<form action="?page=editar-usuario" method="POST" id="editUserForm">
    <input type="hidden" name="acao" value="editar">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?php echo $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="senha">Nova Senha (Deixe em branco para manter a senha existente)</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="data_nasc">Data de nascimento</label>
        <input type="date" name="data_nasc" value="<?php echo $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
<?php
        } else {
            echo "Usuário não encontrado.";
        }
    } else {
        echo "ID de usuário não fornecido.";
    }
?>
