<?php 
require 'config.php';



// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    // Valida os dados
    if (!empty($nome) && !empty($sobrenome) && !empty($email) && !empty($endereco) && !empty($telefone) && !empty($data_nascimento) && !empty($senha) && !empty($confirma_senha) && $senha === $confirma_senha) {
        // Criptohrafa a senha
        $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

        // Prepara a consulta SQL
        $sql = "INSERT INTO usuarios (nome, sobrenome, email, endereco, telefone, data_nascimento, senha) VALUES (?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $nome, $sobrenome, $email, $endereco, $telefone, $data_nascimento, $senha_criptografada);

        // Executa a consulta
        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro: " . $stmt->error;
        }

        // Fecha a declaração
        $stmt->clise();
    } else {
        echo "Por favor, preencha todos os campos corretamente e certifique-se de que as senhas correspondem";
    }
}
?>