<?php
// Armazena os valores recebidos do formulário em variáveis
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$profis = $_POST['profis'];
$sal = $_POST['sal'];
$exp = $_POST['exp'];
// Exibe os valores recebidos
echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Profissão: " . $profis . "<br>";
echo "Salário: " . $sal . "<br>";
echo "Experiência: " . $exp . "<br>";
// Mensagem personalizada
$texto1 = "Olá " . $nome . "! gostamos de saber da sua  experiência de " . $exp . " e sua antiga profissão de " . $profis . ". Obrigado por se candidatar!";
echo $texto1;
echo "<br>";
// Link para retornar à página de cadastro
echo "Retornar para a página de cadastro: <a href='Cadastro.html'>Clique aqui</a>";