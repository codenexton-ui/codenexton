<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $to = "renatonm9@gmail.com"; // coloque seu email
    $subject = "Novo contato do site";
    $body = "Nome: $nome\n";
    $body .= "Email: $email\n";
    $body .= "Telefone: $telefone\n";
    $body .= "Mensagem: $mensagem\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
} else {
    echo "Acesso inválido.";
}
?>
