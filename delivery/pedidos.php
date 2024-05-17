<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $sabores=$_POST['pizza'];
    $acompanhamentos=$_POST['acompanhamento'] ?? null;
    $acompanhamentos_json = json_encode($acompanhamentos);
    $bairro=$_POST['endereco'];

    $cep=$_POST['cep'];
}

include("conexao.php");

$sql = "INSERT INTO pedidos (nome_cliente, telefone, sabores, acompanhamentos, cep, endereco) VALUES ('$nome', ' $telefone', '$sabores','$acompanhamentos_json','$cep', '$enderco')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    
    exit();
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

$conn->close();



header("index.php");






?>