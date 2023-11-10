<?php
// Verifica se o ID do usuário foi fornecido
if (isset($_GET["id"])) {
    $userId = $_GET["id"];

    // Use declaração preparada para evitar injeção de SQL
    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        echo "Usuário excluído com sucesso!";
    } else {
        echo "Erro ao excluir usuário: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID de usuário não fornecido.";
}
?>
