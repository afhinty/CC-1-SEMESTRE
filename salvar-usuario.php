<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

switch ($_POST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];

        // Use declaração preparada para evitar injeção de SQL
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $email, $senha, $data_nasc);

        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
            // Redirecionamento para a página listar após o cadastro bem-sucedido
            header("Location: ?page=listar");
            exit();
        } else {
            echo "Erro ao cadastrar usuário: " . $stmt->error;
        }

        $stmt->close();
        break;

    case 'editar':
        // Adicione lógica para edição
        break;

    case 'excluir':
        // Adicione lógica para exclusão
        break;

    default:
        echo "Ação não reconhecida.";
}
?>
