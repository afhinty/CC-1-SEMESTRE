<h1>Listar usuários</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Email</th>";
            print "<th>Data de nascimento</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->email . "</td>";
            print "<td>" . $row->data_nasc . "</td>";
            print "<td>
            <a href='?page=editar&id=" . $row->id . "' class='btn btn-success'>Editar</a>
            <a href='excluir.php?id=" . $row->id . "' class='btn btn-danger'>Excluir</a>
                   </td>";    
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Nenhum resultado encontrado!</p>";
    }
?>
