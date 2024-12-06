<?php
$servidor = "localhost";
$usuario = "root"; 
$senha = "123456"; 
$banco = "cadastro_voluntarios";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

$data = $_POST['data'];
$local = $_POST['local'];
$voluntario = $_POST['voluntario'];
$nascimento = $_POST['nascimento'];
$genero = $_POST['genero'];
$cidade = $_POST['cidade'];
$documentos = $_POST['documentos'];
$contato = $_POST['contato'];
$meio_contato = $_POST['meio-contato'];
$situacao = $_POST['situacao'];
$albergue = $_POST['albergue'];
$leito = $_POST['leito'];
$assistente_social = $_POST['assistente-social'];

$sql = "INSERT INTO voluntarios (data, local, voluntario, nascimento, genero, cidade, documentos, contato, meio_contato, situacao, albergue, leito, assistente_social) 
        VALUES ('$data', '$local', '$voluntario', '$nascimento', '$genero', '$cidade', '$documentos', '$contato', '$meio_contato', '$situacao', '$albergue', '$leito', '$assistente_social')";

if ($conexao->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>