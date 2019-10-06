<?php
/**
 * Created by PhpStorm.
 * User: kernelkill
 * Date: 06/10/19
 * Time: 16:13
 */

//var_dump mostra toda a informação do arquivo que esta chegando
var_dump($_FILES);

//Esta variavel pega informações do nome do arquivo coletado no var_dump
$nome_arquivo = $_FILES['arquivo']["name"];

//esta variavel pega a extensão por meio do strrchr.
$extensao = strrchr($nome_arquivo, ".");

//Aqui passamos a limitação do tamanho do arquivo que pode ser enviado e tambem temos dois modos de pegar o tipo de arquivo.
$tamanho_maximo = 200000;
//$extensao = $_FILES['arquivo']['type'];
$extensoes = array(".png",".jpg");

//Aqui passamos o nome do arquivo temporario
$arquivo_temporario = $_FILES['arquivo']['tmp_name'];

//Aqui pegamos o tamanho do arquivo que foi enviado
$tamanho_arquivo = $_FILES['arquivo']['size'];

//Passamos aqui o caminho absoluto do destino das imagens que estao sendo subidas para o servidor.
$caminho_absoluto = "/var/www/html/upload/destino";


if (!empty($nome_arquivo)){

    if (!in_array($extensao, $extensoes))
        die ("Extensão invalida");

    if ($tamanho_arquivo > $tamanho_maximo)
        die("Arquivo muito Grande!");

    if (file_exists($caminho_absoluto."/".$nome_arquivo))
        die("Arquivo ja Existe");

    if (move_uploaded_file($arquivo_temporario, $caminho_absoluto."/".$nome_arquivo)){

        echo "Arquivo enviado com sucesso, segue informações do Arquivo";
        echo "<br>";
        echo "Extensão é Valida - OK";
        echo "<br>";
        echo 'Nome do Arquivo: ' . $nome_arquivo;
        echo "<br>";
        echo 'Extensão: ' . $extensao;
        echo "<br>";
        echo 'Tamanho: ' . $tamanho_arquivo;
    }else{

        echo "Erro ao enviar arquivo";
    }

}else{

    die ("Não existe um arquivo para subir!!!");

}
?>